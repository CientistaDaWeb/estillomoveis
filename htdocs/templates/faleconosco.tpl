{include file="header.tpl"}
<div id="div_conteudo">
    <h2>Fale Conosco</h2>
    {if $smarty.session.alerta_msg}
    <h3 class="{$smarty.session.alerta_tipo}">{$smarty.session.alerta_msg}</h3>
    {/if}
    <form action="/_actions/contato.php" method="post" onsubmit="return valida_contato();">
    <table>
            <tr>
                <th>* Nome:</th>
                <td colspan="5"><input type="text" name="nome" id="nome" class="inpute gde" /></td>
            </tr>
            <tr>
                <th>Fone Comercial:</th>
                <td><input type="text" name="comercial" id="comercial" class="inpute" /></td>
                <th>Celular:</th>
                <td><input type="text" name="celular" id="celular" class="inpute" /></td>
                <th>CNPJ:</th>
                <td><input type="text" name="cnpj" id="cnpj" class="inpute" /></td>
            </tr>
            <tr>
                <th>* E-mail:</th>
                <td colspan="5"><input type="text" name="email" id="email" class="inpute gde" /></td>
            </tr>
            <tr>
                <th>Cidade:</th>
                <td><input type="text" name="cidade" id="cidade" class="inpute" /></td>
                <th>Estado:</th>
                <td><select name="estado" id="estado" class="inpute medio">
                {html_options options=$estados}
                </select></td>
                <th>CEP:</th>
                <td><input type="text" name="cep" id="cep" class="inpute" /></td>                
            </tr>
            <tr>
                <th>* Mensagem:</td>
                <td colspan="5"><textarea name="mensagem" id="mensagem" class="inpute gde textarea"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td colspan="5"><input type="submit" id="enviar_imagem" class="botao" value="Enviar" /></td>
            </tr>
      </table>
  </form>
  <p>* Campos Obrigatórios</p>
</div>
{include file="footer.tpl"}