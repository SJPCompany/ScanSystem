<div class="container">
    <img class="dv_logo" src="../public/img/davinci-logo.png">

    <br><br><br><br>

    <h1>Here you can reset your account, if you forgot your password.</h1>
    <p>Please contact your administrator (gewoon vragen aan Nuijte :P) if you are the head user then <br> enter here
        your email to send an vertification to change your password:</p>
    <br>

    <form method="POST" action="../scansystem/home/doLogin">
        <label> Registered Email: </label> <br>
        <input type="text" name="resetmail"> <br> <br>
        <a href="<?php echo URL; ?>home/index">Go Back</a><br>
    </form>
</div>
