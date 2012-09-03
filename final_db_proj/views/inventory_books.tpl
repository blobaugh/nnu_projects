{include file="header.tpl"}

{$content}

<center>
        <table width="80%" border="0" cellpadding="4" cellspacing="0">
                <tr class="noBorders">
                        <td colspan="5"><a href="{$http_link}book"><img src="{$http_images}icons/database_add.png" alt="New Book" title="New Book" width="16" height="16" class="icon" />New Book</a></td>
                </tr>
                <tr>
                        <th><img src="{$http_images}icons/database.png" alt="Database" title="Database" width="16" height="16" class="icon" />Name</th>
                        <th>ISBN</th>
                        <th>Quantity</th>
                        <th><img src="{$http_images}icons/coins.png" alt="Price" title="Price" width="16" height="16" class="icon" />Price</th>
                        <th width="1%"><img src="{$http_images}icons/database_edit.png" alt="Edit" title="Edit" width="16" height="16" class="icon" /></th>
                        <th width="1%"><img src="{$http_images}icons/database_delete.png" alt="Delete" title="Delete User" width="16" height="16" class="icon" /></th>
                </tr>

                {if $books}
                {foreach from=$books item=r}
                        <tr class="{cycle values="rowa,rowb"}">
                                <td><img src="{$http_images}icons/database.png" alt="{$r.name}" title="{$r.name}" width="16" height="16" class="icon" />{$r.name}</td>
                                <td>{$r.isbn}</td>
                                <td>{$r.current_quantity}</td>
                                <td><img src="{$http_images}icons/coins.png" alt="Price" title="Price" width="16" height="16" class="icon" />{$r.price}</td>
                                <td><a href="book/{$r.sku|escape:'url'}"><img src="{$http_images}icons/database_edit.png" alt="Edit Data {$r.name}" title="Edit Data {$r.name}" width="16" height="16" class="icon" /></a></td>
                                <td><a href="book_delete/{$r.sku|escape:'url'}"><img src="{$http_images}icons/database_delete.png" alt="Delete Data {$r.name}" title="Delete Data {$r.name}" width="16" height="16" class="icon" /></a></td>
                        </tr>
                {/foreach}
                {else}
                        <tr class="error">
                                <td colspan="5"><img src="{$http_images}icons/database_error.png" alt="No Data Found!" title="No Data Found!" width="16" height="16" class="icon" />No Data Found!<img src="{$http_images}icons/database_error.png" alt="No Data Found!" title="No Data Found!" width="16" height="16" class="icon" /></td>
                        </tr>
                 {/if}
        </table>
</center>

<br />
<br />

{include file="footer.tpl"}
