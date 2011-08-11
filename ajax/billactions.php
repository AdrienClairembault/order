<?php
/*
 * @version $Id$
 -------------------------------------------------------------------------
 GLPI - Gestionnaire Libre de Parc Informatique
 Copyright (C) 2003-2011 by the INDEPNET Development Team.

 http://indepnet.net/   http://glpi-project.org
 -------------------------------------------------------------------------

 LICENSE

 This file is part of GLPI.

 GLPI is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 2 of the License, or
 (at your option) any later version.

 GLPI is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with GLPI; if not, write to the Free Software
 Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
 --------------------------------------------------------------------------
// ----------------------------------------------------------------------
// Original Authors of file: 
// NOUH Walid
// Purpose of file: 
// ----------------------------------------------------------------------
// ---------------------------------------------------------------------- */

define('GLPI_ROOT', '../../..');
include (GLPI_ROOT."/inc/includes.php");
header("Content-Type: text/html; charset=UTF-8");
header_nocache();

if (!defined('GLPI_ROOT')) {
   die("Can not acces directly to this file");
}

if (isset($_POST["action"])) {
   switch($_POST["action"]) {
      case "bill":
         echo "&nbsp;<input type='hidden' name='plugin_order_orders_id' " .
               "  value='".$_POST["plugin_order_orders_id"]."'>"; 
         Dropdown::show('PluginOrderBill', 
                        array('condition' => 
                                 "`plugin_order_orders_id`='".$_POST['plugin_order_orders_id']."'"));
         break;
      case "state":
         echo "&nbsp;<input type='hidden' name='plugin_order_orders_id' " .
               "  value='".$_POST["plugin_order_orders_id"]."'>"; 
         Dropdown::show('PluginOrderBillState');
         break;
   }
    echo"<input type='submit' name='action' class='submit' " .
        "   value='".$LANG['buttons'][2]."'>"; 
}

?>