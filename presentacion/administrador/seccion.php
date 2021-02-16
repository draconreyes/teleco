<?php
include "menu.php";
$administrador= new administrador("",$_SESSION['id'],"","","","","");
$administrador= $administrador->consultar();
?>

<div class="container" style="margin-top: 20px">
    <div class="row">
        <div class="col-12">
            <div class="card">
                    <?php if(isset($_GET['tipo']) and $_GET['tipo'] == 1){?>
                    <div class="alert alert-success" role="alert">
                        Se registro con exito al usuario
                    </div>
                    <?php }?>
                    <?php if(isset($_GET['tipo']) and $_GET['tipo'] == 2){?>
                    <div class="alert alert-success" role="alert">
                        Se registro visita exitosamente
                    </div>
                <?php }?>
                <?php if(isset($_GET['tipo']) and $_GET['tipo'] == 3){?>
                    <div class="alert alert-success" role="alert">
                        Se registro telefono exitosamente
                    </div>
                <?php }?>
                <div class="card-header bg-primary text-white">Bienvenido Administrador</div>
                <div class="card-body">
                    <p>Usuario: <?php echo $administrador -> getNombre() . " " . $administrador -> getApellido() ?></p>
                    <p>Correo: <?php echo $administrador -> getCorreo(); ?></p>
                    <p>Hoy es: <?php echo date("d-M-Y"); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
