<form name="send_curriculo" method="post">

    <input type="text" name="nome" placeholder="Nome" value="" required="required">
    <input type="email" name="email" placeholder="E-mail" value="" required="required">
    <input type="tel" name="tel" placeholder="Telefone" value="" required="required">
    <input type=file name="arq_curriculo" required="required">
    <select name="a_atuacao" required="required">
        <option value="">Área de atuação</option>  
        <option value="Manhã">Opção 1</option> 
        <option value="Tarde">Opção 2</option> 
        <option value="Noite">Opção 3</option> 
    </select>
    <textarea name="msg" placeholder="Mensagem" rows="4" required="required"></textarea>
    <div class="status float-left">
        <div class="progress">
            <div class="bar"></div>
        </div>
    </div>
    <input type="submit" value="Enviar" name="sendCont" class="float-right">
</form>