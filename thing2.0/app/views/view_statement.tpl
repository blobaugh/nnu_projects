{include file="sub_header.tpl"}

<ul>
	<li><b>From:</b> {$tplIncome.From}</li>
	<li><b>Amount: <font color="green">${$tplIncome.Amount}</font></b></li>
	<li><b>Comment: </b>{$tplIncome.Comment}</li>
	<li>{$tplIncome.Created}</li>
</ul>

<center>
<table border="0" cellpadding="5">
	<tr>
		<th>Title</th>
		<th>Dollars</th>
		<th>Percent</th>
		<th>Amount</th>
		<th>Remaining</th>
		<th>Comment</th>
	</tr>
	{foreach from=$tplFields item=r}
		<tr class="{cycle values="rowa, rowb"}">
			<td><a href="edit_field/?id={$r.BudgetFieldId}">{$r.Title}</a></td>
			<td>${$r.Dollars}</td>
			<td>{$r.Percent}%</td>
			<td>${$r.Amount}
			<td>{if $r.Remaining > 1} <font color="green"> {else} <font color="red"> {/if} ${$r.Remaining}</font></td>
			<td>{$r.Comment}
		</tr>
	{/foreach}
</table>
</center>

{if $tplRemaining > 0}
	<br />There are <font color="green"><b>${$tplRemaining}</b></font>. I suggest you put this into saving or investments.
{else}
	<br /><span style="background-color: red;">You do not have enough money! Please come up with ${$tplRemaining} or manually adjust your budget.</span>
{/if}
<br />
{include file="footer.tpl"}
