<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
        		'title' => '保存上传的文件',
        		'content' => '要保存上传的文件，通常需要使用你所配置的其中一个文件系统， UploadedFile 类有一个 store 

        			方法，该方法会将上传文件移动到相应的磁盘路径上，该路径可以是本地文件系统的某个位置，也可以是云存储（如Amazon S3）上的路径。

					store 方法接收一个文件保存的相对路径（相对于文件系统配置的根目录 ），该路径不应该包含文件名，因为系统会自动生成一个唯一ID作为文件名。

					store 方法还接收一个可选的参数——用于存储文件的磁盘名称作为第二个参数，该方法会方返回相对于根目录的文件路径：

					如果你不想自动生成文件名，可以使用 storeAs 方法，该方法接收保存路径、文件名和磁盘名作为参数',
				'read_times' => '15',
				'created_at' => date("Y-m-d", time()),
        	]);
    }
}
