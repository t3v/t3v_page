CHANGELOG
=========

Notable changes will be documented in this file. The project adheres to [Semantic Versioning].

7.3.0
-----

* Use `t3v_base` instead of `t3v_core` for future development

7.2.0
-----

* Added TypoScript for `seo` extension
* Updated Composer configuration
* Updated dependencies

7.1.0
-----

* Updated Travis CI configuration
* Updated dependencies
* Minor changes and clean up

7.0.0
-----

* Moved `tx_t3vpage` palette after `keywords` field and into the `Metadata` tab
* Updated Travis CI configuration
* Dropped support for TYPO3 9.5 (breaking change)
* Dropped support for PHP < 7.4 (breaking change)
* Dropped support for AppVeyor
* Updated dependencies

6.0.0
-----

* Integrated `t3v/t3v_testing` which is based on `typo3/testing-framework`
* Added support for TYPO3 CMS 9.5 or greater
* Dropped support for TYPO3 8.x (breaking change)
* PSR-12: Extended Coding Style
* Updated Travis CI and AppVeyor configuration
* Updated dependencies
* Cleaned up

5.1.0
-----

* Updated TypoScript structure
* Updated dependencies
* Cleaned up

5.0.0
-----

* Dropped support for TYPO3 8.x (breaking change)
* Formatting, PSR-12 (Extended Coding Style)
* Updated Travis CI and AppVeyor configuration
* Updated dependencies
* Cleaned up

4.2.1
-----

* Updated Travis CI and AppVeyor configuration
* Updated dependencies
* Cleaned up

4.2.0
-----

* Updated dependencies
* Updated Travis CI and AppVeyor configuration
* Cleaned up

4.1.0
-----

* Updated TypoScript structure
* Updated dependencies
* Updated AppVeyor configuration
* Cleaned up

4.0.0
-----

* TCA Migrations
* Updated tests
* Cleaned up
* Updated dependencies
* Updated Travis CI and AppVeyor configuration
* Dropped support for TYPO3 7.x

3.2.1
-----

* Updated TypoScript
* Cleaned up

3.2.0
-----

* Updated Composer configuration and scripts
* Updated Travis CI and AppVeyor configuration
* Updated dependencies

3.1.0
-----

* Updated TypoScript
* Fixed functional tests
* Updated AppVeyor configuration

3.0.0
-----

* Refactored TypoScript
* Updated constants and configuration
* Merged Extensions and Vendor TypoScript
* Updated AppVeyor configuration
* Updated dependencies
* Dropped support for PHP 5.x

2.2.0
-----

* Fixed translations
* Updated dependencies
* Updated Travis CI and AppVeyor configuration
* Cleaned up

2.1.0
-----

* Formatted code and cleanup
* Updated Composer configuration
* Updated AppVeyor configuration

2.0.3
-----

* Reformatted code and cleanup

2.0.2
-----

* Updated dependencies
* Updated Travis CI and AppVeyor configuration

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

* Updated TCA configuration for Thumbnail (`tx_t3vpage_thumbnail`) property
* Updated Composer dependencies
* Updated scripts

1.4.0
-----

* Added Outline (`tx_t3vpage_outline`) property to `Page` object
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
* Hide diff on Thumbnail (`tx_t3vpage_thumbnail`) property
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

* Added Claim (`tx_t3vpage_claim`) property to `Page` object

1.0.0
-----

* First release
* Added Thumbnail (`tx_t3vpage_thumbnail`) property to `Page` object
* Added Summary (`tx_t3vpage_summary`) property to `Page` object
* Added common files

[Semantic Versioning]: http://semver.org "Semantic Versioning"
