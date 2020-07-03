<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuestionModel;
use App\Models\AnswerModel;

class AnswerController extends Controller
{
    public function index($id){
        $data = AnswerModel::get_byId($id);
        $data2 = QuestionModel::get_byId($id);
        return view('answer.index', compact('data'),compact('data2'));
    }

    public function store(Request $request,$id){
        $data=$request->all();
        unset($data["_token"]);
        $save = AnswerModel::save($data);
        if($save){
            return redirect('/jawaban/'.$id);
        }
    }
}
