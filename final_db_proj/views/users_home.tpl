{include file="header.tpl"}



{$content}

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

{*}
on top - new user
user real name
user name
group
edit
delete


{/*}

<br />
<br />

<center>
        <table width="80%" border="0" cellpadding="4" cellspacing="0">
                <tr class="noBorders">
                        <td colspan="5"><a href="{$http_link}group"><img src="{$http_images}icons/group_add.png" alt="New Group" title="New Group" width="16" height="16" class="icon" />New Group</a></td>
                </tr>
                <tr>
                        <th><img src="{$http_images}icons/group.png" alt="Group" title="Group" width="16" height="16" class="icon" />Name</th>
                        <th>Description</th>
                        <th># Members</th>
                        <th width="1%"><img src="{$http_images}icons/group_edit.png" alt="Edit Group" title="Edit Group" width="16" height="16" class="icon" /></th>
                        <th width="1%"><img src="{$http_images}icons/group_delete.png" alt="Delete Group" title="Delete Group" width="16" height="16" class="icon" /></th>
                </tr>

                {if $groups}
                {foreach from=$groups item=r}
                        <tr class="{cycle values="rowa,rowb"}">
                                <td><img src="{$http_images}icons/group.png" alt="{$r.name}" title="{$r.name}" width="16" height="16" class="icon" />{$r.name}</td>
                                <td>{$r.description}</td>
                                <td align="center">{$r.num_members}</td>
                                <td><a href="group/{$r.name|escape:'url'}"><img src="{$http_images}icons/group_edit.png" alt="Edit Group {$r.name}" title="Edit Group {$r.name}" width="16" height="16" class="icon" /></a></td>
                                <td><a href="group_delete/{$r.name|escape:'url'}"><img src="{$http_images}icons/group_delete.png" alt="Delete Group {$r.name}" title="Delete Group {$r.name}" width="16" height="16" class="icon" /></a></td>
                        </tr>
                {/foreach}
                {else}
                        <tr class="error">
                                <td colspan="5"><img src="{$http_images}icons/group_error.png" alt="No Groups Found!" title="No Groups Found!" width="16" height="16" class="icon" />No Groups Found!<img src="{$http_images}icons/group_error.png" alt="No Groups Found!" title="No Groups Found!" width="16" height="16" class="icon" /></td>
                        </tr>
                 {/if}
        </table>
</center>

<br />
<br />

{include file="footer.tpl"}
