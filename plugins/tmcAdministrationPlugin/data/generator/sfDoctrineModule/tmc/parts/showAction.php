  public function executeShow(sfWebRequest $request)
  {
    $this-><?php echo $this->getSingularName() ?> = $this->getRoute()->getObject();
    $this->forward404Unless($this-><?php echo $this->getSingularName() ?>);
  }
  