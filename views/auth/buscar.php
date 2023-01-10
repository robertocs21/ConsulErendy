<body class="direcBack">
    <div class="hed">
        <img class="direct-imgfloat" src="build/img/search.png">
        <h1 class="tit-direct"> Buscar Registros </h1>
    </div>
    <div class="direct-main-container">
        <h3 class="h2-registros">Ingrese los datos correspondientes para la búsqueda: </h3>
        <hr class="ruleh">
        <div class="directContainer">
            <form method="POST" action="/buscar">
                <img src="build/img/busq.png" class="btn-direct-container imgFloat-right">

                <label for="nombreBusquedaID" class="label-registros"> Nombre: </label>
                <input class="input-Busqueda" type="text" id="nombreBusquedaID" name="nombre" required>

                <label for="apellidoBusquedaName" class="label-registros"> Apellido: </label>
                <input class="input-Busqueda" type="text" id="apellidoBusquedaName" name="apellido" required>

                <div class="btn-busqueda-container">
                    <button class="btn-busqueda"> Buscar </button>
                </div>
</form>
            <div class="btn-regresar-container-busqueda">
                <a class="btn-regresar" type="submit" href="/direc"> < Directorio </a>
            </div>
        </div>
    </div>
    <footer class="foot">
        <p> CD. Erendy Anahí Hernández Pérez</p>
        <p> Céd. Prof. 8126068</p>
    </footer>