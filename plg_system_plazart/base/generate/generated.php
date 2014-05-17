<?php
/**
 *------------------------------------------------------------------------------
 * @package       Plazart Framework for Joomla!
 *------------------------------------------------------------------------------
 * @copyright     Copyright (C) 2012-2013 TemPlaza.com. All Rights Reserved.
 * @license       GNU General Public License version 2 or later; see LICENSE.txt
 * @authors       TemPlaza
 * @Link:         http://templaza.com
 *------------------------------------------------------------------------------
 */
/**
 * @package Helix Framework
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2013 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or Later
 */
if( !function_exists('get_value') ){

    function get_value($item, $method){
        return isset($item[$method]) ? $item[$method] : '';
    }
}

if( !function_exists('get_color') ){

    function get_color($item, $method){
        return isset($item[$method]) ? $item[$method] : 'rgba(255, 255, 255, 0)';
    }
}

?>

<div class="container-fluid" id="plazart_layout_builder">

<!-- Column setting popbox -->
<div id="columnsettingbox" style="display: none;">
    <ul class="nav nav-tab" id="columnsettings">
        <li class="active"><a  href="#basic" data-toggle="tab">Basic</a></li>
        <li><a href="#responsive" data-toggle="tab">Responsive</a></li>
    </ul>

    <div class="tab-content">
        <div class="tab-pane active" id="basic">
            <div id="includetypes">
                <label>Type: </label>
                <select class="includetypes">
                    <option value="modules">Modules</option>
                    <option value="message">Message</option>
                    <option value="component">Component</option>
                    <option value="megamenu">Megamenu</option>
                    <option value="logo">Logo</option>
                </select>
            </div>

            <div id="positions">
                <label> Position: </label>
                <select class="positions">
                    <option value=""> (none) </option>
                    <?php
                    foreach((array) $positions as $value) echo '<option value="'.$value.'">'.$value.'</option>';
                    ?>
                </select>
            </div>

            <div id="spanwidth">
                <label>Width: </label>
                <select class="possiblewidths">
                    <option value="1">span1</option>
                    <option value="2">span2</option>
                    <option value="3">span3</option>
                    <option value="4">span4</option>
                    <option value="5">span5</option>
                    <option value="6">span6</option>
                    <option value="7">span7</option>
                    <option value="8">span8</option>
                    <option value="9">span9</option>
                    <option value="10">span10</option>
                    <option value="11">span11</option>
                    <option value="12">span12</option>
                </select>
            </div>

            <div id="spanoffset">
                <label>Offset: </label>
                <select class="possibleoffsets">
                    <option value="0">(none)</option>
                    <option value="1">offset1</option>
                    <option value="2">offset2</option>
                    <option value="3">offset3</option>
                    <option value="4">offset4</option>
                    <option value="5">offset5</option>
                    <option value="6">offset6</option>
                    <option value="7">offset7</option>
                    <option value="8">offset8</option>
                    <option value="9">offset9</option>
                    <option value="10">offset10</option>
                </select>
            </div>

            <div id="modchrome">
                <label>Style: </label>
                <select class="modchrome">
                    <?php foreach($modChromes as $style): ?>
                        <option value="<?php echo $style ?>"><?php echo $style ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div id="customclass">
                <label>Custom Class: </label>
                <input type="text" class="customclass" id="inputcustomclass">
            </div>
        </div>

        <div class="tab-pane" id="responsive">
            <label class="checkbox"> <input type="checkbox" value="visible-lg">Visible Large devices</label>
            <label class="checkbox"> <input type="checkbox" value="visible-md">Visible Medium devices</label>
            <label class="checkbox"> <input type="checkbox" value="visible-sm">Visible Small devices</label>
            <label class="checkbox"> <input type="checkbox" value="visible-xs">Visible Extra small devices</label>
            <label class="checkbox"> <input type="checkbox" value="hidden-xs">Hidden Extra small devices</label>
            <label class="checkbox"> <input type="checkbox" value="hidden-sm">Hidden Small devices</label>
            <label class="checkbox"> <input type="checkbox" value="hidden-md">Hidden Medium devices</label>
            <label class="checkbox"> <input type="checkbox" value="hidden-lg">Hidden Large devices</label>
        </div>
    </div>
</div>

<!-- Row setting popbox -->
<div id="rowsettingbox" style="display: none;">
    <h3 class="row-header">Row Settings</h3>

    <div>
        <div class="row-fluid">


            <div class="span6 rownameOuter">
                <label>Name: </label>
                <input type="text" class="rowname" id="">
            </div>

            <div class="span6 rowclassOuter">
                <label>Custom Class: </label>
                <input type="text" class="rowcustomclass" id="">
            </div>

        </div>

        <div class="row-fluid">
            <div class="span6 rowcolorOuter">
                <label>Background: </label>
                <input type="text" class="rowbackgroundcolor" id="">
            </div>

            <div class="span6 rowcolorOuter">
                <label>Text: </label>
                <input type="text" class="rowtextcolor" id="">
            </div>
        </div>

        <div class="row-fluid">
            <div class="span6 rowcolorOuter">
                <label>Link: </label>
                <input type="text" class="rowlinkcolor" id="">
            </div>

            <div class="span6 rowcolorOuter">
                <label>Link hover: </label>
                <input type="text" class="rowlinkhovercolor" id="">
            </div>
        </div>

        <div class="row-fluid">
            <div class="span6 rownameOuter">
                <label>Margin: </label>
                <input type="text" class="rowmargin" id="">
            </div>

            <div class="span6 rowclassOuter">
                <label>Padding: </label>
                <input type="text" class="rowpadding" id="">
            </div>
        </div>

        <div id="rowresponsiveinputs" class="row-fluid">
            <div class="span6">
                <label class="checkbox"> <input type="checkbox" value="visible-xs">Visible Extra small</label>
                <label class="checkbox"> <input type="checkbox" value="visible-sm">Visible Small</label>
                <label class="checkbox"> <input type="checkbox" value="visible-md">Visible Medium</label>
                <label class="checkbox"> <input type="checkbox" value="visible-lg">Visible Large</label>
            </div>
            <div class="span6">
                <label class="checkbox"> <input type="checkbox" value="hidden-xs">Hidden Extra small</label>
                <label class="checkbox"> <input type="checkbox" value="hidden-sm">Hidden Small</label>
                <label class="checkbox"> <input type="checkbox" value="hidden-md">Hidden Medium</label>
                <label class="checkbox"> <input type="checkbox" value="hidden-lg">Hidden Large</label>
            </div>
        </div>

    </div>
</div>


<!--Start Generator -->
<div class="generator">
<?php
//print_r($layout); die;
foreach($layout as $items )
{
    ?>
    <!-- Main Rows -->
    <div class="row-fluid layoutmainrow">
    <div class="span12">

    <div class="rowpropperties pull-left">
        <span class="rowname"><?php echo $items["name"] ?></span>
                        <span class="rowdocs">
                            <input type="hidden" class="rownameinput" name="" value="<?php echo get_value($items,"name"); ?>">
                            <input type="hidden" class="rowcustomclassinput" name="" value="<?php echo get_value($items,"class") ?>">
                            <input type="hidden" class="rowresponsiveinput" name="" value="<?php echo get_value($items,"responsive") ?>">

                            <input type="hidden" class="rowbackgroundcolorinput" name="" value="<?php echo get_color($items,'backgroundcolor') ?>">
                            <input type="hidden" class="rowtextcolorinput" name="" value="<?php echo get_color($items,'textcolor') ?>">
                            <input type="hidden" class="rowlinkcolorinput" name="" value="<?php echo get_color($items,'linkcolor') ?>">
                            <input type="hidden" class="rowlinkhovercolorinput" name="" value="<?php echo get_color($items,'linkhovercolor') ?>">
                            <input type="hidden" class="rowmargininput" name="" value="<?php echo get_value($items,'margin') ?>">
                            <input type="hidden" class="rowpaddinginput" name="" value="<?php echo get_value($items,'padding') ?>">
                        </span>
    </div>
    <div class="pull-right row-tools row-container">
        <select name="" class="containertype">
            <option value="container"<?php echo ($items["containertype"] && $items["containertype"]=='container') ? ' selected': ''; ?>>Fixed Width</option>
            <option value="container-fluid"<?php echo ($items["containertype"] && $items["containertype"]=='container-fluid') ? ' selected': ''; ?>>Full Width</option>
        </select>
        <a href="" title="Move this row" class="fa fa-arrows rowmove"></a>
        <a href="#rowsettingbox" title="Row settings" class="fa fa-cog rowsetting" rel="rowpopover"></a>
        <a href="" title="Add new row" class="fa fa-bars add-row"></a>
        <a href="" title="Add new column" class="fa fa-columns add-column"></a>
        <a href="" title="Delete row" class="fa fa-times rowdelete"></a>
    </div>

    <div class="hr clr"></div>

    <div class="row-fluid show-grid">

    <!-- Columns -->
    <?php
    foreach( $items["children"] as $item )
    {
        ?>
        <div class="<?php echo (get_value($item,"type")=='component' or get_value($item,"type")=='message') ? 'type-'.get_value($item,"type"):'' ?>  span<?php echo isset($item["col-lg"]) ? $item["col-lg"] : '12'; ?> column <?php echo ( empty($item["col-lg-offset"])?'':'offset'.$item["col-lg-offset"] )?>">

                                <span class="position-name"><?php

                                    if(get_value($item,"type")=='component' || get_value($item,"type")=='message' || get_value($item,"type")=='megamenu' || get_value($item,"type")=='logo') echo strtoupper(get_value($item,"type"));
                                    elseif(empty($item["position"])) echo '(none)';
                                    else echo get_value($item,"position");

                                    ?></span>
                                <div class="columntools">
                                    <a href="#columnsettingbox" rel="popover" data-placement="bottom" title="Column settings" class="fa fa-cog rowcolumnspop"></a>
                                    <a href="" title="Add new row" class="fa fa-bars add-rowin-column"></a>
                                    <a href="" title="Remove column" class="fa fa-times columndelete"></a>
                                    <a href="" title="Move column" class="fa fa-arrows columnmove"></a>
                                </div>

                                <input type="hidden" class="widthinput-xs" name="" value="<?php echo get_value($item,"col-xs") ?>">
                                <input type="hidden" class="widthinput-sm" name="" value="<?php echo get_value($item,"col-sm") ?>">
                                <input type="hidden" class="widthinput-md" name="" value="<?php echo get_value($item,"col-md") ?>">
                                <input type="hidden" class="widthinput-lg" name="" value="<?php echo get_value($item,"col-lg") ?>">
                                <input type="hidden" class="offsetinput-xs" name="" value="<?php echo get_value($item,"col-xs-offset") ?>">
                                <input type="hidden" class="offsetinput-sm" name="" value="<?php echo get_value($item,"col-sm-offset") ?>">
                                <input type="hidden" class="offsetinput-md" name="" value="<?php echo get_value($item,"col-md-offset") ?>">
                                <input type="hidden" class="offsetinput-lg" name="" value="<?php echo get_value($item,"col-lg-offset") ?>">
                                <input type="hidden" class="typeinput" name="" value="<?php echo get_value($item,"type") ?>">
                                <input type="hidden" class="positioninput" name="" value="<?php echo get_value($item,"position") ?>">
                                <input type="hidden" class="styleinput" name="" value="<?php echo get_value($item,"style") ?>">
                                <input type="hidden" class="customclassinput" name="" value="<?php echo get_value($item,"customclass") ?>">
                                <input type="hidden" class="responsiveclassinput" name="" value="<?php echo get_value($item,"responsiveclass") ?>">

                                <!-- Row in Columns -->
                                <?php
                                if( !empty($item["children"]) and is_array($item["children"]) )
                                {
                                    foreach( $item["children"] as $children )
                                    {
                                        ?>
                                        <div class="row-fluid child-row">
                                        <div class="span12">

                                        <div class="rowpropperties pull-left">
                                            <span class="rowname"><?php echo $children["name"] ?></span>
                                                    <span class="rowdocs">
                                                        <input type="hidden" class="rownameinput" name="" value="<?php echo get_value($children,"name") ?>">
                                                        <input type="hidden" class="rowcustomclassinput" name="" value="<?php echo get_value($children,"class") ?>">
                                                        <input type="hidden" class="rowresponsiveinput" name="" value="<?php echo get_value($children,"responsive") ?>">

                                                        

                                                        <input type="hidden" class="rowbackgroundcolorinput" name="" value="<?php echo get_color($children,'backgroundcolor') ?>">
                                                        <input type="hidden" class="rowtextcolorinput" name="" value="<?php echo get_color($children,'textcolor') ?>">
                                                        <input type="hidden" class="rowlinkcolorinput" name="" value="<?php echo get_color($children,'linkcolor') ?>">
                                                        <input type="hidden" class="rowlinkhovercolorinput" name="" value="<?php echo get_color($children,'linkhovercolor') ?>">
                                                        <input type="hidden" class="rowmargininput" name="" value="<?php echo get_value($children,'margin') ?>">
                                                        <input type="hidden" class="rowpaddinginput" name="" value="<?php echo get_value($children,'padding') ?>">

                                                    </span>
                                        </div>

                                        <div class="pull-right row-tools">
                                            <a href="" title="Move this row" class="fa fa-arrows row-move-in-column"></a>
                                            <a href="" title="Add new row" class="fa fa-bars add-row"></a>
                                            <a href="" title="Add new column" class="fa fa-columns add-column"></a>
                                            <a href="#rowsettingbox" title="Row settings" class="fa fa-cog rowsetting" rel="rowpopover"></a>
                                            <a href="" title="Delete row" class="fa fa-times rowdelete"></a>
                                        </div>

                                        <div class="clearfix"></div>

                                        <div class="row-fluid show-grid">

                                        <?php
                                        foreach($children["children"] as $children)
                                        {
                                            ?>

                                            <div class="<?php echo (get_value($children,"type")=='component' or get_value($children,"type")=='message') ? 'type-'.get_value($children,"type"):'' ?>  span<?php echo isset($children["col-lg"]) ? $children["col-lg"] : '12'; ?> column <?php echo ( empty($children["col-lg-offset"])?'':'offset'.$children["col-lg-offset"] )?>">

                                                            <span class="position-name"><?php

                                                                if(get_value($children,"type")=='component' or get_value($children,"type")=='message') echo strtoupper($children["type"]);
                                                                elseif(empty($children["position"])) echo '(none)';
                                                                else echo get_value($children,"position");

                                                                ?></span>

                                                            <span class="columntools">
                                                                <a href="#columnsettingbox" rel="popover" data-placement="bottom" title="Column settings" class="fa fa-cog rowcolumnspop"></a>
																<a href="" title="Add new row" class="fa fa-bars add-rowin-column"></a>
																<a href="" title="Remove column" class="fa fa-times columndelete"></a>
																<a href="" title="Move column" class="fa fa-arrows columnmove"></a>
                                                            </span>

                                                            <input type="hidden" class="widthinput-xs" name="" value="<?php echo get_value($children,"col-xs") ?>">
                                                            <input type="hidden" class="widthinput-sm" name="" value="<?php echo get_value($children,"col-sm") ?>">
                                                            <input type="hidden" class="widthinput-md" name="" value="<?php echo get_value($children,"col-md") ?>">
                                                            <input type="hidden" class="widthinput-lg" name="" value="<?php echo get_value($children,"col-lg") ?>">
                                                            <input type="hidden" class="offsetinput-xs" name="" value="<?php echo get_value($children,"col-xs-offset") ?>">
                                                            <input type="hidden" class="offsetinput-sm" name="" value="<?php echo get_value($children,"col-sm-offset") ?>">
                                                            <input type="hidden" class="offsetinput-md" name="" value="<?php echo get_value($children,"col-md-offset") ?>">
                                                            <input type="hidden" class="offsetinput-lg" name="" value="<?php echo get_value($children,"col-lg-offset") ?>">
                                                            <input type="hidden" class="typeinput" name="" value="<?php echo get_value($children,"type") ?>">
                                                            <input type="hidden" class="positioninput" name="" value="<?php echo get_value($children,"position") ?>">
                                                            <input type="hidden" class="styleinput" name="" value="<?php echo get_value($children,"style") ?>">
                                                            <input type="hidden" class="customclassinput" name="" value="<?php echo get_value($children,"customclass") ?>">
                                                            <input type="hidden" class="responsiveclassinput" name="" value="<?php echo get_value($children,"responsiveclass") ?>">

                                                            <!--3-->



                                                            <?php

                                                            if( !empty($children["children"]) and is_array($children["children"]) )
                                                            {

                                                                foreach( $children["children"] as $children )
                                                                {



                                                                    ?>


                                                                    <div class="row-fluid child-row">
                                                                        <div class="span12">
                                                                            <div class="rowpropperties pull-left">
                                                                                <span class="rowname"><?php echo get_value($children,"name") ?></span>
                                                                                <span class="rowdocs">
                                                                                    <input type="hidden" class="rownameinput" name="" value="<?php echo get_value($children,"name") ?>">
                                                                                    <input type="hidden" class="rowcustomclassinput" name="" value="<?php echo get_value($children,"class") ?>">
                                                                                    <input type="hidden" class="rowresponsiveinput" name="" value="<?php echo get_value($children,"responsive") ?>">


                                                                                    <input type="hidden" class="rowbackgroundcolorinput" name="" value="<?php echo get_color($children,'backgroundcolor') ?>">
                                                        <input type="hidden" class="rowtextcolorinput" name="" value="<?php echo get_color($children,'textcolor') ?>">
                                                        <input type="hidden" class="rowlinkcolorinput" name="" value="<?php echo get_color($children,'linkcolor') ?>">
                                                        <input type="hidden" class="rowlinkhovercolorinput" name="" value="<?php echo get_color($children,'linkhovercolor') ?>">
                                                        <input type="hidden" class="rowmargininput" name="" value="<?php echo get_value($children,'margin') ?>">
                                                        <input type="hidden" class="rowpaddinginput" name="" value="<?php echo get_value($children,'padding') ?>">
                                                                                </span>
                                                                            </div>


                                                                            <div class="pull-right row-tools">
                                                                                <a href="" title="Move this row" class="fa fa-arrows rowmove"></a>
                                                                                <a href="" title="Add new row" class="fa fa-bars add-row"></a>
                                                                                <a href="" title="Add new column" class="fa fa-columns add-column"></a>
                                                                                <a href="#rowsettingbox" title="Row settings" class="fa fa-cog rowsetting" rel="rowpopover"></a>
                                                                                <a href="" title="Delete row" class="fa fa-times rowdelete"></a>
                                                                            </div>

                                                                            <div class="clearfix"></div>

                                                                            <div class="row-fluid show-grid">

                                                                                <?php
                                                                                foreach($children["children"] as $children) {
                                                                                    ?>
                                                                                    <div class="<?php echo (get_value($children,"type")=='component' or get_value($children,"type")=='message') ? 'type-'.$children["type"]:'' ?>  span<?php echo isset($children["col-lg"]) ? $children["col-lg"] : '12'; ?> column <?php echo ( empty($children["col-lg-offset"])?'':'offset'.$children["col-lg-offset"] )?>">
                                                                                        <span class="position-name"><?php
                                                                                            if(get_value($children,"type")=='component' or get_value($children,"type")=='message') echo strtoupper($children["type"]);
                                                                                            elseif(empty($children["position"])) echo '(none)';
                                                                                            else echo get_value($children,"position");
                                                                                            ?></span>
                                                                                        <span class="columntools">
																							<a href="#columnsettingbox" rel="popover" data-placement="bottom" title="Column settings" class="fa fa-cog rowcolumnspop"></a>
																							<a href="" title="Add new row" class="fa fa-bars add-rowin-column"></a>
																							<a href="" title="Remove column" class="fa fa-times columndelete"></a>
																							<a href="" title="Move column" class="fa fa-arrows columnmove"></a>
                                                                                        </span>
                                                                                        <input type="hidden" class="widthinput-xs" name="" value="<?php echo get_value($children,"col-xs") ?>">
                                                                                        <input type="hidden" class="widthinput-sm" name="" value="<?php echo get_value($children,"col-sm") ?>">
                                                                                        <input type="hidden" class="widthinput-md" name="" value="<?php echo get_value($children,"col-md") ?>">
                                                                                        <input type="hidden" class="widthinput-lg" name="" value="<?php echo get_value($children,"col-lg") ?>">
                                                                                        <input type="hidden" class="offsetinput-xs" name="" value="<?php echo get_value($children,"col-xs-offset") ?>">
                                                                                        <input type="hidden" class="offsetinput-sm" name="" value="<?php echo get_value($children,"col-sm-offset") ?>">
                                                                                        <input type="hidden" class="offsetinput-md" name="" value="<?php echo get_value($children,"col-md-offset") ?>">
                                                                                        <input type="hidden" class="offsetinput-lg" name="" value="<?php echo get_value($children,"col-lg-offset") ?>">
                                                                                        <input type="hidden" class="typeinput" name="" value="<?php echo get_value($children,"type") ?>">
                                                                                        <input type="hidden" class="positioninput" name="" value="<?php echo get_value($children,"position") ?>">
                                                                                        <input type="hidden" class="styleinput" name="" value="<?php echo get_value($children,"style") ?>">
                                                                                        <input type="hidden" class="customclassinput" name="" value="<?php echo get_value($children,"customclass") ?>">
                                                                                        <input type="hidden" class="responsiveclassinput" name="" value="<?php echo get_value($children,"responsiveclass") ?>">
                                                                                        <!-- 4-->
                                                                                        <?php
                                                                                        if( !empty($children["children"]) and is_array($children["children"]) ) {
                                                                                            foreach( $children["children"] as $children )
                                                                                            {
                                                                                                ?>
                                                                                                <div class="row-fluid child-row">
                                                                                                    <div class="span12">
                                                                                                        <div class="rowpropperties pull-left">
                                                                                                            <span class="rowname"><?php echo $children["name"] ?></span>
                                                                                                            <span class="rowdocs">
                                                                                                                <input type="hidden" class="rownameinput" name="" value="<?php echo get_value($children,"name") ?>">
                                                                                                                <input type="hidden" class="rowcustomclassinput" name="" value="<?php echo get_value($children,"class") ?>">
                                                                                                                <input type="hidden" class="rowresponsiveinput" name="" value="<?php echo get_value($children,"responsive") ?>">
                                                                                                                <input type="hidden" class="rowbackgroundcolorinput" name="" value="<?php echo get_color($children,'backgroundcolor') ?>">
                                                        <input type="hidden" class="rowtextcolorinput" name="" value="<?php echo get_color($children,'textcolor') ?>">
                                                        <input type="hidden" class="rowlinkcolorinput" name="" value="<?php echo get_color($children,'linkcolor') ?>">
                                                        <input type="hidden" class="rowlinkhovercolorinput" name="" value="<?php echo get_color($children,'linkhovercolor') ?>">
                                                        <input type="hidden" class="rowmargininput" name="" value="<?php echo get_value($children,'margin') ?>">
                                                        <input type="hidden" class="rowpaddinginput" name="" value="<?php echo get_value($children,'padding') ?>">
                                                                                                            </span>
                                                                                                        </div>
                                                                                                        <div class="pull-right row-tools">
                                                                                                            <a href="" title="Move this row" class="fa fa-arrows rowmove"></a>
                                                                                                            <a href="" title="Add new row" class="fa fa-bars add-row"></a>
                                                                                                            <a href="" title="Add new column" class="fa fa-columns add-column"></a>
                                                                                                            <a href="#rowsettingbox" title="Row settings" class="fa fa-cog rowsetting" rel="rowpopover"></a>
                                                                                                            <a href="" title="Delete row" class="fa fa-times rowdelete"></a>
                                                                                                        </div>

                                                                                                        <div class="clearfix"></div>

                                                                                                        <div class="row-fluid show-grid">

                                                                                                            <?php
                                                                                                            foreach($children["children"] as $children)
                                                                                                            {
                                                                                                                ?>

                                                                                                                <div class="<?php echo (get_value($children,"type")=='component' or get_value($children,"type")=='message') ? 'type-'.$children["type"]:'' ?>  span<?php echo isset($children["col-lg"]) ? $children["col-lg"] : '12'; ?> column <?php echo ( empty($children["col-lg-offset"])?'':'offset'.$children["col-lg-offset"] )?>">

                                                                                                                    <span class="position-name"><?php

                                                                                                                        if(get_value($children,"type")=='component' or get_value($children,"type")=='message') echo strtoupper($children["type"]);
                                                                                                                        elseif(empty($children["position"])) echo '(none)';
                                                                                                                        else echo get_value($children,"position");

                                                                                                                        ?></span>
                                                                                                                    <span class="columntools">
																														<a href="#columnsettingbox" rel="popover" data-placement="bottom" title="Column settings" class="fa fa-cog rowcolumnspop"></a>
																														<a href="" title="Add new row" class="fa fa-bars add-rowin-column"></a>
																														<a href="" title="Remove column" class="fa fa-times columndelete"></a>
																														<a href="" title="Move column" class="fa fa-arrows columnmove"></a>
                                                                                                                    </span>

                                                                                                                    <input type="hidden" class="widthinput-xs" name="" value="<?php echo get_value($children,"col-xs") ?>">
                                                                                                                    <input type="hidden" class="widthinput-sm" name="" value="<?php echo get_value($children,"col-sm") ?>">
                                                                                                                    <input type="hidden" class="widthinput-md" name="" value="<?php echo get_value($children,"col-md") ?>">
                                                                                                                    <input type="hidden" class="widthinput-lg" name="" value="<?php echo get_value($children,"col-lg") ?>">
                                                                                                                    <input type="hidden" class="offsetinput-xs" name="" value="<?php echo get_value($children,"col-xs-offset") ?>">
                                                                                                                    <input type="hidden" class="offsetinput-sm" name="" value="<?php echo get_value($children,"col-sm-offset") ?>">
                                                                                                                    <input type="hidden" class="offsetinput-md" name="" value="<?php echo get_value($children,"col-md-offset") ?>">
                                                                                                                    <input type="hidden" class="offsetinput-lg" name="" value="<?php echo get_value($children,"col-lg-offset") ?>">
                                                                                                                    <input type="hidden" class="typeinput" name="" value="<?php echo get_value($children,"type") ?>">
                                                                                                                    <input type="hidden" class="positioninput" name="" value="<?php echo get_value($children,"position") ?>">
                                                                                                                    <input type="hidden" class="styleinput" name="" value="<?php echo get_value($children,"style") ?>">
                                                                                                                    <input type="hidden" class="customclassinput" name="" value="<?php echo get_value($children,"customclass") ?>">
                                                                                                                    <input type="hidden" class="responsiveclassinput" name="" value="<?php echo get_value($children,"responsiveclass") ?>">

                                                                                                                </div>


                                                                                                            <?php
                                                                                                            } ?>

                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>


                                                                                            <?php
                                                                                            }
                                                                                        }
                                                                                        ?>
                                                                                        <!-- 4-->
                                                                                    </div>
                                                                                <?php
                                                                                } ?>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <?php
                                                                }
                                                            }
                                                            ?>
                                                            <!--3-->
                                            </div>
                                        <?php
                                        } ?>

                                        </div>
                                        </div>
                                        </div>
                                    <?php
                                    }
                                }
                                ?>
                                <!--  End Row in Columns -->
        </div>

    <?php
    }
    ?>
    <!-- Columns -->

    </div>

    </div>
    </div>
    <!-- End Main Rows -->
<?php
}
?>

</div>
<div class="clearfix"></div>
</div>
