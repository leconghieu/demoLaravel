<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use DB;
use App\loaitin;
use App\baiviet;

class firstController extends Controller
{
    public function home(){
        $loaitin = loaitin::all();
        $baiviet = baiviet::all();
        return view('home', ['loaitin' => $loaitin, 'baiviet' => $baiviet]);
    }
    public function add(Request $re){
        $name = strtolower($re->input('type'));
        $loaitin = loaitin::all();

        foreach($loaitin as $key){
            if($key->tenloai == $name){
                return redirect()->route('home', ['error' => 'Đã tồn tại trong hệ thống']);
            }
        }
    }

    

}
