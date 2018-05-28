<?php
namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

class TestController extends Controller 
{
    public function query1()
    {
        $bool = DB::table("test")->insert(
                ['code' => '001', 'name' => 'abandon','bz'=>'']
            );
        dd($bool);
    }
}


?>