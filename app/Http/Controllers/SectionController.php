<?php

namespace App\Http\Controllers;

use App\Section;
use App\Course;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function index()
    {
        $context = [
            'sections' => Section::with('course')
                ->orderby('level')
                ->orderby('course_id')
                ->orderby('number')
                ->get()
        ];

        return view('section.index', $context);
    }

    public function create()
    {
        $context = [
            'courses' => Course::all(),
        ];

        return view('section.create', $context);
    }

    public function store(Request $request)
    {
        $level = $request->input('level');
        $course_id = $request->input('course');
        $number = $request->input('number');

        $existing_section = Section::where('level', $level)
            ->where('course_id', $course_id)
            ->where('number', $number)
            ->get();

        if (!$existing_section->first()) {
            $section = new Section();
            $section->level = $level;
            $section->course_id = $course_id;
            $section->number = $number;
            $section->save();

			$this->flashGenericModal($request, "Level: {$level} | Course: {$section->course->name} | Number: {$number}");
        }
		else {
			$this->flashGenericModal($request, "Level: {$level} | Course: {$existing_section->first()->course->name} | Number: {$number} - Already Exists", 'Warning');
		}

        return redirect()->back();
    }

    public function destroy(Request $request, $id = null)
    {
        $section = Section::where('level', $request->input('level'))
            ->where('course_id', $request->input('course'))
            ->where('number', $request->input('number'))
			->with('course')
            ->first();

		$modal_message = "";
		$modal_title = "";

		if($section)
		{
			$modal_message = "Level: {$section->level} | Course: {$section->course->name} | Number: {$section->number} - Deleted";
			$modal_title = "Success";
			$section->delete();
		}
		else 
		{
			$modal_message = "Level: {$request->input('level')} | Course: {$request->input('course')} | Number: {$request->input('number')} - Not Found";
			$modal_title = "Warning";
		}

		$this->flashGenericModal($request, $modal_message, $modal_title);

        return redirect()->back();
    }
}
