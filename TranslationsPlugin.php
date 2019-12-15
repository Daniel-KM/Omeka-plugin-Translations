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
        'config_form',
        'config',
    );

    /**
     * Initialize the plugin.
     */
    public function hookInitialize()
    {
        add_translation_source(dirname(__FILE__) . '/languages');
        add_translation_source(dirname(dirname(dirname(__FILE__))) . '/themes/' . get_option('public_theme') . '/languages');
    }

    /**
     * Shows plugin configuration page.
     */
    public function hookConfigForm($args)
    {
        $view = get_view();
        echo $view->partial('plugins/translations-config-form.php');
    }

    /**
     * Processes the configuration form.
     *
     * @param array Options set in the config form.
     */
    public function hookConfig($args)
    {
        $post = $args['post'];
        if (empty($post['translations_reset'])) {
            return;
        }

        $cache = Zend_Registry::get('Zend_Translate');
        $cache::clearCache();
    }
}
