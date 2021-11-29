async function login_validation() {
    const id = document.getElementById('id');
    const password = document.getElementById('password');
    const error = document.getElementsByClassName('error-message');
    const error_header = document.getElementsByClassName('error-header');

    if (id.value !== "" && password.value !== "" && !isNaN(id.value) && !isNaN(password.value)) {
        error[0].innerHTML = '';
        error[1].innerHTML = '';
        error_header[0].innerHTML = '';

        const response = await fetch('./php/validation/login_validation.php?id=' + id.value);
        const data = await response.json();

        if (data !== null) {
            localStorage.setItem('User', JSON.stringify(data));
            if (data.type === 'professor' && password.value === data.id) {
                id.value = '';
                window.location.href = "./views/professor_panel.php";
            }
            else if (data.type === 'student' && password.value === data.id.substr(data.id.length - 4)) {
                id.value = '';
                window.location.href = "./views/student_panel.php";
            }
            else {
                error_header[0].innerHTML = 'Invalid User ID and Password';
            }
        }
        else {
            error_header[0].innerHTML = 'Invalid User ID and Password';
        }
    }
    else {
        if (id.value === "") {
            error[0].innerHTML = 'Please Enter Your ID';
        }
        else if (isNaN(id.value)) {
            error[0].innerHTML = 'Please Enter The Numeric Value';
        }
        else {
            error[0].innerHTML = '';
        }
        if (password.value === "") {
            error[1].innerHTML = 'Please Enter Your Password';
        }
        else if (isNaN(password.value)) {
            error[1].innerHTML = 'Please Enter Valid Password';
        }
        else {
            error[1].innerHTML = '';
        }
    }
}