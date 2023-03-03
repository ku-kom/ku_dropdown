#
# Add SQL definition of database tables
#
--
-- Table structure for table 'tt_content'
--
CREATE TABLE tt_content (
    tx_ku_dropdown_item int(11) unsigned DEFAULT '0',
);

--
-- Table structure for table 'tx_ku_dropdown_item'
--
CREATE TABLE tx_ku_dropdown_item (
    tt_content int(11) unsigned DEFAULT '0',
    header varchar(255) DEFAULT '' NOT NULL,
    link varchar(255) DEFAULT '' NOT NULL,
);