
function LoginValidation() {
    var vCheck = true;
    if ($('#login-username').val() === "") {
        vCheck = false;
        $('#login-username-error').text('Enter User name');
    } else {
        $('#login-username-error').text('');
    }
    if ($('#login-password').val() === "") {
        vCheck = false;
        $('#login-password-error').text('Enter Password');
    } else {
        $('#login-password-error').text('');
    }
    return vCheck;
}