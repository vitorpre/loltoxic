$(document).ready(function(){

    var url = "/loltoxic/public/aprovacao/denuncia";

    //create new task / update existing task
    $(".btnAprovacao").on("click", function (e) {
        
        e.preventDefault(); 

        var ehAprovar = $(this).data("eh-aprovar");

        var formData = {
            ehAprovar: ehAprovar
        };

        var denuncia_id = $(this).data("id-denuncia");

        var type = "PUT"; //for updating existing resource
        var my_url = url + '/' + denuncia_id;


        $.ajax({

            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            type: type,
            url: my_url,
            data: formData,
            dataType: 'json',
            success: function (data) {
                
                $("button[data-id-denuncia='" + denuncia_id + "'][data-eh-aprovar='2']").removeClass("btn-success");
                $("button[data-id-denuncia='" + denuncia_id + "'][data-eh-aprovar='3']").removeClass("btn-danger");
                
                if(ehAprovar == "2")
                {
                    $("button[data-id-denuncia='" + denuncia_id + "'][data-eh-aprovar='2']").addClass("btn-success");
                }
                else if(ehAprovar == "3")
                {                    
                    $("button[data-id-denuncia='" + denuncia_id + "'][data-eh-aprovar='3']").addClass("btn-danger");
                }

            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
});