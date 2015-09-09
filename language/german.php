<?php
/*	Project:	EQdkp-Plus
 *	Package:	Diablo III game package
 *	Link:		http://eqdkp-plus.eu
 *
 *	Copyright (C) 2006-2015 EQdkp-Plus Developer Team
 *
 *	This program is free software: you can redistribute it and/or modify
 *	it under the terms of the GNU Affero General Public License as published
 *	by the Free Software Foundation, either version 3 of the License, or
 *	(at your option) any later version.
 *
 *	This program is distributed in the hope that it will be useful,
 *	but WITHOUT ANY WARRANTY; without even the implied warranty of
 *	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *	GNU Affero General Public License for more details.
 *
 *	You should have received a copy of the GNU Affero General Public License
 *	along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

if ( !defined('EQDKP_INC') ){
	header('HTTP/1.0 404 Not Found');exit;
}
$german_array = array(
	'classes' => array(
		0	=> 'Unbekannt',
		1	=> 'Barbar',
		2	=> 'Dämonenjäger',
		3	=> 'Mönch',
		4	=> 'Hexendoktor',
		5	=> 'Zauberer',
		6	=> 'Kreuzritter',
	),
	'roles' => array(
		1	=> 'Heiler',
		2	=> 'Fernkampf',
		3	=> 'Nahkampf',
	),
	'lang' => array(
		'diablo3'					=> 'Diablo 3',
		'uc_class'					=> 'Klasse',
	),
);
?>
