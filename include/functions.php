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
