<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    //

    public function listar(){

        $teachers = Teacher::orderby('id','desc')->get();
        return view('teacher.listar', compact('teachers'));

    }


    public function create(){
        return view('teacher.create');
    }


    public function store(Request $request){
        $dato = new Teacher();

        $dato->dni = $request->dni;
        $dato->nombre_profesor = $request->nombre_profesor;
        $dato->direccion = $request->direccion;
        $dato->celular = $request->celular;
        $dato->save();
        // return $curso;
        return redirect()->route('teacher.listar');        // para llevar al la lista o direccionar
    }

    public function show( $id){

        $teacher=Teacher::find($id);
        return view('teacher.show', compact('teacher'));

    }

    public function destroy(Teacher $dato){

        $dato->delete();
        return redirect()->route('teacher.listar');
    }


    //editar
    public function edit(Teacher $dato){
        
        //Encuentro el Curso
        return view('teacher.edit', compact('dato'));

    }

    //Update
    public function update(Request $request, Teacher $dato)
    {
        $dato->dni = $request->dni;
        $dato->nombre_profesor = $request->nombre_profesor;
        $dato->direccion = $request->direccion;
        $dato->celular = $request->celular;

        $dato->save();

        return redirect()->route('teacher.listar');
    }


}
