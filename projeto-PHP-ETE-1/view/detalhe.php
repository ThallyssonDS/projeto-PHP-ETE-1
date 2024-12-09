<?php
    $comentarios = listarComentarios();
?>
    
    <div class="container">
        <header class="header">
            <a class="logo" href="index.html">InfoSports</a>
            <div class="headerBtnGroup">
                <button class="navBtn"><a href="login.html">Login</a></button>
                <button class="navBtn"><a href="registro.html">Registro</a></button>
                <button class="navBtn"><a href="contato.html">Contato</a></button>
                <button class="navBtn"><a href="comentario.php">comentario</a></button>
                <div>
                    <input type="checkbox" class="check" id="chk" />
                
                    <label class="label" for="chk">
                        <i class="fas fa-moon"></i>
                        <i class="fas fa-sun"></i>
                        <div class="bola"></div>
                    </label>
                </div>
            </div>
            <div class="hamburguer-menu">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </header>
        <p class="sectionTitle" id="backToTop">BEM VINDO A INFOSPORTS!</p>
        <p class="sectionDescription">Aqui é onde você encontra tudo sobre seu esporte favorito.
            preferido.</p>
        <section class="gridContainer">
            <div class="mainContent">
                <div class="categoryCard">
                    <img src="./imagens/<?=$noticia['img']?>" alt="mainCardImg" class="mainCardImg">
                    <h1 class="mainCategoryCardTitle"><?=$noticia['titulo']?></h1>
                    <p class="mainCategoryCardDescription" Align="justify">
                        <?=$noticia['descricao']?>
                    </p>
                </div>
                <h2>Comentarios:</h2>

                <?php
                    foreach ($comentarios as $comentario) {
                        echo "<p><strong>" . $comentario['nome'] . "</strong>: " . $comentario['comentario'] . "</p>";
                    }
                ?>

                <h2>Faça seu comentario:</h2>
                
                <form action="index.php?pagina=comentario" method="POST"> 
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" required><br>

                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" required><br>

                    <label for="comentario">Comentário:</label>
                    <textarea id="comentario" name="comentario" required></textarea><br>

                    <input type="text" id="id" name="id" value=<?=$noticia['id']?> style="display: none;">

                    <button type="submit">Enviar comentário</button>
                </form>
            </div>

        </section>
        <section >
            <div>
                <?php 
                    foreach($noticiasPorCategoria as $noticia_categoria):
                    ?>
                    <a class="pag-link" href="<?=constant('URL_LOCAL_SITE_DETALHE').$noticia_categoria['id']?>">
                    <div>
                        <img src="./imagens/<?=$noticia_categoria['img']?>" alt="mainCardImg" class="mainCardImg" width=320px height=180px>
                        <p class="mainCategoryCardTitle"><?=$noticia_categoria['titulo']?></p>
                        <p class="mainCategoryCardDescription"><?= reduzirStr($noticia_categoria['descricao'],180)?></p>
                    </div>
                    </a>
                <?php endforeach?>
            </div>
        </section>
        <footer class="footer">
            <span>Info Sports</span>
            <a href="#backToTop" class="footerAnchor">VOLTAR PARA O TOPO</a>
        </footer>
    </div>
    