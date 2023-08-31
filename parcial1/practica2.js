    $(document).ready(function(){
        $("#boton1").click(function(e){
            alert("evento click")
        });

        $("#div1").on("dblclick", function(){
            alert("evento doble click")
        });

        $("#input1").focus(function(){
            console.log("evento focus al dar click en input")
        });

        $("#texto1").hover(function(){
                $("#texto1").css("background-color","red");
            }, function(){
                $("#texto1").css("background-color","white");    
            }
        );

        $("#input2").keydown(function (e) {
            console.log("keydown")
            $("#input2").css("background-color","orange");
        });

    });