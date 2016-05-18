<?php
$config = array(
    'valid_teacher' => array(
                array('field'=>'teacher_name', 'label'=> 'Name' ,'rules'=>'required'),
                array('field'=>'teacher_email', 'label'=> 'Email' ,'rules'=>'required'),
                array('field'=>'teacher_password', 'label'=> 'Password' ,'rules'=>'required'),
                array('field'=>'current_institution', 'label'=> 'Current Institution' ,'rules'=>'required'),
                array('field'=>'graduate_institution', 'label'=> 'Graduate Institution' ,'rules'=>'required'),
                array('field'=>'interest_subject', 'label'=> 'Interest Subject' ,'rules'=>'required')
    ),
      'valid_student' => array(
                array('field'=>'user_name', 'label'=> 'Name' ,'rules'=>'required'),
                array('field'=>'user_email', 'label'=> 'Email' ,'rules'=>'required'),
                array('field'=>'user_password', 'label'=> 'Password' ,'rules'=>'required'),
                array('field'=>'user_occupation', 'label'=> 'Occupation' ,'rules'=>'required'),
                array('field'=>'user_country', 'label'=> 'Country' ,'rules'=>'required')

    ),
    'valid_login' => array(
                array('field'=>'type', 'label'=> 'User Type' ,'rules'=>'required'),
                array('field' => 'username', 'label' => 'User ID', 'rules' => 'required'),
                array('field' => 'password', 'label' => 'Password', 'rules' => 'required')
    ),
    
    'valid_forget_password' => array(
                array('field' => 'email', 'label' => 'Email', 'rules' => 'required')
    ),
	
	'lecture_validation' => array(
                array('field' => 'department', 'label' => 'Department', 'rules' => 'required'),
				array('field' => 'department_id', 'label' => 'Course Title', 'rules' => 'required'),
				array('field' => 'lecture_title', 'label' => 'Lecture Title', 'rules' => 'required'),
				array('field' => 'userfile', 'label' => 'Lecture File', 'rules' => 'required')
    ),
	
	'question_validation' => array(
                array('field' => 'question', 'label' => 'Question', 'rules' => 'required'),
				array('field' => 'userfile', 'label' => 'Lecture File', 'rules' => 'required')
    )
    
);
?>
