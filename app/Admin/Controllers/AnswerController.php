<?php

namespace App\Admin\Controllers;

use App\Admin\Extensions\AnswerExporter;
use App\Anketo;
use App\Answer;
use App\AnswerAnketo;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class AnswerController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '回答';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
//        $answerModel = config('admin.database.answer_model');

        $grid = new Grid(new Answer());

        $grid->column('id', __('ID'))->sortable();

        $grid->column('gender_name', trans('admin.gender'));
        $grid->column('name', trans('admin.name'));
        $grid->column('branch', trans('admin.branch'));


        $grid->column('created', trans('admin.created_at'));
        $grid->column('updated', trans('admin.updated_at'));

        $grid->disableCreateButton();

        $grid->actions(function ($actions) {
            $actions->disableEdit();
        });


        $grid->exporter(new AnswerExporter());

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed   $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Answer::findOrFail($id));

        $answer = Answer::findOrFail($id);
//        var_dump($answer->anketos()->get()); exit;


        $show->field('id', __('ID'));
        $show->field('name', trans('admin.name'));
        $show->field('gender_name', trans('admin.gender'));
        $show->field('branch', trans('admin.branch'));

        $show->field('anketo_text', trans('admin.anketo'))->setEscape(false);

        $show->field('created', trans('admin.created_at'));
        $show->field('updated', trans('admin.updated_at'));

        $show->panel()->tools(function ($tools) {
            $tools->disableEdit();
        });


        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new ExampleModel);

        $form->display('id', __('ID'));
        $form->display('created_at', __('Created At'));
        $form->display('updated_at', __('Updated At'));

        return $form;
    }

}
