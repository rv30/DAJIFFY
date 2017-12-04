new Vue({
          el: '#loginFormulario',
          data: {
            "correo":"rafa","contrasenia":"123"
            
          },
          methods: {
            loginUser: function() {
                var usuarioVue = this.usuario
                axios.post("/vueLogin", usuarioVue).then(function(response) {
                        console.log(response);
                    })
                .catch(function(error) {
                    console.log(error);
            });
        }

    }
});