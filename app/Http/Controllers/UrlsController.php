<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Urls;

class UrlsController extends Controller
{
    public function index(){
        $urls = Urls::paginate(15);
        return view('urls', compact('urls',$urls));
    }
    public function show(Request $req){
        
        
        $data = DB::table('data')
        ->select(DB::raw('page,position,ctr,query,impressions, CEILING(avg(ctr)) as avg_ctr, CEILING(avg(position)) as avg_pos,CEILING(avg(impressions)) as avg_imp'))
        ->where('page', $req->url)
        ->groupBy('page','position','ctr','query','impressions')
        ->limit(250)
        ->get();
        
        return view('detail',compact('data',$data));
    }
}
