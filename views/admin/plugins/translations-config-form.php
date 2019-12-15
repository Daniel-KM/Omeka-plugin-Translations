<?php
/**
 * @var Omeka_View $this
 * @var array $element_ids
 */
?>

<fieldset id="fieldset-translations"><legend><?php echo __('Translations'); ?></legend>
    <div class="field">
        <div class="two columns alpha">
            <?php echo $this->formLabel('translations_reset', __('Reset translations')); ?>
        </div>
        <div class="inputs five columns omega">
            <?php echo $this->formCheckbox('translations_reset', true, array('checked' => false)); ?>
            <p class="explanation">
                <?php echo __('Reset all translations when files in "plugins/Translations/languages" or "themes/my-theme/languages" were updated manually.'); ?>
            </p>
        </div>
    </div>
</fieldset>
