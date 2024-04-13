<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP practice</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<style>
    .screen{
        height: 200px;
        border: 1px solid red;
        width: 210px;
        padding: 20px 10px;
        text-align: right;
    }
    .btn{
        padding: 10px 20px;
        margin-bottom: 5px;
    }
</style>
<body>
    <h1>PHP PRACTICE</h1>

    <div class="cal_container">
    <div class="screen">
        <?php
         
        ?>
    </div>
    <div class="btns">
        <form action="index.php" method="post"></form>
        <button class="btn btn-secondary" name="one">1</button>
        <button class="btn btn-secondary" name="two">2</button>
        <button class="btn btn-secondary" name="three">3</button>
        <button class="btn btn-secondary" name="four">4</button>
        <br>
        <button class="btn btn-info" name="sub">-</button>
        <button class="btn btn-info" name="add">+</button>
        <button class="btn btn-info" name="div">/</button>
        <button class="btn btn-info" name="multi">*</button>
        <br>
        <button class="btn btn-success" name="cut">C</button>
        <button class="btn btn-danger" name="clear">AC</button>
        <button class="btn btn-primary" name="equal">=</button>




    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php





// $counting=1;
// while($counting<=10){
//     echo $counting.'<br>';
//     $counting++;
// }

// for($a=1;$a<=10;$a++){          ====================this is how looop work in php==================>>>
//     echo $a;echo '<br>';        <<<<==================================================================
// }

// for($a=1;$a<=10;$a++){
//   $c=$a*2;                    
//   echo $c.'<br>';

// }

// $arr=array(1,2,3,4);
// foreach($arr as $value){
//     echo $value.'<br>';
// }

// function cal($a,$b){
//     $c=$a+$b;
//     return $c;
// }                                     ===================this is function=================>>>>
// echo cal(10,4);                       <<<<<<==================================================

// function sum(...$add){
//         $a=0;
//         foreach($add as $num){
//             $a+=$num;
//         }
//         return $a;
       
// }
// echo sum(3,8,8,9);

// $arr= array("name"=>"simran", "age"=>21, "city"=>"delhi", "Education"=>"BA");
// foreach($arr as $key=> $value){
//     echo $key ." : ". $value . "<br>"; ======================================assocative-array===>>
// }                                      <<<<<<<<==================================================







?>
