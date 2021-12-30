function validate(){
    if(validateblank()==true){
        return true;
    }
    else{
        return false;
    }
}

function validateblank(){
var fn=document.getElementById("fisrtname").value;
var ln=document.getElementById("lastname").value;
var e=document.getElementById("email").value;
var p=document.getElementById("username").value;
var cp=document.getElementById("password").value;

if((fn.trim().length==0 || fn<1 || fn>0)&&(fn.trim().length<3)){
    alert("Enter a First Name with alphabets only");
    return false;
}
if((ln.trim().length==0 || ln<1 || ln>0)&&(ln.trim().length<3)){
    alert("Enter a Last Name with alphabets only");
    return false;
}
if((ln.trim().length==0 || ln<1 || ln>0)&&(ln.trim().length<3)){
    alert("Enter a Username");
    return false;
}
if(e.trim().length==0 ){
    alert("Enter an email address");
    return false;
}
if(p.trim().length<8){
    alert("Enter a password that is greater than 8");
    return false;
}

return true;
}