<?php

/**
 * sfGuardUserProfile form.
 *
 * @package    backend
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrinePluginFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class sfGuardUserProfileForm extends PluginsfGuardUserProfileForm
{
  public function configure()
  {
      $this->widgetSchema['firstname']->setLabel('Imię');
      $this->widgetSchema['lastname']->setLabel('Nazwisko');

      //for embedding in sfGuardUser form
      unset($this['user_id'], $this['email_new'], $this['validate_at'], $this['validate'],
        $this['created_at'], $this['updated_at']);
  }
}
