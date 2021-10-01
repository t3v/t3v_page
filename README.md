[T3v Page]
==========

**The page extension of [TYPO3voilà].**

T3v Page extends the page object of TYPO3 with custom fields:

* Claim
* Summary
* Outline
* Thumbnail
* Open Graph Type

Dependencies
------------

* TYPO3 CMS 9.5 or greater
* T3v Core extension
* T3v Translations extension

Installation
------------

1. Add T3v Page as dependency to the [Composer] configuration
2. Run `composer install` or `composer update` to install all dependencies with Composer
3. Include the TypoScript for T3v Page

Development
-----------

### Setup

```sh
git clone https://github.com/t3v/t3v_page.git && cd t3v_page

./Scripts/Setup.sh
```

### Testing

```sh
./Scripts/Tests.sh
./Scripts/Tests/Unit.sh
./Scripts/Tests/Functional.sh
./Scripts/Tests/Migrate.sh
```

Bug Reports
-----------

GitHub Issues are used for managing bug reports and feature requests. If you run into issues, please search the issues  and submit new
problems [here].

Versioning
----------

This project aims to adhere to [Semantic Versioning 2.0.0]. Violations of this scheme should be reported as bugs. Specifically, if a minor
or patch version is being released that breaks backward compatibility, that version should be immediately yanked and / or a new version
should be immediately released that restores compatibility.

License
-------

T3v Page is released under the [MIT License (MIT)], see [LICENSE].

[Acceptance testing TYPO3]: https://wiki.typo3.org/Acceptance_testing "Acceptance testing TYPO3"
[Automated testing TYPO3]: https://wiki.typo3.org/Automated_testing "Automated testing TYPO3"
[Composer]: https://getcomposer.org "Dependency Manager for PHP"
[Functional testing TYPO3]: https://wiki.typo3.org/Functional_testing "Functional testing TYPO3"
[here]: https://github.com/t3v/t3v_page/issues "GitHub Issue Tracker"
[LICENSE]: https://raw.githubusercontent.com/t3v/t3v_page/master/LICENSE "License"
[MIT License (MIT)]: http://opensource.org/licenses/MIT "The MIT License (MIT)"
[Semantic Versioning 2.0.0]: http://semver.org "Semantic Versioning 2.0.0"
[T3v Page]: https://t3v.github.io/t3v_page/ "The page extension of TYPO3voilà."
[TYPO3voilà]: https://github.com/t3v "“UH LÁLÁ, TYPO3!”"
[Unit Testing TYPO3]: https://wiki.typo3.org/Unit_Testing_TYPO3 "Unit testing TYPO3"
