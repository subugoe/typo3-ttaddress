#
# TABLE structure FOR TABLE 'tt_address'
#
CREATE TABLE tt_address (
		uid int(11) unsigned default '0' NOT NULL auto_increment,
		pid int(11) unsigned default '0' NOT NULL,
		tstamp int(11) unsigned default '0' NOT NULL,
		hidden tinyint(4) unsigned default '0' NOT NULL,
		name tinytext NOT NULL,
		gender varchar(1) default '' NOT NULL,
		first_name tinytext NOT NULL,
		middle_name tinytext NOT NULL,
		last_name tinytext NOT NULL,
		birthday int(11) default '0' NOT NULL
		title varchar(40) default '' NOT NULL,
		email varchar(80) default '' NOT NULL,
		phone varchar(30) default '' NOT NULL,
		mobile varchar(30) default '' NOT NULL,
		www varchar(80) default '' NOT NULL,
		address tinytext NOT NULL,
		building varchar(20) default '' NOT NULL,
		room varchar(15) default '' NOT NULL,
		company varchar(80) default '' NOT NULL,
		city varchar(80) default '' NOT NULL,
		zip varchar(20) default '' NOT NULL,
		region varchar(100) default '' NOT NULL,
		country varchar(100) default '' NOT NULL,
		image tinyblob NOT NULL,
		fax varchar(30) default '' NOT NULL,
		deleted tinyint(3) default '0',
		description text NOT NULL,
		addressgroup int(11) default '0' NOT NULL,
		t3ver_oid int(11) default '0' NOT NULL,
		t3ver_id int(11) default '0' NOT NULL,
		t3ver_wsid int(11) default '0' NOT NULL,
		t3ver_label varchar(30) default '' NOT NULL,
		t3ver_state tinyint(4) default '0' NOT NULL,
		t3ver_stage tinyint(4) default '0' NOT NULL,
		t3ver_count int(11) default '0' NOT NULL,
		t3ver_tstamp int(11) default '0' NOT NULL,
		t3_origuid int(11) default '0' NOT NULL
		PRIMARY KEY (uid),
		KEY parent (pid),
		KEY pid (pid,email)
);


#
# TABLE structure FOR TABLE 'tx_addressgroups_group'
#
CREATE TABLE tt_address_group (
		uid int(11) NOT NULL auto_increment,
		pid int(11) default '0' NOT NULL,
		tstamp int(11) default '0' NOT NULL,
		crdate int(11) default '0' NOT NULL,
		cruser_id int(11) default '0' NOT NULL,
		sorting int(10) default '0' NOT NULL,
		deleted tinyint(4) default '0' NOT NULL,
		hidden tinyint(4) default '0' NOT NULL,
		fe_group int(11) default '0' NOT NULL,
		title tinytext NOT NULL,
		parent_group int(11) default '0' NOT NULL,
		description text NOT NULL,
		sys_language_uid int(11) default '0' NOT NULL,
		l18n_parent int(11) default '0' NOT NULL,
		l18n_diffsource mediumblob NOT NULL,
		t3ver_oid int(11) default '0' NOT NULL,
		t3ver_id int(11) default '0' NOT NULL,
		t3ver_wsid int(11) default '0' NOT NULL,
		t3ver_label varchar(30) default '' NOT NULL,
		t3ver_state tinyint(4) default '0' NOT NULL,
		t3ver_stage tinyint(4) default '0' NOT NULL,
		t3ver_count int(11) default '0' NOT NULL,
		t3ver_tstamp int(11) default '0' NOT NULL,
		t3_origuid int(11) default '0' NOT NULL
		PRIMARY KEY (uid),
		KEY parent (pid)
);

#
# TABLE structure FOR TABLE 'tt_address_tx_addressgroups_group_mm'
#
#
CREATE TABLE tt_address_group_mm (
		uid_local int(11) default '0' NOT NULL,
		uid_foreign int(11) default '0' NOT NULL,
		tablenames varchar(30) default '' NOT NULL,
		sorting int(11) default '0' NOT NULL,
		KEY uid_local (uid_local),
		KEY uid_foreign (uid_foreign)
);
