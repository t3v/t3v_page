Changelog
=========

Notable changes will be documented in this file. The project adheres to [Semantic Versioning].

Unreleased
----------

* Updated dependencies
* Update Travis CI and AppVeyor configuration

2.0.1
-----

* Defined namespace in `ext_localconf` and `ext_tables`
* Updated extension icon
* Updated scripts

2.0.0
-----

* Compatibility for TYPO3 8.7
* Added configuration for AppVeyor
* Use `nimut/testing-framework` as testing framework

1.5.0
-----

* Updated TCA configuration for T3v Page Thumbnail (`tx_t3vpage_thumbnail`)
* Updated Composer dependencies
* Updated scripts

1.4.0
-----

* Added `Outline` (`tx_t3vpage_outline`) property to `Page` object
* Use `call_user_func` in `ext_localconf.php` and `ext_tables.php`
* Configured Travis CI
* Added unit and functional tests
* Updated Composer configuration / dependencies
* New icon
* Updated claim
* Updated comments

1.3.2
-----

* Updated TCA configurations
* Hide diff (`tx_t3vpage_thumbnail`)
* Cleaned up
* Updated Composer dependencies

1.3.1
-----

* Wrap TCA overrides in user function
* Updated Composer configuration
* Updated `ext_emconf.php`

1.3.0
-----

* Released under the MIT License
* Switched to GitHub
* Minor changes / cleanup

1.2.2
-----

* Updated dependencies
* Cleaned up
* Minor changes

1.2.1
-----

* Cleaned up code and structure

1.2.0
-----

* Moved pages language overlay fields to `Metadata` tab

1.1.1
-----

* Use value of the default language if language overlay fields are empty

1.1.0
-----

* Added `Claim` (`tx_t3vpage_claim`) property to `Page` object

1.0.0
-----

* Added `Thumbnail` (`tx_t3vpage_thumbnail`) property to `Page` object
* Added `Summary` (`tx_t3vpage_summary`) property to `Page` object
* Added common files

[Semantic Versioning]: http://semver.org "Semantic Versioning"