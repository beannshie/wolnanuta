<?php if ($actions = $this->configuration->getValue('list.actions')): ?>
  <?php foreach ($actions as $name => $params): ?>
    <?php if ('_new' == $name): ?>
      <?php echo $this->addCredentialCondition('[?php echo $helper->linkToNew('.$this->asPhp($params).') ?]', $params) ?>
    <?php else: ?>
      <li class="sf_admin_action_<?php echo $params['class_suffix'] ?>">
        <?php echo $this->addCredentialCondition($this->getLinkToAction($name, $params, false), $params) ?>
      </li>
    <?php endif; ?>
  <?php endforeach; ?>
<?php endif; ?>

<?php if ($this->configuration->hasFilterForm()): ?>
  <li class="sf_admin_action_search">
    <a href="#">[?php echo __('Search', null, 'tmcAdministrationPlugin') ?]</a>
  </li>
<?php endif; ?>

[?php if ( $sf_user->getAttribute('<?php echo $this->getModuleName() ?>.filters', false, 'admin_module') && $sf_user->getAttribute('<?php echo $this->getModuleName() ?>.filters', false, 'admin_module')->count() > 0 ): ?]
  <li>[?php echo link_to(__('Reset filter', array(), 'tmcAdministrationPlugin'), '<?php echo $this->getUrlForAction('collection') ?>', array('action' => 'filter'), array('query_string' => '_reset', 'method' => 'post')) ?]</li>
[?php endif ?]