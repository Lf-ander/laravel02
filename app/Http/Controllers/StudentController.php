<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //

    public function listar(){

        // $user = User::find(1);

        // return $user->profile;                          $students  se escribe igual compact('students'));
        $students = Student::orderBy('id', 'desc')->get();
        return view('student.listar', compact('students'));
    }

    public function create(){
        
        // crear formulario
        return view('student.create');
        
    }

    public function store(Request $request){

        $dato = new Student();

        $dato->expediente = $request->expediente;
        $dato->nombre_estudiante = $request->nombre_estudiante;
        $dato->apellido = $request->apellido;
        $dato->save();
        // return $curso;
        return redirect()->route('student.listar');        // para llevar al la lista o direccionar
    }

    public function show( $id){
        $student=Student::find($id);
        return view('student.show', compact('student'));
    }

    public function destroy(Student $dato){
        
        $dato->delete();
        return redirect()->route('student.listar');
    }

    //Edit
    public function edit(Student $dato){
        
        //Encuentro el Curso
        return view('student.edit', compact('dato'));
    }

    //Update
    public function update(Request $request, Student $dato){

        $dato->expediente = $request->expediente;
        $dato->nombre_estudiante = $request->nombre_estudiante;
        $dato->apellido = $request->apellido;
        
        $dato->save();

        return redirect()->route('student.listar');
    }




}
