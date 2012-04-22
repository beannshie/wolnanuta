[?php use_helper('I18N', 'Date') ?]
[?php include_partial('<?php echo $this->getModuleName() ?>/assets') ?]

<div id="sf_admin_page">
  <div id="sf_admin_header">
    [?php include_partial('<?php echo $this->getModuleName() ?>/list_header', array('pager' => $pager)) ?]
  </div>

  <div id="sf_admin_container">
    <div id="sf_admin_menu">
      [?php
        $items = sfAdminDash::getItems();
        $categories = sfAdminDash::getCategories();
      ?]
      [?php include_partial('<?php echo $this->getModuleName() ?>/menu', array('items' => $items, 'categories' => $categories)) ?]
    </div>

    <h1>[?php echo <?php echo $this->getI18NString('list.title') ?> ?]</h1>

    [?php include_partial('<?php echo $this->getModuleName() ?>/flashes') ?]

    <?php if ($this->configuration->hasFilterForm()): ?>
    <div id="sf_admin_bar">
      [?php include_partial('<?php echo $this->getModuleName() ?>/filters', array('form' => $filters, 'configuration' => $configuration)) ?]
    </div>
    <?php endif; ?>

    <div id="sf_admin_content">
      <?php if ($this->configuration->getValue('list.batch_actions')): ?>
        <form action="[?php echo url_for('<?php echo $this->getUrlForAction('collection') ?>', array('action' => 'batch')) ?]" method="post">
      <?php endif; ?>
        [?php include_partial('<?php echo $this->getModuleName() ?>/list', array('pager' => $pager, 'sort' => $sort, 'helper' => $helper)) ?]
        <ul class="sf_admin_actions">
          [?php include_partial('<?php echo $this->getModuleName() ?>/list_batch_actions', array('helper' => $helper)) ?]
          [?php include_partial('<?php echo $this->getModuleName() ?>/list_actions', array('helper' => $helper)) ?]
        </ul>
      <?php if ($this->configuration->getValue('list.batch_actions')): ?>
        </form>
      <?php endif; ?>

      <div class="max_per_page">
        <form method="get" action="[?php echo url_for('<?php echo $this->getUrlForAction('list') ?>') ?]">
          [?php $select = new sfWidgetFormChoice(array(
                        'multiple' => false,
                        'expanded' => false,
                        'choices' => array('15' => __('Max per page', null, 'tmcAdministrationPlugin'), 5 => 5, 10 => 10, 20 => 20, 50 => 50)
                      ),
                      array()); echo $select->render('max_per_page') ?]
          <input type="image" class="go" src="<?php echo sfConfig::get('sf_admin_module_web_dir') ?>/images/go.png" alt="[?php echo __('go', array(), 'tmcAdministrationPlugin') ?]" />
        </form>
      </div>
      <div class="clear"></div>
    </div>

    <div id="sf_admin_footer">
      [?php include_partial('<?php echo $this->getModuleName() ?>/list_footer', array('pager' => $pager)) ?]
    </div>
  </div>
</div>