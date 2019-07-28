
$("#loginform").submit(function(e){
    e.preventDefault();
    var username = $("#username").val();
    var password = $("#password").val();
    
    $("#flash_message").empty(); 

    if(username == "" && password == ""){
     $("#flash_message").append("<div class='alert alert-danger'>" + 
      "Both fields are required" + 
    "</div>");
    }

    if(username =="admin" && password =="admin"){
        window.location.href="Admin/index.php";
    }else{
        $("#flash_message").append("<div class='alert alert-danger'>" + 
        "Incorrect Username and Password" + 
      "</div>");
    }
});

