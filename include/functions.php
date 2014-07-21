<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function checkbox_get_for($name, $echo = true) {
	if ($echo) {
		echo strtolower(str_replace(' ', '_', $name));
	} else {
		return strtolower(str_replace(' ', '_', $name));
	}
}

function get_interests_states() {
	return array(
		'Northern California' => array('ALL', 'NONE', 'Alameda', 'Alpine', 'Amador', 'Butte',
			'Calaveras', 'Colusa', 'Contra Costa', 'Del Norte', 'El Dorado', 'Fresno',
			'Glenn', 'Humboldt', 'Inyo', 'Kings', 'Lake', 'Lassen',
			'Madera', 'Marin', 'Mariposa', 'Mendocino', 'Merced', 'Modoc',
			'Mono', 'Monterey', 'Napa', 'Nevada', 'Placer', 'Plumas',
			'Sacramento', 'San Benito', 'San Francisco', 'San Joaquin', 'San Mateo', 'Santa Clara',
			'Santa Cruz', 'Shasta', 'Sierra', 'Siskiyou', 'Solano', 'Sonoma'
		),
		'Southern California' => array('ALL', 'NONE', 'Imperial', 'Kern', 'Los Angeles',
			'Orange County', 'Riverside', 'San Bernardino', 'San Diego', 'San Luis Obispo'),
		'New Mexico' => array('ALL', 'NONE', 'Bernarlillo', 'Catron', 'Chaves', 'Cibola',
			'Colfax', 'Curry', 'DeBaca', 'Dona Ana', 'Eddy', 'Grant',
			'Guadalupe', 'Harding', 'Hidalgo', 'Lea', 'Lincoln', 'Los Alamos',
			'Luna', 'McKinley', 'Mora', 'Otero', 'Quay', 'Rio Arriba',
			'Roosevelt', 'San Juan', 'San Miguel', 'Sandoval', 'Santa Fe', 'Sierra',
			'Socorro', 'Taos', 'Torance', 'Union', 'Valencia'
		),
		'Washington State' => array('ALL', 'NONE', 'Adams', 'Asotin', 'Benton', 'Chelan',
			'Clallam', 'Clark', 'Columbia', 'Cowlitz', 'Douglas', 'Ferry',
			'Franklin', 'Garfield', 'Grant', 'Grays Harbor', 'Island', 'Jefferson',
			'King', 'Kitsap', 'Kittitas', 'Klickitat', 'Lewis', 'Lincoln',
			'Mason', 'Okanogan', 'Pacific', 'Pend Oreille', 'Pierce', 'San Juan',
			'Skagit', 'Skamania', 'Snohomish', 'Spokane', 'Stevens', 'Thurston',
			'Wahkiakum', 'Walla Walla', 'Whatcom', 'Whitman', 'Yakima'
		)
	);
}

function get_financing_method() {
	return array(
		'Financing Method' => array('Cash', 'Hard Money', 'Conventional'),
		'Type of Properties' => array('Single Family Home', 'Multi Family', 'Commercial'),
		'Preferred Exit Strategy' => array('Flip', 'Buy & Hold')
	);
}

function get_admin_info() {
	return array(
		array('first_name' => 'GARY', 'last_name' => 'MCCARTHY', 'sale_type' => 'hmc assets', 'user_type' => 'superadmin', 'user_email' => 'gm@hmcassets.com', 'user_id' => 'HUBBS'),
		array('first_name' => 'JAMES', 'last_name' => 'HELFRICH', 'sale_type' => 'hmc assets', 'user_type' => 'SUPERADMIN', 'user_email' => 'gm@hmcassets.com', 'user_id' => 'JHUBBS'),
		array('first_name' => 'MATT', 'last_name' => 'MILES', 'sale_type' => 'HMC ASSETS', 'user_type' => 'SUPERADMIN', 'user_email' => 'mm@hmcassets.com', 'user_id' => 'JHUBBS'),
		array('first_name' => 'JENNIFER', 'last_name' => 'HUBBS', 'sale_type' => 'HMC ASSETS', 'user_type' => 'SUPERADMIN', 'user_email' => 'gm@hmcassets.com', 'user_id' => 'JHUBBS'),
		array('first_name' => 'steve', 'last_name' => 'HUFFS', 'sale_type' => 'HMC ASSETS', 'user_type' => 'ALL', 'user_email' => 'gm@hmcassets.com', 'user_id' => 'JHUBBS'),
		array('first_name' => 'JAMIE', 'last_name' => 'SMITH', 'sale_type' => 'WEDGEWOOD', 'user_type' => 'ALL', 'user_email' => 'jamie@wedgewood-inc.com', 'user_id' => 'JHUBBS'),
		array('first_name' => 'WHIT', 'last_name' => 'MCCARTHY', 'sale_type' => 'TITAN CAPITAL', 'user_type' => 'INVESTOR, FINANCING', 'user_email' => 'whit.mccarthy@titan-cap.com', 'user_id' => 'JHUBBS'),
		array('first_name' => 'jack', 'last_name' => 'helfrich', 'sale_type' => 'TITAN CAPITAL', 'user_type' => 'INVESTOR, FINANCING', 'user_email' => 'jack.helfrich@titan-cap.com', 'user_id' => 'JHUBBS'),
		array('first_name' => 'darren', 'last_name' => 'siegrist', 'sale_type' => 'CIVIC HOME LOANS', 'user_type' => 'ALL', 'user_email' => 'darren.siegrist@civichomeloans.com', 'user_id' => 'JHUBBS'),
		array('first_name' => 'JOE', 'last_name' => 'SKYES', 'sale_type' => 'HMC ASSETS', 'user_type' => 'ALL', 'user_email' => 'js@hmcassets', 'user_id' => 'JHUBBS'),
		array('first_name' => 'GARY', 'last_name' => 'MCCARTHY', 'sale_type' => 'hmc assets', 'user_type' => 'superadmin', 'user_email' => 'gm@hmcassets.com', 'user_id' => 'HUBBS'),
		array('first_name' => 'JAMES', 'last_name' => 'HELFRICH', 'sale_type' => 'hmc assets', 'user_type' => 'SUPERADMIN', 'user_email' => 'gm@hmcassets.com', 'user_id' => 'JHUBBS'),
		array('first_name' => 'MATT', 'last_name' => 'MILES', 'sale_type' => 'HMC ASSETS', 'user_type' => 'SUPERADMIN', 'user_email' => 'mm@hmcassets.com', 'user_id' => 'JHUBBS'),
		array('first_name' => 'JENNIFER', 'last_name' => 'HUBBS', 'sale_type' => 'HMC ASSETS', 'user_type' => 'SUPERADMIN', 'user_email' => 'gm@hmcassets.com', 'user_id' => 'JHUBBS'),
		array('first_name' => 'steve', 'last_name' => 'HUFFS', 'sale_type' => 'HMC ASSETS', 'user_type' => 'ALL', 'user_email' => 'gm@hmcassets.com', 'user_id' => 'JHUBBS'),
		array('first_name' => 'JAMIE', 'last_name' => 'SMITH', 'sale_type' => 'WEDGEWOOD', 'user_type' => 'ALL', 'user_email' => 'jamie@wedgewood-inc.com', 'user_id' => 'JHUBBS'),
		array('first_name' => 'WHIT', 'last_name' => 'MCCARTHY', 'sale_type' => 'TITAN CAPITAL', 'user_type' => 'INVESTOR, FINANCING', 'user_email' => 'whit.mccarthy@titan-cap.com', 'user_id' => 'JHUBBS'),
		array('first_name' => 'jack', 'last_name' => 'helfrich', 'sale_type' => 'TITAN CAPITAL', 'user_type' => 'INVESTOR, FINANCING', 'user_email' => 'jack.helfrich@titan-cap.com', 'user_id' => 'JHUBBS'),
		array('first_name' => 'darren', 'last_name' => 'siegrist', 'sale_type' => 'CIVIC HOME LOANS', 'user_type' => 'ALL', 'user_email' => 'darren.siegrist@civichomeloans.com', 'user_id' => 'JHUBBS'),
		array('first_name' => 'JOE', 'last_name' => 'SKYES', 'sale_type' => 'HMC ASSETS', 'user_type' => 'ALL', 'user_email' => 'js@hmcassets', 'user_id' => 'JHUBBS'),
		array('first_name' => 'GARY', 'last_name' => 'MCCARTHY', 'sale_type' => 'hmc assets', 'user_type' => 'superadmin', 'user_email' => 'gm@hmcassets.com', 'user_id' => 'HUBBS'),
		array('first_name' => 'JAMES', 'last_name' => 'HELFRICH', 'sale_type' => 'hmc assets', 'user_type' => 'SUPERADMIN', 'user_email' => 'gm@hmcassets.com', 'user_id' => 'JHUBBS'),
		array('first_name' => 'MATT', 'last_name' => 'MILES', 'sale_type' => 'HMC ASSETS', 'user_type' => 'SUPERADMIN', 'user_email' => 'mm@hmcassets.com', 'user_id' => 'JHUBBS'),
		array('first_name' => 'JENNIFER', 'last_name' => 'HUBBS', 'sale_type' => 'HMC ASSETS', 'user_type' => 'SUPERADMIN', 'user_email' => 'gm@hmcassets.com', 'user_id' => 'JHUBBS'),
		array('first_name' => 'steve', 'last_name' => 'HUFFS', 'sale_type' => 'HMC ASSETS', 'user_type' => 'ALL', 'user_email' => 'gm@hmcassets.com', 'user_id' => 'JHUBBS'),
		array('first_name' => 'JAMIE', 'last_name' => 'SMITH', 'sale_type' => 'WEDGEWOOD', 'user_type' => 'ALL', 'user_email' => 'jamie@wedgewood-inc.com', 'user_id' => 'JHUBBS'),
		array('first_name' => 'WHIT', 'last_name' => 'MCCARTHY', 'sale_type' => 'TITAN CAPITAL', 'user_type' => 'INVESTOR, FINANCING', 'user_email' => 'whit.mccarthy@titan-cap.com', 'user_id' => 'JHUBBS'),
		array('first_name' => 'jack', 'last_name' => 'helfrich', 'sale_type' => 'TITAN CAPITAL', 'user_type' => 'INVESTOR, FINANCING', 'user_email' => 'jack.helfrich@titan-cap.com', 'user_id' => 'JHUBBS'),
		array('first_name' => 'darren', 'last_name' => 'siegrist', 'sale_type' => 'CIVIC HOME LOANS', 'user_type' => 'ALL', 'user_email' => 'darren.siegrist@civichomeloans.com', 'user_id' => 'JHUBBS'),
		array('first_name' => 'JOE', 'last_name' => 'SKYES', 'sale_type' => 'HMC ASSETS', 'user_type' => 'ALL', 'user_email' => 'js@hmcassets', 'user_id' => 'JHUBBS')
	);
}

function get_user_info_fields() {
	return array(
		array(
			'type' => 'text',
			'name' => 'First Name',
			'value' => 'GARY' 
		),
		array(
			'type' => 'text',
			'name' => 'Last Name',
			'value' => 'MCCARTHY'
		),
		array(
			'type' => 'select',
			'name' => 'Company',
			'value' => array('HMC ASSETS', 'WEDGEWOOD', 'TITAN CAPITAL', 'CIVIC HOME LOANS')
		),
		array(
			'type' => 'checkbox',
			'name' => 'Access Level',
			'value' => array('Super Admin', 'All', 'Investors', 'Financing', 'Reporting'),
			'wrapper_class' => 'col-xs-12'
		),
		array(
			'type' => 'text',
			'name' => 'User Name',
			'value' => 'JHUBBS'
		),
		array(
			'type' => 'password',
			'name' => 'User Password',
			'value' => 'JHUBBS'
		),
		array(
			'type' => 'email',
			'name' => 'Email Address',
			'value' => 'gm@hmcassets.com'
		),
		array(
			'type' => 'email',
			'name' => 'Confirm Email',
			'value' => 'gm@hmcassets.com'
		)
	);
}
