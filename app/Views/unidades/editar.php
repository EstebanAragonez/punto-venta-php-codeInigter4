<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4"><?php echo $titulo; ?></h3>

            <form method="POST" action="<?=site_url('/actualizar'); ?>" autocomplete="off">

            <input type="hidden" value="<?php echo $datos['id']; ?>" name="id" />

                <div class="form-grup">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <label>Nombre</label>
                            <input class="form-control" id="nombre" name="nombre" type="text" value="<?php echo $datos['nombre']; ?>" autofocus require />
                        </div>
                        <div class="col-12 col-sm-6">
                            <label>Nombre corto</label>
                            <input class="form-control" id="nombre_corto" name="nombre_corto" type="text" value="<?php echo $datos['nombre_corto']; ?>" />
                        </div>
                    </div>
                </div>
                <br>
                    <a href="<?php echo base_url('/unidades') ?>" class="btn btn-primary">Regresar</a>
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
            </form>
        </div>
    </main>