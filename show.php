<?php

include 'db.php';
$result = $conn ->query("select * from library_manag1");

?>


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
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
            <h2 class="mt-3 ">Linrary management data</h2>
            <br><br>

        <div class="table-responsive col-5" >

            <table class="table table-bordered table-striped text-center ">
                <thead class="table-dark">
                    <tr>
                        <td scope="col">id</td>
                        <td scope="col">Book_title</td>
                        <td scope="col">Author</td>
                        <td scope="col">Category</td>
                        <td scope="col">Price</td>
                        <td scope="col">Quantity</td>
                    </tr>
                </thead>
                <tbody >

                    <?php while($row =$result->fetch_assoc()){?>
                    <tr>
                    <td><?php echo $row ['id']?></td>
                    <td><?php echo $row ['booktitle']?></td>
                    <td><?php echo $row ['author']?></td>
                    <td><?php echo $row ['category']?></td>
                    <td><?php echo $row ['price']?></td>
                    <td><?php echo $row ['quantity']?></td>
                    </tr>   

                    <?php }?>
                 
                </tbody>
            </table>
        </div>
        
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
