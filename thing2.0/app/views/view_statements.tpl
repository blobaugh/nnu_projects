{include file="header.tpl"}

<b>Add Income</b>
<form method="post" action="">
	<table border="0" cellpadding="5">
		<tr>
			<td><b>Buget:</b></td>
			<td>{$tplBudgetMenu}</td>
			<td style="font-size:10px;"><img src="{$http_images}icons/help.png"> Please choose a budget to apply this income to.</td>
		</tr>
		<tr>
			<td><b>From:</b></td>
			<td colspan="2"><input type="text" name="From"></td>
		</tr>
		<tr>
			<td><b>Amount:</b></td>
			<td><input type="text" name="Amount"></td>
			<td style="font-size:10px;"><img src="{$http_images}icons/help.png"> Number on. No '$'</td>
		</tr>
		<tr>
			<td><b>Comment:</b></td>
			<td colspan="2"><input type="text" name="Comment"></td>
		</tr>
		<tr>
			<td colspan="2" align="right"><input type="submit" name="add_income" value="Add Income"></td>
			<td>&nbsp;</td>
		</tr>
	</table>
</form>

<hr>

<ul>
	{foreach from=$tplStatements item=r}
		<li><a href="?delete={$r.IncomeId}"><img src="{$http_images}icons/delete.png" border="0" alt="Delte this income statement" title="Delete this income statement"></a> - <b>{$r.Created}</b> - <a href="view_statement/?id={$r.IncomeId}">{$r.From} - {$r.Amount}</a> - {$r.Comment}</li>
	{/foreach}
</ul>

{include file="footer.tpl"}
