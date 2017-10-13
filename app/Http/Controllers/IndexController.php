<?php
/**
 * Created by PhpStorm.
 * User: M
 * Date: 17/10/9
 * Time: 上午9:44
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function Index()
    {
        //$name = DB::table('photo_album')->where('id', $id)->value('name');
        //$data = DB::table('picture')->where('pid', $id)->get();
        $data = DB::table('picture')->get();
        return view('index.index', [
            'name' => '马语彤',
            'data' => $data
        ]);
    }
}