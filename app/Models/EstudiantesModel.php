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
        'email' => 'required|valid_email|is_unique[estudiantes.email]',
        'first_name' => 'required',
        'last_name' => 'required',
        'age' => 'required',
        'codigo' => 'required|is_unique[estudiantes.codigo]',
        'address' => 'required',
    ];
    protected $validationMessages = [
        'email' => [
            'required' => 'Email is required',
            'valid_email' => 'Email is not valid',
            'is_unique' => 'Email already exist'
        ],
        'first_name' => [
            'required' => "First name is required",
        ],
        'last_name' => [
            'required' => "Last name is required",
        ],
        'age' => [
            'required' => "Age is required",
        ],
        'codigo' => [
            'required' => "Codigo is required",
            'is_unique' => "Codigo already exist"
        ],
        'address' => [
            'required' => "Address is required",
        ],
    ];
}