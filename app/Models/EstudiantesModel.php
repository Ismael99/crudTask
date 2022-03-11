<?php

namespace App\Models;
use CodeIgniter\Model;

use App\Entities\Estudiantes;

class EstudiantesModel extends Model{
    protected $table = "estudiantes";
    protected $primaryKey = 'id';
    protected $allowedFields = ["first_name", "last_name", "age", "address", "codigo", "email"];
    protected $returnType = Estudiantes::class;
    public function getEstudents(){
        return $this -> findAll();
    }
    protected $validationRules = [
        'email' => 'required|valid_email|is_unique[estudiantes.email]'
    ];
    protected $validationMessages = [
        'email' => [
            'required' => 'Email is required',
            'valid_email' => 'Email is not valid',
            'is_unique' => 'Email already exist'
        ]
    ];
}