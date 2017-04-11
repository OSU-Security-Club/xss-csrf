$(document).ready(function(){
    
});


$(document).on("click", '#signin', function(){

    myusername = $("#username").val();
    mypassword = $("#password").val();

    console.log(mypassword);

    $.post("signin.php",
    {
        username: myusername,
        password: mypassword
    },
    function(data, status){
        alert("Data: " + data + "\nStatus: " + status);
    });
});

$(document).on("click", '#showsocial', function(){

    $.get("xsrf.php",
    {

    },
    function(data, status){
        $("#social").empty();
        $("#social").append(data);
        //alert("Data: " + data + "\nStatus: " + status);
    });
});

