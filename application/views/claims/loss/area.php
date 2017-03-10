<?php // no direct access
defined('_JEXEC') or die('Restricted access');
if( $gid!='36' ) :
    include_once('components/com_claims/helpers/buttons.php');
endif; ?>

<h3 style="margin:2px">Contents Area</h3>
<form action="" method="post" enctype="multipart/form-data">
    <table cellspacing="2" cellpadding="1" border="0" width="100%" class="m_tblrows">
        <?
        if( $this->property['number_structures']>1 ) : ?>
            <tr class="m_trdk">
            <td>Structure : </td>
            <td colspan=2>
			<span style="display:none" id="new_span">
				<input type="text" name="parent_new_area" id="parent_new_area" style="width:300px;"> [<a href="javascript: return null;"onclick="javacript: show_select('select_span','new_span')">-</a>]</span>
			<span style="display:inline" id="select_span">
				<select name="new_area" style="width:308px; height:22px; padding-top:2px; vertical-align:middle"  onchange="javascript: show_field('select_span','new_span','select_folder','new_area')" id="select_folder">
                    <option value="0">--Select Structure--</option>
                    <option value="add">--Add Structure--</option><?php
                    foreach($this->areas as $ara) : ?>

                    <option value="<?=$ara['id']?>" <?
                    if($this->folder_id==$ara['id'])
                    {
                        echo "selected";
                    } ?> >
                        <?=$ara['name']?>
                        </option><?
                    endforeach; ?>
                </select>
			</span></td>
            </tr><?
        endif; ?>
        <tr class="m_trdk">
            <td>Room: </td>
            <td colspan=2><input type="text" style="width: 300px" name="new_area" id="new_area"></td>
        </tr>
        <tr class="m_trdk">
            <td>Length :</td>
            <td><input type="text" style="width: 80px" name="area_name"></td>
            <td>
        </tr>
        <tr class="m_tr">
            <td>Width : </td>
            <td><input type="text" style="width: 80px" name="area_name"></td>
            <td></td>
        </tr>
        <tr class="m_trdk">
            <td width="90">Height : </td>
            <td><input type="text" style="width: 80px" name="area_name"></td>
            <td></td>
        </tr>
        <tr class="m_tr">
            <td>&nbsp;</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td colspan="3" align="center">
                <input type="submit" value="submit" name="submit">

                <input type="hidden" value="<?=JRequest::getVar('property_id')?>" name="property_id">
                <input type="hidden" value="com_claims" name="option">
                <input type="hidden" value="contents" name="show">
                <input type="hidden" value="savearea" name="task"></td>
        </tr>
    </table>
</form>