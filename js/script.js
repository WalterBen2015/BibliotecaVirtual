function showCreateAccount() {
    document.getElementById('login-container').style.display = 'none';
    document.getElementById('create-account-container').style.display = 'block';
}

function showLogin() {
    document.getElementById('create-account-container').style.display = 'none';
    document.getElementById('login-container').style.display = 'block';
}

document.getElementById('create-account-form').addEventListener('change', function() {
    const role = document.querySelector('input[name="role"]:checked').value;
    if (role === 'Alumno') {
        document.getElementById('alumno-fields').style.display = 'block';
        document.getElementById('profesor-fields').style.display = 'none';
    } else if (role === 'Profesor') {
        document.getElementById('alumno-fields').style.display = 'none';
        document.getElementById('profesor-fields').style.display = 'block';
    }
});