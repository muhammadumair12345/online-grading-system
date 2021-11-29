<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../fontawesome/css/all.min.css" type="text/css">
    <script src="../js/user_data.js"></script>
    <title>Professor Panel</title>
</head>

<body id='user-panel' onload="user_data()">
    <header>
        <div id='bio'>
            <img src="../images/user_avatar.png" alt="">
            <div>
                <span id='user-name'></span>
                <span id='user-id'></span>
            </div>
        </div>
        <nav>
            <a href="./professor_panel.php"><i class="fas fa-home"></i> Home</a>
            <a href="./professor-add-grade.php"><i class="fas fa-user-plus"></i> Add Grade</a>
            <a href="./professor-view-grade.php"><i class="fas fa-eye"></i> View Grade</a>
            <a href="../index.php" onclick="logout()"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </nav>
    </header>
    <div class='card-container'>
        <div class='card' onclick="window.location.href='./professor-add-grade.php'">
            <img src="../images/view-grade.jpg" alt="">
            <div>
                <a href="./professor-add-grade.php"><i class="fas fa-user-plus"></i> Add Grade</a>
            </div>
        </div>
        <div class='card' onclick="window.location.href='./professor-view-grade.php'">
            <img src="../images/bg-image.jpg" alt="">
            <div> <a href="./professor-view-grade.php"><i class="fas fa-eye"></i> View Grade</a></div>
        </div>
    </div>
    <footer>
        &copy 2021
    </footer>
</body>

</html>