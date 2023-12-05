
<?php
    include "./vistas/inc/admin_security.php";
?>
<div class="full-box page-header">
    <h3 class="text-left text-uppercase">
        <i class="fas fa-info fa-fw"></i> &nbsp; Necesitas ayuda?
    </h3>
    <?php include "./vistas/desc/desc_ayuda.php"; ?>
</div>

<div class="container-fluid">
    <ul class="full-box list-unstyled page-nav-tabs text-uppercase">
        <li>
            <a href="<?php echo SERVERURL; ?>user-new/">
                <i class="fas fa-user-tie fa-fw"></i> &nbsp; Nuevo usuario
            </a>
        </li>
        <li>
            <a class="active" href="<?php echo SERVERURL; ?>ayuda/">
                <i class="fas fa-info fa-fw"></i> &nbsp; Ayuda
            </a>
        </li>
        <li>
            <a href="<?php echo SERVERURL; ?>user-search/">
                <i class="fas fa-search fa-fw"></i> &nbsp; Buscar usuario
            </a>
        </li>
    </ul>	
</div>
<div class="container-fluid">

            <div class="row mb-4 mb-lg-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    
                    <h3 class="fw-bold">Soluciones DanoMax...</h3>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 mx-auto" style="max-width: 900px;">
                <div class="col d-md-flex align-items-md-end align-items-lg-center mb-5">
                    <div>
                        <h5 class="fw-bold">Punto de venta por Daniel Flores.&nbsp;</h5>
                        <p class="text-muted mb-4">Si necesitas ayuda puedes contactarme al teléfono: <strong><span style="color: rgb(77, 113, 176);">9615566997</span></strong> o al <strong><span style="color: rgb(77, 113, 176);">938107501</span></strong>.</p>
                    </div>
                </div>
                <div class="col mb-5"><img class="rounded img-fluid shadow" src="<?php echo SERVERURL; ?>vistas/assets/ayuda/proto.gif"></div>
           
            </div>
            <!-- inicia animaccion -->
            
        </div>
        </div>
        