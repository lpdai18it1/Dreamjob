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
    public function getSearchGift(Request $req)
    {
        $gift = gift::where('name','like','%'.$req->key.'%')
                            ->orWhere('id',$req->key)
                            ->get();
        return view('page.seachGift',compact('gift'));
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
    public function getxoaQuatang($id)
    {
    	$gift = gift::find($id);
    	$gift->delete();
    	return redirect()->back()->with('thongbao','xóa Quà tặng thành công');
    }
    public function getSuaQuatang($id)
    {
    	$gift = gift::find($id);
    	return view('page.suaQuatang',compact('gift','id'));
    }
    public function postSuaQuatang(Request $req, $id)
    {
        $edit = new gift;
        $editid = $edit->find($id);
        $editid->name = $req->name;
        $editid->quantity = $req->quantity;
        $editid->point = $req->point;
        $editid->description = $req->notes;
        if($req->anh != NUll){
            $editid->image = $req->anh;
        }
        $editid->save();
        unset($req);
        return redirect()->back()->with('thongbao','Cập nhật sản phẩm thành công'); 
    }
    public function getSendGift()
    {
    	$send = send_gift::all();
    	return view('page.trangAdminSendGift',compact('send'));
    }
    public function getxoaSendGift($id)
    {
    	$send = send_gift::find($id);
    	$send->delete();
    	return redirect()->back()->with('thongbao','xóa Quà tặng thành công');
    }
    public function getSearchSendGift(Request $req)
    {
        $send = send_gift::where('address','like','%'.$req->key.'%')
                            ->orWhere('id',$req->key)
                            ->get();
        return view('page.seachSendGift',compact('send'));
    }
    public function getCnQuatang($id)
    {
        $edit = send_gift::find($id);
        return view('page.cnDonGift',compact('edit','id'));
    }
    public function postCnQuatang(Request $req, $id)
    {
        $edit = new send_gift;
        $editid = $edit->find($id);
        $editid->status = $req->trangthai;
        $editid->save();
        unset($req);
        return redirect()->back()->with('thongbao','Cập nhật sản phẩm thành công'); 
    }
}
