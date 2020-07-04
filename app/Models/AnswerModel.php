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

    public static function get_byIdJawaban($id){
        $data = DB::table('answers')
        ->where('id', $id)->get();
        return $data;
    }

    public static function save($data){
        $new_data = DB::table('answers')->insert($data);

        return $new_data;
    }
    public static function update($id, $data){
        $update = DB::table('answers')
        ->where('id',$id)
        ->update($data);

        return $update;
    }
    public static function destroy($id){
        $delete = DB::table('answers')
                        ->where('id',$id)
                        ->delete();

        return $delete;
    }

}
