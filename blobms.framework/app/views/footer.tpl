                </td>

                <td width="175" valign="top">
                        <div class="right_column">{include file="right_column.tpl"}</div>
                </td>

        </tr>
</table>

</div> {* end inner_container *}
</center>
</div> {* end outer_container *}

<div class="footer">
<table width="100%">
        <tr>
                <td valign="top">
                        {foreach from=$menu item=r}
                                        <a href="{$r.Link}">{$r.Title}</a>
                                {/foreach}
                </td>
                <td align="right">
                        Copyright Nazarene Church
                        <br />Website by Ben Lobaugh
                </td>
        </tr>
</table>
</div>
</center>

</body>

</html>
