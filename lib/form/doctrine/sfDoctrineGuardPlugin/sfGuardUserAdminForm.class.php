<?php

/**
 * sfGuardUserAdminForm for admin generators
 *
 * @package    sfDoctrineGuardPlugin
 * @subpackage form
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id: sfGuardUserAdminForm.class.php 23536 2009-11-02 21:41:21Z Kris.Wallsmith $
 */
class sfGuardUserAdminForm extends BasesfGuardUserAdminForm
{
    /**
     * @see sfForm
     */
    public function configure()
    {
        unset($this['is_super_admin']);

        //embed profile form
        // get Profile model object
        $profile = $this->getObject()->getProfile();

        // contact object is null
        if (is_null($profile))
        {
            // create a new Profile object
            $profile = new sfGuardUserProfile();

            // set the user of the newly created object to the current user
            $profile->setUser($this->getObject());

            // set the profile of the current user
            $this->getObject()->setProfile($profile);
        }

        // create a new profile form
        $profile_form = new sfGuardUserProfileForm($profile);

        // embed the profile form in the current user form
        $this->embedForm('profile', $profile_form);

        // remove the profile_id from the form
        //unset($this['contact_id']);
    }
}
