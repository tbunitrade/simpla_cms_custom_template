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
												<input type="hidden" value="{$v->price|convert}" id="mydata">
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