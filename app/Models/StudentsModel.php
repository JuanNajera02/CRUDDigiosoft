<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentsModel extends Model
{
    protected $table = 'students'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'id'; // Clave primaria de la tabla
    protected $allowedFields = ['id', 'name', 'surname', 'phone_number']; // Campos permitidos para operaciones CRUD

    // Método para obtener todos los estudiantes
    public function getStudents()
    {
        return $this->findAll(); // Devuelve todos los registros de la tabla
    }
}
