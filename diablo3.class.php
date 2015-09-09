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

if(!class_exists('diablo3')) {
	class diablo3 extends game_generic {
		protected static $apiLevel	= 20;
		public $version				= '1.1.0';
		protected $this_game		= 'diablo3';
		protected $types			= array('classes');
		protected $classes			= array();
		protected $races			= array();
		protected $factions			= array();
		public $langs				= array('english', 'german');

		protected $class_dependencies = array(
			array(
				'name'		=> 'class',
				'type'		=> 'classes',
				'admin'		=> false,
				'decorate'	=> true,
				'primary'	=> true,
				'colorize'	=> true,
				'roster'	=> true,
				'recruitment' => true,
				'parent'	=> false
			),
		);
		
		public $default_roles = array(
			1	=> array(4),
			2	=> array(2,4,5),
			3	=> array(1,3,6),
		);

		protected $glang		= array();
		protected $lang_file	= array();
		protected $path			= '';
		public $lang			= false;

		public function install($install=false){}
		
		protected function load_filters($langs){
			return array();
		}

		public function profilefields(){
			$xml_fields = array(
				'gender'	=> array(
					'type'			=> 'dropdown',
					'category'		=> 'character',
					'lang'			=> 'uc_gender',
					'options'		=> array('male' => 'uc_male', 'female' => 'uc_female'),
					'tolang'		=> true,
					'undeletable'	=> true,
					'sort'			=> 1
				),
			);
			return $xml_fields;
		}

	}
}
?>
