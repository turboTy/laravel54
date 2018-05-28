<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TestsController extends Controller 
{
    public function query1()
    {
        /*$bool = DB::table("test")->insert(
                ['code' => '001', 'name' => 'abandon', 'bz' => '']
            );*/

        $bool = DB::table("test")->insert([
                ['code' => '003', 'name' => 'around', 'bz' => ''],
                ['code' => '004', 'name' => 'create', 'bz' => ''],
                ['code' => '005', 'name' => 'database', 'bz' => ''],
            ]);

        dd($bool);

       /* $id = DB::table('test')->insertGetId(
        		['code' => '002', 'name' => 'banana','bz'=>'']
        	)*/

    }

    public function query2()
    {
    	//$num = DB::table('test')->where('code', '001')->update(['name' => 'hello']);

    	//自增自减
    	//$num = DB::table('test')->increment('code');
    	//$num = DB::table('test')->increment('code', 5);
    	// $num = DB::table('test')->decrement('code');
    	// $num = DB::table('test')->decrement('code', 5);

    	$num = DB::table('test')->where('id', 2)->increment('code', 3, ['name' => 'iimooc']);
    	dd($num);
    }
}


?>