<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../fontawesome/css/all.min.css" type="text/css">
    <script src="../js/user_data.js"></script>
    <title>Add Grades</title>
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
            <a href="../index.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </nav>
    </header>
    <div class='form-container'>
        <form method="post" onsubmit="add_grades()" id='login-form'>
            <div class='heading'>
                <h2>Add Grades</h2>
            </div>
            <span class="error-header"></span>

            <div class='total-marks-container'>
                <h4>Total Marks: <span id='total_marks'>0.00</span></h4>
            </div>

            <div>
                <select name="courses" id="courses">
                    <option value="database">Database</option>
                    <option value="se">SE</option>
                </select>
                <select name="students" id="students">
                    <option value="1">1</option>
                    <option value="2">2</option>
                </select>
            </div>

            <div>
                <input type="number" name="quiz_marks" id="quiz_marks" placeholder="Enter Quiz Marks" min=0 max=30 required>
                <label for='quiz_marks' class='grade-label'>
                    <h2>/30</h2>
                </label>
            </div>
            <span class="error-message"></span>


            <div>
                <input type="number" name="assignment_marks" id="assignment_marks" placeholder="Enter Assignment Marks" min=0 max=10 required>
                <label for='assignment_marks' class='grade-label'>
                    <h2>/10</h2>
                </label>
            </div>
            <span class="error-message"></span>

            <div>
                <input type="number" name="midterm_marks" id="midterm_marks" placeholder="Enter Midterm Marks" min=0 max=20 required>
                <label for='midterm_marks' class='grade-label'>
                    <h2>/20</h2>
                </label>
            </div>
            <span class="error-message"></span>

            <div>
                <input type="number" name="finalterm_marks" id="finalterm_marks" placeholder="Enter Finalterm Marks" min=0 max=40 required>
                <label for='finalterm_marks' class='grade-label'>
                    <h2>/40</h2>
                </label>
            </div>
            <span class="error-message"></span>

            <div class='grade-btn'>
                <input type="submit" value="Add Grades" class="primary" />
                <input type="button" onclick="window.location.href='./professor_panel.php'" value="Cancel" class="primary" />
            </div>
        </form>
    </div>
    <footer>
        &copy 2021
    </footer>
</body>

</html>