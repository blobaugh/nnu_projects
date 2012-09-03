{include file="sub_header.tpl"}

<form method="post" action="">
	<table border="0" cellpadding="5">
		<tr>
			<td><b>Title:</b></td>
			<td><input type="text" name="Title"></td>
			<td style="font-size:10px;"><img src="{$http_images}icons/help.png"> What this budget will be referred to as.</td>
		</tr>
		<tr>
			<td><b>Dollars:</b></td>
			<td><input type="text" name="Dollars"></td>
			<td style="font-size:10px;"><img src="{$http_images}icons/help.png"> No symbols</td>
		</tr>
		<tr>
			<td><b>Percent:</b></td>
			<td><input type="text" name="Percent"></td>
			<td style="font-size:10px;"><img src="{$http_images}icons/help.png"> No symbols</td>
		</tr>
		<tr>
			<td><b>Comment:</b></td>
			<td colspan="2"><input type="text" name="Comment"></td>
		</tr>
		<tr>
			<td colspan="2" align="right"><input type="submit" name="add_field" value="Add Field"></td>
			<td>&nbsp;</td>
		</tr>
	</table>
</form>

<hr />

<ul>
        <li><b>Budget: </b> {$tplBudget.Title}</li>
        <li><b>Comment: </b> {$tplBudget.Comment}</li>
        <li>{$tplBudget.Modified}</li>
</ul>

<center>
<table border="0" cellpadding="5">
	<tr>
		<th>Title</th>
		<th>Dollars</th>
		<th>Percent</th>
		<th>Comment</th>
		<th>Modified</th>
	</tr>
	{foreach from=$tplFields item=r}
		<tr class="{cycle values="rowa, rowb"}">
			<td><a href="edit_field/?id={$r.BudgetFieldId}">{$r.Title}</a></td>
			<td>${$r.Dollars}</td>
			<td>{$r.Percent}%</td>
			<td>{$r.Comment}</td>
			<td>{$r.Modified}
		</tr>
	{/foreach}
</table>
</center>
<br />
{include file="footer.tpl"}
