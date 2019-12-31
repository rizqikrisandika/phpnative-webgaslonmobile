firebase.auth().onAuthStateChanged(function(user){
    if(user){
        document.getElementById("user_div").style.display = "block";
        document.getElementById("login_div").style.display = "none";
    }else{
        document.getElementById("user_div").style.display = "none";
        document.getElementById("login_div").style.display = "block";
    }
});

function login(){
    var userEmail = document.getElementById('email').value;
    var userPass = document.getElementById('password').value;
    
    firebase.auth().signInWithEmailAndPassword(userEmail,userPass).catch(function(error){
        var errorCode = error.code;
        var errorMessage = error.message;

        window.alert("Error " + errorMessage);
    });
}