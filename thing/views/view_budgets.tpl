{include file="header.tpl"}

<b>Add Budget</b>
<form method="post" action="">
	<table border="0" cellpadding="5">
		<tr>
			<td><b>Title:</b></td>
			<td colspan="2"><input type="text" name="Title"></td>
			<td style="font-size:10px;"><img src="{$http_images}icons/help.png"> Name this budget will be referred to by.</td>
		</tr>
		<tr>
			<td><b>Comment:</b></td>
			<td colspan="2"><input type="text" name="Comment"></td>
		</tr>
		<tr>
			<td colspan="2" align="right"><input type="submit" name="add_budget" value="Add Budget"></td>
			<td>&nbsp;</td>
		</tr>
	</table>
</form>

<hr>

<ul> <b>Active</b>
	{foreach from=$tplActive item=r}
		<li><a href="view_budget/?id={$r.BudgetId}">{$r.Title}</a> - {$r.Modified} - {$r.Comment}</li>
	{/foreach}
</ul>

<ul> <b>Inactive</b>
	{foreach from=$tplInactive item=r}
		<li><a href="view_budget/?id={$r.BudgetId}">{$r.Title}</a> - {$r.Modified} - {$r.Comment}</li>
	{/foreach}
</ul>
{include file="footer.tpl"}
