<?php include('layouts/header.php'); ?>
<?php include('layouts/nav.php'); ?>
<div class="element3">
    <main class="main">
        <section>
            Registro y consulta para Discapacitados
            <article>
                <div>
                    <form action="insertarDis.php" method="POST">
                        <label for="email" class="form-label fw-bolder">Id</label>
                        <input class="form-control" type="number" id="date" name="id_3" required>
                        <label for="email" class="form-label fw-bolder">Tipo Discapacidad</label>
                        <input class="form-control" type="text" id="date" name="tipoDiscapacidad" required>
                        <label for="message" class="form-label fw-bolder">Tipo de Solicitud </label>
                        <textarea class="form-control" style="resize: none;" id="message" name="tipoSolicitud" rows="4" required></textarea>
                        <label for="email" class="form-label fw-bolder">Fecha de Solicitud</label>
                        <input class="form-control" type="date" id="date" name="fechaSolicitud" required>
                        <label for="email" class="form-label fw-bolder">Documento</label>
                        <input class="form-control" type="hidden" id="date" name="numeroDoc3" required>
                        <button class="btn btn-primary mt-2" type="submit">Enviar</button>
                    </form>
            </article>
        </section>
    </main>
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
                        <th>Id</th>
                        <th>tipoDiscapacidad</th>
                        <th>tipoSolicitud</th>
                        <th>fechaSolicitud</th>
                        <th>numeroDoc3</th>
                        <th></th>
                        <th></th>
                        <?php
                        include('layouts/conexion.php');
                        $documento = "SELECT * FROM discapacitados";
                        $resultado = mysqli_query($conexion, $documento);
                        while ($row = mysqli_fetch_assoc($resultado)) {
                        ?>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th><?php echo $row['id_3'] ?></th>
                        <th><?php echo $row['tipoDiscapacidad'] ?></th>
                        <th><?php echo $row['tipoSolicitud'] ?></th>
                        <th><?php echo $row['fechaSolicitud'] ?></th>
                        <th><?php echo $row['numeroDoc3'] ?></th>

                        <th><a href="update.php?id=<?php echo $row['id_3'] ?>" class=" btn btn-info">Editar</a></th>
                        <th><a href="deleteDis.php?id=<?php echo $row['id_3'] ?>" class=" btn btn-danger">Eliminar</a></th>
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