<div class="sf_admin_pagination">
  [?php if($pager->getPage() != $pager->getFirstPage()): ?]
  <a href="[?php echo url_for('<?php echo $this->getUrlForAction('list') ?>') ?]?page=1">
    [?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/first.png', array('alt' => __('First page', array(), 'tmcAdministrationPlugin'), 'title' => __('First page', array(), 'tmcAdministrationPlugin'))) ?]
  </a>

  <a href="[?php echo url_for('<?php echo $this->getUrlForAction('list') ?>') ?]?page=[?php echo $pager->getPreviousPage() ?]">
    [?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/previous.png', array('alt' => __('Previous page', array(), 'tmcAdministrationPlugin'), 'title' => __('Previous page', array(), 'tmcAdministrationPlugin'))) ?]
  </a>
  [?php endif ?]

  [?php foreach ($pager->getLinks() as $page): ?]
    [?php if ($page == $pager->getPage()): ?]
      <span class="active">[?php echo $page ?]</span>
    [?php else: ?]
      <a href="[?php echo url_for('<?php echo $this->getUrlForAction('list') ?>') ?]?page=[?php echo $page ?]">[?php echo $page ?]</a>
    [?php endif; ?]
  [?php endforeach; ?]

  [?php if($pager->getPage() != $pager->getLastPage()): ?]
  <a href="[?php echo url_for('<?php echo $this->getUrlForAction('list') ?>') ?]?page=[?php echo $pager->getNextPage() ?]">
    [?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/next.png', array('alt' => __('Next page', array(), 'tmcAdministrationPlugin'), 'title' => __('Next page', array(), 'tmcAdministrationPlugin'))) ?]
  </a>

  <a href="[?php echo url_for('<?php echo $this->getUrlForAction('list') ?>') ?]?page=[?php echo $pager->getLastPage() ?]">
    [?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/last.png', array('alt' => __('Last page', array(), 'tmcAdministrationPlugin'), 'title' => __('Last page', array(), 'tmcAdministrationPlugin'))) ?]
  </a>
  [?php endif ?]
</div>