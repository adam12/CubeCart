{if $COOKIE_DIALOGUE}
<div class="row">
   <form action="{$VAL_SELF}" class="marg" method="POST">
      <div class="large-10 columns">
         {$LANG.notification.cookie_dialogue|replace:'%s':{$CONFIG.store_name}}
      </div>
      <div class="large-2 columns">
         <input type="submit" class="button tiny secondary" name="accept_cookies_submit" value="{$LANG.common.continue}" />
         <input type="hidden" name="accept_cookies" value="1" />
      </div>
   </form>
</div>
</div>
{/if}