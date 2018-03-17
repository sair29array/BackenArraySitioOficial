var app = new Vue({
        el: '#vlogin',
    data: {
        password: '', // initialise this to an empty string
        login: '', // same thing
    mostrar_mensajes_de_alerta_o_errores: "",
    cargando: ''
       
    },

    methods: {
        enviar() {

            
            // make ajax request and pass the data. I'm not certain how to do it with axios but something along the lines of this
        var formData = new FormData();
        formData.append('login', this.login);
        formData.append('pass',this.password);
                axios.post("config/crud_login.php?action=read",formData)
                        .then(function(response) {
            
            console.log(response);
                datos = response.data;
                
        if (datos.resul  == "0")
          {
                   app.mostrar_mensajes_de_alerta_o_errores = "¡Oops! los datos no coinciden.";

//                   alertify.error("Datos incorrectos");
            }
        else if (datos.resul  == "1")
         {
                app.cargando ="Cargando...";
       
                var page = "../[array]/?:=iniciar-sesion&user="+datos.resultt;
                
                location.href=page;
 
                /* var user =login;
                function onEnviar()
                {
                 document.getElementById("variable").value=user;
                }*/

        
         } else if (datos.resul  == "2")
         {
            app.mostrar_mensajes_de_alerta_o_errores = "¡Oops! Al parecer olvidaste algo.";
         }
                                
                        })
                        .catch(function (error) {
                            console.log(error);
                        });
                                          
        }
    }






});

