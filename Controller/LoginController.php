<?php

use Model\Employee as EmployeeModel;

class LoginController extends Controller
{
    public function loginPage()
    {
        $employees = new EmployeeModel;
        $employees = $employees->getEmployee();
        $this->render('Views/login.php', ['employees'=>$employees]);
    }
}
?>