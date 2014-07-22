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

function get_state_name($stateCode = null) {
    $states = array(
        'NC' => 'Northern California',
        'SC' => 'Southern California',
        'NM' => 'New Mexico',
        'WS' => 'Washington State'
    );
    if (is_null($stateCode)) {
        return $states;
    } else {
        return $states[$stateCode];
    }
}

function get_state_counties($stateCode = null) {
    $stateCounties = array(
        'NC' => array('ALL', 'NONE', 'Alameda', 'Alpine', 'Amador', 'Butte',
            'Calaveras', 'Colusa', 'Contra Costa', 'Del Norte', 'El Dorado', 'Fresno',
            'Glenn', 'Humboldt', 'Inyo', 'Kings', 'Lake', 'Lassen',
            'Madera', 'Marin', 'Mariposa', 'Mendocino', 'Merced', 'Modoc',
            'Mono', 'Monterey', 'Napa', 'Nevada', 'Placer', 'Plumas',
            'Sacramento', 'San Benito', 'San Francisco', 'San Joaquin', 'San Mateo', 'Santa Clara',
            'Santa Cruz', 'Shasta', 'Sierra', 'Siskiyou', 'Solano', 'Sonoma'
        ),
        'SC' => array('ALL', 'NONE', 'Imperial', 'Kern', 'Los Angeles',
            'Orange County', 'Riverside', 'San Bernardino', 'San Diego', 'San Luis Obispo'),
        'NM' => array('ALL', 'NONE', 'Bernarlillo', 'Catron', 'Chaves', 'Cibola',
            'Colfax', 'Curry', 'DeBaca', 'Dona Ana', 'Eddy', 'Grant',
            'Guadalupe', 'Harding', 'Hidalgo', 'Lea', 'Lincoln', 'Los Alamos',
            'Luna', 'McKinley', 'Mora', 'Otero', 'Quay', 'Rio Arriba',
            'Roosevelt', 'San Juan', 'San Miguel', 'Sandoval', 'Santa Fe', 'Sierra',
            'Socorro', 'Taos', 'Torance', 'Union', 'Valencia'
        ),
        'WS' => array('ALL', 'NONE', 'Adams', 'Asotin', 'Benton', 'Chelan',
            'Clallam', 'Clark', 'Columbia', 'Cowlitz', 'Douglas', 'Ferry',
            'Franklin', 'Garfield', 'Grant', 'Grays Harbor', 'Island', 'Jefferson',
            'King', 'Kitsap', 'Kittitas', 'Klickitat', 'Lewis', 'Lincoln',
            'Mason', 'Okanogan', 'Pacific', 'Pend Oreille', 'Pierce', 'San Juan',
            'Skagit', 'Skamania', 'Snohomish', 'Spokane', 'Stevens', 'Thurston',
            'Wahkiakum', 'Walla Walla', 'Whatcom', 'Whitman', 'Yakima'
        )
    );
    if (is_null($stateCode)) {
        return $stateCounties;
    } else {
        return $stateCounties[$stateCode];
    }
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
            'name' => 'Email Address',
            'value' => 'gm@hmcassets.com'
        )
    );
}

function get_investor_info() {
    return array(
        array('first_name' => 'GARY', 'last_name' => 'MCCARTHY', 'user_email' => 'gm@hmcassets.com', 'user_id' => 'HUBBS'),
        array('first_name' => 'JAMES', 'last_name' => 'HELFRICH', 'user_email' => 'gm@hmcassets.com', 'user_id' => 'JHUBBS'),
        array('first_name' => 'MATT', 'last_name' => 'MILES', 'user_email' => 'mm@hmcassets.com', 'user_id' => 'JHUBBS'),
        array('first_name' => 'JENNIFER', 'last_name' => 'HUBBS', 'user_email' => 'gm@hmcassets.com', 'user_id' => 'JHUBBS'),
        array('first_name' => 'steve', 'last_name' => 'HUFFS', 'user_email' => 'gm@hmcassets.com', 'user_id' => 'JHUBBS'),
        array('first_name' => 'JAMIE', 'last_name' => 'SMITH', 'user_email' => 'jamie@wedgewood-inc.com', 'user_id' => 'JHUBBS'),
        array('first_name' => 'WHIT', 'last_name' => 'MCCARTHY', 'user_email' => 'whit.mccarthy@titan-cap.com', 'user_id' => 'JHUBBS'),
        array('first_name' => 'jack', 'last_name' => 'helfrich', 'user_email' => 'jack.helfrich@titan-cap.com', 'user_id' => 'JHUBBS'),
        array('first_name' => 'darren', 'last_name' => 'siegrist', 'user_email' => 'darren.siegrist@civichomeloans.com', 'user_id' => 'JHUBBS'),
        array('first_name' => 'JOE', 'last_name' => 'SKYES', 'user_email' => 'js@hmcassets', 'user_id' => 'JHUBBS'),
        array('first_name' => 'GARY', 'last_name' => 'MCCARTHY', 'user_email' => 'gm@hmcassets.com', 'user_id' => 'HUBBS'),
        array('first_name' => 'JAMES', 'last_name' => 'HELFRICH', 'user_email' => 'gm@hmcassets.com', 'user_id' => 'JHUBBS'),
        array('first_name' => 'MATT', 'last_name' => 'MILES', 'user_email' => 'mm@hmcassets.com', 'user_id' => 'JHUBBS'),
        array('first_name' => 'JENNIFER', 'last_name' => 'HUBBS', 'user_email' => 'gm@hmcassets.com', 'user_id' => 'JHUBBS'),
        array('first_name' => 'steve', 'last_name' => 'HUFFS', 'user_email' => 'gm@hmcassets.com', 'user_id' => 'JHUBBS'),
        array('first_name' => 'JAMIE', 'last_name' => 'SMITH', 'user_email' => 'jamie@wedgewood-inc.com', 'user_id' => 'JHUBBS'),
        array('first_name' => 'WHIT', 'last_name' => 'MCCARTHY', 'user_email' => 'whit.mccarthy@titan-cap.com', 'user_id' => 'JHUBBS'),
        array('first_name' => 'jack', 'last_name' => 'helfrich', 'user_email' => 'jack.helfrich@titan-cap.com', 'user_id' => 'JHUBBS'),
        array('first_name' => 'darren', 'last_name' => 'siegrist', 'user_email' => 'darren.siegrist@civichomeloans.com', 'user_id' => 'JHUBBS'),
        array('first_name' => 'JOE', 'last_name' => 'SKYES', 'user_email' => 'js@hmcassets', 'user_id' => 'JHUBBS'),
        array('first_name' => 'GARY', 'last_name' => 'MCCARTHY', 'user_email' => 'gm@hmcassets.com', 'user_id' => 'HUBBS'),
        array('first_name' => 'JAMES', 'last_name' => 'HELFRICH', 'user_email' => 'gm@hmcassets.com', 'user_id' => 'JHUBBS'),
        array('first_name' => 'MATT', 'last_name' => 'MILES', 'user_email' => 'mm@hmcassets.com', 'user_id' => 'JHUBBS'),
        array('first_name' => 'JENNIFER', 'last_name' => 'HUBBS', 'user_email' => 'gm@hmcassets.com', 'user_id' => 'JHUBBS'),
        array('first_name' => 'steve', 'last_name' => 'HUFFS', 'user_email' => 'gm@hmcassets.com', 'user_id' => 'JHUBBS'),
        array('first_name' => 'JAMIE', 'last_name' => 'SMITH', 'user_email' => 'jamie@wedgewood-inc.com', 'user_id' => 'JHUBBS'),
        array('first_name' => 'WHIT', 'last_name' => 'MCCARTHY', 'user_email' => 'whit.mccarthy@titan-cap.com', 'user_id' => 'JHUBBS'),
        array('first_name' => 'jack', 'last_name' => 'helfrich', 'user_email' => 'jack.helfrich@titan-cap.com', 'user_id' => 'JHUBBS'),
        array('first_name' => 'darren', 'last_name' => 'siegrist', 'user_email' => 'darren.siegrist@civichomeloans.com', 'user_id' => 'JHUBBS'),
        array('first_name' => 'JOE', 'last_name' => 'SKYES', 'user_email' => 'js@hmcassets', 'user_id' => 'JHUBBS')
    );
}

function get_login_info_fields() {
    return array(
        array(
            'type' => 'select',
            'name' => 'Select A Profile',
            'value' => array('HMC ASSETS', 'WEDGEWOOD', 'TITAN CAPITAL', 'CIVIC HOME LOANS')
        ),
        array(
            'type' => 'text',
            'name' => 'User Name',
            'value' => 'JHUBBS'
        ),
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
            'type' => 'email',
            'name' => 'Email Address',
            'value' => 'gm@hmcassets.com'
        ),
        array(
            'type' => 'email',
            'name' => 'Email Address',
            'value' => 'gm@hmcassets.com'
        )
    );
}

function get_investor_info_fields() {
    return array(
        array(
            'type' => 'text',
            'name' => 'First Name',
            'value' => 'GARY',
            'wrapper_class' => 'col-xs-3'
        ),
        array(
            'type' => 'text',
            'name' => 'Last Name',
            'value' => 'MCCARTHY',
            'wrapper_class' => 'col-xs-3'
        ),
        array(
            'type' => 'text',
            'name' => 'Company',
            'value' => 'MCCARTHY',
            'wrapper_class' => 'col-xs-6',
            'first_class' => 'col-xs-3',
            'second_class' => 'col-xs-9'
        ),
        array(
            'type' => 'text',
            'name' => 'City',
            'value' => 'YanBian',
            'wrapper_class' => 'col-xs-3',
            'first_class' => 'col-xs-4',
            'second_class' => 'col-xs-8'
        ),
        array(
            'type' => 'text',
            'name' => 'State',
            'value' => 'Jilin',
            'wrapper_class' => 'col-xs-3',
            'first_class' => 'col-xs-4',
            'second_class' => 'col-xs-8'
        ),
        array(
            'type' => 'text',
            'name' => 'Zip',
            'value' => '133000',
            'wrapper_class' => 'col-xs-2',
            'first_class' => 'col-xs-4',
            'second_class' => 'col-xs-8'
        ),
        array(
            'type' => 'text',
            'name' => 'Work Phone',
            'value' => 'GARY',
            'wrapper_class' => 'col-xs-4',
            'first_class' => 'col-xs-4',
            'second_class' => 'col-xs-8'
        ),
        array(
            'type' => 'text',
            'name' => 'Fax',
            'value' => 'GARY',
            'wrapper_class' => 'col-xs-2',
            'first_class' => 'col-xs-4',
            'second_class' => 'col-xs-8'
        ),
        array(
            'type' => 'text',
            'name' => 'Mobile',
            'value' => 'GARY',
            'wrapper_class' => 'col-xs-3',
            'first_class' => 'col-xs-4',
            'second_class' => 'col-xs-8'
        ),
        array(
            'type' => 'email',
            'name' => 'Email',
            'value' => 'changhyang928@gmail.com',
            'wrapper_class' => 'col-xs-4',
            'first_class' => 'col-xs-3',
            'second_class' => 'col-xs-9'
        ),
        array(
            'type' => 'label',
            'name' => 'States of Interests<span>(Select all that apply)</span>',
            'wrapper_class' => 'col-xs-12'
        ),
        array(
            'type' => 'select',
            'name' => get_state_name('NC'),
            'value' => get_state_counties('NC'),
            'first_class' => 'col-xs-4',
            'second_class' => 'col-xs-8',
            'multi' => true,
            'search' => true
        ),
        array(
            'type' => 'select',
            'name' => get_state_name('SC'),
            'value' => get_state_counties('SC'),
            'first_class' => 'col-xs-4',
            'second_class' => 'col-xs-8',
            'multi' => true,
            'search' => true
        ),
        array(
            'type' => 'select',
            'name' => get_state_name('NM'),
            'value' => get_state_counties('NM'),
            'first_class' => 'col-xs-4',
            'second_class' => 'col-xs-8',
            'multi' => true,
            'search' => true
        ),
        array(
            'type' => 'select',
            'name' => get_state_name('WS'),
            'value' => get_state_counties('WS'),
            'first_class' => 'col-xs-4',
            'second_class' => 'col-xs-8',
            'multi' => true,
            'search' => true
        ),
        array(
            'type' => 'checkbox',
            'name' => 'Financing Method <span>(Select all counties that apply)</span>',
            'value' => array('Cash', 'Hard Money', 'Conventional'),
            'wrapper_class' => 'col-xs-12',
            'first_wrapper' => 'col-xs-5',
            'second_wrapper' => 'col-xs-7'
        ),
        array(
            'type' => 'checkbox',
            'name' => 'Type of Properties<span>(Select all counties that apply)</span>',
            'value' => array('Single Family Home', 'Multi Family', 'Commercial'),
            'wrapper_class' => 'col-xs-12',
            'first_wrapper' => 'col-xs-5',
            'second_wrapper' => 'col-xs-7'
        ),
        array(
            'type' => 'checkbox',
            'name' => 'Preferred Exit Strategy<span>(Select all counties that apply)</span>',
            'value' => array('Flip', 'Buy & Hold'),
            'wrapper_class' => 'col-xs-12',
            'first_wrapper' => 'col-xs-5',
            'second_wrapper' => 'col-xs-7'
        ),
        array(
            'type' => 'select',
            'name' => 'Assets available for purchase of investment properties',
            'value' => array('Less than 100K', '100K', '200K', '300K', '400K'),
            'wrapper_class' => 'col-xs-11',
            'first_class' => 'col-xs-5',
            'second_class' => 'col-xs-3'
        ),
        array(
            'type' => 'label',
            'name' => 'Please indicate Your Purchase Price Range',
            'wrapper_class' => 'col-xs-4',
            'first_class' => 'col-xs-12'
        ),
        array(
            'type' => 'select',
            'name' => 'From',
            'value' => array('any', '100K', '200K', '300K', '400K'),
            'wrapper_class' => 'col-xs-2',
            'first_class' => 'col-xs-4',
            'second_class' => 'col-xs-8'
        ),
        array(
            'type' => 'select',
            'name' => 'To',
            'value' => array('any', '100K', '200K', '300K', '400K'),
            'wrapper_class' => 'col-xs-2',
            'first_class' => 'col-xs-4',
            'second_class' => 'col-xs-8'
        ),
        array(
            'type' => 'textarea',
            'name' => 'Numbers of Investment Properties Purchased in the last 24 months',
            'value' => '',
            'wrapper_class' => 'col-xs-7',
            'first_class' => 'col-xs-10',
            'second_class' => 'col-xs-10'
        ),
        array(
            'type' => 'textarea',
            'name' => 'Comments',
            'value' => '',
            'wrapper_class' => 'col-xs-5',
            'first_class' => 'col-xs-10',
            'second_class' => 'col-xs-10'
        )
    );
}

function get_profile_info_fields() {
    return array(
        array(
            'type' => 'text',
            'name' => 'First Name',
            'value' => 'GARY',
            'wrapper_class' => 'col-xs-6'
        ),
        array(
            'type' => 'text',
            'name' => 'Last Name',
            'value' => 'MCCARTHY',
            'wrapper_class' => 'col-xs-6'
        ),
        array(
            'type' => 'text',
            'name' => 'Company',
            'value' => 'MCCARTHY',
            'wrapper_class' => 'col-xs-6',
            'first_class' => 'col-xs-3',
            'second_class' => 'col-xs-9'
        ),
        array(
            'type' => 'text',
            'name' => 'City',
            'value' => 'YanBian',
            'wrapper_class' => 'col-xs-3',
            'first_class' => 'col-xs-4',
            'second_class' => 'col-xs-8'
        ),
        array(
            'type' => 'text',
            'name' => 'State',
            'value' => 'Jilin',
            'wrapper_class' => 'col-xs-3',
            'first_class' => 'col-xs-4',
            'second_class' => 'col-xs-8'
        ),
        array(
            'type' => 'text',
            'name' => 'Zip',
            'value' => '133000',
            'wrapper_class' => 'col-xs-4',
            'first_class' => 'col-xs-4',
            'second_class' => 'col-xs-8'
        ),
        array(
            'type' => 'text',
            'name' => 'Work Phone',
            'value' => 'GARY',
            'wrapper_class' => 'col-xs-5',
            'first_class' => 'col-xs-7',
            'second_class' => 'col-xs-5'
        ),
        array(
            'type' => 'text',
            'name' => 'Fax',
            'value' => 'GARY',
            'wrapper_class' => 'col-xs-3',
            'first_class' => 'col-xs-4',
            'second_class' => 'col-xs-8'
        ),
        array(
            'type' => 'text',
            'name' => 'Mobile',
            'value' => 'GARY',
            'wrapper_class' => 'col-xs-4',
            'first_class' => 'col-xs-4',
            'second_class' => 'col-xs-8'
        ),
        array(
            'type' => 'email',
            'name' => 'Email',
            'value' => 'changhyang928@gmail.com',
            'wrapper_class' => 'col-xs-5',
            'first_class' => 'col-xs-3',
            'second_class' => 'col-xs-9'
        ),
        array(
            'type' => 'label',
            'name' => 'States of Interests<span>(Select all that apply)</span>',
            'wrapper_class' => 'col-xs-12'
        ),
        array(
            'type' => 'select',
            'name' => get_state_name('NC'),
            'value' => get_state_counties('NC'),
            'wrapper_class' => 'col-xs-6',
            'first_class' => 'col-xs-12',
            'second_class' => 'col-xs-12',
            'multi' => true,
            'search' => true
        ),
        array(
            'type' => 'select',
            'name' => get_state_name('SC'),
            'value' => get_state_counties('SC'),
            'wrapper_class' => 'col-xs-6',
            'first_class' => 'col-xs-12',
            'second_class' => 'col-xs-12',
            'multi' => true,
            'search' => true
        ),
        array(
            'type' => 'select',
            'name' => get_state_name('NM'),
            'value' => get_state_counties('NM'),
            'wrapper_class' => 'col-xs-6',
            'first_class' => 'col-xs-12',
            'second_class' => 'col-xs-12',
            'multi' => true,
            'search' => true
        ),
        array(
            'type' => 'select',
            'name' => get_state_name('WS'),
            'value' => get_state_counties('WS'),
            'wrapper_class' => 'col-xs-6',
            'first_class' => 'col-xs-12',
            'second_class' => 'col-xs-12',
            'multi' => true,
            'search' => true
        ),
        array(
            'type' => 'checkbox',
            'name' => 'Financing Method <span>(Select all that apply)</span>',
            'value' => array('Cash', 'Hard Money', 'Conventional'),
            'wrapper_class' => 'col-xs-12',
            'first_wrapper' => 'col-xs-5',
            'second_wrapper' => 'col-xs-7'
        ),
        array(
            'type' => 'checkbox',
            'name' => 'Type of Properties<span>(Select all that apply)</span>',
            'value' => array('Single Family Home', 'Multi Family', 'Commercial'),
            'wrapper_class' => 'col-xs-12',
            'first_wrapper' => 'col-xs-5',
            'second_wrapper' => 'col-xs-7'
        ),
        array(
            'type' => 'checkbox',
            'name' => 'Preferred Exit Strategy<span>(Select all that apply)</span>',
            'value' => array('Flip', 'Buy & Hold'),
            'wrapper_class' => 'col-xs-12',
            'first_wrapper' => 'col-xs-5',
            'second_wrapper' => 'col-xs-7'
        ),
        array(
            'type' => 'select',
            'name' => 'Assets available for purchase of investment properties',
            'value' => array('Less than 100K', '100K', '200K', '300K', '400K'),
            'wrapper_class' => 'col-xs-12',
            'first_class' => 'col-xs-6',
            'second_class' => 'col-xs-6'
        ),
        array(
            'type' => 'label',
            'name' => 'Please indicate Your Purchase Price Range',
            'wrapper_class' => 'col-xs-6',
            'first_class' => 'col-xs-12'
        ),
        array(
            'type' => 'select',
            'name' => 'From',
            'value' => array('any', '100K', '200K', '300K', '400K'),
            'wrapper_class' => 'col-xs-3',
            'first_class' => 'col-xs-3',
            'second_class' => 'col-xs-9'
        ),
        array(
            'type' => 'select',
            'name' => 'To',
            'value' => array('any', '100K', '200K', '300K', '400K'),
            'wrapper_class' => 'col-xs-3',
            'first_class' => 'col-xs-3',
            'second_class' => 'col-xs-9'
        ),
        array(
            'type' => 'textarea',
            'name' => 'Numbers of Investment Properties Purchased in the last 24 months',
            'value' => '',
            'wrapper_class' => 'col-xs-12',
            'first_class' => 'col-xs-10',
            'second_class' => 'col-xs-6'
        ),
        array(
            'type' => 'textarea',
            'name' => 'Comments',
            'value' => '',
            'wrapper_class' => 'col-xs-12',
            'first_class' => 'col-xs-10',
            'second_class' => 'col-xs-6'
        )
    );
}

function admin_build_form($form_info, $edit_flag = false, $num = null) {
    $suffix = '';
    if ($num != null) {
        $suffix = $num;
    }
    foreach ($form_info as $info_item) {
        if (isset($info_item['wrapper_class'])) {
            $wrapper_class = $info_item['wrapper_class'];
        } else {
            $wrapper_class = 'col-xs-6';
        }
        $first_class = isset($info_item['first_class']) ? $info_item['first_class'] : 'col-xs-5';
        $second_class = isset($info_item['second_class']) ? $info_item['second_class'] : 'col-xs-7';
        $first_wrapper = isset($info_item['first_wrapper']) ? $info_item['first_wrapper'] : 'col-xs-3';
        $second_wrapper = isset($info_item['second_wrapper']) ? $info_item['second_wrapper'] : 'col-xs-9';
        ?>
        <div class='form-item <?php echo $wrapper_class; ?>'>
            <?php
            switch ($info_item['type']) {
                case 'label':
                    ?>
                    <label class='<?php echo $first_class; ?>' for='<?php checkbox_get_for($info_item['name']); ?>'><?php echo $info_item['name']; ?></label>
                    <?php
                    break;
                case 'text':
                case 'email':
                case 'password':
                    ?>
                    <label class='<?php echo $first_class; ?>' for='<?php checkbox_get_for($info_item['name']); ?>'><?php echo $info_item['name']; ?></label>
                    <input class='<?php echo $second_class; ?>' type='<?php echo $info_item['type']; ?>' id='<?php checkbox_get_for($info_item['name']); ?>' name='<?php checkbox_get_for($info_item['name']); ?>' value='<?php echo $edit_flag ? $info_item['value'] : ''; ?>'/>
                    <?php
                    break;
                case 'textarea':
                    ?>
                    <label class='<?php echo $first_class; ?>' for='<?php checkbox_get_for($info_item['name']); ?>'><?php echo $info_item['name']; ?></label>
                    <textarea class='<?php echo $second_class; ?>' id='<?php checkbox_get_for($info_item['name']); ?>' name='<?php checkbox_get_for($info_item['name']); ?>'><?php echo $edit_flag ? $info_item['value'] : ''; ?></textarea>
                    <?php
                    break;
                case 'checkbox':
                    ?>
                    <label class='<?php echo $first_wrapper; ?>' for='<?php checkbox_get_for($info_item['name']); ?>'><?php echo $info_item['name']; ?></label>
                    <div class='checkbox-group <?php echo $second_wrapper; ?>'>
                        <?php
                        foreach ($info_item['value'] as $item) {
                            ?>
                            <input type='checkbox' name='<?php checkbox_get_for($info_item['name']) . '_' . checkbox_get_for($item); ?>'  id='<?php checkbox_get_for($info_item['name'].$suffix) . '_' . checkbox_get_for($item); ?>' />
                            <label for='<?php checkbox_get_for($info_item['name'].$suffix) . '_' . checkbox_get_for($item); ?>'><?php echo $item; ?></label>
                            <?php
                        }
                        ?>
                    </div>
                    <?php
                    break;
                case 'select':
                    ?>
                    <label class='<?php echo $first_class; ?>' for='<?php checkbox_get_for($info_item['name']); ?>'><?php echo $info_item['name']; ?></label>
                    <select class='<?php echo $second_class; ?> selectpicker' name='<?php echo $info_item['type']; ?>' id='<?php checkbox_get_for($info_item['name']); ?>'  <?php echo isset($info_item['multi']) && $info_item['multi'] ? 'multiple' : ''; ?> <?php echo isset($info_item['search']) && $info_item['search'] ? 'title="All" data-live-search="true"' : ''; ?>>
                        <?php
                        foreach ($info_item['value'] as $item) {
                            ?>
                            <option value='<?php checkbox_get_for($item); ?>'><?php echo $item; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                    <?php
                    break;
                default:
                    ?>
                    <label class="<?php echo $first_class; ?>">&nbsp;</label>
                    <?php
                    break;
            }
            ?>
        </div>
        <?php
    }
}
