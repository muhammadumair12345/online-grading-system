function user_data() {
    if (localStorage.getItem('User')) {
        const data = JSON.parse(localStorage.getItem('User'));
        document.getElementById('user-name').innerHTML = data.type.toUpperCase() + ' ID: ';
        document.getElementById('user-id').innerHTML = data.id;
    }
    else {
        document.getElementById('user-name').innerHTML = 'USER' + ' ID: ';
        document.getElementById('user-id').innerHTML = '0000000';
        window.location.href = '.././index.php';
    }
}

function logout() {
    localStorage.removeItem('User');
}

async function add_grades() {

}

