[?php use_helper('I18N', 'Date') ?]
[?php include_partial('<?php echo $this->getModuleName() ?>/assets') ?]

<div id="sf_admin_page">
  <div id="sf_admin_header">
    [?php include_partial('<?php echo $this->getModuleName() ?>/header') ?]
  </div>
  
  <div id="sf_admin_container">
    <div id="sf_admin_menu">
      [?php
        $items = sfAdminDash::getItems();
        $categories = sfAdminDash::getCategories();
      ?]
      [?php include_partial('<?php echo $this->getModuleName() ?>/menu', array('items' => $items, 'categories' => $categories)) ?]
    </div>
    
    <h1>[?php echo <?php echo $this->getI18NString('show.title') ?> ?]</h1>

    <div id="sf_admin_show">
      [?php include_partial('show', array('<?php echo $this->getSingularName() ?>' => $<?php echo $this->getSingularName() ?>)) ?]

      [?php include_partial('show_actions', array('<?php echo $this->getSingularName() ?>' => $<?php echo $this->getSingularName() ?>, 'configuration' => $configuration, 'helper' => $helper)) ?]
      <div class="clear"></div>
    </div>

    <div id="sf_admin_footer">
      [?php include_partial('<?php echo $this->getModuleName() ?>/list_footer') ?]
    </div>
  </div>
</div>