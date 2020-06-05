<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EmploymentHistory;
use App\Profile;
use App\Blog;
use App\Blog2;
use App\Mainblog;
use App\Info;
use App\Newpost;
use DB;

class StanleyController extends Controller
{
    public function am(){
        $profile = Profile::all();
        return view('aboutme', ['profile' => $profile]);
     }
     public function info($id){
         $info = Info::findOrFail($id);
         $newpost = Blog::orderBy('id','desc')->get();
         DB::update('update blog set hit = hit+1 where id=?', [$id]);
         return view('article', ['info' => $info, 'newpost' => $newpost]);
     }

    public function eh(){
        $total = EmploymentHistory::orderBy('id', 'desc')->get();
        //$total = EmploymentHistory::orderBy('SDate')->get();
        return view('employmenthistory', ['total' => $total]);
    }

    public function blog(){
        $blog = Blog::orderBy('id', 'desc')->get();
        return view('blog', ['blog' => $blog]);
    }
}