<?php

namespace App\Http\Controllers;

use App\Student;
//use illuminate\Support\facedes\DB;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //verivikasi data sebelum masuk ke database
        $request->validate([
            'nama' => 'required',
            'nim' => 'required|size:10',
            'email' => 'required|email',
            'jurusan' => 'required'
        ]);

        ///////////////////////////////////////////////
        //Input databese cara ke 1 (insert/store)
        //////////////////////////////////////////////        
        // $student = new Student;
        // $student ->nama = $request->nama;
        // $student ->nim = $request->nim;
        // $student ->email = $request->email;
        // $student ->jurusan = $request->jurusan;

        // $student->save();

        ///////////////////////////////////////////////
        //Input databese cara ke 2 (create)
        //////////////////////////////////////////////
        // Student::create([
        //     'nama' => $request->nama,
        //     'nim' => $request->nim,
        //     'email' => $request->email,
        //     'jurusan' => $request->jurusan
        // ]);

        ///////////////////////////////////////////////
        //Input databese cara ke 3 (mengambil data yng diberi hak akses $fillable)
        //////////////////////////////////////////////
        Student::create($request->all());
        return redirect('/students')->with('status', 'Data Mahasiswa Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students.show',compact ('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'nama' => 'required',
            'nim' => 'required|size:10',
            'email' => 'required|email',
            'jurusan' => 'required'
        ]);

        Student::where('id', $student->id)
            ->update([
                'nama' => $request->nama,
                'nim' => $request->nim,
                'email' => $request->email,
                'jurusan' => $request->jurusan,
            ]);
            return redirect('/students')->with('status', 'Data Mahasiswa Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        Student::destroy($student->id);
        return redirect('/students')->with('status', 'Data Mahasiswa Berhasil Dihapus!');
    }
}
