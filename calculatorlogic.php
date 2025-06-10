<?php

  if($_SERVER["REQUEST_METHOD"]==="POST"){
    if(isset($_POST['weight'])){
        $weight=(float)$_POST['weight'];

    }
    if(isset($_POST['height'])){
        $height=(float)$_POST['height'];

    }

    if($weight&&$height>0){
        $heightInMeters=$height/100;
        $bmi=$weight/($heightInMeters*$heightInMeters);
        $bmi = round($bmi, 2);
    }


    header('Location: calculator.html?bmi=' . urlencode($bmi));//retrive the result and redirect it to the html page by passing it as a urlparameter. first encode it
        exit;//stop executing the script after redirecting it


  } 


