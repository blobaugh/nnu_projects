{include file="header.tpl"}


{$content}

<center>
        <table width="80%" border="0" cellpadding="4" cellspacing="0">
                <tr>
                 <th><img src="{$http_images}icons/vcard.png" alt="Department" title="Department" width="16" height="16" class="icon" />Department</th>
                        <th><img src="{$http_images}icons/database.png" alt="Database" title="Database" width="16" height="16" class="icon" />Total Products</th>
                        <th><img src="{$http_images}icons/database.png" alt="Database" title="Database" width="16" height="16" class="icon" />Total On Hand</th>
                        <th><img src="{$http_images}icons/database_error.png" alt="Database" title="Database" width="16" height="16" class="icon" />Low On Hand</th>
                        <th><img src="{$http_images}icons/coins.png" alt="Price" title="Price" width="16" height="16" class="icon" />Total Value</th>

                </tr>

                {foreach from=$stats item=r}
                <tr>
                        <td>{$r.name}</td>
                        <td align="right">{$r.total_products}</td>
                        <td align="right">{$r.total_on_hand}</td>
                        <td align="right" {if $r.low_on_hand > 0}style="background-color: #fcc"{/if}>{$r.low_on_hand}</td>
                        <td align="right">{$r.total_value}</td>
                </tr>
                {/foreach}

        </table>
</center>


<br />
<br />





<center>
        <table width="80%" border="0" cellpadding="4" cellspacing="0">
                <tr class="noBorders">
                        <td colspan="5"><a href="{$http_link}department"><img src="{$http_images}icons/vcard_add.png" alt="New" title="New" width="16" height="16" class="icon" />New Department</a></td>
                </tr>
                <tr>
                        <th><img src="{$http_images}icons/vcard.png" alt="Department" title="Department" width="16" height="16" class="icon" />Name</th>
                        <th width="1%"><img src="{$http_images}icons/vcard_edit.png" alt="Edit" title="Edit" width="16" height="16" class="icon" /></th>
                        <th width="1%"><img src="{$http_images}icons/vcard_delete.png" alt="Delete" title="Delete" width="16" height="16" class="icon" /></th>
                </tr>

                {if $depts}
                {foreach from=$depts item=r}
                        <tr class="{cycle values="rowa,rowb"}">
                                <td><img src="{$http_images}icons/vcard.png" alt="Department" title="Department" width="16" height="16" class="icon" />{$r.name}</td>
                                <td><a href="department/{$r.name|escape:'url'}"><img src="{$http_images}icons/vcard_edit.png" alt="Edit {$r.name} " title="Edit {$r.name}" width="16" height="16" class="icon" /></a></td>
                                <td><a href="department_delete/{$r.name|escape:'url'}"><img src="{$http_images}icons/vcard_delete.png" alt="Delete {$r.name}" title="Delete {$r.name}" width="16" height="16" class="icon" /></a></td>
                        </tr>
                {/foreach}
                {else}
                        <tr class="error">
                                <td colspan="5"><img src="{$http_images}icons/error.png" alt="No Departments Found!" title="No Departments Found!" width="16" height="16" class="icon" />No Departments Found!<img src="{$http_images}icons/error.png" alt="No Departments Found!" title="No Departments Found!" width="16" height="16" class="icon" /></td>
                        </tr>
                 {/if}
        </table>
</center>

<br />
<br />

{include file="footer.tpl"}
