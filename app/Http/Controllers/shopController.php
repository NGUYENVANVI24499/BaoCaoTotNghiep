<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\san_phams;
use App\admins;
use DB, Exception, DateTime;

class shopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $nameshop = admins::where('id',$id)->select('display_name')->first();
       
        $cai_dat_san_pham = DB::table('cai_dat_san_phams')->first();
        $san_pham_news = san_phams::where('id_admin',$id)->get();
        
        $san_phamskm = san_phams::where('khuyen_mai','!=',0)->get();
        $date = new DateTime();
        $toan_bo_san_pham_khuyen_mai = DB::table('san_phams')
            ->where('id_admin',$id)
            ->where('is_delete','=','0')
            ->where('ngay_bat_dau_khuyen_mai','<=',$date)
            ->where('ngay_ket_thuc_khuyen_mai','>',$date)
            ->where('khuyen_mai','>','0')
            ->inRandomOrder() 
            ->take($cai_dat_san_pham->so_luong_khuyen_mai)
            ->get();
        $toan_bo_san_ban_chay = DB::table('san_phams')
            ->where('id_admin',$id)
            ->where('is_delete','=','0')
            ->where('ban_chay','=','1')
            ->inRandomOrder() 
            ->take($cai_dat_san_pham->so_luong_ban_chay)
            ->get(); 
        $san_pham_theo_danh_muc = DB::table('san_phams')
            ->join('loai_san_phams','san_phams.id','=','loai_san_phams.id')    
            ->join('danh_muc_san_phams','danh_muc_san_phams.id','=','loai_san_phams.id_danh_muc_sp')
            ->select('san_phams.*','danh_muc_san_phams.id as id_danh_muc_sp','danh_muc_san_phams.ten as ten_danh_muc_sp')
            ->where('san_phams.is_delete','=','0')  
            ->inRandomOrder() 
            ->take($cai_dat_san_pham->so_luong_theo_danh_muc)
            ->get();  
        return view('user.pages.shops',compact('san_pham_news','toan_bo_san_pham_khuyen_mai','toan_bo_san_ban_chay','cai_dat_san_pham','san_pham_theo_danh_muc','nameshop')); 

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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
