<?php
namespace App\Http\Controllers;
use App\Page;

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/10/7
 * Time: 14:35
 */
class PagesController extends Controller {
    public function show($id){
        return view('pages.show')->withPage(Page::find($id));
    }
}