<?php

namespace App\Controllers;

use App\Models\EstudiantesModel;
use CodeIgniter\Database\Exceptions\DataException;
use Exception;

class Estudiantes extends BaseController
{
    public function index()
    {

        $estudiantesModel = model(EstudiantesModel::class);
        $data = [
            "estudiantes" => $estudiantesModel->paginate(1),
            'pager' => $estudiantesModel->pager
        ];
        return view("estudiantes/view", $data);
    }

    public function create(){
        return view("estudiantes/create");
    }

    public function actionCreate(){
        $estudiantesModel = model(EstudiantesModel::class);
        $data = [
            "first_name" => $this -> request->getVar("first_name"),
            "last_name" => $this -> request->getVar("last_name"),
            "age" => $this -> request->getVar("age"),
            "address" => $this -> request->getVar("address"),
            "codigo" => $this -> request->getVar("codigo"),
            "email" => $this -> request->getVar("email")
        ];
        $data['response'] = $estudiantesModel->insert($data);
        return $this->response->redirect(site_url('/'));
    }

    public function update($id = null){
        $estudiantesModel = model(EstudiantesModel::class);
        $data['currentStudent'] = $estudiantesModel->find($id+0);
        return view('estudiantes/update', $data);
    }

    public function actionUpdate(){
        $estudiantesModel = model(EstudiantesModel::class);
        $id = $this->request->getVar('id');

        $currentStudent = $estudiantesModel->find($id+0);
        $currentStudent->first_name = $this->request->getVar("first_name");
        $currentStudent->last_name = $this->request->getVar("last_name");
        $currentStudent->age = $this->request->getVar("age");
        $currentStudent->address = $this->request->getVar("address");
        $currentStudent->codigo = $this->request->getVar("codigo");
        $currentStudent->email = $this->request->getVar("email");
/*
        $data = [
            "first_name" => $this -> request->getVar("first_name"),
            "last_name" => $this -> request->getVar("last_name"),
            "age" => $this -> request->getVar("age"),
            "address" => $this -> request->getVar("address"),
            "codigo" => $this -> request->getVar("codigo"),
            "email" => $this -> request->getVar("email"),
        ];*/
        //$estudiantesModel->update($id, $data);
        try{
            $estudiantesModel->save($currentStudent);
        }catch(\Throwable $err){
            
        };
        return $this->response->redirect(site_url('/'));

    }

    public function delete($id=null){
        $estudiantesModel = model(EstudiantesModel::class);
        $data['student'] = $estudiantesModel -> delete($id);
        return $this -> response -> redirect(site_url('/'));
    }
}
