<?php
include("conn.php");
if(isset($_GET['editid'])){
    $id= $_GET['editid'];
    $sql= "SELECT * FROM `list` WHERE id='$id'";
    $result= mysqli_query($conn,$sql);
   
}
?>
<!doctype html>
<html lang="en">
    <head>
        <title>update</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <!-- font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

        
    </head>
    <style>
        :root{
            --bg-n-: radial-gradient( circle 975px at 2.6% 48.3%,  rgba(0,8,120,1) 0%, rgba(95,184,224,1) 99.7% );
        }
        *{
           
 
}

        
        body{
            background: var(--bg-n-);
           background-size: cover;
           background-repeat: no-repeat;
           background: black;
          
        }
        .container{
            width: 50%;
            margin: auto;
            
            /* border: 1px solid red; */
        }
        header{
            position: fixed;
            width: 48%;
            /* border: 1px solid red; */
            margin: auto;
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
            padding: 10px 20px;
            background-color:royalblue;
            color: whitesmoke;
            font-family: "Dancing Script", cursive;
  font-optical-sizing: auto;
  font-style: normal;
            /* background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(100,43,115,1) 0%, rgba(4,0,4,1) 90% ); */

        }
        main{
            position: fixed;
            height: 500px;
            /* width: 100%;  */
            width: 48%;
            overflow-y: scroll;
            /* border: 1px solid red; */
            margin-top: 74px;
            padding: 10px 20px;
            background: url('bg.avif');
            background-repeat: no-repeat;
            background-size: cover;
            /* background-attachment: fixed; */
            background-position: center;

        }
        main::-webkit-scrollbar{
            display: none;
        }
        .input-con input{
            padding: 10px 20px;
            width: 90%;
            border: none;
            border-radius: 10px;
        }
        .btn{
            padding: 11px 13px;
        }
        .todo_con{
            width: 100%;
            height: auto;
            /* background: white; */
            border-radius: 10px;
          
            margin-top: 10px;
           
            
          
        }
        .to{
            display: flex;
            justify-content: space-between;
            background: white;
            margin-top: 20px;
            padding: 10px 20px;
            border-radius: 10px;
           
        }
    </style>

    <body>
        <div class="container">
        <header>
            <h1>Todo_list</h1>
        </header>
        <main>
         <div class="input-con">
            <form action="edit.php" method="post">
                <?php
                $id=$_GET['editid'];
                $ssl="SELECT * FROM `list` WHERE id='$id'";
                $rr=mysqli_query($conn,$ssl);
                while($row=mysqli_fetch_assoc($rr)){

    ?>
            
                <!-- Update the hidden input field with the value of the ID -->
               <input type="text" name="id" value="<?php echo $id; ?>" hidden>

            <input type="text" name="userinput" value="<?php echo $row['work'];?>">
            <button class="btn btn-primary" name="submit">Go</button>
            <?php
                }
            ?>

            </form>
         </div>
         

        </main>
        <footer>
           
        </footer>
        </div>

        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
<?php
if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $data=mysqli_real_escape_string($conn,$_POST['userinput']);

    $sql="UPDATE `list` SET `work`='$data' WHERE id='$id'";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo '<meta http-equiv="refresh" content="0; url=todo.php"/>';
    
}
}

?>