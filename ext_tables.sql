#
# Table structure for table 'tt_address'
#
CREATE TABLE tt_address (
		uid INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
		pid INT(11) UNSIGNED DEFAULT '0' NOT NULL,
		tstamp INT(11) UNSIGNED DEFAULT '0' NOT NULL,
		hidden TINYINT(4) UNSIGNED DEFAULT '0' NOT NULL,
		name TINYTEXT NOT NULL,
		gender VARCHAR(1) DEFAULT '' NOT NULL,
		first_name TINYTEXT NOT NULL,
		middle_name TINYTEXT NOT NULL,
		last_name TINYTEXT NOT NULL,
		birthday INT(11) DEFAULT '0' NOT NULL,
		title VARCHAR(255) DEFAULT '' NOT NULL,
		email VARCHAR(255) DEFAULT '' NOT NULL,
		phone VARCHAR(30) DEFAULT '' NOT NULL,
		mobile VARCHAR(30) DEFAULT '' NOT NULL,
		www VARCHAR(255) DEFAULT '' NOT NULL,
		address TINYTEXT NOT NULL,
		building VARCHAR(20) DEFAULT '' NOT NULL,
		room VARCHAR(15) DEFAULT '' NOT NULL,
		company VARCHAR(255) DEFAULT '' NOT NULL,
		city VARCHAR(255) DEFAULT '' NOT NULL,
		zip VARCHAR(20) DEFAULT '' NOT NULL,
		region VARCHAR(255) DEFAULT '' NOT NULL,
		country VARCHAR(128) DEFAULT '' NOT NULL,
		image TINYBLOB NOT NULL,
		fax VARCHAR(30) DEFAULT '' NOT NULL,
		deleted TINYINT(3) DEFAULT '0',
		description TEXT NOT NULL,
		addressgroup INT(11) DEFAULT '0' NOT NULL,
		PRIMARY KEY (uid),
		KEY parent (pid),
		KEY pid (pid, email)
);


#
# Table structure for table 'tx_addressgroups_group'
#
CREATE TABLE tt_address_group (
		uid INT(11) NOT NULL AUTO_INCREMENT,
		pid INT(11) DEFAULT '0' NOT NULL,
		tstamp INT(11) DEFAULT '0' NOT NULL,
		crdate INT(11) DEFAULT '0' NOT NULL,
		cruser_id INT(11) DEFAULT '0' NOT NULL,
		sorting INT(10) DEFAULT '0' NOT NULL,
		deleted TINYINT(4) DEFAULT '0' NOT NULL,
		hidden TINYINT(4) DEFAULT '0' NOT NULL,
		fe_group INT(11) DEFAULT '0' NOT NULL,
		title TINYTEXT NOT NULL,
		parent_group INT(11) DEFAULT '0' NOT NULL,
		description TEXT NOT NULL,
		sys_language_uid INT(11) DEFAULT '0' NOT NULL,
		l18n_parent INT(11) DEFAULT '0' NOT NULL,
		l18n_diffsource MEDIUMBLOB NOT NULL,
		PRIMARY KEY (uid),
		KEY parent (pid)
);

#
# Table structure for table 'tt_address_tx_addressgroups_group_mm'
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
