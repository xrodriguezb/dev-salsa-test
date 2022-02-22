document.addEventListener('DOMContentLoaded', function() {
    document.getElementById("updateForm").addEventListener("submit", function(event){
        event.preventDefault();
        sendForm();
    });
});


function sendForm(){
    let xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200){
            if(this.responseText=='success'){
                alert("Data was updated successfully");
                window.location.href="./user.php";
            }
            else{
                alert(this.responseText);
            }
        }
    }

    let new_password = document.getElementById("new_password").value;
    let confirm_new_password= document.getElementById("confirm_new_password").value;

    xmlhttp.open("POST","./dispatchers/update-password.php",true);
    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xmlhttp.send("new_password=" + new_password + "&confirm_new_password=" + confirm_new_password);

}