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

    public function edit($id){
        $data = AnswerModel::get_byIdJawaban($id);
        
        return view('answer.edit', compact('data'));
    }
    public function update($question_id,$id, Request $request){
        
        $data=$request->all();
        
        unset($data["_token"]);
        unset($data["_method"]);

        $update = AnswerModel::update($id,$data);
        if($update){
            return redirect('/jawaban/'.$question_id);
        }
    }

    public function destroy($question_id,$id)
    {
        $save = AnswerModel::destroy($id);
        if($save){
            return redirect('/jawaban/'.$question_id);
        }
    }
}
