<div class="row">
	<div class="large-12 columns text-right">
		<a href="{$SEARCH_URL}">{$LANG.search.advanced}</a>
	</div>
</div>
<form action="{$ROOT_PATH}index.php" method="get">
	<div class="row collapse">
		<div class="large-8 large-push-2 columns">
			<input name="search[keywords]" type="text" placeholder="{$LANG.search.input_default}" />
		</div>
		<div class="large-2 columns">
			<input class="button postfix" type="submit" value="{$LANG.common.search}" />
		</div>
	</div>
	<input type="hidden" name="_a" value="category" />
</form>
