<?php
include_once 'conn/db.php';
?>


<section class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-4">

        <h1>Administración de Mensajes</h1>



    </div>

    <?php if (!$messages) {
    ?>
        <h2>No hay Mensajes</h2
            <?php } else { ?>

            <div class="table-responisve">
        <table class="table table-striped table-hover align-middle">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">email</th>
                    <th scope="col">telefono</th>
                    <th scope="col">Area</th>
                    <th scope="col">Mensaje</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Leido</th>
                    <th scope="col">Acciones</th>

                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($messages as $message) {
                    $preview = mb_substr($message['content'], 0, 20) . "...";
                    $date = date('d/m/Y H:i', strtotime($message['created_at']));


                ?>
                    <tr>
                        <th scope="row"><?= $message['id'] ?></th>
                        <td><?= $message['name'] ?></td>
                        <td><?= $message['email'] ?></td>
                        <td><?= $message['phone'] ?></td>
                        <td><?= $message['Area'] ?></td>
                        <td><?= $preview ?></td>
                        <td><?= $date ?></td>
                        <td><?php if ($message['read']) {
                                echo "Si";
                            } else {
                                echo "No";
                            } ?></td>
                        <td>
                            <button type=button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#answerMessage<?= $message['id'] ?>">Ver</button>
                            <a href="index.php?page=activemodify&id=<?= $message['id'] ?>" class="btn btn-sm btn-outline-warning"> <?php
                                                                                                                                    if ($message['read']) {
                                                                                                                                        echo "Leido";
                                                                                                                                    } else {
                                                                                                                                        echo "No Leido";
                                                                                                                                    }
                                                                                                                                    ?></a>
                            <?php if ($message['read']) { ?>
                                <a href="index.php?page=deleteproduct&id=<?= $message['id'] ?>" class="btn btn-sm btn-outline-danger">Eliminar</a>
                            <?php } ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        </div>

    <?php } ?>
</section>
<?php
//Modal de respuesta
foreach ($messages as $message) {
?>
    <div class="modal fade" id="answerMessage<?= $message['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="answerMessage" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addProductModalLabel">Responder a <?= $message['name'] ?></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <?= $message['content'] ?>
                    </div>

                    <form method="POST" action="includes/process/answerMessage.php">
                        <input type="hidden" value=<?= $message['id'] ?> name="id">
                        <div class="mb-3 m-3">
                            <label for="message" class="form-label">Respuesta</label>
                            <textarea class="form-control" id="message" rows="3" name="message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-bg-primary">Enviar</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
<?php } ?>