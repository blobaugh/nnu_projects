{include file="header.tpl"}


{$content}

<center>
        <table width="80%" border="0" cellpadding="4" cellspacing="0">
                <tr class="noBorders">
                        <td colspan="5"><a href="{$http_link}vendor"><img src="{$http_images}icons/group_add.png" alt="New" title="New" width="16" height="16" class="icon" />New Vendor</a></td>
                </tr>
                <tr>
                        <th><img src="{$http_images}icons/groups.png" alt="Vendor" title="Vendor" width="16" height="16" class="icon" />Name</th>
                        <th width="1%"><img src="{$http_images}icons/group_edit.png" alt="Edit" title="Edit" width="16" height="16" class="icon" /></th>
                        <th width="1%"><img src="{$http_images}icons/group_delete.png" alt="Delete" title="Delete" width="16" height="16" class="icon" /></th>
                </tr>

                {if $vendors}
                {foreach from=$vendors item=r}
                        <tr class="{cycle values="rowa,rowb"}">
                                <td><img src="{$http_images}icons/group.png" alt="Vendor" title="Vendor" width="16" height="16" class="icon" />{$r.name}</td>
                                <td><a href="vendor/{$r.name|escape:'url'}"><img src="{$http_images}icons/vcard_edit.png" alt="Edit {$r.name} " title="Edit {$r.name}" width="16" height="16" class="icon" /></a></td>
                                <td><a href="vendor_delete/{$r.name|escape:'url'}"><img src="{$http_images}icons/vcard_delete.png" alt="Delete {$r.name}" title="Delete {$r.name}" width="16" height="16" class="icon" /></a></td>
                        </tr>
                {/foreach}
                {else}
                        <tr class="error">
                                <td colspan="5"><img src="{$http_images}icons/error.png" alt="No Vendors Found!" title="No Vendors Found!" width="16" height="16" class="icon" />No Vendors Found!<img src="{$http_images}icons/error.png" alt="No Vendors Found!" title="No Vendors Found!" width="16" height="16" class="icon" /></td>
                        </tr>
                 {/if}
        </table>
</center>

<br />
<br />

{include file="footer.tpl"}
