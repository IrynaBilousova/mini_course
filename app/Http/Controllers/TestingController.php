<?php

namespace App\Http\Controllers;

use App\Result;
use Illuminate\Http\Request;
use App\Test;

class TestingController extends Controller
{
    public $taskNum = 4;

    public function index()
    {
        $results = Result::orderBy('result_id', 'desc')->take(10)->get();
        return view('start', compact('results'));
    }

    public function startTest(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time() . '.' . request()->avatar->getClientOriginalExtension();
        request()->avatar->move(public_path('images'), $imageName);

        $test = new Test($request['email'], 'images/' . $imageName);
        session(['test' => $test]);

        return view('task1');
    }

    public function saveAnswer(Request $request)
    {
        session('test')->answers['task' .  session('test')->currentTask] = $request->except('_token');
        session('test')->currentTask += 1;

        if (session('test')->currentTask > $this->taskNum)
            return redirect('finish');

        // generate 2 random numbers for second task
        $num1 = random_int(10, 99);
        $num2 = random_int(10, 99);

        return view('task' .  session('test')->currentTask, compact('num1', 'num2'));
    }

    public function finish(Request $request)
    {

        if (session()->has('test')) {
            $result = session('test')->finish();

            session()->forget('test');

            return view('finish', compact('result'));
        }

        return  redirect('/');
    }
}
