{foreach from=$tplSubMenu item=sub}
        <div class="box">
			<h3>{$sub.title}</h3>
			<ul class="bottom">
                        {foreach from=$sub.items item=r}
       			
				<li><a href="{$r.link}">{$r.title}</a></li>
			{/foreach}
			</ul>
	</div>
{/foreach}
