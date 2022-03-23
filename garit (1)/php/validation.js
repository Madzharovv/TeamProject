//login valiudation//
function LoginValidation() {
    var vCheck = true;
    if ($('#username').val() === "") {
        vCheck = false;
        $('#username-error').text('Enter User name');
    } else {
        $('#username-error').text('');
    }
    if ($('#password').val() === "") {
        vCheck = false;
        $('#password-error').text('Enter Password');
    } else {
        $('#password-error').text('');
    }
    return vCheck;
}
//customer validation//
function CreateCustomervalidation(){

    var vCheck =true;
    if ($('#cardid').val() === "") {
        vCheck = false;
        $('#username-error').text('Enter a Customer Card ID');
    } else {
        $('#username-error').text('');
    }

    if ($('#fullname').val() === "") {
        vCheck = false;
        $('#password-error').text('Enter Fullname ');
    } else {
        $('#password-error').text('');
    }

    if ($('#mobilenumber ').val() === "") {
        vCheck = false;
        $('#username-error').text('Enter mobile number');
    } else {
        $('#username-error').text('');
    }

    if ($('#email').val() === "") {
        vCheck = false;
        $('#username-error').text('Enter email');
    } else {
        $('#username-error').text('');
    }

    if ($('#postcode').val() === "") {
        vCheck = false;
        $('#username-error').text('Enter User name');
    } else {
        $('#username-error').text('');
    }

    if ($('#housenumber').val() === "") {
        vCheck = false;
        $('#username-error').text('Enter house number');
    } else {
        $('#username-error').text('');
    }

    if ($('#cardissuedate').val() === "") {
        vCheck = false;
        $('#username-error').text('Enter the card issue date ');
    } else {
        $('#username-error').text('');
    }


    if ($('#customerfaxnumber').val() === "") {
        vCheck = false;
        $('#username-error').text('Enter customer fax number');
    } else {
        $('#username-error').text('');
    }
    return vCheck;
}