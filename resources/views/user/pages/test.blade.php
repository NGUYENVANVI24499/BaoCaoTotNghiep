 <form id="form_login" action="testlogin" method="post">
    @csrf 
    <div class="login-form">  
        <?php   


            // dd(Session::get('gio_hang_hien_tai'));
        $a = Session::get('gio_hang_hien_tai')->san_phams; 
        // dd($a); 
        // $b = '';
        foreach ($a as $key => $value) {
           // $b .= $key;
            $sl = '';   
                echo $value['so_luong'];  
            foreach ($value as $k1 => $vl) {


            }

        }  
        ?>

    </div>
</div> 

</form>