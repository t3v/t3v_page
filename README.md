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
        { "type": "git", "url": "git@t3v[at]bitbucket.org:t3v/t3v_page.git" }
      ],

      "require": {
        "t3v/t3v_page": "~1.2.2"
      }
    }
    ```

2. Run `composer install` or `composer update` to install all dependencies with Composer

3. Include the TypoScript for `t3v_page` in the main TypoScript template

Bug Reports
-----------

Bitbucket Issues are used for managing bug reports and feature requests. If you run into issues, please search the issues
and submit new problems [here].

Versioning
----------

This library aims to adhere to [Semantic Versioning 2.0.0]. Violations of this scheme should be reported as bugs.
Specifically, if a minor or patch version is released that breaks backward compatibility, that version should be
immediately yanked and / or a new version should be immediately released that restores compatibility.

[Composer]: https://getcomposer.org "Dependency Manager for PHP"
[here]: https://bitbucket.org/t3v/t3v_page/issues "Bitbucket Issue Tracker"
[Semantic Versioning 2.0.0]: http://semver.org "Semantic Versioning 2.0.0"
[T3v Page]: https://bitbucket.org/t3v/t3v_page "The TYPO3voila Page extension."
[TYPO3voila]: https://bitbucket.org/t3v "“UH LÁLÁ, TYPO3!”"