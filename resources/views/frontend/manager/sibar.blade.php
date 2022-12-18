<?php
    use App\Models\Binhluan;

  
    $binhluan = DB::table('binhluans')->orderBy('created_at','DESC')->take(5)->get();
?>

