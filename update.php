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

        <h2 class="text-center">Update Form</h2>

        <form action="" method="POST">

        <div class="mb-3">
            <label for="" class="form-label">ID</label>
            <input
                type="text"
                class="form-control"
                name="id"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
        </div>
        
       
        
        <div class="mb-3">
            <label for="" class="form-label">Price</label>
            <input
                type="text"
                class="form-control"
                name="price"
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
    $price = $_POST['price'];
    

    $sql = $conn->prepare("UPDATE library_manag1 SET price=? WHERE id=?");

    $sql->bind_param("ii",$price,$id);

    if($sql ->execute()){

        echo"<script>
        alert('Data updated successfully'); 
       
        windows.localhost.href='./home.php';
         </script>";
         

    }else{
        echo"<script>
        alert('Data not  updated '); 
        </script>";
        exit;

    }
}




?>