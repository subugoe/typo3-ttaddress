<?php

// ******************************************************************
// This is the standard TypoScript address table, tt_address
// ******************************************************************

$TCA['tt_address'] = array (
	'ctrl' => $TCA['tt_address']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'name,first_name,middle_name,last_name,address,building,room,city,zip,region,country,phone,fax,email,www,title,company,image'
	),
	'feInterface' => $TCA['tt_address']['feInterface'],
	'columns' => array (
		'hidden' => array (
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array (
				'type' => 'check'
			)
		),
		'gender' => array (
			'label'  => 'LLL:EXT:tt_address/locallang_tca.xml:tt_address.gender',
			'config' => array (
				'type'    => 'radio',
				'default' => 'm',
				'items'   => array(
					array('LLL:EXT:tt_address/locallang_tca.xml:tt_address.gender.m', 'm'),
					array('LLL:EXT:tt_address/locallang_tca.xml:tt_address.gender.f', 'f')
				)
			)
		),
		'title' => array (
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.title_person',
			'config'  => array (
				'type' => 'input',
				'size' => '8',
				'eval' => 'trim',
				'max'  => '255'
			)
		),
		'name' => array (
			'label'  => 'LLL:EXT:lang/locallang_general.xml:LGL.name',
			'config' => array (
				'type' => 'input',
				'readOnly' => TRUE,
				'size' => '40',
				'eval' => 'trim',
				'max'  => '255'
			)
		),
		'first_name' => array (
			'exclude' => 0,
			'label'   => 'LLL:EXT:tt_address/locallang_tca.xml:tt_address.first_name',
			'config'  => array (
				'type' => 'input',
				'size' => '20',
				'eval' => 'trim',
				'max'  => '255'
			)
		),
		'middle_name' => array (
			'exclude' => 0,
			'label'   => 'LLL:EXT:tt_address/locallang_tca.xml:tt_address.middle_name',
			'config'  => array (
				'type' => 'input',
				'size' => '20',
				'eval' => 'trim',
				'max'  => '255'
			)
		),
		'last_name' => array (
			'exclude' => 0,
			'label'   => 'LLL:EXT:tt_address/locallang_tca.xml:tt_address.last_name',
			'config'  => array (
				'type' => 'input',
				'size' => '20',
				'eval' => 'trim',
				'max'  => '255'
			)
		),
		'birthday' => array (
			'exclude' => 1,
			'label'   => 'LLL:EXT:tt_address/locallang_tca.xml:tt_address.birthday',
			'config'  => array (
				'type' => 'input',
				'eval' => 'date',
				'size' => '8',
				'max'  => '20'
			)
		),
		'address' => array (
			'label'  => 'LLL:EXT:lang/locallang_general.xml:LGL.address',
			'config' => array (
				'type' => 'text',
				'cols' => '20',
				'rows' => '3'
			)
		),
		'building' => array (
			'label'  => 'LLL:EXT:tt_address/locallang_tca.xml:tt_address.building',
			'config' => array (
				'type' => 'input',
				'eval' => 'trim',
				'size' => '20',
				'max'  => '20'
			)
		),
		'room' => array (
			'label'  => 'LLL:EXT:tt_address/locallang_tca.xml:tt_address.room',
			'config' => array (
				'type' => 'input',
				'eval' => 'trim',
				'size' => '5',
				'max'  => '15'
			)
		),
		'phone' => array (
			'label'  => 'LLL:EXT:lang/locallang_general.xml:LGL.phone',
			'config' => array (
				'type' => 'input',
				'eval' => 'trim',
				'size' => '20',
				'max'  => '30'
			)
		),
		'fax' => array (
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.fax',
			'config'  => array (
				'type' => 'input',
				'size' => '20',
				'eval' => 'trim',
				'max'  => '30'
			)
		),
		'mobile' => array (
			'exclude' => 1,
			'label'   => 'LLL:EXT:tt_address/locallang_tca.xml:tt_address.mobile',
			'config'  => array (
				'type' => 'input',
				'eval' => 'trim',
				'size' => '20',
				'max'  => '30'
			)
		),
		'www' => array (
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.www',
			'config'  => array (
				'type' => 'input',
				'eval' => 'trim',
				'size' => '20',
				'max'  => '255',
				'wizards' => array(
					'_PADDING' => 2,
					'link' => array(
						'type' => 'popup',
						'title' => 'LLL:EXT:cms/locallang_ttc.xml:header_link_formlabel',
						'icon' => 'link_popup.gif',
						'script' => 'browse_links.php?mode=wizard&act=page|url',
						'params' => array(
							'blindLinkOptions' => 'mail,file,spec,folder',
						),
						'JSopenParams' => 'height=300,width=500,status=0,menubar=0,scrollbars=1',
					),
				)
			)
		),
		'email' => array (
			'label'  => 'LLL:EXT:lang/locallang_general.xml:LGL.email',
			'config' => array (
				'type' => 'input',
				'size' => '40',
				'eval' => 'trim',
				'max'  => '255'
			)
		),
		'company' => array (
			'exclude' => 1,
			'label'   => 'LLL:EXT:tt_address/locallang_tca.xml:tt_address.organization',
			'config'  => array (
				'type' => 'input',
				'eval' => 'trim',
				'size' => '20',
				'max'  => '255'
			)
		),
		'position' => array (
			'exclude' => 1,
			'label'   => 'LLL:EXT:tt_address/locallang_tca.xml:tt_address.position',
			'config'  => array (
				'type' => 'input',
				'size' => '20',
				'eval' => 'trim',
				'max'  => '255'
			)
		),
		'city' => array (
			'label'  => 'LLL:EXT:lang/locallang_general.xml:LGL.city',
			'config' => array (
				'type' => 'input',
				'size' => '20',
				'eval' => 'trim',
				'max'  => '255'
			)
		),
		'zip' => array (
			'label'  => 'LLL:EXT:lang/locallang_general.xml:LGL.zip',
			'config' => array (
				'type' => 'input',
				'eval' => 'trim',
				'size' => '10',
				'max'  => '20'
			)
		),
		'region' => array (
			'exclude' => 1,
			'label'   => 'LLL:EXT:tt_address/locallang_tca.xml:tt_address.region',
			'config'  => array (
				'type' => 'input',
				'size' => '10',
				'eval' => 'trim',
				'max'  => '255'
			)
		),
		'country' => array (
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.country',
			'config'  => array (
				'type' => 'input',
				'size' => '20',
				'eval' => 'trim',
				'max'  => '128'
			)
		),
		'image' => array (
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.image',
			'config'  => array (
				'type'          => 'group',
				'internal_type' => 'file',
				'allowed'       => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
				'max_size'      => '1000',
				'uploadfolder'  => 'uploads/pics',
				'show_thumbs'   => '1',
				'size'          => '3',
				'maxitems'      => TT_ADDRESS_MAX_IMAGES,
				'minitems'      => '0'
			)
		),
		'description' => array (
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.description',
			'config'  => array (
				'type' => 'text',
				'rows' => 5,
				'cols' => 48
			)
		),
		'addressgroup' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:tt_address/locallang_tca.xml:tt_address.addressgroup',
			'config'  => array(
				'type'          => 'select',
				'form_type'     => 'user',
				'userFunc'      => 'tx_ttaddress_treeview->displayGroupTree',
				'treeView'      => 1,
				'foreign_table' => 'tt_address_group',
				'size'          => 5,
				'autoSizeMax'   => 25,
				'minitems'      => 0,
				'maxitems'      => 50,
				'MM'            => 'tt_address_group_mm',
			)
		)
	),
	'types' => array (
		'1' => array('showitem' =>
			'hidden,
			--palette--;LLL:EXT:tt_address/locallang_tca.xml:tt_address_palette.name;name,
			image, description,
			--div--;LLL:EXT:tt_address/locallang_tca.xml:tt_address_tab.contact,
				--palette--;LLL:EXT:tt_address/locallang_tca.xml:tt_address_palette.address;address,
				--palette--;LLL:EXT:tt_address/locallang_tca.xml:tt_address_palette.building;building,
				--palette--;LLL:EXT:tt_address/locallang_tca.xml:tt_address_palette.organization;organization,
				--palette--;LLL:EXT:tt_address/locallang_tca.xml:tt_address_palette.contact;contact,
			--div--;LLL:EXT:tt_address/locallang_tca.xml:tt_address_tab.groups,
				addressgroup
			')
	),
	'palettes' => array (
		'name' => array(
			'showitem' => 'name, --linebreak--,
							gender, title, --linebreak--,
							first_name, middle_name, --linebreak--,
							last_name',
			'canNotCollapse' => 1
		),

		'organization' => array(
			'showitem' => 'company, --linebreak--,
							position',
			'canNotCollapse' => 1
		),

		'address' => array(
			'showitem' => 'address, --linebreak--,
							city, zip, region, --linebreak--,
							country',
			'canNotCollapse' => 1
		),

		'building' => array(
			'showitem' => 'building, room',
			'canNotCollapse' => 1
		),

		'contact' => array(
			'showitem' => 'email, --linebreak--,
							phone, --linebreak--,
							mobile, fax, --linebreak--,
							www',
			'canNotCollapse' => 1
		),
	)
);

$TCA['tt_address_group'] = array(
	'ctrl' => $TCA['tt_address_group']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'hidden,fe_group,title,parent_group,description'
	),
	'feInterface' => $TCA['tt_address_group']['feInterface'],
	'columns' => array(
		'hidden' => array(
			'l10n_mode' => 'mergeIfNotBlank',
			'exclude'   => 1,
			'label'     => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'    => array(
				'type'    => 'check',
				'default' => '1'
			)
		),
		'fe_group' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.fe_group',
			'config'  => array(
				'type'  => 'select',
				'items' => array(
					array('', 0),
					array('LLL:EXT:lang/locallang_general.xml:LGL.hide_at_login', -1),
					array('LLL:EXT:lang/locallang_general.xml:LGL.any_login', -2),
					array('LLL:EXT:lang/locallang_general.xml:LGL.usergroups', '--div--')
				),
				'foreign_table' => 'fe_groups'
			)
		),
		'title' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.title',
			'config'  => array(
				'type' => 'input',
				'size' => '30',
				'eval' => 'required',
			)
		),
		'parent_group' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:tt_address/locallang_tca.xml:tt_address_group.parent_group',
			'config'  => array(
				'type'          => 'select',
				'form_type'     => 'user',
				'userFunc'      => 'tx_ttaddress_treeview->displayGroupTree',
				'treeView'      => 1,
				'size'          => 1,
				'autoSizeMax'   => 10,
				'minitems'      => 0,
				'maxitems'      => 2,
				'foreign_table' => 'tt_address_group',
			)
		),
		'description' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.description',
			'config'  => array(
				'type' => 'text',
				'cols' => '30',
				'rows' => '5',
			)
		),
		'sys_language_uid' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.language',
			'config'  => array(
				'type'                => 'select',
				'foreign_table'       => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items'               => array(
					array('LLL:EXT:lang/locallang_general.php:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.php:LGL.default_value', 0)
				)
			)
		),
		'l18n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude'     => 1,
			'label'       => 'LLL:EXT:lang/locallang_general.xml:LGL.l18n_parent',
			'config'      => array(
				'type'  => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table'       => 'tt_address_group',
				'foreign_table_where' => 'AND tt_address_group.uid=###REC_FIELD_l18n_parent### AND tt_address_group.sys_language_uid IN (-1,0)',
			)
		),
		'l18n_diffsource' => array(
			'config'=> array(
				'type' => 'passthrough'
			)
		),
	),
	'types' => array(
		'0' => array('showitem' => 'hidden;;1;;1-1-1, title;;;;2-2-2, parent_group;;;;3-3-3, description')
	),
	'palettes' => array(
		'1' => array('showitem' => 'fe_group')
	)
);


?>