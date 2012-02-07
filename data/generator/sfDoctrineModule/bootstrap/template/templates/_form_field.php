[?php if ($field->isPartial()): ?]
  [?php include_partial('<?php echo $this->getModuleName() ?>/'.$name, array('form' => $form, 'attributes' => $attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes)) ?]
[?php elseif ($field->isComponent()): ?]
  [?php include_component('<?php echo $this->getModuleName() ?>', $name, array('form' => $form, 'attributes' => $attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes)) ?]
[?php else: ?]
  <div class="control-group [?php echo $class ?][?php $form[$name]->hasError() and print ' error' ?]">
      [?php echo $form[$name]->renderLabel($label, array('class' => 'control-label')) ?]

      <div class="controls [?php echo $class ?]">
        [?php echo $form[$name]->render($attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes) ?]
        <span class="help-inline">[?php echo $form[$name]->renderError() ?]</span>
      </div>

      [?php if ($help): ?]
        <p class="help-block">[?php echo __($help, array(), '<?php echo $this->getI18nCatalogue() ?>') ?]</p>
      [?php elseif ($help = $form[$name]->renderHelp()): ?]
        <p class="help">[?php echo $help ?]</p>
      [?php endif; ?]
  </div>
[?php endif; ?]
