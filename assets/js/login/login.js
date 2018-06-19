vmLogin = new Vue({
    el: "#login",
    data:{
        user: "",
        psswd:""
    },
    methods:{
        signin: function () {
            axios.post(
                '/Matrix/WebMatrix/app/routes/login.php', { user: this.user, pass: this.psswd, act: 'signin' }, { headers: { 'Content-Type': 'application/x-www-form-urlencoded' } }
            ).then(function (response) {

                  }).catch (function(error){
                    alert("Ocurrió un error al conectarse con la servilleta ")
                  }) 
        }
    }
})