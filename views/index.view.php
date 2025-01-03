<?php require "header.php"; ?>

    <div class="contenedor">
        
        <?php foreach($posts as $post): ?>
            <div class="post">
                <article>
                    <h2 class="titulo"><a href="<?php echo RUTA."single.php?id=".$post['id']; ?> "><?php echo $post['titulo'] ?></a></h2>
                    <p class="fecha"><?php echo fecha($post['fecha']) ?></p>
                    <div class="thumb">
                        <a href="<?php echo RUTA."single.php?id=".$post['id']; ?> ">
                            <img src="<?php echo RUTA.$blog_config['capeta_imagenes'].$post['thumb'] ?>" alt="">
                        </a>
                    </div>
                    <p class="extracto"><?php echo $post['extracto'] ?></p>
                    <a href="<?php echo RUTA."/single.php?id=".$post['id']; ?> " class="continuar">Continuar leyendo</a>
                </article>
            </div> 
        <?php endforeach; ?>

        <?php require 'paginacion.php'; ?>
    </div>

<?php require "footer.php";