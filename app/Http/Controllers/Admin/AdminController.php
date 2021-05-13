<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class AdminController extends Controller
{
    public function loi404(){
        return view('admin.pages.error404');
    }

    public function trangchu(){
        return view('admin.pages.homepage');
    }

    public function caythumuc(){
        $danh_muc_sp = DB::table('danh_muc_san_phams')
            ->where('is_delete', false)
            ->get();
        $loai_sp = DB::table('loai_san_phams')
            ->where('is_delete', false)
            ->get();
        $san_pham = DB::table('san_phams')
            ->where('is_delete', false)
            ->get();
        return view('admin.pages.treeview', compact('danh_muc_sp', 'loai_sp', 'san_pham'));
    }
}
