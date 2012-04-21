[?php if ($field->isPartial()): ?]
  [?php include_partial('<?php echo $this->getModuleName() ?>/'.$name, array('form' => $form, 'attributes' => $attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes)) ?]
[?php elseif ($field->isComponent()): ?]
  [?php include_component('<?php echo $this->getModuleName() ?>', $name, array('form' => $form, 'attributes' => $attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes)) ?]
[?php else: ?]
  <div class="[?php echo $class ?][?php $form[$name]->hasError() and print ' errors' ?]">
    [?php
      $embed = $form->getEmbeddedForms();
      if ( $form[$name]->hasError() && array_key_exists($name, $embed) )
      {
        echo '<ul class="error_list">';
        foreach ($form[$name]->getError() as $field => $error)
        {
          echo '<li>'.__(sfInflector::humanize($field), array(), '<?php echo $this->getI18nCatalogue() ?>').': '.__($error, array(), '<?php echo $this->getI18nCatalogue() ?>').'</li>';
        }
        echo '</ul>';
      }
      else
      {
        echo $form[$name]->renderError();
      }
    ?]
    <div>
      [?php echo $form[$name]->renderLabel($label) ?]

      [?php echo $form[$name]->render($attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes) ?]

      [?php if ($help || $help = $form[$name]->renderHelp()): ?]
        <div class="help">[?php echo __($help, array(), '<?php echo $this->getI18nCatalogue() ?>') ?]</div>
      [?php endif; ?]
    </div>
  </div>
[?php endif; ?]