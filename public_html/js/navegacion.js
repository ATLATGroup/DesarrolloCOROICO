function cargar(){
            var url="../universo4.html"
            $.ajax({   
                type: "POST",
                url:url,
                data:{},
                success: function(datos){       
                    $('#row').html(datos);
                }
            });
        }