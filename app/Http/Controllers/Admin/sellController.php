<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\admins;

class sellController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nguoi_dung = admins::all();

        return view('admin.pages.sell.danhsachsell', compact('nguoi_dung'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateKhoa(Request $request, $id)
    {
        $status = false;
        $locked = filter_var((string)$request->locked, FILTER_VALIDATE_BOOLEAN)? true : false;
        DB::beginTransaction(); 
        try {
            DB::table('admins')
                ->where('id', $request->id)
                ->update([
                    'locked' => !$locked,
                    'updated_at' => date("Y-m-d")
                ]);
            DB::commit();
            $status = true;
        } catch (Exception $e) {
            $status = false;
            DB::rollback();
        }
        return response()->json([
            'status' => $status,
            'locked' => !$locked
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $status = false;
        DB::beginTransaction();
        try {
            DB::table('admins')
                ->where('id', $id)
                ->delete();
            DB::commit();
            $status = true;
        } catch (Exception $e) {
            DB::rollback();
            $status = false;
        }        
        return response()->json([
            'status' => $status
        ]);
    }
}
