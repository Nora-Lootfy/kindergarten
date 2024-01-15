<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Testimonial;
use App\Models\Classes;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index(): View{

        $teachers = DB::table('teachers')
            ->select(DB::raw('teachers.name, teachers.id, teachers.job_title, teachers.image, count(*) as number_of_classes'))
            ->join('classes', 'teachers.id', '=', 'classes.teacher_id')
            ->groupBy('teachers.name', 'teachers.id', 'teachers.job_title', 'teachers.image')
            ->orderBy('number_of_classes', 'desc')
            ->limit(3)
            ->get();

        $testimonials = Testimonial::where('published', 1)->get();
//        $teachers = Teacher::where('is_popular', 1)->take(3)->get();
        $classes = Classes::take(6)->get();

        return view('index', compact(['testimonials', 'teachers', 'classes']));
//        return dd($testimonials);
    }

    public function about(): View{
        $teachers = DB::table('teachers')
            ->select(DB::raw('teachers.name, teachers.id, teachers.job_title, teachers.image, count(*) as number_of_classes'))
            ->join('classes', 'teachers.id', '=', 'classes.teacher_id')
            ->groupBy('teachers.name', 'teachers.id', 'teachers.job_title', 'teachers.image')
            ->orderBy('number_of_classes', 'desc')
            ->limit(3)
            ->get();
        return view('about', compact('teachers'));
    }

    public function classes(): View{
        $classes = Classes::get();
        return view('classes', compact('classes'));
    }

    public function contactUs (): View{
        return view('contactUs');
    }

    public function testimonial(): View {
        $testimonials = Testimonial::where('published', 1)->get();
        return view('testimonial', compact('testimonials'));
    }

    public function facility(): View{
        return view('facility');
    }

    public function team(): View{
        $teachers = DB::table('teachers')
            ->select(DB::raw('teachers.name, teachers.id, teachers.job_title, teachers.image, count(*) as number_of_classes'))
            ->join('classes', 'teachers.id', '=', 'classes.teacher_id')
            ->groupBy('teachers.name', 'teachers.id', 'teachers.job_title', 'teachers.image')
            ->orderBy('number_of_classes', 'desc')
            ->limit(3)
            ->get();
        return view('team', compact('teachers'));
    }

    public function callToAction(): View{
        return view('callToAction');
    }

    public function appointment(): View{
        return view('appointment');
    }

    public function showNotFound(): View{
        return view('notFound');
    }
}
