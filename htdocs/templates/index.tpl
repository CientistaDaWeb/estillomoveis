{include file="header.tpl"}
<div class="esquerda">
    <h4>Conheça nossa linha de produtos:</h4>
    <ul id="categorias">
    {foreach from=$categorias item=categoria}
        <li><a href="/produtos/{$categoria.id_categorias_produto}/">{$categoria.categoria}</a></li>
    {/foreach}
    </ul>
</div>
<div id="div_conteudo" class="direita">
    <h2>Bem vindo</h2>
    <div id="intro">
    </div>
    {literal}
    <script type="text/javascript">
        swfobject.embedSWF("/_swf/anim.swf", "intro", "480", "300", "9.0.0", "expressInstall.swf",'',{wmode:'transparent',menu:'false'});
    </script>
    {/literal}
</div>
{include file="footer.tpl"}