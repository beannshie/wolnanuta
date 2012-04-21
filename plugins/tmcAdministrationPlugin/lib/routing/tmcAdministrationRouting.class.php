<?php
  class tmcAdministrationRouting {
    public static function listenToRoutingLoadConfigurationEvent(sfEvent $event)
    {
      $r = $event->getSubject();

      // preprend our routes
      // $r->prependRoute('tmc_contact_form', new sfRoute('/:sf_culture/contact', array('module' => 'tmcContact', 'action' => 'contact')));
    }
  }