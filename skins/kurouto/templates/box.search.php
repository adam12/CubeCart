<div id="quick_search">
  <form action="{$ROOT_PATH}index.php" method="get">
	<span class="search"><input name="search[keywords]" type="text" id="keywords" title="{$LANG.search.input_default}" size="18" /></span>
	<input type="hidden" name="_a" value="category" />
	<input class="search" type="submit" value="{$LANG.common.search}" />
	<p class="advanced"><a href="{$SEARCH_URL}">{$LANG.search.advanced}</a></p>
	  </form>
</div>