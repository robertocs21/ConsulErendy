<body class="b">
<hr class="rule">
<div class="presentacion2">
    <h1 class="titulo">Erendy Anahí Hernández Pérez</h1>
    <h3> Endodoncista. </h3>
    <img src="build/img/Diente.png">
</div>
<hr class="rule">
<div class="sesion">
    <h3 class="fh3"> Nuevo Usuario </h3>
<form action="sesion" method="POST">
    <label class="label"> Nombre </label>
    <input class="inp" type="text" name="nombre" placeholder="Su Nombre" required>

    <label class="label"> Apellido </label>
    <input class="inp" type="text" name="apellido" placeholder="Su Apellido" required>

    <label class="label"> Correo </label>
    <input class="inp" type="email" name="email" placeholder="Su Correo Electrónico (Será su Usuario)" required>

    <label class="label"> Contraseña </label>
    <input class="inp" type="password" name="password" placeholder="Su Contraseña" required>

    <button class="btn" type="submit"> Crear Usuario </button>
</div>