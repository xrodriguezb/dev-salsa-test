document.addEventListener('DOMContentLoaded', function() {
    document.getElementById("loginForm").addEventListener("submit", function(event){
        event.preventDefault();
        sendForm();
    });
});


function sendForm(){

    let xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200){
            if(this.responseText=='success'){
                alert("Welcome");
                window.location.href="./user.php";
            }
            else{
                alert(this.responseText);
            }
        }
    }

    let username = document.getElementById("username").value;
    let password= document.getElementById("password").value;

    xmlhttp.open("POST","./dispatchers/login.php",true);
    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xmlhttp.send("username=" + username + "&password="+password);

}