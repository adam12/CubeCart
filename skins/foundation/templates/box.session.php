<ul class="left">
	{if $IS_USER}
	<li><a href="{$STORE_URL}/index.php?_a=account" title="{$LANG.account.your_account}">{$LANG_WELCOME_BACK}</a></li>
	<li class="divider"></li>
	<li><a href="{$STORE_URL}/index.php?_a=logout" title="{$LANG.account.logout}">{$LANG.account.logout}</a></li>
	<li class="divider"></li>
	<li><a href="{$STORE_URL}/index.php?_a=account" title="{$LANG.account.your_account}">{$LANG.account.your_account}</a></li>
	{else}
	<li><a href="{$URL.login}" title="{$LANG.account.log_in}">{$LANG.account.log_in}</a></li>
	<li class="divider"></li>
	<li><a href="{$URL.register}" title="{$LANG.account.register}">{$LANG.account.register}</a></li>
	{/if}
</ul>