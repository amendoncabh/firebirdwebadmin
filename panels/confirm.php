<?php
// File           confirm.php / FirebirdWebAdmin
// Purpose        html sequence for the confirm-panel
//                this is included by other panels to ask for confirmation of deleting
//                a table, column or any other subjcet
// Author         Lutz Brueckner <irie@gmx.de>
// Copyright      (c) 2000, 2001, 2002, 2003, 2004 by Lutz Brueckner,
//                published under the terms of the GNU General Public Licence v.2,
//                see file LICENCE for details

if ($subject == 'row') {
    $question = $s_confirmations[$subject][$instance]['msg'];
} else {
    $question = $s_confirmations[$subject]['msg'];
    $instance = '';
}

?>
<form method="post" action="<?php echo url_session($_SERVER['PHP_SELF']); ?>"
      name="confirm_<?php echo $subject . $instance; ?>">
    <input type="hidden" name="confirm_subject" value="<?php echo $subject . $instance; ?>">
    <table>
        <tr>
            <td>
                <b><?php echo $question; ?></b><br>
            </td>
        </tr>
        <tr>
            <td>
                &nbsp;
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="confirm_no" value="<?php echo $button_strings['No']; ?>"
                       class="btn btn-default">
                <input type="submit" name="confirm_yes" value="<?php echo $button_strings['Yes']; ?>"
                       class="btn btn-danger margin-left-10px">
            </td>
        </tr>
    </table>
</form>
