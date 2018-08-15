{* Главная страница магазина *}

{* Для того чтобы обернуть центральный блок в шаблон, отличный от index.tpl *}
{* Укажите нужный шаблон строкой ниже. Это работает и для других модулей *}
{$wrapper = 'index.tpl' scope=parent}

{* Канонический адрес страницы *}
{$canonical="" scope=parent}

{* Заголовок страницы *}
<h1>{$page->header}</h1>

{* Тело страницы *}
{$page->body}


{* Рекомендуемые товары *}
{get_featured_products var=featured_products}
{if $featured_products}
<!-- Список товаров-->
<h1>Рекомендуемые товары</h1>
	<div class="row">


		<ul class="tiny_products">

			{foreach $featured_products as $product}
			<!-- Товар-->
			<li class="col-sm-12 col-md-12 product">
				<div class="row">
					<div class="col-sm-12 col-md-4">
						<!-- Фото товара -->
                        {if $product->image}
							<div class="image">
								<a href="products/{$product->url}"><img src="{$product->image->filename|resize:200:200}" alt="{$product->name|escape}"/></a>
							</div>
                        {/if}
						<!-- Фото товара (The End) -->
					</div>

					<div class="col-sm-12 col-md-8">
						<!-- Название товара -->
						<h3><a data-product="{$product->id}" href="products/{$product->url}">{$product->name|escape}</a></h3>
						<!-- Название товара (The End) -->

                        {if $product->variants|count > 0}
							<!-- Выбор варианта товара -->
							<form class="variants" action="/cart">

                                    {foreach $product->variants as $v}

										<tr class="variant">
											<td>
												<input id="variants_{$v->id}" name="variant" value="{$v->id}" type="radio" class="variant_radiobutton" {if $v@first}checked{/if} {if $product->variants|count<2}style="display:none;"{/if}/>
											</td>
											<td>
                                                {if $v->name}<label class="variant_name" for="variants_{$v->id}">{$v->name}</label>{/if}
											</td>
											<td>
                                                {if $v->compare_price > 0}<span class="compare_price">{$v->compare_price|convert}</span>{/if}
												<span class="price">{$v->price|convert} <span class="currency">{$currency->sign|escape}</span></span>
											</td>
										</tr>
										<br><br><br><br>


										<table width="100%" border="0" cellspacing="5" cellpadding="0" class="desc_table">

											<tbody><tr>

												<td class="style9">Носки женские ТМ Акцент (арт. 0196) ( ДОПРОДАЖА - ЦЕНА 2014 ГОДА) </td>

											</tr>

											<tr>

												<td><p>
														Цвет: голубой<br>
														Размер: 23-25<br>
														Состав: хлопок - 80%, ПА - 15%, Спандекс - 5%</p>
													<div id="cke_pastebin">
														<table border="1" cellpadding="1" cellspacing="1" style="width: 510px;">
															<tbody>
															<tr>
																<td>
																	В магазинах Украины (розничная цена)</td>
																<td>
																	&nbsp;20 грн &nbsp;- <b>25</b>&nbsp;грн</td>
															</tr>
															<tr>
																<td>
																	&nbsp;Для клиентов сайта заказ от 250 грн&nbsp;</td>
																<td>
																	&nbsp;17,26 грн&nbsp;<span style="color: rgb(255, 0, 0);"><strong>СТАРАЯ ЦЕНА</strong></span></td>
															</tr>
															<tr>
																<td>
																	&nbsp;Для клиентов сайта заказ от&nbsp;<strong>200 грн</strong></td>
																<td>
																	&nbsp;<strong>11,42</strong>&nbsp;грн&nbsp;<strong>ЦЕНА С 7 МАРТА</strong></td>
															</tr>
															<tr>
																<td>
																	Для предпринимателей ОПТ от 1000грн</td>
																<td>
																	Детали в разделе " ЦЕНЫ ОПТ "</td>
															</tr>
															</tbody>
														</table>
													</div>
												</td>

											</tr>

											<tr>
												<td>
													<table style="width:100%; min-width:400px;">
														<tbody><tr>
															<td colspan="2" style="width:50%; font-size:14px; font-weight:bold; text-align:center"></td>
														</tr>
														<tr>
															<td style="width:50%; font-size:13px; font-weight:bold; text-align:center;">

															</td>
															<td style="width:50%; font-size:13px; font-weight:bold; text-align:center;">

															</td>
														</tr>
														<tr>
															<td colspan="2" style="width:50%; font-size:14px; font-weight:bold; text-align:center"><hr></td>
														</tr>
														<tr>
														</tr></tbody></table>

												</td>
											</tr>
											</tbody></table>

                                    {/foreach}

								<input type="submit" class="button" value="в корзину" data-result-text="добавлено"/>
							</form>
							<!-- Выбор варианта товара (The End) -->
                        {else}
							Нет в наличии
                        {/if}

					</div>
				</div>







			</li>
			<!-- Товар (The End)-->
			{/foreach}

		</ul>
	</div>
{/if}


{* Новинки *}
{get_new_products var=new_products limit=3}
{if $new_products}
<h1>Новинки</h1>
<!-- Список товаров-->
<ul class="tiny_products">

	{foreach $new_products as $product}

	<!-- Товар-->
	<li class="product">
		
		<!-- Фото товара -->
		{if $product->image}
		<div class="image">
			<a href="products/{$product->url}"><img src="{$product->image->filename|resize:200:200}" alt="{$product->name|escape}"/></a>
		</div>
		{/if}
		<!-- Фото товара (The End) -->

		<!-- Название товара -->
		<h3><a data-product="{$product->id}" href="products/{$product->url}">{$product->name|escape}</a></h3>
		<!-- Название товара (The End) -->

		{if $product->variants|count > 0}
		<!-- Выбор варианта товара -->
		<form class="variants" action="/cart">
			<table>
			{foreach $product->variants as $v}
			<tr class="variant">
				<td>
					<input id="new_{$v->id}" name="variant" value="{$v->id}" type="radio" class="variant_radiobutton" {if $v@first}checked{/if} {if $product->variants|count<2}style="display:none;"{/if}/>
				</td>
				<td>
					{if $v->name}<label class="variant_name" for="new_{$v->id}">{$v->name}</label>{/if}
				</td>
				<td>
					{if $v->compare_price > 0}<span class="compare_price">{$v->compare_price|convert}</span>{/if}
					<span class="price">{$v->price|convert} <span class="currency">{$currency->sign|escape}</span></span>
				</td>
			</tr>
			{/foreach}
			</table>
			<input type="submit" class="button" value="в корзину" data-result-text="добавлено"/>
		</form>
		<!-- Выбор варианта товара (The End) -->
		{else}
			Нет в наличии
		{/if}

	</li>
	<!-- Товар (The End)-->
	{/foreach}
			
</ul>
{/if}	


{* Акционные товары *}
{get_discounted_products var=discounted_products limit=9}
{if $discounted_products}
<h1>Акционные товары</h1>
<!-- Список товаров-->
<ul class="tiny_products">

	{foreach $discounted_products as $product}
	<!-- Товар-->
	<li class="product">
		
		<!-- Фото товара -->
		{if $product->image}
		<div class="image">
			<a href="products/{$product->url}"><img src="{$product->image->filename|resize:200:200}" alt="{$product->name|escape}"/></a>
		</div>
		{/if}
		<!-- Фото товара (The End) -->

		<!-- Название товара -->
		<h3><a data-product="{$product->id}" href="products/{$product->url}">{$product->name|escape}</a></h3>
		<!-- Название товара (The End) -->
		
		{if $product->variants|count > 0}
		<!-- Выбор варианта товара -->
		<form class="variants" action="/cart">
			<table>
			{foreach $product->variants as $v}
			<tr class="variant">
				<td>
					<input id="discounted_{$v->id}" name="variant" value="{$v->id}" type="radio" class="variant_radiobutton" {if $v@first}checked{/if} {if $product->variants|count<2}style="display:none;"{/if}/>
				</td>
				<td>
					{if $v->name}<label class="variant_name" for="discounted_{$v->id}">{$v->name}</label>{/if}
				</td>
				<td>
					{if $v->compare_price > 0}<span class="compare_price">{$v->compare_price|convert}</span>{/if}
					<span class="price">{$v->price|convert} <span class="currency">{$currency->sign|escape}</span></span>
				</td>
			</tr>
			{/foreach}
			</table>
			<input type="submit" class="button" value="в корзину" data-result-text="добавлено"/>
		</form>
		<!-- Выбор варианта товара (The End) -->
		{else}
			Нет в наличии
		{/if}

	</li>
	<!-- Товар (The End)-->
	{/foreach}
			
</ul>
{/if}