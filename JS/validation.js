function validationreg(){
    if(blankregr()==true){
        return true;
    }
    else{
        return false;
    }
}

function blankreg(){
var fn=document.getElementById("first_name").value;
var ln=document.getElementById("last_name").value;
var e=document.getElementById("email").value;
var u=document.getElementById("username").value;
var p=document.getElementById("password").value;

    if(fn.trim().length==0){
        alert("Please enter First Name");
        return false;
    }
    if(ln.trim().length==0){
        alert("Please enter Last Name");
        return false;
    }
    if(e.trim().length==0 ){
        alert("Please enter email address");
        return false;
    }   
    if(u.trim().length==0 ){
        alert("Please enter Username");
        return false;
    }
    if(p.trim().length<8){
        alert("Password requirement to be at least 8 characters");
        return false;
    }

    return true;
}

function validationlogin(){
    if(loginblank()==true ){
        return true;
    }
    else{
        return false;
    }
}
function loginblank(){
    var us=document.getElementById("username").value;
    var pe=document.getElementById("password").value;
    
        if(us.trim().length==0 ){
            alert("Enter a Username");
            return false;
        }
        if(pe.trim().length==0){
            alert("Enter a password that is greater than 8");
            return false;
        }
    
        return true;
    }
