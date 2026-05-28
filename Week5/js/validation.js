

function validateForm(){

    // Get input values
    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;

    // Check empty fields
    if(username === "" || password === ""){

        alert("Please fill all fields!");

        return false;
    }

    return true;
}
