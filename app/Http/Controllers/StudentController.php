<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
  public function index() {
    $students = [
      [
        'nome' => 'Giuseppe',
        'cognome' => 'Rotolo',
        'voto' => 9,
      ],
      [
        'nome' => 'Mario',
        'cognome' => 'Rossi',
        'voto' => 6,
      ],
      [
        'nome' => 'Ernesto',
        'cognome' => 'Bassatore',
        'voto' => 8,
      ]
    ];

    return view('students', compact('students'));
  }
}
