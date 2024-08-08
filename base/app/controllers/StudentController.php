<?php
namespace App\Controllers;
use App\Models\Student;
class StudentController extends BaseController{
protected $student;
public function __construct()
{
    $this->student = new Student();

}
    public function getStudent() {
        $students = $this->student->getListStudent();
        return $this->render('student.index',compact('students'));
    }
    public function create(){
        return $this->render('student.create');
    }
    public function store(){
        if(isset($_POST['btn-submit'])){
            // validate
            $error = []; // chữa lỗi
            if(empty($_POST['name'])){
                $error[] = "Bạn phải nhập tên";
            }
            if(empty($_POST['year_of_birth'])){
                $error[] = "Bạn phải nhập năm sinh";
            } if(empty($_POST['phone_number'])){
                $error[] = "Bạn phải nhập sdt";
            }
            if(count($error)){
                redirect('errors', $error, 'create');
            }
            else{
                $check = $this->student->insertData(null, $_POST['name'], $_POST['year_of_birth'],$_POST['phone_number']);
                if($check){
                    redirect('success', 'Thêm thành công', 'create');
                }else{
                    redirect('errors', 'Thêm thất bại', 'create');
                }

            }
        }
    }
    public function edit($id){
        $listStudent = $this->student->idStudent($id);
        return $this->render('student.edit',compact('listStudent'));
    }
    public function update($id){
        if($_POST['sua']){
            $error = [];
            // rỗng
            if(empty($_POST['name'])){
                $error[] = 'Bạn vui lòng nhập tên';

            }
            $route = 'edit/'.$id;
            if(count($error)>=1){
                redirect('errors',$error,$route);
            }else{
                $check = $this->student->updateStudent(null, $_POST['name'], $_POST['year_of_birth'],$_POST['phone_number']);
                if($check){
                    redirect('success','Chỉnh sửa thành công',$route);
                }
            }
        }
    }
    public function delete($id){
        $check = $this->student->updateStudent(null, $_POST['name'], $_POST['year_of_birth'],$_POST['phone_number']);
                if($check){
                    redirect('success','Xóa thành công','index');
                }
    }
}