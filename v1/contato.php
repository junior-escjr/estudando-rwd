<?php require 'header.php';?>

<div class="content">
    
    <header class="title-section">
        <h1>Fale Conosco:</h1>
        <p class="tagline">Este formulário serve apenas para dar exemplos de ajustes!</p>
    </header>
    
    <form action="" class="form">
        <fieldset class="form_left">
            <label for="">
                <span>Informe seu nome:</span>
                <input type="text" placeholder="Nome">
            </label>

            <label for="">
                <span>Informe seu email:</span>
                <input type="text" placeholder="Email">
            </label>

            <label for="">
                <span>Em que Estado você esta?</span>
                <input type="text" placeholder="UF">
            </label>

            <label for="">
                <span>Sobre o que você quer falar?</span>
                <input type="text" placeholder="Assunto">
            </label>

            <label for="">
                <span>Deixe seu telefone:</span>
                <input type="text" placeholder="Telefone">
            </label>
        </fieldset>

        <fieldset class="form_right">
            <label for="">
                <span>Fale aqui:</span>
                <textarea rows="8" placeholder="Escreva sua mensagem"></textarea>
            </label>

            <label for="">
                <span>Como encontrou o site?</span>
                <select>
                    <option>Google</option>
                    <option>Yahoo</option>
                    <option>Bing</option>
                    <option>Indicação</option>
                </select>
            </label>

            <div class="form_action">
                <input class="btn first" type="reset" value="Limpar dados">
                <input class="btn" type="submit" value="Enviar dados">
            </div>
        </fieldset>
    </form>

    <div class="clear"></div>
</div>

<?php 

require 'footer.php';