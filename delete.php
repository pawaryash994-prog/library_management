<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS v5.3.8 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous" />
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>

        <div class="container col-5 border-2 rounded-3 p-5 shadow my-5">

        <h2 class="text-center">Delete form</h2>

        <form action="" method="POST">

        <div class="mb-3">
            <label for="" class="form-label"> ID<img
                src="image source"
                class="img-fluid rounded-top"
                alt=""
            />
            </label>
            <input
                type="text"
                class="form-control"
                name="id"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
        </div>
        
        

        <div class="container text-center">
            
         <button
            type="submit"
            class="btn btn-primary"
        >
            Submit
        </button>
        </div>
        
        
        </form>

        </div>


    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Bundle (includes Popper) -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>


<?php

include 'db.php';

if($_SERVER["REQUEST_METHOD"]==="POST"){

    $id = $_POST['id'];


    $sql = $conn->prepare("DELETE FROM library_manag1 WHERE id = ?");

    $sql->bind_param("i", $id);

    if($sql ->execute()){

       echo "<script>
       alert('Data deleted successfully');
       window.localhost.href='./home.php';
       </script>";
       
    }else{
       echo "<script>
       alert(' Error Data not deleted ');
       </script>";
    }
}




?>