<?php include('layouts/header.php'); ?>
<?php include('layouts/nav.php'); ?>
<div class="element3">
    <main class="main">
        <section>
            Insertar información del ciudadano
            <article>
                <div>
                    <form action="insertar.php" method="POST">
                        <label for="name" class="form-label fw-bolder">Tipo Documento</label>
                        <input class="form-control" type="text" id="name" name="tipoDocumento" required>
                        <label for="email" class="form-label fw-bolder">Numero de Documento</label>
                        <input class="form-control" type="number" id="number" name="numeroDocumento" required>
                        <label for="name" class="form-label fw-bolder">Nombres</label>
                        <input class="form-control" type="text" id="name" name="nombretd" required>
                        <label for="name" class="form-label fw-bolder">Apellidos</label>
                        <input class="form-control" type="text" id="name" name="apellidotd" required>
                        <button class="btn btn-primary mt-2" type="submit">Enviar</button>
                    </form>
            </article>
        </section>
</div>
<?php include('layouts/aside.php') ?>
<div class="element5">
    <section>
        <h1 class="tdatos">
            Datos de la Ciudadania
        </h1>
        <div class="registros">
            <table class="table">
                <thead class="table-success table-striped">
                    <tr>
                        <th>Tipo documento</th>
                        <th>Numero de documento</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th></th>
                        <th></th>
                        <?php
                        include('layouts/conexion.php');
                        $documento = "SELECT * FROM tipodoc";
                        $resultado = mysqli_query($conexion, $documento);
                        while ($row = mysqli_fetch_assoc($resultado)) {
                        ?>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th><?php echo $row['tipoDocumento'] ?></th>
                        <th><?php echo $row['numeroDocumento'] ?></th>
                        <th><?php echo $row['nombretd'] ?></th>
                        <th><?php echo $row['apellidotd'] ?></th>

                        <th><a href="update.php?id=<?php echo $row['numeroDocumento'] ?>" class=" btn btn-info">Editar</a></th>
                        <th><a href="delete.php?id=<?php echo $row['numeroDocumento'] ?>" class=" btn btn-danger">Eliminar</a></th>
                    </tr>
                <?php
                        }
                ?>
                </tbody>
            </table>
        </div>
    </section>
    </main>
</div>
<?php include('layouts/footer.php') ?>