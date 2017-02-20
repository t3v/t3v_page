[T3v Page]
==========

[![Travis CI Status][Travis CI Status]][Travis CI]

**The [TYPO3voila] Page extension.**

Extends the Page object of TYPO3 with custom fields.

Custom fields
-------------

* Claim (`tx_t3vpage_claim`)
* Summary (`tx_t3vpage_summary`)
* Thumbnail (`tx_t3vpage_thumbnail`)

Dependencies
------------

* TYPO3 CMS 7.6 or greater
* Grid Elements extension
* T3v Core extension

Installation
------------

1. Add T3v Page (`t3v_page`) as dependency to the [Composer] configuration (`composer.json`)
2. Run `composer install` or `composer update` to install all dependencies with Composer
3. Include the TypoScript for T3v Page

Development
-----------

### Setup

```
$ ./Scripts/Setup.sh
```

### Run Unit Tests

```
$ ./Scripts/Tests/Unit.sh
```

### Run Functional Tests

```
$ ./Scripts/Tests/Functional.sh
```

Bug Reports
-----------

GitHub Issues are used for managing bug reports and feature requests. If you run into issues, please search the issues
and submit new problems [here].

Versioning
----------

This library aims to adhere to [Semantic Versioning 2.0.0]. Violations of this scheme should be reported as bugs.
Specifically, if a minor or patch version is released that breaks backward compatibility, that version should be
immediately yanked and / or a new version should be immediately released that restores compatibility.

Sponsors
--------

The following people / organizations have provided sponsorship to this project by way of direct donations or for paid
development as part of a development project:

* [Hilger u. Kern GmbH]

License
-------

T3v Page is released under the [MIT License (MIT)], see [LICENSE].

[Composer]: https://getcomposer.org "Dependency Manager for PHP"
[here]: https://github.com/t3v/t3v_page/issues "GitHub Issue Tracker"
[Hilger u. Kern GmbH]: http://www.hilger-kern.de "Hilger u. Kern GmbH"
[LICENSE]: https://raw.githubusercontent.com/t3v/t3v_page/master/LICENSE "License"
[MIT License (MIT)]: http://opensource.org/licenses/MIT "The MIT License (MIT)"
[Semantic Versioning 2.0.0]: http://semver.org "Semantic Versioning 2.0.0"
[T3v Page]: https://t3v.github.io/t3v_page/ "The TYPO3voila Page extension."
[Travis CI Status]: https://img.shields.io/travis/t3v/t3v_page.svg?style=flat "Travis CI Status"
[Travis CI]: https://travis-ci.org/t3v/t3v_page "T3v Page at Travis CI"
[TYPO3voila]: https://github.com/t3v "“UH LÁLÁ, TYPO3!”"