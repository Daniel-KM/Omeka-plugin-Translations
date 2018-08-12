<?php
/**
 * Translations
 *
 * Allows to add specific translations of strings, in particular the hard-coded
 * texts in the theme.
 *
 * @copyright Daniel Berthereau, 2018
 * @license https://www.cecill.info/licences/Licence_CeCILL_V2.1-en.html
 */

class TranslationsPlugin extends Omeka_Plugin_AbstractPlugin
{
    /**
     * @var array Hooks for the plugin.
     */
    protected $_hooks = array(
        'initialize',
    );

    /**
     * Initialize the plugin.
     */
    public function hookInitialize()
    {
        add_translation_source(dirname(__FILE__) . '/languages');
    }
}
