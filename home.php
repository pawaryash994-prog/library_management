<?php

include 'db.php';

session_start();
 if (!isset($_SESSION['name'])) {
    header('Location: login.php');
    exit;
}
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
        crossorigin="anonymous" />
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>

        <nav
            class="navbar navbar-expand-sm navbar-light bg-light">
            <div class="container">
                <h4 class="mb-0 me-5"> Hello <?php echo $_SESSION['name'] ?></h4>

                <div class="collapse navbar-collapse" id="collapsibleNavId mx-4">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item ">
                        <li class="nav-item"><a class="nav-link" href="./insert.php">ADD</a></li>
                        <li class="nav-item"><a class="nav-link" href="./delete.php">DELETE</a></li>
                        <li class="nav-item"><a class="nav-link" href="./update.php">UPDATE</a></li>
                        <li class="nav-item"><a class="nav-link" href="./show.php">SHOW</a></li>
                        </li>

                    </ul>
                    <form class="d-flex my-2 my-lg-0" action="logout.php" method="post">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </nav>



    </main>
    <footer>
        <!-- place footer here -->
    </footer>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>