<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4 foldmethod=marker: */

// LICENSE AGREEMENT. If folded, press za here to unfold and read license {{{ 

/**
* +-----------------------------------------------------------------------------+
* | Copyright (c) 2004 Srgio Gonalves Carvalho                                |
* +-----------------------------------------------------------------------------+
* | This file is part of XML_RPC2.                                              |
* |                                                                             |
* | XML_RPC2 is free software; you can redistribute it and/or modify            |
* | it under the terms of the GNU Lesser General Public License as published by |
* | the Free Software Foundation; either version 2.1 of the License, or         |
* | (at your option) any later version.                                         |
* |                                                                             |
* | XML_RPC2 is distributed in the hope that it will be useful,                 |
* | but WITHOUT ANY WARRANTY; without even the implied warranty of              |
* | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the               |
* | GNU Lesser General Public License for more details.                         |
* |                                                                             |
* | You should have received a copy of the GNU Lesser General Public License    |
* | along with XML_RPC2; if not, write to the Free Software                     |
* | Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA                    |
* | 02111-1307 USA                                                              |
* +-----------------------------------------------------------------------------+
* | Author: Srgio Carvalho <sergio.carvalho@portugalmail.com>                  |
* +-----------------------------------------------------------------------------+
*
* @category   XML
* @package    XML_RPC2
* @author     Srgio Carvalho <sergio.carvalho@portugalmail.com>  
* @copyright  2004-2005 Srgio Carvalho
* @license    http://www.gnu.org/copyleft/lesser.html  LGPL License 2.1
* @version    CVS: $Id$
* @link       http://pear.php.net/package/XML_RPC2
*/

// }}}

// dependencies {{{
require_once 'XML/RPC2/Exception.php';
require_once 'XML/RPC2/Backend.php';
// }}}

/**
 * XML_RPC value class for the XMLRPCext backend. 
 *
 * @category   XML
 * @package    XML_RPC2
 * @author     Srgio Carvalho <sergio.carvalho@portugalmail.com>  
 * @copyright  2004-2005 Srgio Carvalho
 * @license    http://www.gnu.org/copyleft/lesser.html  LGPL License 2.1
 * @link       http://pear.php.net/package/XML_RPC2 
 */
class XML_RPC2_Backend_Xmlrpcext_Value 
{
    
    // {{{ createFromNative()
    
    /**
     * Factory method that constructs the appropriate XML-RPC encoded type value
     *
     * @param mixed  Value to be encode
     * @param string Explicit XML-RPC type as enumerated in the XML-RPC spec (defaults to automatically selected type)
     * @return mixed The encoded value
     */
    public static function createFromNative($value, $explicitType)
    {
        if (!xmlrpc_set_type($value, $explicitType)) {
            throw new XML_RPC2_Exception('Error returned from xmlrpc_set_type');
        }
        return $value;
    }
    
    // }}}
    
}

?>