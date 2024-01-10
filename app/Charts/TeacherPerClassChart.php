<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Support\Facades\DB;

class TeacherPerClassChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\barChart
    {
        $collection = DB::table('teachers')
            ->select(DB::raw('teachers.name as teacher_name, count(*) as number_of_classes'))
            ->join('classes', 'teachers.id', '=', 'classes.teacher_id')
            ->groupBy('teachers.name')
            ->orderBy('number_of_classes')
            ->get();

        $number_of_classes = [];
        $teacher_name = [];
        foreach ($collection as $entry)
        {
            $number_of_classes[] = $entry->number_of_classes;
            $teacher_name[] = $entry->teacher_name;
        }

        return $this->chart->barChart()
            ->setTitle('Teacher per class')
            ->setSubtitle('Teachers')
            ->addData('classes',  $number_of_classes)
            ->setXAxis($teacher_name)
            ->setGrid();
    }

}
