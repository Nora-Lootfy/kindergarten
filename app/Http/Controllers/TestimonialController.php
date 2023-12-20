<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\Common;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    use Common;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::get();

        return view('admin.testimonials', compact('testimonials'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.addTestimonial');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'          => 'required|string|max:255',
            'job'           => 'required|string|max:255',
            'image'         => 'required|mimes:png,jpg,jpeg|max:2048',
            'comment'       => 'required|string',
        ]);

        $data['published'] = isset($request->published);
        $data['image'] = $this->uploadFile($request->image, 'assets\images');


        Testimonial::create($data);

        return 'data inserted successfully';


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $testimonial = Testimonial::findOrFail($id);

        return view('admin.showTestimonial', compact('testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $testimonial = Testimonial::findOrFail($id);

        return view('admin.editTestimonial', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name'          => 'required|string|max:255',
            'job'           => 'required|string|max:255',
            'image'         => 'sometimes|mimes:png,jpg,jpeg|max:2048',
            'comment'       => 'required|string',
        ]);

        $data['published'] = isset($request->published);

        if(isset($request->image)){
            $data['image'] = $this->uploadFile($request->image, 'assets\images');
        }

        Testimonial::where('id', $id)->update($data);

        return redirect()->route('Testimonials');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Testimonial::where('id', $id)->delete();
        return redirect()->route('Testimonials');
    }
}
