<?php
if(!isset($_GET['page'])){
    header('location:?page=dashboard');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap -->
</head>
<body>
    
    <div>
        <ul>
            <li><a href="?page=dashboard">dashboard</a></li>
            <li><a href="?page=kategori">kategori</a></li>
        </ul>
    </div>
    <h2>sidebar</h2>
    <?php 
        include $_GET['page'].'.php';
    ?>
    <footer>ini footer</footer>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script src="script/<?php echo $_GET['page'] ?>.js"></script>
</body>
</html>