var app = new Vue({
        el: '#contenedor_',
    data: {
        nombres: '',
        apellidos: '',
        email: '',
        password: '', // initialise this to an empty string
        confirm_pass: '', // same thing
    alert: "",
    cargando: ''
       
    },

    methods: {
        enviar() {

            
            // make ajax request and pass the data. I'm not certain how to do it with axios but something along the lines of this
        var formData = new FormData();
        formData.append('nombres', this.nombres);
        formData.append('apellidos',this.apellidos);
        formData.append('email',this.email);
        formData.append('password',this.password);
        formData.append('confirm_pass',this.confirm_pass);
                axios.post("config/crud_nueva_cuenta.php?action=read",formData)
                        .then(function(response) {
            
            console.log(response);
                datos = response.data;
                
        if (datos.resul  == "0")
          {
                   app.alert = "¡Oops! revisa tus datos, hay errores...";

//                   alertify.error("Datos incorrectos");
            }
        else if (datos.resul  == "1")
         {
                app.cargando ="Cargando...";
       
                var page = "../[array]/?:=crear-cuenta&user="+datos.resultt;
                
                window.location= page;

        
         } else if (datos.resul  == "2") 
         {
            app.alert ="¡Oops! Al parecer olvidaste algo.";
         }else if (datos.resul  == "3") 
         {
            app.alert ="¡Oops! El correo electrónico que intentas registrar ya existe.";
         }else if (datos.resul  == "4") 
         {
            app.alert ="¡Oops! Las contraseñas no coinciden.";
         }else if (datos.resul  == "5") 
         {
            app.alert ="¡Oops! El correo electrónico que intentas registrar ya existe y además las contraseñas no coinciden.";
         }
                                
                        })
                        .catch(function (error) {
                            console.log(error);
                        });
                                          
        }
    }






});

