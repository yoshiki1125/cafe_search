<?php

namespace App\Http\Controllers;

use App\Models\Cafe;
use Illuminate\Http\Request;
use App\Http\Requests\CafeRequest;
use Cloudinary;


class CafeController extends Controller
{
    public function home()
    {
        return view('cafe/cafe_search');
    }
    
    public function register()
    {
        return view('cafe/cafe_register');
    }
   
    public function complete(CafeRequest $request, Cafe $cafe)
    {
        $input = $request['cafe'];
        //画像がアップロードされたときだけ処理を実行
        if($request->file('image'))
        { 
        $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        $input += ['image_url' => $image_url];
        }
        
        $cafe->fill($input)->save();
        return view('cafe/cafe_search');
    }
   
    public function search(Request $request)
    {
       //キーワード検索
       $keyword = $request->input('keyword');
       //詳細検索
       $wifi = $request->input('wifi');
       $outlet = $request->input('outlet');
       $working_space = $request->input('working_space');
       $smorking_space = $request->input('smorking_space');
       $paper_cigarette = $request->input('paper_cigarette');
      
       $query = Cafe::query();
       
       if(!empty($keyword))
       {
           //キーワードから検索
           $query->where('name', 'LIKE', "%{$keyword}%")
                 ->orWhere('address', 'LIKE', "%{$keyword}%")
                 ->orWhere('access', 'LIKE', "%{$keyword}%")
                 ->orWhere('tell', 'LIKE', "%{$keyword}%");
       }
       //詳細から検索
       if(!empty($wifi))
       {
           $query->where('wifi', 'LIKE', $wifi);
       }
       
       if(!empty($outlet))
       {
           $query->where('outlet', 'LIKE', $outlet);
       }
       
       if(!empty($working_space))
       {
           $query->where('working_space', 'LIKE', $working_space);
       }
       
       if(!empty($smorking_space))
       {
           $query->where('smorking_space', 'LIKE', $smorking_space);
       }
       
       if(!empty($paper_cigarette))
       {
           $query->where('paper_cigarette', 'LIKE', $paper_cigarette);
       }
       
        $cafe = $query->get();
       
        return view('cafe/cafe_search_result')->with(['cafes' => $cafe,]);
    }
    
    public function map(Cafe $cafe)
    {
        return view('cafe/map')->with(['cafe' => $cafe]);
    }
    
    
}
