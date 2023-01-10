
<body class="background">
    <hr class="rule">
    <div class="presentacion">
        <h1 class="titulo">Erendy Anahí Hernández Pérez</h1>
        <h3> Endodoncista. </h3>
        <img src="/build/img/Diente.png">
    </div>
    <hr class="rule">
    <div class="acceso">
        <form class="form" action="/" method="POST">
            <h3 class="fh3"> Acceso </h3>

            <label class="label"> Usuario </label>
            <input class="inp" type="email" name="email" placeholder="Correo Electrónico"  value="<?php echo s($auth->email); ?>" required >

            <label class="label"> Contraseña </label>
            <input class="inp" type="password" name="password" placeholder="Contraseña" required>

            <button class="btn" type="submit" > Acceder </button>
        </form>
    </div>
    <form action="/historia" method="POST">