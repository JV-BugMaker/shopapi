<?php
/**
 * Created by PhpStorm.
 * User: JV
 * Date: 2015/10/1
 * Time: 14:11
 */
use Illuminate\Database\Seeder;
use App\Page;

class PageTableSeeder extends Seeder{
    public function run(){
        DB::table('pages')->delete();
        for($i = 0;$i<10;$i++){
            Page::create([
                'title' => 'Title '.$i,
                'slug' =>'first-page',
                'body' =>'body'.$i,
                'user_id'=>1
            ]);
        }
    }
}