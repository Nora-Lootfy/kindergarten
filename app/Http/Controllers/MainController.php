<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Testimonial;

class MainController extends Controller
{
    public function index(): View{
        $testimonials = Testimonial::where('published', 1)->get();
        $teachers = Teacher::where('is_popular', 1)->take(3)->get();
        return view('index', compact(['testimonials', 'teachers']));
//        return dd($testimonials);
    }

    public function about(): View{
        $teachers = Teacher::where('is_popular', 1)->take(3)->get();
        return view('about', compact('teachers'));
    }

    public function classes(): View{
        return view('classes');
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
        $teachers = Teacher::where('is_popular', 1)->take(3)->get();
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
