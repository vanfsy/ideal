<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $table = 'answers';

    protected $appends = ['gender_name', 'created', 'updated', 'anketo_text', 'anketo_csv_text'];

    public function anketos() {
        return $this->hasMany(AnswerAnketo::class, 'answer_id', 'id');
    }

    public function getGenderNameAttribute()
    {
        if ($this->gender == 0) return '男';
        if ($this->gender == 1) return '女';
    }

    public function getCreatedAttribute()
    {
        return date('Y-m-d H:i:s', strtotime($this->created_at));
    }

    public function getUpdatedAttribute()
    {
        return date('Y-m-d H:i:s', strtotime($this->updated_at));
    }


    public function getAnketoTextAttribute() {
        $answer_anketos = $this->anketos()->get();

        $anketos = Anketo::all();
        $anketo_array = array();
        foreach ($anketos as $anketo) {
            $anketo_array[$anketo->id] = $anketo->question;
        }


        $anketo_val = '';
        foreach ($answer_anketos as $answer_anketo) {
            $anketo_val .= $answer_anketo->anketo_id . '.' . $anketo_array[$answer_anketo->anketo_id] . "<br>&nbsp;&nbsp;&nbsp;" . $answer_anketo->point . "<br><br>";
        }

        return $anketo_val;

    }

    public function getAnketoCsvTextAttribute() {
        $answer_anketos = $this->anketos()->get();

        $anketos = Anketo::all();
        $anketo_array = array();
        foreach ($anketos as $anketo) {
            $anketo_array[$anketo->id] = $anketo->question;
        }


        $anketo_val = '';
        foreach ($answer_anketos as $answer_anketo) {
            $anketo_val .= $answer_anketo->anketo_id . '.' . $anketo_array[$answer_anketo->anketo_id] . "：" . $answer_anketo->point . "    ";
        }

        return $anketo_val;

    }

}
