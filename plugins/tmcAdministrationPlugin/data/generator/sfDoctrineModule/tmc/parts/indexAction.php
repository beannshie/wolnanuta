  public function executeIndex(sfWebRequest $request)
  {
    // sorting
    if ($request->getParameter('sort'))
    {
      $this->setSort(array($request->getParameter('sort'), $request->getParameter('sort_type')));
    }

    // pager
    $this->setPage($request->getParameter('page', 1));

    // max per page
    if ($request->getParameter('max_per_page'))
    {
      $this->setMaxPerPage($request->getParameter('max_per_page'));
    }

    $this->pager = $this->getPager();
    $this->sort = $this->getSort();
  }
