<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Result;
use App\Models\Grade;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function create() {

        return view('input');
    }

    public function store(Request $request) {
        $request->validate([
            'student_name' => 'required',
            'bangla' => 'required',
            'english' => 'required',
            'math' => 'required',
            'science' => 'required'
        ]);

        $total = ($request->bangla + $request->english + $request->math + $request->science);

        $point = ($total / 100);

        $garade = Grade::where('point', $request->point)->get();

        $res = new Result;
        $res->student_name = $request->student_name;
        $res->bangla = $request->bangla;
        $res->english = $request->english;
        $res->math = $request->math;
        $res->science = $request->science;
        $res->point = $point;
        $res->total = $total;
        $res->save();

        return redirect()->route('show');
    }

    public function show() {

        $res = Result::orderBy('point', 'desc')->get();

        foreach($res as $r) {
            $gra = Grade::where('from_point', '<=', $r->point)->where('to_point', '>=', $r->point)->get();
        }

        return view('show', [ 'res' => $res, 'gra' => $gra ]);
    }

    public function result($id) {

        $result = Result::find($id);

        $gra = Grade::where('from_point', '<=', $result->point)->where('to_point', '>=', $result->point)->first();

        return view('result', [ 'res' => $result, 'gra' => $gra ]);
    }
}