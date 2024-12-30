<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./Assets/images/favicon/favicon-16x16.png" type="image/x-icon">
    <link rel="shortcut icon" href="./Assets/images/favicon/favicon-32x32.png" type="image/x-icon">
    <link rel="stylesheet" href="./Assets/css/indexStyles.css">
    <title>CRUD Application</title>
</head>

<body>
    <div class="loader">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>

    <?php



    if ($_SERVER['REQUEST_URI'] == "/basicPHPCRUD/home") {
        require_once "./Assets/controllers/home.php";
    } else {
        echo "Not found 404";
    }
    var_dump($_SERVER['REQUEST_URI']);
    // require_once "./Assets/views/home.view.php";
    // header("location: ./Assets/views/home.view.php");
    ?>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</body>

</html>