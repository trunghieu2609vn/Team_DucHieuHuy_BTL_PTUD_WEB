<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:student');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('student.home');
    }

    /**
     * Lấy toàn bộ lớp đang học của sinh viên
     * @return json
     */
    public function retrieveAll() {
        $classes = DB::table('lop_mon_hoc')
                            ->join('giang_vien','lop_mon_hoc.gv_id','=','giang_vien.id')
                            ->join('sinh_vien','lop_mon_hoc.sv_id','=','sinh_vien.id')
                            ->join('mon_hoc','lop_mon_hoc.ma_mh','=','mon_hoc.ma_mh')
                            ->where('lop_mon_hoc.sv_id','=',Auth::user()->id)
                            ->get();
        return response()->json($classes);
    }
}
