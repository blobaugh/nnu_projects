{include file="header.tpl"}

<form action="" method="post">
<center>
        <table width="80%" cellpadding="5" cellspacing="0">
                <tr class="borders">
                        <td align="right"><b>Group:</b></td>
                        <td>{$group_menu}</td>
                </tr>

                <tr class="borders">
                        <td align="right"><b>First Name:</b></td>
                        <td><input type="text" name="fname" value="{$user.fname}"></td>
                </tr>

                <tr class="borders">
                        <td align="right"><b>Last Name:</b></td>
                        <td><input type="text" name="lname" value="{$user.lname}"></td>
                </tr>

                <tr class="borders">
                        <td align="right"><b>Middle Initial:</b></td>
                        <td><input type="text" name="minitial" value="{$user.minitial}"></td>
                </tr>

                <tr class="borders">
                        <td align="right"><b>Phone:</b></td>
                        <td><input type="text" name="phone" value="{$user.phone}"></td>
                </tr>

                <tr class="borders">
                        <td align="right"><b>Email:</b></td>
                        <td><input type="text" name="email" value="{$user.email}"></td>
                </tr>

                <tr class="borders">
                        <td align="right"><b>Address:</b></td>
                        <td><input type="text" name="address1" value="{$user.address1}"></td>
                </tr>

                <tr class="borders">
                        <td align="right"><b>Address:</b></td>
                        <td><input type="text" name="address2" value="{$user.address2}"></td>
                </tr>

                <tr class="borders">
                        <td align="right"><b>City:</b></td>
                        <td><input type="text" name="city" value="{$user.city}"></td>
                </tr>

                <tr class="borders">
                        <td align="right"><b>State:</b></td>
                        <td><input type="text" name="state" value="{$user.state}"></td>
                </tr>

                <tr class="borders">
                        <td align="right"><b>Zip:</b></td>
                        <td><input type="text" name="Zip" value="{$user.zip}"></td>
                </tr>

                <tr>
                        <td colspan="2">
                                <input type="submit" name="save_user" value="Save User">
                        </td>
                </tr>
        </table>
</center>
</form>

<br />
<br />

{include file="footer.tpl"}
