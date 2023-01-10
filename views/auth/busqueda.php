<body class="direcBack">
<div class="hed">
    <img class="direct-imgfloat" src="build/img/bill.png">
    <h1 class="tit-direct">Lista de Busqueda</h1>
</div>
<div class="adeudos-main-container">
    <div class="adeudos-container">
        <form>
            <table>
            <?php foreach($resultado as $res):?>
                <tr>
                <th>
                <td class="adeudo-lista">
                    <div class="adeudo-row">
                        <a class="btn-adeudo" href="historia_hecha?id=<?php echo $res->id?>"> Modificar </a>
                    </div>
                    <div class="adeudo-row">
                        <h3 class="h3-direct"> <?php echo $res->nombre?> <?php echo $res->apellido?> <?php echo $res->sapellido?></h3>
                        <h3> Paciente </h3>
                    </div>
                </td>
                </th>
                </tr>
            <?php endforeach;  ?>
            </table>
        </form>
    </div>
    <div class="btn-regresar-container-busqueda">
        <a class="btn-regresar" type="submit" href="/direc"> < Directorio </a>
    </div>
</div>
<footer class="foot">
    <p> CD. Erendy Anahí Hernández Pérez</p>
    <p> Céd. Prof. 8126068</p>
</footer>