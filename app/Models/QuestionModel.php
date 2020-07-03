<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class QuestionModel {
    public static function get_all(){
        $data = DB::table('questions')->get();
        return $data;
    }

    public static function get_byId($id){
        $data = DB::table('questions')
        ->where('id', $id)->get();
        return $data;
    }

    public static function save($data){
        $new_data = DB::table('questions')->insert($data);

        return $new_data;
    }
}
