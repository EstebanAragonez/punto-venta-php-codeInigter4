<!--las tres primeras lineas para poner en los encabezados -->
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4"><?php echo $titulo ?></h3>
            <div>
                <p>
                    <a href="<?php echo base_url('/nuevo'); ?>" class="btn btn-info">Agregar</a>
                    <a href="<?php echo base_url('/eliminados'); ?>" class="btn btn-warning">Eliminados</a>
                </p>
            </div>
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Nombre Corto</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($datos as $dato){?>
                        <tr>
                        <td><?php echo $dato['id']; ?></td>
                        <td><?php echo $dato['nombre']; ?></td>
                        <td><?php echo $dato['nombre_corto']; ?></td>
                        <td><a href="<?=base_url('editar/'.$dato['id']); ?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square" style="color: #0d0d0d;"></i></a></td>
                        <td><a href="<?=base_url('eliminar/'.$dato['id']); ?>"class="btn btn-danger"><i class="fa-solid fa-trash" style="color: #f7f7f7;"></i></a></td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
</div>
</div>
</main>
<i class="fa-solid fa-delete-left" style="color: #f7f7f7;"></i>