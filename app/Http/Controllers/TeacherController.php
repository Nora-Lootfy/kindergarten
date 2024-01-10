<?php

namespace App\Http\Controllers;

use App\Charts\TeacherPerClassChart;
use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Traits\Common;

class TeacherController extends Controller
{
    use Common;
    /**
     * Display a listing of the resource.
     */
    public function index(TeacherPerClassChart $chart)
    {
        $teachers = Teacher::get();
        $chart = $chart->build();

        return view('admin.teachers', compact(['teachers', 'chart']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.addTeacher');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'          => 'required|string|max:255',
            'job_title'     => 'required|string|max:255',
            'image'         => 'required|mimes:png,jpg,jpeg|max:2048'
        ]);

        $data['is_popular'] = isset($request->is_popular);
        $data['image'] = $this->uploadFile($request->image, 'assets\images');


        Teacher::create($data);

        return redirect()->route('teachers');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('admin.showTeacher', compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('admin.editTeacher', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name'          => 'required|string|max:255',
            'job_title'     => 'required|string|max:255',
            'image'         => 'sometimes|mimes:png,jpg,jpeg|max:2048'
        ]);

        $data['is_popular'] = isset($request->is_popular);

        if(isset($request->image)){
            $data['image'] = $this->uploadFile($request->image, 'assets\images');
        }

        Teacher::where('id', $id)->update($data);

        return redirect()->route('teachers');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Teacher::where('id', $id)->delete();
        return redirect()->route('teachers');
    }

}
