<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuestionModel;

class QuestionController extends Controller
{
    public function index(){
        $data = QuestionModel::get_all();
        return view('question.index', compact('data'));
    }

    public function create(){
        return view('question.form');
    }

    public function store(Request $request){
        $data=$request->all();
        unset($data["_token"]);
        $save = QuestionModel::save($data);
        if($save){
            return redirect('/pertanyaan');
        }
    }

    public function edit($id){
        $data = QuestionModel::get_byId($id);
        return view('question.edit', compact('data'));
    }
    public function update($id, Request $request){
        
        $data=$request->all();
        unset($data["_token"]);
        unset($data["_method"]);

        $update = QuestionModel::update($id,$data);
        if($update){
            return redirect('/pertanyaan');
        }
    }

    public function destroy($id)
    {
        $save = QuestionModel::destroy($id);
        if($save){
            return redirect('/pertanyaan');
        }
    }
}
