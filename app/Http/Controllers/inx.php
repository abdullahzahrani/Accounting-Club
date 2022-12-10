<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;

class inx extends Controller
{
    public function show()
    {
        $vid = DB::table('vidoes')->where("prmt", '=', 1)->select(['name', 'url', 'descr'])->orderByRaw("RAND()")->paginate(3);

        return view('welcome', compact('vid'));

    }
    public function member()
    {
        $mbr = DB::table('members')->select(['img', 'name', 'rank', 'mail', 'twt', 'link'])->orderByRaw("RAND()")->get();

        return view('member', compact('mbr'));

    }
    public function video()
    {
        $vid = DB::table('vidoes')->where("prmt", '=', 1)->select(['name', 'url', 'descr'])->orderByRaw("RAND()")->paginate(4);
        $vid2 = DB::table('vidoes')->where("prmt", '=', 0)->select(['name', 'url', 'descr'])->orderByRaw("RAND()")->get();

        return view('video', compact('vid', 'vid2'));
    }

    public function article(Request $request)
    {
        $arc = DB::table('articles')->where("typed", '=', ($request->id))->select(['id','smallImage', 'title', 'smallDesc','created_at'])->orderBy('id', 'desc')->paginate(3);
        $arc2 = DB::table('articles')->where("typed", '=', $request->id)->select(['id','smallImage', 'title', 'smallDesc', 'longDesc','created_at'])->orderByRaw("RAND()")->get();

        return view('article', compact('arc', 'arc2'));
    }
    public function post(Request $request)
    {
        $pst = DB::table('articles')->where("id", '=', $request->id)->select([ 'id','imageHeader', 'longDesc',])->get();
        $arcID = DB::table('articles')->select(['id'])->orderBy('id', 'desc')->paginate(1);

        return view('post', compact('pst','arcID'));
    }
}
