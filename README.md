Translations (plugin for Omeka)
===============================

[Translations] is a plugin for [Omeka] that allows to add specific translations
of strings, in particular the hard-coded texts in the theme.

In Omeka, the translations are managed with `.po` files in the directory `application/languages/`
for the core and in  the directory `languages/` of each enabled plugin. This
plugin works the same, but you can add any strings yourself either in the
directory `languages/` of the current theme, either in the directory `languages/`
of this plugin, so they will be translated in Omeka.

The translations themselves can be created with a tool like [poedit], or [lokalize],
or any other compliant software or online service.

This module has been integrated in the module [Multilanguage], so it can be
removed if you use it.


Installation
------------

Uncompress files and rename plugin folder `Translations`.

Then install it like any other Omeka plugin in the plugins panel.


Usage
-----

Simply update the translations files either in the directory `languages/` of the
current theme, either in the directory `languages/` of the plugin: the main one
`template.pot` and each translation like `fr.po` and `fr.mo`. You can add any
language, but respect the names of the files (see `application/languages/`) and
copy the two files `.po` and `.mo` for each language.

Omeka uses a cache to store translations. To reset it, go the the config page of
the plugin and check the box. It must be done each time a language is updated.

When the cache is not cleared, you shoud reset the cache manually. You can
restart the web server or to remove all files starting with `omeka_i18n_cache`
in the temp directory of the web server, usually `/tmp`, or `/tmp/systemd-private-xxx/tmp`.
Or wait some hours for the automatic refresh of the translations.


Warning
-------

Use it at your own risk.

It’s always recommended to backup your files and your databases and to check
your archives regularly so you can roll back if needed.


Troubleshooting
---------------

See online issues on the [plugin issues] page on GitHub.


License
-------

This module is published under the [CeCILL v2.1] licence, compatible with
[GNU/GPL] and approved by [FSF] and [OSI].

In consideration of access to the source code and the rights to copy, modify and
redistribute granted by the license, users are provided only with a limited
warranty and the software’s author, the holder of the economic rights, and the
successive licensors only have limited liability.

In this respect, the risks associated with loading, using, modifying and/or
developing or reproducing the software by the user are brought to the user’s
attention, given its Free Software status, which may make it complicated to use,
with the result that its use is reserved for developers and experienced
professionals having in-depth computer knowledge. Users are therefore encouraged
to load and test the suitability of the software as regards their requirements
in conditions enabling the security of their systems and/or data to be ensured
and, more generally, to use and operate it in the same conditions of security.
This Agreement may be freely reproduced and published, provided it is not
altered, and that no provisions are either added or removed herefrom.


Copyright
---------

* Copyright Daniel Berthereau, 2018-2019 (see [Daniel-KM] on GitHub)


[Translations]: https://github.com/Daniel-KM/Omeka-plugin-Translations
[Omeka]: https://omeka.org/classic
[Multilanguage]: https://github.com/patrickmj/Multilanguage
[poedit]: https://poedit.net
[lokalize]: https://www.kde.org/applications/development/lokalize
[plugin issues]: https://github.com/Daniel-KM/Omeka-plugin-Translations/issues
[CeCILL v2.1]: https://www.cecill.info/licences/Licence_CeCILL_V2.1-en.html
[GNU/GPL]: https://www.gnu.org/licenses/gpl-3.0.html
[FSF]: https://www.fsf.org
[OSI]: http://opensource.org
[Daniel-KM]: https://github.com/Daniel-KM "Daniel Berthereau"
