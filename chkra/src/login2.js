function myFunction()
{
var username=document.forms["myForm"]["Uname"].value;
var password=document.forms["myForm"]["Pass"].value;
if(username=="admin"&& password=="user")
{
    alert("login successful ");    
window.location.href="login_succ.html";
}
else
{
alert("login failed");
}






}