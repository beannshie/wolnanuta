 
  protected function getConfig()
  {
    $configuration = parent::getConfig();
    $configuration['show'] = $this->getFieldsShow();
    return $configuration;
  }

  protected function compile()
  {
    parent::compile();
    
    $config = $this->getConfig();
     
    $this->configuration['show'] = array( 'fields'         => array(),
                                          'title'          => $this->getShowTitle(),
                                          'actions'        => $this->getShowActions(),
                                          'display'        => $this->getShowDisplay(),
                                        ) ;

    foreach (array_keys($config['default']) as $field)
    {
      $formConfig = array_merge($config['default'][$field], $config['form'][$field]);
      $this->configuration['show']['fields'][$field]   = new sfModelGeneratorConfigurationField($field, array_merge(array('label' => sfInflector::humanize(sfInflector::underscore($field))), $config['default'][$field], $config['show'][$field]));
    }
   
    // virtual show fields
    foreach ($this->getShowDisplay() as $field)
    {
      list($field, $flag) = sfModelGeneratorConfigurationField::splitFieldWithFlag($field);

      $this->configuration['show']['fields'][$field] = new sfModelGeneratorConfigurationField($field, array_merge(
        array('type' => 'Text', 'label' => sfInflector::humanize(sfInflector::underscore($field))),
        isset($config['default'][$field]) ? $config['default'][$field] : array(),
        isset($config['show'][$field]) ? $config['show'][$field] : array(),
        array('flag' => $flag)
      ));
    }

    // show field configuration
    $this->configuration['show']['display'] = array();
    foreach ($this->getShowDisplay() as $name)
    {
      list($name, $flag) = sfModelGeneratorConfigurationField::splitFieldWithFlag($name);
      if (!isset($this->configuration['show']['fields'][$name]))
      {
        throw new InvalidArgumentException(sprintf('The field "%s" does not exist.', $name));
      }
      $field = $this->configuration['show']['fields'][$name];
      $field->setFlag($flag);
      $this->configuration['show']['display'][$name] = $field;
    }
    
    // show actions
    foreach (array('show') as $context)
    {
      foreach ($this->configuration[$context]['actions'] as $action => $parameters)
      {
        $this->configuration[$context]['actions'][$action] = $this->fixActionParameters($action, $parameters);
      }
    }                              
  }

  public function getShowActions()
  {
    return <?php echo $this->asPhp(isset($this->config['show']['actions']) ? $this->config['show']['actions'] : array('_list' => NULL,  '_edit' => NULL, '_delete' => NULL)) ?>;
    <?php unset($this->config['show']['actions']) ?>
  }


  public function getShowTitle()
  {
    return '<?php echo isset($this->config['show']['title']) ? $this->config['show']['title'] : 'Show '.sfInflector::humanize($this->getModuleName()) ?>';
<?php unset($this->config['show']['title']) ?>
  }

  public function getShowDisplay()
  {
  <?php if (isset($this->config['show']['display'])): ?>
    return <?php echo $this->asPhp($this->config['show']['display']) ?>;
<?php elseif (isset($this->config['show']['hide'])): ?>
    return <?php echo $this->asPhp(array_diff($this->getAllFieldNames(false), $this->config['show']['hide'])) ?>;
<?php else: ?>
    return <?php echo $this->asPhp($this->getAllFieldNames(false)) ?>;
<?php endif; ?>
<?php unset($this->config['show']['display'], $this->config['show']['hide']) ?>
  }
  

