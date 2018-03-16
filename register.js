function clicked()
{
    var x=document.getElementById('pass').value;
    var y =document.getElementById('repass').value;
    if(x!=y)
    {
        y="";
        alert("password doesn't match");
    }

}