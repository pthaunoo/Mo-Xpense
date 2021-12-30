function validation(){
    if(validationreg()==true ){
        return true;
    }
    else{
        return false;
    }
}

function validationreg(){
var fn=document.getElementById("first_name").value;
var ln=document.getElementById("last_name").value;
var e=document.getElementById("email").value;
var u=document.getElementById("username").value;
var p=document.getElementById("password").value;

    if(fn.trim().length==0){
        alert("Enter a First Name");
        return false;
    }
    if(ln.trim().length==0){
        alert("Enter a Last Name");
        return false;
    }
    if(e.trim().length==0 ){
        alert("Enter an email address");
        return false;
    }   
    if(u.trim().length==0 ){
        alert("Enter a Username");
        return false;
    }
    if(p.trim().length<8){
        alert("Enter a password that is greater than 8");
        return false;
    }

    return true;
}

