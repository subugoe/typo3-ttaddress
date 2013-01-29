#
# TABLE structure FOR TABLE 'tt_address'
#
CREATE TABLE tt_address (
		uid INT(11) unsigned DEFAULT '0' NOT NULL auto_increment,
		pid INT(11) unsigned DEFAULT '0' NOT NULL,
		tstamp INT(11) unsigned DEFAULT '0' NOT NULL,
		hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
		NAME tinytext NOT NULL,
		gender VARCHAR(1) DEFAULT '' NOT NULL,
		first_name tinytext NOT NULL,
		middle_name tinytext NOT NULL,
		last_name tinytext NOT NULL,
		birthday INT(11) DEFAULT '0' NOT NULL
		title VARCHAR(40) DEFAULT '' NOT NULL,
		email VARCHAR(80) DEFAULT '' NOT NULL,
		phone VARCHAR(30) DEFAULT '' NOT NULL,
		mobile VARCHAR(30) DEFAULT '' NOT NULL,
		www VARCHAR(80) DEFAULT '' NOT NULL,
		address tinytext NOT NULL,
		building VARCHAR(20) DEFAULT '' NOT NULL,
		room VARCHAR(15) DEFAULT '' NOT NULL,
		company VARCHAR(80) DEFAULT '' NOT NULL,
		city VARCHAR(80) DEFAULT '' NOT NULL,
		zip VARCHAR(20) DEFAULT '' NOT NULL,
		region VARCHAR(100) DEFAULT '' NOT NULL,
		country VARCHAR(100) DEFAULT '' NOT NULL,
		image tinyblob NOT NULL,
		fax VARCHAR(30) DEFAULT '' NOT NULL,
		deleted tinyint(3) DEFAULT '0',
		description text NOT NULL,
		addressgroup INT(11) DEFAULT '0' NOT NULL,
		t3ver_oid INT(11) DEFAULT '0' NOT NULL,
		t3ver_id INT(11) DEFAULT '0' NOT NULL,
		t3ver_wsid INT(11) DEFAULT '0' NOT NULL,
		t3ver_label VARCHAR(30) DEFAULT '' NOT NULL,
		t3ver_state TINYINT(4) DEFAULT '0' NOT NULL,
		t3ver_stage TINYINT(4) DEFAULT '0' NOT NULL,
		t3ver_count INT(11) DEFAULT '0' NOT NULL,
		t3ver_tstamp INT(11) DEFAULT '0' NOT NULL,
		t3_origuid INT(11) DEFAULT '0' NOT NULL
		PRIMARY KEY (uid),
		KEY parent (pid),
		KEY pid (pid,email)
);


#
# TABLE structure FOR TABLE 'tx_addressgroups_group'
#
CREATE TABLE tt_address_group (
		uid INT(11) NOT NULL auto_increment,
		pid INT(11) DEFAULT '0' NOT NULL,
		tstamp INT(11) DEFAULT '0' NOT NULL,
		crdate INT(11) DEFAULT '0' NOT NULL,
		cruser_id INT(11) DEFAULT '0' NOT NULL,
		sorting INT(10) DEFAULT '0' NOT NULL,
		deleted tinyint(4) DEFAULT '0' NOT NULL,
		hidden tinyint(4) DEFAULT '0' NOT NULL,
		fe_group INT(11) DEFAULT '0' NOT NULL,
		title tinytext NOT NULL,
		parent_group INT(11) DEFAULT '0' NOT NULL,
		description text NOT NULL,
		sys_language_uid INT(11) DEFAULT '0' NOT NULL,
		l18n_parent INT(11) DEFAULT '0' NOT NULL,
		l18n_diffsource mediumblob NOT NULL,
		t3ver_oid INT(11) DEFAULT '0' NOT NULL,
		t3ver_id INT(11) DEFAULT '0' NOT NULL,
		t3ver_wsid INT(11) DEFAULT '0' NOT NULL,
		t3ver_label VARCHAR(30) DEFAULT '' NOT NULL,
		t3ver_state TINYINT(4) DEFAULT '0' NOT NULL,
		t3ver_stage TINYINT(4) DEFAULT '0' NOT NULL,
		t3ver_count INT(11) DEFAULT '0' NOT NULL,
		t3ver_tstamp INT(11) DEFAULT '0' NOT NULL,
		t3_origuid INT(11) DEFAULT '0' NOT NULL
		PRIMARY KEY (uid),
		KEY parent (pid)
);

#
# TABLE structure FOR TABLE 'tt_address_tx_addressgroups_group_mm'
#
#
CREATE TABLE tt_address_group_mm (
		uid_local INT(11) DEFAULT '0' NOT NULL,
		uid_foreign INT(11) DEFAULT '0' NOT NULL,
		tablenames VARCHAR(30) DEFAULT '' NOT NULL,
		sorting INT(11) DEFAULT '0' NOT NULL,
		KEY uid_local (uid_local),
		KEY uid_foreign (uid_foreign)
);
