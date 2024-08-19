<form name="send_contato" method="post">

    <input type="text" name="nome" placeholder="Nome" value="" required="required">
    <input type="email" name="email" placeholder="E-mail" value="" required="required">
    <input type="tel" name="tel" placeholder="Telefone" value="" required="required">
    <select name="m_horario" required="required">
        <option value="">Melhor horário de contato</option>  
        <option value="Manhã">Manhã</option> 
        <option value="Tarde">Tarde</option> 
        <option value="Noite">Noite</option> 
    </select>
    <textarea name="msg" placeholder="Mensagem" rows="6" required="required"></textarea>
    <div class="status float-left">
        <span class="erro">Erro ao enviar mensagem.</span>
    </div>
    <input type="submit" value="Enviar" name="sendCont" class="float-right">
</form>