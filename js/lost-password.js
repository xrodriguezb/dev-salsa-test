function loginByCode(){
        let xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState === 4 && this.status === 200){
                if(this.responseText=='success'){
                    alert("Welcome");
                    window.location.href="./change-password.php";
                }
                else{
                    alert(this.responseText);
                    window.location.href="./lost-password.php";
                }
            }
        }
        xmlhttp.open("POST","./dispatchers/login.php",true);
        xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xmlhttp.send("type=by_code");


}
