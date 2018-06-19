<?php ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="/Matrix/WebMatrix/assets/css/bootstrap.css" rel="stylesheet">
        <link href="/Matrix/WebMatrix/assets/css/font-awesome.min.css" rel="stylesheet">
        <link href="/Matrix/WebMatrix/assets/css/normalize.css" rel="stylesheet">
        <link href="/Matrix/WebMatrix/assets/css/login/login.css" rel="stylesheet">
    </head>
    <body>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div id="login" class="login-wrapper">
                            <form action="">
                                <h1 class="tituloLogin"><span>Matrix</span> E-shop.</h1>

                                <div class="input-row">
                                    <span class="icon"><i class="fa fa-at"></i></span>
                                    <input type="text" placeholder="Usuario" class ="formInput input-text" v-model="user"/>
                                </div>

                                <div class="input-row">
                                    <span class="icon"><i class="fa fa-lock"></i></span>
                                    <input type="password" placeholder="Contraseña" class ="formInput input-passwd" v-model="psswd"//>
                                </div>
                                <div class="submit-row">
                                    <input type="submit" value="Ingresar &raquo;" class ="formInput btn-login" @click.prevent="signin"//>
                                    <span class="reset">or <a href="#">Reset Password</a></span>
                                </div>
                            </form>
                        </div>                    
                    </div>
                    <div class="col-md-8"></div>
                </div>
            </div>
            <script src="/Matrix/WebMatrix/assets/js/vue.js"></script>
            <script src="/Matrix/WebMatrix/assets/js/axios.js"></script>
            <script src="/Matrix/WebMatrix/assets/js/login/login.js"></script>
    </body>
</html>