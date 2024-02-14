



function checkFirstName(){
    let obj = document.querySelector(".firstName");
    firstName = obj.value;
    if(firstName.length == 0){
        error.innerHTML="Please enter your firstname";
    }

}

function signup(){
    let err = document.querySelector(".error");
    err.style.backgroundColor = "red";

    let obj = document.querySelector(".firstName");
    firstName = obj.value;
    if(firstName.length == 0){
        err.innerHTML="Please enter your firstname";
    }
}