<?php


namespace App\Admin\Extensions;

use App\Anketo;
use Encore\Admin\Grid;
use Encore\Admin\Grid\Exporters\ExcelExporter;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use Maatwebsite\Excel\Concerns\WithMapping;

class AnswerExporter extends ExcelExporter implements FromQuery, WithMapping, WithCustomCsvSettings
{
    protected $anketos;
    protected $anketo_headings;
    protected $fileName = 'answers.csv';


    protected $headers = [
        'Content-Encoding'=> 'SHIFT-JIS'
    ];

    protected $headings;
    protected $data;
//    protected $headings = ['ID', 'email', 'name', 'send_flag_text'];


    public function __construct(Grid $grid = null)
    {
        $anketos = Anketo::all();

        foreach ($anketos as $anketo) {
            $this->anketo_headings[] = 'ICM回答' . $anketo->id;
        }

        $headings = array_merge(['アンケート設定ID', '整理番号', "部門", "役職", "社員番号", "氏名", "管理職", "メールアドレス", "性別", "社員ID"], $this->anketo_headings);
        $this->headings = $headings;
//        $this->headings = mb_convert_encoding($headings, "SJIS");

        parent::__construct($grid);
    }

    public function headings(): array
    {
        $sample = 'アンケート設定ID';
//        var_dump(mb_convert_encoding("あああ", "sjis-win", "utf-8")); exit;
//        var_dump(mb_convert_encoding($sample, "SJIS-WIN")); exit;
        $header = mb_convert_encoding($this->headings,"utf-8");
        // dump($header);
        return $header;

//        $headers = [];
//        foreach ($this->headings as $heading) {
//            $header = mb_convert_encoding($heading, "SJIS", "UTF-8");
//            $headers[] = $header;
//        }
//
//        var_dump($headers); exit;
//
//        return $headers;
    }

//    protected $columns = [
//        'id' => 'ID',
//        'email' => 'メールアドレス',
//        'gender' => '性別',
//        'name' => 'お名前',
//        'pref' => 'お住まいの都道府県',
//        'send_flag' => '原田教育研究所から研修・セミナー情報等をお送りしてもよろしいですか？',
////        'gender_name' => 'gender_name',
////        'send_flag' => 'send_flag',
////        'email' => 'email',
////        'name' => 'name',
//    ];


    public function map($answer): array
    {
        $anketos = Anketo::all();
        $answer_anketos = $answer->anketos()->get();

        $anketo_vals = [];
        foreach($anketos as $anketo) {
            $anketo_id = $anketo->id;

            foreach($answer_anketos as $answer_anketo) {
                if ($answer_anketo->anketo_id == $anketo_id) {
                    $anketo_vals[] = $answer_anketo->point;
                    break;
                }
            }
        }

        $result = array_merge([
            ' ',
            ' ',
            $answer->branch,
            ' ',
            ' ',
            $answer->name,
            ' ',
            ' ',
            $answer->gender_name,
            ' ',
//            Date::dateTimeToExcel($invoice->created_at),
        ], $anketo_vals);

//        var_dump($result);
//        var_dump(mb_convert_encoding($result, "SJIS"));
//        var_dump(mb_convert_encoding($result, "sjis-win"));
//
//        exit;
        $this->data = $result;

//        return $result;
        return mb_convert_encoding($result, "utf-8");

//        return [
//            $answer->id,
//            $answer->email,
//            $answer->gender_name,
//            $answer->name,
//            $answer->pref,
//            $answer->anketo_csv_text,
//            $answer->send_flag_text,
//            $answer->created,
//            $answer->updated,
////            Date::dateTimeToExcel($invoice->created_at),
//        ];
    }

//    public function bindValue(Cell $cell, $value)
//    {
//        var_dump($value);
//        $value = mb_convert_encoding($value, "sjis");
//        var_dump($value); exit;
//        return parent::bindValue($cell, $value);
//    }

//    public function collection()
//    {
//        $data = mb_convert_encoding($this->data,"SJIS", "UTF-8");
//        // dump($data);
//        return collect($data);
//    }

    public function getCsvSettings(): array
    {
        return array(
            'use_bom' => true
        );
        // TODO: Implement getCsvSettings() method.

    }

}