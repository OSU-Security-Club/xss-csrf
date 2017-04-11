$(document).ready(function(){
    console.log("in");
    get_rows();
});

function get_rows(){
    $.get("query.php", 
        {
            blank: "nothing"
        }, 
    function(data, status){
        //alert("Data: " + data + "\nStatus: " + status);
        $("#mytable").empty();
        $("#mytable").append(data);
    });
}

$(document).on("click", 'button', function(){
    mycomment = $("#mycomment").val();
    //console.log(mycomment);
    $.post("query.php",
    {
        comment: mycomment
    },
    function(data, status){
        //alert("Data: " + data + "\nStatus: " + status);
        $.ajax({url: "query.php?blank=nothing", success: function(result){
        $("#mytable").empty();
        $("#mytable").append(result);
        console.log(result);
        }});
    });

    
    //get_rows();
});