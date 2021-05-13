<?php 

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB, Exception, DateTime;
use App\san_phams;
use App\admins;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Lấy cài đặt sản phẩm
        $cai_dat_san_pham = DB::table('cai_dat_san_phams')->first();    
        // Lấy toàn bộ sản phẩm ngẫu nhiên
        $san_pham_theo_danh_muc = DB::table('san_phams')
            ->join('loai_san_phams','san_phams.id','=','loai_san_phams.id')    
            ->join('danh_muc_san_phams','danh_muc_san_phams.id','=','loai_san_phams.id_danh_muc_sp')
            ->select('san_phams.*','danh_muc_san_phams.id as id_danh_muc_sp','danh_muc_san_phams.ten as ten_danh_muc_sp')
            ->where('san_phams.is_delete','=','0')  
            ->inRandomOrder() 
            ->take($cai_dat_san_pham->so_luong_theo_danh_muc)
            ->get();  
        // $toan_bo_san_pham = DB::table('san_phams')
        //     ->where('is_delete','=','0') 
        //     ->get(); 
           
        $toan_bo_san_pham_moi = DB::table('san_phams')
            ->where('is_delete','=','0')
            ->where('moi','=','1')
            ->orderBy('id','desc')
            ->take($cai_dat_san_pham->so_luong_moi)
            ->get();   
        $date = new DateTime();
        $toan_bo_san_pham_khuyen_mai = DB::table('san_phams')
            ->where('is_delete','=','0')
            ->where('ngay_bat_dau_khuyen_mai','<=',$date)
            ->where('ngay_ket_thuc_khuyen_mai','>',$date)
            ->where('khuyen_mai','>','0')
            ->inRandomOrder() 
            ->take($cai_dat_san_pham->so_luong_khuyen_mai)
            ->get();
        
        $toan_bo_san_ban_chay = DB::table('san_phams')
            ->where('is_delete','=','0')
            ->where('ban_chay','=','1')
            ->inRandomOrder() 
            ->take($cai_dat_san_pham->so_luong_ban_chay)
            ->get(); 
             
        // Lấy ngẫu nhiên 3 loại sản phẩm cho menu
        $ba_loai_sp_ngau_nhien = DB::table('loai_san_phams')
            ->where('is_delete','=','0')  
            ->inRandomOrder() 
            ->take(3)
            ->get(); 
        // return view('user.pages.home')->with(compact('cai_dat_san_pham','san_pham_theo_danh_muc','toan_bo_san_pham_moi','toan_bo_san_pham_khuyen_mai','toan_bo_san_ban_chay','ba_loai_sp_ngau_nhien',
        // ));
        $spnew = san_phams::orderBy('id','ASC')->get();
        return view('user.pages.home')->with(compact('cai_dat_san_pham','san_pham_theo_danh_muc','toan_bo_san_pham_moi','toan_bo_san_pham_khuyen_mai','toan_bo_san_ban_chay','ba_loai_sp_ngau_nhien','spnew'));
        // return view('user.pages.home');
        // return $san_pham_theo_danh_muc; 
        // return $toan_bo_san_pham_khuyen_mai;
    }

    public function dangkybanhang(){

        return view('user.pages.dangkybanhang');
    }
    public function postdangky(Request $request){


        $check_user = admins::where('email','=',$request->mail_tai_khoan)
        ->orWhere('name','=',$request->ten_tai_khoan)
        ->first();
        if($check_user != null){
            return "exist";
        }
        $user = DB::table('admins')->insert(
            [
                'display_name' => $request->ten_hien_thi,
                'name' => $request->ten_tai_khoan,
                'email' => $request->mail_tai_khoan,
                'password' => bcrypt($request->mat_khau_tai_khoan),
                'role' => 'sell', 
                
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]
        );
        return $user ? 'true' : 'false';
    }
 
}
