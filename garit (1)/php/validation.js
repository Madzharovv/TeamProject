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
        $('#cardid-error').text('Enter a Customer Card ID');
    } else {
        $('#cardid-error').text('');
    }

    if ($('#fullname').val() === "") {
        vCheck = false;
        $('#fullname-error').text('Enter Fullname ');
    } else {
        $('#fullname-error').text('');
    }

    if ($('#mobilenumber ').val() === "") {
        vCheck = false;
        $('#mobilenumber-error').text('Enter mobile number');
    } else {
        $('#mobilenumber-error').text('');
    }

    if ($('#email').val() === "") {
        vCheck = false;
        $('#email-error').text('Enter email');
    } else {
        $('#email-error').text('');
    }

    if ($('#postcode').val() === "") {
        vCheck = false;
        $('#postcode-error').text('Enter User name');
    } else {
        $('#postcode-error').text('');
    }

    if ($('#housenumber').val() === "") {
        vCheck = false;
        $('#housenumber-error').text('Enter house number');
    } else {
        $('#housenumber-error').text('');
    }

    if ($('#cardissuedate').val() === "") {
        vCheck = false;
        $('#cardissuedate-error').text('Enter the card issue date ');
    } else {
        $('#cardissuedate-error').text('');
    }


    if ($('#customerfaxnumber').val() === "") {
        vCheck = false;
        $('#customerfaxnumber-error').text('Enter customer fax number');
    } else {
        $('#customerfaxnumber-error').text('');
    }
    return vCheck;
}
//New Invoice validation//
function CreateCustomervalidation(){

    var vCheck =true;
    if ($('#invoiceid').val() === "") {
        vCheck = false;
        $('#username-error').text('Enter a Customer Card ID');
    } else {
        $('#username-error').text('');
    }

    if ($('#address').val() === "") {
        vCheck = false;
        $('#password-error').text('Enter Fullname ');
    } else {
        $('#password-error').text('');
    }

    if ($('#labourcost ').val() === "") {
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