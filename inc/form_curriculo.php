<form name="send_curriculo" method="post">

    <input type="text" name="nome" placeholder="Nome" value="" required>
    <input type="email" name="email" placeholder="E-mail" value="" required>
    <input type="tel" name="tel" placeholder="Telefone" value="" required>
    <input type=file name="arq_curriculo" required>
    <select name="a_atuacao" required>
        <option value="">Área de atuação</option>  
        <option value="Administrativo">Administrativo</option> 
        <option value="Engenharia">Engenharia</option>
    </select>
    <textarea name="msg" placeholder="Mensagem" rows="4" required></textarea>
    <div class="status float-left">
        <div class="progress">
            <div class="bar"></div>
        </div>
    </div>
    <input type="submit" value="Enviar" name="sendCont" class="float-right">
</form>