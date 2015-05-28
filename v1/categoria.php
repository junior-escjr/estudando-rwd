<?php require 'header.php';?>

<div class="content">
    
    <header class="title-section">
        <h1>Categoria do meu site:</h1>
        <p class="tagline">Confira as últimas publicações na <b>categoria do meu site</b>. Interaja!</p>
    </header>

    <?php
    for ($i = 1; $i <= 16; $i++):
        ?>
        <article class="art_for">
            <img src="timthumb.php?src=uploads/01.jpg&w=430&h=215" alt="Img01" title="Img01">

            <header>
                <h1><a href="#" title="Leia mais sobre [TITULO]">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></h1>
                <time datetime="<?= date('Y-m-d'); ?>" pubdate><?= date('\d\i\a d/m/Y \à\s H:i\h\s'); ?></time>
            </header>

        </article>
    <?php endfor; ?>
    

    <div class="clear"></div>
</div>

<?php 

require 'footer.php';