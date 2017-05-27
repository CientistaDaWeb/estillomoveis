<?php /* Smarty version 2.6.22, created on 2011-02-09 15:09:22
         compiled from index.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="esquerda">
    <h4>Conheça nossa linha de produtos:</h4>
    <ul id="categorias">
    <?php $_from = $this->_tpl_vars['categorias']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['categoria']):
?>
        <li><a href="/produtos/<?php echo $this->_tpl_vars['categoria']['id_categorias_produto']; ?>
/"><?php echo $this->_tpl_vars['categoria']['categoria']; ?>
</a></li>
    <?php endforeach; endif; unset($_from); ?>
    </ul>
</div>
<div id="div_conteudo" class="direita">
    <h2>Bem vindo</h2>
    <div id="intro">
    </div>
    <?php echo '
    <script type="text/javascript">
        swfobject.embedSWF("/_swf/anim.swf", "intro", "480", "300", "9.0.0", "expressInstall.swf",\'\',{wmode:\'transparent\',menu:\'false\'});
    </script>
    '; ?>

</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>