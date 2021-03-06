<?php

namespace App\Http\Controllers;

use App\Anketo;
use App\Answer;
use App\AnswerAnketo;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index(Content $content)
    {
        $anketos = Anketo::all();

        $data = session('arrAnswerData');

        if (empty($data)) {
            $anketo_array = [];
            foreach ($anketos as $anketo) {
                $anketo_array[$anketo->id] = null;
            }
            $data = array(
                'name' => null, 'gender' => null, 'branch' => null, 'anketo' => $anketo_array,
            );
        }
        if (empty($data)) {
            $data = [];
        }
        return view('index')->with(compact('anketos', 'data'));
    }

    public function answerPost(Request $request)
    {
        $anketos = Anketo::all();

        $anketo_validations = [];

        foreach ($anketos as $anketo) {
            $anketo_validations['anketo.' . $anketo->id] ='required';
        }

        $validator = Validator::make($request->all(), array_merge([
            'gender' => 'required',
            'branch' => 'required',
            'name' => 'required',
        ], $anketo_validations));

        if ($validator->fails()) {
//            return redirect(route('home'))->withErrors($validator)->withInput();
//            return redirect()->back()->withErrors($validator)->withInput();

            return redirect(route('home'))->withErrors($validator)->withInput();
        } else {
            $data = $request->all();

//            session_start();
            session(['arrAnswerData' => $data]);
//            Session::set('arrAnswerData', $data);

            return redirect(route('confirm'));
        }

    }

    public function confirm()
    {
        $data = session('arrAnswerData');
        $anketos = Anketo::all();

        $answers = [
            1 => '1??????????????????????????????????????????',
            2 => '2????????????????????????????????????????????????',
            3 => '3????????????????????????????????????????????????',
            4 => '4??????????????????????????????????????????',
            5 => '5??????????????????????????????????????????',
        ];
        return view('confirm')->with(compact('data', 'anketos', 'answers'));
    }

    public function answerSave()
    {
        session_start();
        $data = Session::get('arrAnswerData');

        $answer = new Answer();
        $answer->gender = $data['gender'];
        $answer->name = $data['name'];
        $answer->branch = $data['branch'];
        $answer->save();

        $answer_id = $answer->id;
        foreach($data['anketo'] as $id => $val) {
            $answer_anketo = new AnswerAnketo();
            $answer_anketo->answer_id = $answer_id;
            $answer_anketo->anketo_id = $id;
            $answer_anketo->point = $val;
            $answer_anketo->save();
        }

        Session::forget('arrAnswerData');

        return redirect(route('complete'));
    }

    public function complete()
    {
        return view('complete');
    }
}
