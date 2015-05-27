<?php require 'header.php';?>

<div class="content">
    <section class="lastnews">
        <header class="title-section">
            <h1>Confira Nossas Atualizações:</h1>
        </header>

        <article class="lastnews_destaque">
            <header>
                <!-- <picture alt="Img02">
                    <source media="(min-width: 1600px)" srcset="uploads/02.jpg" />
                    <source media="(min-width: 1080px)" srcset="timthumb.php?src=uploads/02.jpg&w=1600&h=800" />
                    <source media="(min-width: 620px)" srcset="timthumb.php?src=uploads/02.jpg&w=1080&h=400" />
                    <source media="(min-width: 380px)" srcset="timthumb.php?src=uploads/02.jpg&w=620&h=200" />
                    <source media="(min-width: 10px)" srcset="timthumb.php?src=uploads/02.jpg&w=380&h=380" />

                    <img src="uploads/02.jpg" alt="Img02" title="Img02" class="capaaqui">
                </picture> 


                <picture alt="Img02">
                    <source media="(min-width: 500px)" srcset="timthumb.php?src=uploads/02.jpg&w=1080&h=1080, upload/02.jpg 800w" />

                    <img src="uploads/02.jpg" alt="Img02" title="Img02" class="capaaqui">
                </picture>-->

                <img src="timthumb.php?src=uploads/01.jpg&w=1000&h=500" alt="[Img02]" title="Img02" class="capaaqui">
                
                <h1><a href="#" title="Leia mais sobre [TITULO]">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></h1>
                <time datetime="<?= date('Y-m-d'); ?>" pubdate><?= date('\d\i\a d/m/Y \à\s H:i\h\s'); ?></time>
            </header>

            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries...</p>
            <a href="#" title="Leia mais sobre [TITULO]">Leia Mais</a>

        </article>

        <?php
        for ($i = 1; $i <= 4; $i++):
            ?>
            <article class="lastnews_article">
                <header>
                    <img src="timthumb.php?src=uploads/01.jpg&w=480&h=240" alt="Img01" title="Img01" class="capaaqui">
                    <h1><a href="#" title="Leia mais sobre [TITULO]">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></h1>
                    <time datetime="<?= date('Y-m-d'); ?>" pubdate><?= date('\d\i\a d/m/Y \à\s H:i\h\s'); ?></time>
                </header>

                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries...</p>
                <a href="#" title="Leia mais sobre [TITULO]">Leia Mais</a>

            </article>
        <?php endfor; ?>
    </section>

    <aside class="sidebar">
        <header class="title-section">
            <h1>Artigos Mais Vistos:</h1>
        </header>

        <?php for ($b = 1; $b <= 4; $b++): ?>
            <article class="sidebar_widget">
                <header>
                    <img src="timthumb.php?src=uploads/01.jpg&w=450&h=225" alt="Img01" title="Img01" class="capaaqui">
                    <h1><a href="#" title="Leia mais sobre [TITULO]">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></h1>
                    <time datetime="<?= date('Y-m-d'); ?>" pubdate><?= date('\d\i\a d/m/Y \à\s H:i\h\s'); ?></time>
                </header>
            </article>
        <?php endfor; ?>
    </aside>

    <div class="clear"></div>
</div>

<?php 

require 'footer.php';