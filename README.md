[T3v Page]
==========

**The [TYPO3voila] Page extension.**

Extends the Page object of TYPO3 with custom fields.

Custom fields
-------------

* Claim (`tx_t3vpage_claim`)
* Summary (`tx_t3vpage_summary`)
* Thumbnail (`tx_t3vpage_thumbnail`)

Installation
------------

1. Add `t3v_page` to the [Composer] configuration (`composer.json`):

  ```json
  {
    "repositories": [
      { "type": "vcs", "url": "https://github.com/t3v/t3v_page" }
    ],

    "require": {
      "t3v/t3v_page": "~1.3.0"
    }
  }
  ```

2. Run `composer install` or `composer update` to install all dependencies with Composer

3. Include the TypoScript for `t3v_page` in the main TypoScript template

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
[TYPO3voila]: https://github.com/t3v "“UH LÁLÁ, TYPO3!”"