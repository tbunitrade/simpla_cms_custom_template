<?php /* Smarty version Smarty-3.1.18, created on 2018-08-15 13:11:56
         compiled from "D:\myserver\OSPanel\domains\simpla-noski\design\noski\html\blog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:222055b73fc6c85d639-97185868%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1207f950241791b9a195a07f71a0f8af7d84a9f' => 
    array (
      0 => 'D:\\myserver\\OSPanel\\domains\\simpla-noski\\design\\noski\\html\\blog.tpl',
      1 => 1534057487,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '222055b73fc6c85d639-97185868',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'posts' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5b73fc6c8c4684_72208496',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b73fc6c8c4684_72208496')) {function content_5b73fc6c8c4684_72208496($_smarty_tpl) {?>


<?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/blog", null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];?>

<!-- Заголовок /-->
<h1><?php echo $_smarty_tpl->tpl_vars['page']->value->name;?>
</h1>

<?php echo $_smarty_tpl->getSubTemplate ('pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<!-- Статьи /-->
<ul id="blog">
	<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
	<li>
		<h3><a data-post="<?php echo $_smarty_tpl->tpl_vars['post']->value->id;?>
" href="blog/<?php echo $_smarty_tpl->tpl_vars['post']->value->url;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a></h3>
		<p><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['date'][0][0]->date_modifier($_smarty_tpl->tpl_vars['post']->value->date);?>
</p>
		<p><?php echo $_smarty_tpl->tpl_vars['post']->value->annotation;?>
</p>
	</li>
	<?php } ?>
</ul>
<!-- Статьи #End /-->    

<?php echo $_smarty_tpl->getSubTemplate ('pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

          <?php }} ?>
