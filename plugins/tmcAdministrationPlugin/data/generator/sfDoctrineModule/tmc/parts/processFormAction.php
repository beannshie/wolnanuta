  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $this->getUser()->setFlash('notice', $form->getObject()->isNew() ? 'The item was created successfully.' : 'The item was updated successfully.');

      $<?php echo $this->getSingularName() ?> = $form->save();

      $this->dispatcher->notify(new sfEvent($this, 'admin.save_object', array('object' => $<?php echo $this->getSingularName() ?>, 'form' => $form)));

      if ($request->hasParameter('_save_and_add'))
      {
        $this->getUser()->setFlash('notice', $this->getUser()->getFlash('notice').' You can add another one below.');

        $this->redirect('@<?php echo $this->getUrlForAction('new') ?>');
      }
      else
      {
        $this->redirect($this->generateUrl($this->helper->getUrlForAction('edit'), $<?php echo $this->getSingularName() ?>));
      }
    }
    else
    {
      $this->getUser()->setFlash('error', 'The item has not been saved due to some errors.');
    }
  }
