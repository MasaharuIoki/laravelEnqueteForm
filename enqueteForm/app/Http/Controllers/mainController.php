<?php

namespace App\Http\Controllers;

use Illuminate\Http\PostRequest;
use App\Http\Requests\enquetePostRequest;
use App\enqueteForm;

class mainController extends Controller
{
    //public function index()
    //{
    //    return view('welcome');
    //}

    /**
     * 入力画面
     * @return string
     */
    public function input()
    {
        return view('enqueteInput');
    }
 
    /**
     * 完了画面
     * @return string
     */
    public function save(enquetePostRequest $request)
    {

    // データベース登録
    $insertData = new enqueteForm;
    $insertData->name = $request->name;
    $insertData->email = $request->email;
    $insertData->gender = $request->gender;
    $insertData->content = $request->content;
    $insertData->save();
   
    // リロード等による二重送信防止
    $request->session()->regenerateToken();
        
        return view('enqueteEnd');
    }
}
