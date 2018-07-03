$(function(){

    var inputFile = document.createElement('input');
    inputFile.setAttribute("type", "file");

    $(inputFile).on("change", function(){
        var a = inputFile.files[0];
        var b = /text.*/;

        if (!a.type.match(b)){
            swal('HATA','Sadece TXT Dosyaları','error');
            return;
        }

        var c = new FileReader();
        c.onload = function(){$("#input-list").val(c.result);}
        c.readAsText(a);
    });

    $("#btn-load").click(function(){
        inputFile.click();
    });
    
    $("#btn-draw").click(function(){
        $(".row-prin").addClass("d-none");
        $(".row-repl").addClass("d-none");
        $(".badge-prin-list").empty();
        $(".badge-repl-list").empty();
        $.ajax({
            type: "POST",
            url: "ajax/draw.php",
            dataType: "json",
            data: {"action": "draw", "principal": $("#select-range-1").val(), "replacement": $("#select-range-2").val(), "list": $("#input-list").val()},
            success: function(rt){
                if (rt.a != 200){
                    swal(rt.b, rt.c, rt.d);
                }else{
                    if (rt.e){
                        $(".row-prin").removeClass("d-none");
                        var prin = JSON.parse(rt.g);
                        $.each(prin, function(i, item){
                            $(".badge-prin-list").append("<span class='badge badge-primary badge-list mr-1'>" + item + "</span>");
                        });
                    }
                    if (rt.f){
                        $(".row-repl").removeClass("d-none");
                        var repl = JSON.parse(rt.h);
                        $.each(repl, function(i, item){
                            $(".badge-repl-list").append("<span class='badge badge-primary badge-list mr-1'>" + item + "</span>");
                        });
                    }
                }
            }
        });
    });

});