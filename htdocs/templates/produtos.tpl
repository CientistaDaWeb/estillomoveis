{include file="header.tpl"}
<div class="esquerda">
    <ul id="categorias">
    {foreach from=$categorias item=categoria}
        <li><a href="/produtos/{$categoria.id_categorias_produto}/">{$categoria.categoria}</a></li>
    {/foreach}
    </ul>
</div>
<div class="direita">
    <h2>{$cat.categoria}</h2>
    {foreach from=$produtos item=produto}
    <div class="produto">
        <a href="/_img/produtos/{$produto.imagem}"><img src="/_img/produtos/thumbs/{$produto.imagem}" border="0" /></a>
    </div>
    {/foreach}
</div>
{include file="footer.tpl"}