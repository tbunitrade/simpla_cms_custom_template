<?php /* Smarty version Smarty-3.1.18, created on 2018-08-15 11:28:28
         compiled from "D:\myserver\OSPanel\domains\simpla-noski\design\noski\html\product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29435b73e42c6a46c3-73556683%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd3cdc9ed67b2531385a234f2697c5b89fdc769b' => 
    array (
      0 => 'D:\\myserver\\OSPanel\\domains\\simpla-noski\\design\\noski\\html\\product.tpl',
      1 => 1534057487,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29435b73e42c6a46c3-73556683',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'category' => 0,
    'cat' => 0,
    'brand' => 0,
    'v' => 0,
    'currency' => 0,
    'image' => 0,
    'f' => 0,
    'prev_product' => 0,
    'next_product' => 0,
    'related_products' => 0,
    'related_product' => 0,
    'comments' => 0,
    'comment' => 0,
    'error' => 0,
    'comment_text' => 0,
    'comment_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5b73e42c84aca4_20585902',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b73e42c84aca4_20585902')) {function content_5b73e42c84aca4_20585902($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include 'D:\\myserver\\OSPanel\\domains\\simpla-noski\\Smarty\\libs\\plugins\\function.math.php';
?>


<?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/products/".((string)$_smarty_tpl->tpl_vars['product']->value->url), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];?>

<!-- Хлебные крошки /-->
<div id="path">
	<a href="./">Главная</a>
	<?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value->path; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
	→ <a href="catalog/<?php echo $_smarty_tpl->tpl_vars['cat']->value->url;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
	<?php } ?>
	<?php if ($_smarty_tpl->tpl_vars['brand']->value) {?>
	→ <a href="catalog/<?php echo $_smarty_tpl->tpl_vars['cat']->value->url;?>
/<?php echo $_smarty_tpl->tpl_vars['brand']->value->url;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
	<?php }?>
	→  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
                
</div>
<!-- Хлебные крошки #End /-->

<h1 data-product="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</h1>

<div class="product">

	<!-- Большое фото -->
	<?php if ($_smarty_tpl->tpl_vars['product']->value->image) {?>
	<div class="image">
		<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['product']->value->image->filename,800,600,'w');?>
" class="zoom" rel="group"><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['product']->value->image->filename,300,300);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->product->name, ENT_QUOTES, 'UTF-8', true);?>
" /></a>
	</div>
	<?php }?>
	<!-- Большое фото (The End)-->

	<!-- Описание товара -->
	<div class="description">
	
		<?php echo $_smarty_tpl->tpl_vars['product']->value->body;?>

		
		<?php if (count($_smarty_tpl->tpl_vars['product']->value->variants)>0) {?>
		<!-- Выбор варианта товара -->
		<form class="variants" action="/cart">
			<table>
			<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value->variants; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['v']->index++;
 $_smarty_tpl->tpl_vars['v']->first = $_smarty_tpl->tpl_vars['v']->index === 0;
?>
			<tr class="variant">
				<td>
					<input id="product_<?php echo $_smarty_tpl->tpl_vars['v']->value->id;?>
" name="variant" value="<?php echo $_smarty_tpl->tpl_vars['v']->value->id;?>
" type="radio" class="variant_radiobutton" <?php if ($_smarty_tpl->tpl_vars['product']->value->variant->id==$_smarty_tpl->tpl_vars['v']->value->id) {?>checked<?php }?> <?php if (count($_smarty_tpl->tpl_vars['product']->value->variants)<2) {?>style="display:none;"<?php }?>/>
				</td>
				<td>
					<?php if ($_smarty_tpl->tpl_vars['v']->value->name) {?><label class="variant_name" for="product_<?php echo $_smarty_tpl->tpl_vars['v']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value->name;?>
</label><?php }?>
				</td>
				<td>
					<?php if ($_smarty_tpl->tpl_vars['v']->value->compare_price>0) {?><span class="compare_price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['v']->value->compare_price);?>
</span><?php }?>
					<span class="price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['v']->value->price);?>
 <span class="currency"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span></span>
				</td>
			</tr>
			<?php } ?>
			</table>
			<input type="submit" class="button" value="в корзину" data-result-text="добавлено"/>
		</form>
		<!-- Выбор варианта товара (The End) -->
		<?php } else { ?>
			Нет в наличии
		<?php }?>
			
	</div>
	<!-- Описание товара (The End)-->

	<!-- Дополнительные фото продукта -->
	<?php if (count($_smarty_tpl->tpl_vars['product']->value->images)>1) {?>
	<div class="images">
		
		<?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['cut'][0][0]->cut_modifier($_smarty_tpl->tpl_vars['product']->value->images); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['image']->key;
?>
			<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['image']->value->filename,800,600,'w');?>
" class="zoom" rel="group"><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['image']->value->filename,95,95);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" /></a>
		<?php } ?>
	</div>
	<?php }?>
	<!-- Дополнительные фото продукта (The End)-->

	
	<?php if ($_smarty_tpl->tpl_vars['product']->value->features) {?>
	<!-- Характеристики товара -->
	<h2>Характеристики</h2>
	<ul class="features">
	<?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value->features; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->_loop = true;
?>
	<li>
		<label><?php echo $_smarty_tpl->tpl_vars['f']->value->name;?>
</label>
		<span><?php echo $_smarty_tpl->tpl_vars['f']->value->value;?>
</span>
	</li>
	<?php } ?>
	</ul>
	<!-- Характеристики товара (The End)-->
	<?php }?>

	<!-- Соседние товары /-->
	<div id="back_forward">
		<?php if ($_smarty_tpl->tpl_vars['prev_product']->value) {?>
			←&nbsp;<a class="prev_page_link" href="products/<?php echo $_smarty_tpl->tpl_vars['prev_product']->value->url;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prev_product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['next_product']->value) {?>
			<a class="next_page_link" href="products/<?php echo $_smarty_tpl->tpl_vars['next_product']->value->url;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['next_product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>&nbsp;→
		<?php }?>
	</div>
	
</div>
<!-- Описание товара (The End)-->


<?php if ($_smarty_tpl->tpl_vars['related_products']->value) {?>
<h2>Так же советуем посмотреть</h2>
<!-- Список каталога товаров-->
<ul class="tiny_products">
	<?php  $_smarty_tpl->tpl_vars['related_product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['related_product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['related_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['related_product']->key => $_smarty_tpl->tpl_vars['related_product']->value) {
$_smarty_tpl->tpl_vars['related_product']->_loop = true;
?>
	<!-- Товар-->
	<li class="product">
		
		<!-- Фото товара -->
		<?php if ($_smarty_tpl->tpl_vars['related_product']->value->image) {?>
		<div class="image">
			<a href="products/<?php echo $_smarty_tpl->tpl_vars['related_product']->value->url;?>
"><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['related_product']->value->image->filename,200,200);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['related_product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/></a>
		</div>
		<?php }?>
		<!-- Фото товара (The End) -->

		<!-- Название товара -->
		<h3><a data-product="<?php echo $_smarty_tpl->tpl_vars['related_product']->value->id;?>
" href="products/<?php echo $_smarty_tpl->tpl_vars['related_product']->value->url;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['related_product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a></h3>
		<!-- Название товара (The End) -->

		<?php if (count($_smarty_tpl->tpl_vars['related_product']->value->variants)>0) {?>
		<!-- Выбор варианта товара -->
		<form class="variants" action="/cart">
			<table>
			<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['related_product']->value->variants; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['v']->index++;
 $_smarty_tpl->tpl_vars['v']->first = $_smarty_tpl->tpl_vars['v']->index === 0;
?>
			<tr class="variant">
				<td>
					<input id="related_<?php echo $_smarty_tpl->tpl_vars['v']->value->id;?>
" name="variant" value="<?php echo $_smarty_tpl->tpl_vars['v']->value->id;?>
" type="radio" class="variant_radiobutton"  <?php if ($_smarty_tpl->tpl_vars['v']->first) {?>checked<?php }?> <?php if (count($_smarty_tpl->tpl_vars['related_product']->value->variants)<2) {?> style="display:none;"<?php }?>/>
				</td>
				<td>
					<?php if ($_smarty_tpl->tpl_vars['v']->value->name) {?><label class="variant_name" for="related_<?php echo $_smarty_tpl->tpl_vars['v']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value->name;?>
</label><?php }?>
				</td>
				<td>
					<?php if ($_smarty_tpl->tpl_vars['v']->value->compare_price>0) {?><span class="compare_price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['v']->value->compare_price);?>
</span><?php }?>
					<span class="price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['v']->value->price);?>
 <span class="currency"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span></span>
				</td>
			</tr>
			<?php } ?>
			</table>
			<input type="submit" class="button" value="в корзину" data-result-text="добавлено"/>
		</form>
		<!-- Выбор варианта товара (The End) -->
		<?php } else { ?>
			Нет в наличии
		<?php }?>


	</li>
	<!-- Товар (The End)-->
	<?php } ?>
</ul>
<?php }?>

<!-- Комментарии -->
<div id="comments">

	<h2>Комментарии</h2>
	
	<?php if ($_smarty_tpl->tpl_vars['comments']->value) {?>
	<!-- Список с комментариями -->
	<ul class="comment_list">
		<?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>
		<a name="comment_<?php echo $_smarty_tpl->tpl_vars['comment']->value->id;?>
"></a>
		<li>
			<!-- Имя и дата комментария-->
			<div class="comment_header">	
				<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value->name, ENT_QUOTES, 'UTF-8', true);?>
 <i><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['date'][0][0]->date_modifier($_smarty_tpl->tpl_vars['comment']->value->date);?>
, <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['time'][0][0]->time_modifier($_smarty_tpl->tpl_vars['comment']->value->date);?>
</i>
				<?php if (!$_smarty_tpl->tpl_vars['comment']->value->approved) {?>ожидает модерации</b><?php }?>
			</div>
			<!-- Имя и дата комментария (The End)-->
			
			<!-- Комментарий -->
			<?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value->text, ENT_QUOTES, 'UTF-8', true));?>

			<!-- Комментарий (The End)-->
		</li>
		<?php } ?>
	</ul>
	<!-- Список с комментариями (The End)-->
	<?php } else { ?>
	<p>
		Пока нет комментариев
	</p>
	<?php }?>
	
	<!--Форма отправления комментария-->	
	<form class="comment_form" method="post">
		<h2>Написать комментарий</h2>
		<?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
		<div class="message_error">
			<?php if ($_smarty_tpl->tpl_vars['error']->value=='captcha') {?>
			Неверно введена капча
			<?php } elseif ($_smarty_tpl->tpl_vars['error']->value=='empty_name') {?>
			Введите имя
			<?php } elseif ($_smarty_tpl->tpl_vars['error']->value=='empty_comment') {?>
			Введите комментарий
			<?php }?>
		</div>
		<?php }?>
		<textarea class="comment_textarea" id="comment_text" name="text" data-format=".+" data-notice="Введите комментарий"><?php echo $_smarty_tpl->tpl_vars['comment_text']->value;?>
</textarea><br />
		<div>
		<label for="comment_name">Имя</label>
		<input class="input_name" type="text" id="comment_name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['comment_name']->value;?>
" data-format=".+" data-notice="Введите имя"/><br />

		<input class="button" type="submit" name="comment" value="Отправить" />
		
		<label for="comment_captcha">Число</label>
		<div class="captcha"><img src="captcha/image.php?<?php echo smarty_function_math(array('equation'=>'rand(10,10000)'),$_smarty_tpl);?>
" alt='captcha'/></div> 
		<input class="input_captcha" id="comment_captcha" type="text" name="captcha_code" value="" data-format="\d\d\d\d" data-notice="Введите капчу"/>
		
		</div>
	</form>
	<!--Форма отправления комментария (The End)-->
	
</div>
<!-- Комментарии (The End) -->



<script type="text/javascript" src="js/fancybox/jquery.fancybox.pack.js"></script>
<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />

<script>
$(function() {
	// Раскраска строк характеристик
	$(".features li:even").addClass('even');

	// Зум картинок
	$("a.zoom").fancybox({
		prevEffect	: 'fade',
		nextEffect	: 'fade'});
	});
</script>
<?php }} ?>
