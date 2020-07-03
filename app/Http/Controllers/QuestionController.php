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
}
