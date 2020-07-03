<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class AnswerModel {
    public static function get_all(){
        $data = DB::table('answers')->get();
        return $data;
    }

    public static function get_byId($id){
        $data = DB::table('answers')
        ->where('question_id', $id)->get();
        return $data;
    }

    public static function save($data){
        $new_data = DB::table('answers')->insert($data);

        return $new_data;
    }

}
