<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\StudentsModel;

class StudentsController extends BaseController
{
    public function index()
    {

        return view('students/student-list');
    }

    public function storeStudent()
    {
        $students = new StudentsModel();
        $data = [
            'student_name' => $this->request->getPost('student_name'),
            'student_email' => $this->request->getPost('student_email'),
            'student_phone_no' => $this->request->getPost('student_phone_no'),
            'student_course' => $this->request->getPost('student_course'),
        ];
        $students->save($data);
        $data = ['status' => 'Student Added Successfully.'];
        return $this->response->setJSON($data);
    }

    public function loadStudent()
    {
        $students = new StudentsModel();
        $data['students'] = $students->findAll();
        return $this->response->setJSON($data);
    }

    public function viewStudent()
    {
        $students = new StudentsModel();
        $student_id = $this->request->getPost('student_id');
        $data['students'] = $students->find($student_id);
        return $this->response->setJSON($data);
    }

    public function editStudent()
    {
        $students = new StudentsModel();
        $student_id = $this->request->getPost('student_id');
        $data['students'] = $students->find($student_id);
        return $this->response->setJSON($data);
    }

    public function updateStudent()
    {
        $students = new StudentsModel();
        $student_id = $this->request->getPost('id');
        $data = [
            'student_name' => $this->request->getPost('student_name'),
            'student_email' => $this->request->getPost('student_email'),
            'student_phone_no' => $this->request->getPost('student_phone_no'),
            'student_course' => $this->request->getPost('student_course'),
        ];
        $students->update($student_id, $data);
        $message = [
            'status' => 'Student Updated Successfully.'
        ];
        return $this->response->setJSON($message);
    }

    public function deleteStudent()
    {
        $students = new StudentsModel();
        $students->delete($this->request->getPost('student_id'));
        $message = [
            'status' => 'Student Deleted Successfully.'
        ];
        return $this->response->setJSON($message);
    }
}
