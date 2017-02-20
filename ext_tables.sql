# Table structure for table `pages`
CREATE TABLE pages (
  tx_t3vpage_claim varchar(255) DEFAULT '' NOT NULL,
  tx_t3vpage_summary text NOT NULL,
  tx_t3vpage_outline text NOT NULL,
  tx_t3vpage_thumbnail int(11) unsigned DEFAULT '0' NOT NULL
);

# Table structure for table `pages_language_overlay`
CREATE TABLE pages_language_overlay (
  tx_t3vpage_claim varchar(255) DEFAULT '' NOT NULL,
  tx_t3vpage_summary text NOT NULL,
  tx_t3vpage_outline text NOT NULL,
  tx_t3vpage_thumbnail int(11) unsigned DEFAULT '0' NOT NULL
);