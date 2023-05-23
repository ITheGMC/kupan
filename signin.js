function subm() {
    var button = document.getElementById('sbm');
    var username = documen.getElementById('fnaa').value;
    var email = document.getElementById('mall').value;
    var PasswordOne = document.getElementById('powd').value;
    var PasswordTwo = document.getElementById('pawdie').value;

    if(username.value == "" && PasswordOne.value == "") {
        alert ('should not be empty');
    } else {
        alert('thanks');
    }
}



function validate_equi() {
    var PasswordOne = document.getElementById("powd").value;
    var PasswordTwo = document.getElementById('pawdie').value;

    if (PasswordOne.value == PasswordTwo.value) {
 
    }
    else {
        alert ("Passwords Must be filled and with same values!");
    }
    if (PasswordOne && PasswordTwo !== "") {
        
    }
    else {
        alert("Fields Should not be empty");
    }
}
function oplogin() {
    window.open("login.html", "_blank");
    alert("hi");
}