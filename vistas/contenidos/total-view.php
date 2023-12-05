<?php
    include "./vistas/inc/admin_security.php";
?>
<div class="full-box page-header">
    <h3 class="text-left text-uppercase">
        <i class="fas fa-calculator fa-fw"></i> &nbsp; Kardex de Inversion
    </h3>
    <?php include "./vistas/desc/desc_total.php"; ?>

</div>
<div class="container-fluid">
    <ul class="full-box list-unstyled page-nav-tabs text-uppercase">
        <li>
            <a  href="<?php echo SERVERURL; ?>kardex/">
                <i class="fas fa-pallet fa-fw"></i> &nbsp; Kardex general
            </a>
        </li>
        <li>
            <a href="<?php echo SERVERURL; ?>kardex-search/">
                <i class="fas fa-search fa-fw"></i> &nbsp; Buscar kardex
            </a>
        </li>
        <li>
            <a href="<?php echo SERVERURL; ?>kardex-product/">
                <i class="fas fa-luggage-cart fa-fw"></i> &nbsp; Kardex por producto
            </a>
        </li>
        <li>
            <a  class="active" href="<?php echo SERVERURL; ?>total/">
                <i class="fas fa-calculator fa-fw"></i> &nbsp; Kardex de Inversion
            </a>
        </li>
    </ul>	
</div>
<div class="container-fluid">
    <div id="today-sales">
        <h4 class="text-center">Estadísticas de Dinero Invertido  en Inventario (<?php echo date("d-m-Y"); ?>)</h4>
        <div class="table-responsive">
            <table class="table table-bordered table-dashboard">
                <thead>
                    <tr class="text-center">
                        <th scope="col">Productos en inventario</th>
                        <th scope="col">C. INVERTIDO EN INVENTARIO</th>
                        <th scope="col">C. EXISTENTE EN INVENTARIO</th>
                        <th scope="col">Ganancias o Utilidades</th>
                    </tr>
                </thead>
                
                    
                <tbody>
                <?php
                       
                    
                    
                       $total_productos=$lc->datos_tabla("Normal","kardex","kardex_existencia_costo_total",0);
                       
                       $cantidad=0;
                       $sumador_de__cantidades=0;

                       if($total_productos->rowCount()>=1){
                           $datos_ventas=$total_productos->fetchAll();

                           foreach($datos_ventas as $ventas){
                            $ventas_totales = $ventas['kardex_existencia_costo_total'];
                            
                            $sumador_de__cantidades = $sumador_de__cantidades +$ventas_totales;

                           } 
                            // se especifica las unidades de entrada
                           $kardex_entrada_productos=$lc->datos_tabla("Normal","kardex","kardex_entrada_costo_total",0);
                    if($kardex_entrada_productos->rowCount()>=1){

                           $datos_ventas2=$kardex_entrada_productos->fetchAll();
                           foreach($datos_ventas2 as $ventas2){
                            $ventas_totales2 = $ventas2['kardex_entrada_costo_total'];
                            $cantidad = $cantidad + $ventas_totales2;


                           }
                        //    logica para ver productos en inventario
                           $total_productos2=$lc->datos_tabla("Normal","producto","producto_id",0); 


                    }

               ?>
                  
                    <tr class="text-center">
                        <td><?php echo $total_productos->rowCount(); ?> Registrados</td>
                        <td><?php echo MONEDA_SIMBOLO.number_format ($cantidad,MONEDA_DECIMALES,MONEDA_SEPARADOR_DECIMAL,MONEDA_SEPARADOR_MILLAR).' '.MONEDA_NOMBRE; ?></td>
                        <td><?php echo MONEDA_SIMBOLO.number_format($sumador_de__cantidades,MONEDA_DECIMALES,MONEDA_SEPARADOR_DECIMAL,MONEDA_SEPARADOR_MILLAR).' '.MONEDA_NOMBRE; ?></td>
                        <td></td>
                    </tr>
                    <?php } else{ ?>
                    <tr class="text-center">
                        <td colspan="4">
                        <div class="alert text-primary text-center" role="alert">
                            <p><i class="fas fa-broadcast-tower fa-fw fa-5x"></i></p>
                            <h4 class="alert-heading">No hay datos de inversion</h4>
                            <p class="mb-0">No hemos encontrado informacion sobre productos, lo sentimos Sr. <?php echo $_SESSION['nombre_svi']; ?></p>
                        </div>
                        </td>
                        
                    </tr>
                    
                    <?php 
                        }
                        $total_productos->closeCursor();
                        $total_productos=$lc->desconectar($total_productos);
                    ?>
                    <tr class="text-center">
                  <td colspan="4"><?php if($cantidad>0){ ?>
                            <p class="text-center">
                                <a href="#" class="btn btn-outline-info print-barcode" data-id="#today-sales"><i class="fas fa-print"></i> &nbsp; Imprimir</a>
                            </p>
                            <?php } ?>  </td>

                    </tr>
                    <tr class="text-center">
                    <td colspan="4">
                    
                    </td>
                    </tr>
  
                    
                </tbody>
                
         
            </table>
            
        </div>
    </div>
   
    <hr>
    <script>



        </script>


    

