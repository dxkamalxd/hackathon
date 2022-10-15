<?php
    if(isset($_POST['send'])){
      $name = $_POST['name'];
      $liv = $_POST['liv'];
      $phone= $_POST['phone'];
      $email = $_POST['email'];
      $jobs = $_POST['jobs'];
      echo  $name ."<br>".  $liv ."<br>". $phone."<br>".$email."<br>".$jobs;
    }
