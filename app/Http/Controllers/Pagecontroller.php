<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\activity;
use App\chart;
use App\children;
use App\comment;
use App\game;
use App\gift;
use App\parents;
use App\player;
use App\send_gift;
use App\user;

class Pagecontroller extends Controller
{
    public function getAdmin()
    {
    	$send = send_gift::all();
    	$parents = parents::all();
     	return view('page.trangchuAdmin',compact('send','parents'));
    }
    public function getGift()
    {
    	$gift = gift::all();
    	return view('page.adminQuaTang',compact('gift'));
    }
    public function getQuatang()
    {
    	$gift = gift::all();
    	return view('page.themQuatang',compact('gift'));
    }
    public function postQuatang(Request $req)
    {
    	$gift = new gift;
    	$gift->name = $req->name;
    	$gift->quantity = $req->quantity;
    	$gift->point = $req->point;
    	$gift->description = $req->notes;
    	$gift->image = $req->image;
    	$gift->save();
        return redirect()->back()->with('thongbao','Thêm Quà tặng thành công');
    }
}
