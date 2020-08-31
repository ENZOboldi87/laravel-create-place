<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
  public function index() {
    // $students = [
    //   [
    //     'nome' => 'Giuseppe',
    //     'cognome' => 'Rotolo',
    //     'voto' => 9,
    //   ],
    //   [
    //     'nome' => 'Mario',
    //     'cognome' => 'Rossi',
    //     'voto' => 6,
    //   ],
    //   [
    //     'nome' => 'Ernesto',
    //     'cognome' => 'Bassatore',
    //     'voto' => 8,
    //   ]
    // ];

    $students = Student::all();


    return view('students', compact('students'));
  }
}
