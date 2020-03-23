<?php
    include('autoload.php');

    $form = new Form([
         'method' => 'POST',
         'action' => 'form-handler.php'
    ]);

    // $form2 = new Form();

    // $lf = new LoginForm([]);

    $form->textbox([
         'name' => 'fullName', 
         'label' => 'Full name', 
         'required' => true, 
         'length' => 100,
         'value' => 'Samir Aly'
    ]);

    $form->select([ 
         'name' => 'gender', 
         'options' => [
             'm' => 'Male', 
             'f' => 'Female'
         ]
    ]);

    $form->email([ 
         'name' => 'email', 
         'required' => true 
    ]);

    // also, create $form->radio(), 
    // $form->textarea(), 
    // $form->submit(), 
    // $form->button(), 
    // $form->hidden()

    //echo Bootstrap::header();
    echo $form->html();
    //echo Bootstrap::footer();
