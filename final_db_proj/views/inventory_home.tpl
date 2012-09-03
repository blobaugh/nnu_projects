{include file="header.tpl"}


{$content}

<center>
        <table width="80%" border="0" cellpadding="4" cellspacing="0">
                <tr>
                        <th><img src="{$http_images}icons/database.png" alt="Database" title="Database" width="16" height="16" class="icon" />Total Products</th>
                        <th><img src="{$http_images}icons/database.png" alt="Database" title="Database" width="16" height="16" class="icon" />Total On Hand</th>
                        <th><img src="{$http_images}icons/database_error.png" alt="Database" title="Database" width="16" height="16" class="icon" />Low On Hand</th>
                        <th><img src="{$http_images}icons/coins.png" alt="Price" title="Price" width="16" height="16" class="icon" />Total Value</th>

                </tr>

                <tr>
                        <td align="right">{$stats.total_products}</td>
                        <td align="right">{$stats.total_on_hand}</td>
                        <td align="right" {if $stats.low_on_hand > 0}style="background-color: #fcc"{/if}>{$stats.low_on_hand}</td>
                        <td align="right">{$stats.total_value}</td>
                </tr>


        </table>
</center>


<br />
<br />


<center>
        <table width="80%" border="0" cellpadding="4" cellspacing="0">
                <tr class="noBorders">
                        <td colspan="5"><a href="{$http_link}user"><img src="{$http_images}icons/user_add.png" alt="New User" title="New User" width="16" height="16" class="icon" />New User</a></td>
                </tr>
                <tr>
                        <th><img src="{$http_images}icons/user.png" alt="User" title="User" width="16" height="16" class="icon" />Name</th>
                        <th>Username</th>
                        <th>Group</th>
                        <th width="1%"><img src="{$http_images}icons/user_edit.png" alt="Edit User" title="Edit User" width="16" height="16" class="icon" /></th>
                        <th width="1%"><img src="{$http_images}icons/user_delete.png" alt="Delete User" title="Delete User" width="16" height="16" class="icon" /></th>
                </tr>

                {if $users}
                {foreach from=$users item=r}
                        <tr class="{cycle values="rowa,rowb"}">
                                <td><img src="{$http_images}icons/user.png" alt="{$r.fname} {$r.lname}" title="{$r.fname} {$r.lname}" width="16" height="16" class="icon" />{$r.fname} {$r.minitial} {$r.lname}</td>
                                <td>{$r.email}</td>
                                <td>{$r.group}</td>
                                <td><a href="user/{$r.email|escape:'url'}"><img src="{$http_images}icons/user_edit.png" alt="Edit User {$r.fname} {$r.lname}" title="Edit User {$r.fname} {$r.lname}" width="16" height="16" class="icon" /></a></td>
                                <td><a href="user_delete/{$r.email|escape:'url'}"><img src="{$http_images}icons/user_delete.png" alt="Delete User {$r.fname} {$r.lname}" title="Delete User {$r.fname} {$r.lname}" width="16" height="16" class="icon" /></a></td>
                        </tr>
                {/foreach}
                {else}
                        <tr class="error">
                                <td colspan="5"><img src="{$http_images}icons/user_orange.png" alt="No Users Found!" title="No Users Found!" width="16" height="16" class="icon" />No Users Found!<img src="{$http_images}icons/user_orange.png" alt="No Users Found!" title="No Users Found!" width="16" height="16" class="icon" /></td>
                        </tr>
                 {/if}
        </table>
</center>

<br />
<br />

{include file="footer.tpl"}
