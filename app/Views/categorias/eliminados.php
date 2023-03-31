<!--las tres primeras lineas para poner en los encabezados -->
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4"><?php echo $titulo ?></h3>
            <div>
                <p>
                    <a href="<?php echo base_url(); ?>categorias-categorias/" class="btn btn-warning">Unidades</a>
                </p>
            </div>
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($datos as $dato){?>
                        <tr>
                        <td><?php echo $dato['id']; ?></td>
                        <td><?php echo $dato['nombre']; ?></td>
                        <td><a href="<?=base_url('reingresar-categorias/'.$dato['id']); ?>"><i class="fas fa-arrow-alt-circle-up" style="color: #0d0d0d;"></i></a></td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
</div>
</div>
</main>
<i class="fa-solid fa-delete-left" style="color: #f7f7f7;"></i>