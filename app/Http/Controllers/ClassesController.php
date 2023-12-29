<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Classes;
use App\Traits\Common;


class ClassesController extends Controller
{
    use Common;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classes= Classes::get();
        return view('admin.classes', compact('classes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teachers = Teacher::select(['name', 'id'])->get();
        return view('admin.addClass', compact('teachers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'          => 'required|string|max:255',
            'price'         => 'required',
            'age_from'      => 'required',
            'age_to'        => 'required',
            'starts_at'     => 'required',
            'ends_at'       => 'required',
            'teacher_id'    => 'required',
            'capacity'    => 'required',
            'image'         => 'required|mimes:png,jpg,jpeg|max:2048'
        ]);

        $data['image'] = $this->uploadFile($request->image, 'assets\images');

        Classes::create($data);

        return redirect()->route('class');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $class = Classes::findOrFail($id);
        return view('admin.showClass', compact('class'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $class = Classes::findOrFail($id);
        $teachers = Teacher::select(['id', 'name'])->get();
        return view('admin.editClass', compact(['class', 'teachers']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name'          => 'required|string|max:255',
            'price'         => 'required',
            'age_from'      => 'required',
            'age_to'        => 'required',
            'starts_at'     => 'required',
            'ends_at'       => 'required',
            'teacher_id'    => 'required',
            'capacity'      => 'required',
            'image'         => 'sometimes|mimes:png,jpg,jpeg|max:2048'
        ]);

        if(isset($request->image)){
            $data['image'] = $this->uploadFile($request->image, 'assets\images');
        }

        Classes::where('id', $id)->update($data);

        return redirect()->route('class');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Classes::where('id', $id)->delete();
        return redirect()->route('class');
    }
}
