<!DOCTYPE html>
<html class="no-js" xmlns="http://www.w3.org/1999/xhtml" dir="{$TEXT_DIRECTION}" lang="{$HTML_LANG}">
  <head>
	<title>{$META_TITLE}</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="canonical" href="{$VAL_SELF}" />
	<link rel="shortcut icon" href="{$STORE_URL}/favicon.ico" type="image/x-icon" />
	
	<link rel="stylesheet" href="{$STORE_URL}/skins/{$SKIN_FOLDER}/css/foundation.css" />
    <link rel="stylesheet" href="{$STORE_URL}/skins/{$SKIN_FOLDER}/css/styles.css" />
    <script src="{$STORE_URL}/skins/{$SKIN_FOLDER}/js/vendor/modernizr.js"></script>

	{if isset($CSS)}
		{foreach from=$CSS key=css_keys item=css_files}
		  <link rel="stylesheet" type="text/css" href="{$STORE_URL}/{$css_files}" media="screen" />
	    {/foreach}
    {/if}
	<!--[if IE 7]><link rel="stylesheet" type="text/css" href="{$STORE_URL}/skins/{$SKIN_FOLDER}/styles/ie7.css" media="screen" /><![endif]-->
	<meta http-equiv="Content-Type" content="text/html;charset={$CHARACTER_SET}" />
	<meta name="description" content="{if isset($META_DESCRIPTION)}{$META_DESCRIPTION}{/if}" />
	<meta name="keywords" content="{if isset($META_KEYWORDS)}{$META_KEYWORDS}{/if}" />
	<meta name="robots" content="index, follow" />
	<meta name="generator" content="cubecart" />
	{if $FBOG}
	<meta property="og:image" content="{$PRODUCT.thumbnail}">
	<meta property="og:url" content="{$VAL_SELF}">
	{/if}
	{if $ANALYTICS}
	{literal}<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', '{/literal}{$ANALYTICS}{literal}']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	
	</script>{/literal}
	{/if}
  </head>
  

<body>

	<div class="header-nav">
	  <div class="row">
	  	{$SESSION}
	  	{$LANGUAGE}
	  	{$CURRENCY}
	  </div>
	</div>
	<div id="header">
	  {$SEARCH_FORM}
	  <p class="logo"><a href="{$STORE_URL}"><img src="{$STORE_LOGO}" alt="{$META_TITLE}" /></a></p>
	</div>
	<div id="breadcrumb">
	  <ul>
		<li><a href="{$STORE_URL}">{$LANG.common.home}</a></li>
		{foreach from=$CRUMBS item=crumb}
		<li><a href="{$crumb.url}">{$crumb.title}</a></li>
		{/foreach}
	  </ul>
	</div>

	
	<div class="row {$SECTION_NAME}_wrapper">
		  <div class="large-3 columns">
			{$CATEGORIES}
			{$SALE_ITEMS}
			{$MAIL_LIST}
		  </div>
		  
		  <div class="large-6 columns">
			{include file='templates/box.errors.php'}
			{if isset($CHECKOUT_PROGRESS)}{$CHECKOUT_PROGRESS}{/if}
			{$PAGE_CONTENT}
		  </div>
		  
		  <div class="large-3 columns">
			{$SHOPPING_CART}
			{$RANDOM_PROD}
			{if isset($POPULAR_PRODUCTS)}{$POPULAR_PRODUCTS}{/if}
		  </div>
		  
	</div>
	
	<div id="documents">{if isset($SKIN_SELECT)}{$SKIN_SELECT}{/if} {$SITE_DOCS}</div>
  
  {$COPYRIGHT}
  {if !$CONFIG.disable_mobile_skin}<p id="mobile_switch"><a href="{$STORE_URL}/index.php?display_mobile=1">{$LANG.common.mobile_site}</a></p>{/if}
  
  {if isset($DEBUG_INFO)}{$DEBUG_INFO}{/if}

  <script src="{$STORE_URL}/skins/{$SKIN_FOLDER}/js/vendor/jquery.js"></script>
  <script src="{$STORE_URL}/skins/{$SKIN_FOLDER}/js/foundation.min.js"></script>
  <script>
      $(document).foundation();
  </script>
  
  <script type="text/javascript" src="{$STORE_URL}/skins/{$SKIN_FOLDER}/js/cubecart/common.js"></script>

  {if isset($LIVE_HELP)}{$LIVE_HELP}{/if}
  
  {if $COOKIE_DIALOGUE}
  
  {/if}
  
</body>
</html>