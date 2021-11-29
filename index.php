<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css" type="text/css">
    <script src="./js/login_validation.js"></script>
    <title>Login</title>
</head>

<body id='user-panel'>
    <header>
        <h1 style="flex-grow:1;text-align:center">Online Grading System</h1>
    </header>
    <div class='form-container'>
        <form method=" post" id='login-form'>
            <div class='heading'>
                <h2>Login Form</h2>
            </div>
            <span class="error-header"></span>
            <div>
                <label for="id"><i class="fas fa-user fa-lg"></i></label>
                <input type="text" name="id" id="id" placeholder="Enter Your User ID">
            </div>
            <span class="error-message"></span>
            <div>
                <label for="password"><i class="fas fa-unlock fa-lg"></i></label>
                <input type="password" name="password" id="password" placeholder="Enter Your Password">
            </div>
            <span class="error-message"></span>
            <div>
                <input type="button" onclick="(login_validation())" value="Login" class="primary" />
            </div>
        </form>
    </div>
    <footer>
        &copy 2021
    </footer>
</body>

</html>