<?php
if(!function_exists('gen_no_tiket_belum_punya')){
    function gen_no_tiket_belum_punya(){
        $no = Date('y-m-').str_pad(1, 3, '0', STR_PAD_LEFT );
        $terakhir = \App\Models\Belumpunya::whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->orderBy('created_at','desc')->first();
        if($terakhir)
        {
            $no = Date('y-m-').str_pad((int)substr($terakhir->no,-3) + 1,3,0,STR_PAD_LEFT);
        }
        return 'TKTBL-'.$no;
    }
}
if(!function_exists('gen_no_tiket_sudah_punya')){
    function gen_no_tiket_sudah_punya(){
        $no = Date('y-m-').str_pad(1, 3, '0', STR_PAD_LEFT );
        $terakhir = \App\Models\Sudahpunya::whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->orderBy('created_at','desc')->first();
        if($terakhir)
        {
            $no = Date('y-m-').str_pad((int)substr($terakhir->no,-3) + 1,3,0,STR_PAD_LEFT);
        }
        return 'TKTSD-'.$no;
    }
}
?>