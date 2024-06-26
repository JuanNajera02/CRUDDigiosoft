<?php

namespace App\Controllers;
use App\Models\StudentsModel;
class Init extends BaseController
{
    public function index()
    {
        $studentModel = new StudentsModel();
        $students = $studentModel->getStudents();

        // Imprime en la consola los estudiantes obtenidos
        error_log(print_r($students, true));

        echo view('layout/header');
        echo view('students/list', compact('students'));
        echo view('layout/footer');
    }
}