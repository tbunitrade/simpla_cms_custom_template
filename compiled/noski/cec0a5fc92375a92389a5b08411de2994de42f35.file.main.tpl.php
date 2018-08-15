<?php /* Smarty version Smarty-3.1.18, created on 2018-08-15 17:10:03
         compiled from "D:\myserver\OSPanel\domains\simpla-noski\design\noski\html\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:54735b73ab71433aa6-73371613%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cec0a5fc92375a92389a5b08411de2994de42f35' => 
    array (
      0 => 'D:\\myserver\\OSPanel\\domains\\simpla-noski\\design\\noski\\html\\main.tpl',
      1 => 1534342193,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54735b73ab71433aa6-73371613',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5b73ab71762738_52860822',
  'variables' => 
  array (
    'page' => 0,
    'featured_products' => 0,
    'product' => 0,
    'v' => 0,
    'currency' => 0,
    'new_products' => 0,
    'discounted_products' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b73ab71762738_52860822')) {function content_5b73ab71762738_52860822($_smarty_tpl) {?>



<?php $_smarty_tpl->tpl_vars['wrapper'] = new Smarty_variable('index.tpl', null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['wrapper'] = clone $_smarty_tpl->tpl_vars['wrapper'];?>


<?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable('', null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];?>


<h1><?php echo $_smarty_tpl->tpl_vars['page']->value->header;?>
</h1>


<?php echo $_smarty_tpl->tpl_vars['page']->value->body;?>




<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_featured_products'][0][0]->get_featured_products_plugin(array('var'=>'featured_products'),$_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['featured_products']->value) {?>
<!-- Список товаров-->
<h1>Рекомендуемые товары</h1>
	<div class="row">


		<ul class="tiny_products">

			<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['featured_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
			<!-- Товар-->
			<li class="col-sm-12 col-md-12 product">
				<div class="row">
					<div class="col-sm-12 col-md-4">
						<!-- Фото товара -->
                        <?php if ($_smarty_tpl->tpl_vars['product']->value->image) {?>
							<div class="image">
								<a href="products/<?php echo $_smarty_tpl->tpl_vars['product']->value->url;?>
"><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['product']->value->image->filename,200,200);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/></a>
							</div>
                        <?php }?>
						<!-- Фото товара (The End) -->
					</div>

					<div class="col-sm-12 col-md-8">
						<!-- Название товара -->
						<h3><a data-product="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" href="products/<?php echo $_smarty_tpl->tpl_vars['product']->value->url;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a></h3>
						<!-- Название товара (The End) -->

                        <?php if (count($_smarty_tpl->tpl_vars['product']->value->variants)>0) {?>
							<!-- Выбор варианта товара -->
							<form class="variants" action="/cart">

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
												<input id="variants_<?php echo $_smarty_tpl->tpl_vars['v']->value->id;?>
" name="variant" value="<?php echo $_smarty_tpl->tpl_vars['v']->value->id;?>
" type="radio" class="variant_radiobutton" <?php if ($_smarty_tpl->tpl_vars['v']->first) {?>checked<?php }?> <?php if (count($_smarty_tpl->tpl_vars['product']->value->variants)<2) {?>style="display:none;"<?php }?>/>
											</td>
											<td>
                                                <?php if ($_smarty_tpl->tpl_vars['v']->value->name) {?><label class="variant_name" for="variants_<?php echo $_smarty_tpl->tpl_vars['v']->value->id;?>
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
<br><br>
										<table width="100%" border="0" cellspacing="5" cellpadding="0" class="desc_table">

											<tbody><tr>

												<td class="style9">Носки женские ТМ Акцент (арт. 0196) ( ДОПРОДАЖА - ЦЕНА 2014 ГОДА) </td>

											</tr>

											<tr>

												<td><p>
														Цвет: голубой<br>
														Размер: 23-25<br>
														Состав: хлопок - 80%, ПА - 15%, Спандекс - 5%</p>

												</td>

											</tr>

											</tbody>
										</table>
										<div class="row">
											<div class="btn">
												<input type="hidden" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['v']->value->price);?>
" id="mydata">
											</div>
										</div>
										<div class="row" >

											<div class="col-xs-6 col-md-6">			В магазинах Украины (розничная цена)</div>
											<div class="col-xs-6 col-md-6"> <input id="start" value="0"> грн - <b id="startb">0</b>&nbsp;грн</div>
										</div>
										<div class="row">
											<div class="col-xs-6 col-md-6">
												&nbsp;Для клиентов сайта заказ от 250 грн </div>
											<div class="col-xs-6 col-md-6">
												<div id="target250"></div> грн
												<span style="color: rgb(255, 0, 0);">
													<strong>СТАРАЯ ЦЕНА</strong>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-6 col-md-6">
												Для клиентов сайта заказ от <strong>200 грн</strong>
											</div>
											<div class="col-xs-6 col-md-6">
												<strong id="target200"></strong> грн <strong>ЦЕНА С ... МАРТА</strong>
											</div>
										</div>

										<div class="row">
											<div class="col-md-6">
												Для предпринимателей ОПТ от 1000 грн
											</div>

											<div class="col-md-6">
												Детали в разделе " ЦЕНЫ ОПТ "
											</div>

										</div>
                                    <?php } ?>

								<input type="submit" class="button" value="в корзину" data-result-text="добавлено"/>
							</form>
							<!-- Выбор варианта товара (The End) -->
                        <?php } else { ?>
							Нет в наличии
                        <?php }?>

					</div>
				</div>







			</li>
			<!-- Товар (The End)-->
			<?php } ?>

		</ul>
	</div>
<?php }?>



<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_new_products'][0][0]->get_new_products_plugin(array('var'=>'new_products','limit'=>3),$_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['new_products']->value) {?>
<h1>Новинки</h1>
<!-- Список товаров-->
<ul class="tiny_products">

	<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['new_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>

	<!-- Товар-->
	<li class="product">
		
		<!-- Фото товара -->
		<?php if ($_smarty_tpl->tpl_vars['product']->value->image) {?>
		<div class="image">
			<a href="products/<?php echo $_smarty_tpl->tpl_vars['product']->value->url;?>
"><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['product']->value->image->filename,200,200);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/></a>
		</div>
		<?php }?>
		<!-- Фото товара (The End) -->

		<!-- Название товара -->
		<h3><a data-product="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" href="products/<?php echo $_smarty_tpl->tpl_vars['product']->value->url;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a></h3>
		<!-- Название товара (The End) -->

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
					<input id="new_<?php echo $_smarty_tpl->tpl_vars['v']->value->id;?>
" name="variant" value="<?php echo $_smarty_tpl->tpl_vars['v']->value->id;?>
" type="radio" class="variant_radiobutton" <?php if ($_smarty_tpl->tpl_vars['v']->first) {?>checked<?php }?> <?php if (count($_smarty_tpl->tpl_vars['product']->value->variants)<2) {?>style="display:none;"<?php }?>/>
				</td>
				<td>
					<?php if ($_smarty_tpl->tpl_vars['v']->value->name) {?><label class="variant_name" for="new_<?php echo $_smarty_tpl->tpl_vars['v']->value->id;?>
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



<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_discounted_products'][0][0]->get_discounted_products_plugin(array('var'=>'discounted_products','limit'=>9),$_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['discounted_products']->value) {?>
<h1>Акционные товары</h1>
<!-- Список товаров-->
<ul class="tiny_products">

	<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['discounted_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
	<!-- Товар-->
	<li class="product">
		
		<!-- Фото товара -->
		<?php if ($_smarty_tpl->tpl_vars['product']->value->image) {?>
		<div class="image">
			<a href="products/<?php echo $_smarty_tpl->tpl_vars['product']->value->url;?>
"><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['product']->value->image->filename,200,200);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/></a>
		</div>
		<?php }?>
		<!-- Фото товара (The End) -->

		<!-- Название товара -->
		<h3><a data-product="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" href="products/<?php echo $_smarty_tpl->tpl_vars['product']->value->url;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a></h3>
		<!-- Название товара (The End) -->
		
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
					<input id="discounted_<?php echo $_smarty_tpl->tpl_vars['v']->value->id;?>
" name="variant" value="<?php echo $_smarty_tpl->tpl_vars['v']->value->id;?>
" type="radio" class="variant_radiobutton" <?php if ($_smarty_tpl->tpl_vars['v']->first) {?>checked<?php }?> <?php if (count($_smarty_tpl->tpl_vars['product']->value->variants)<2) {?>style="display:none;"<?php }?>/>
				</td>
				<td>
					<?php if ($_smarty_tpl->tpl_vars['v']->value->name) {?><label class="variant_name" for="discounted_<?php echo $_smarty_tpl->tpl_vars['v']->value->id;?>
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
<?php }?><?php }} ?>
