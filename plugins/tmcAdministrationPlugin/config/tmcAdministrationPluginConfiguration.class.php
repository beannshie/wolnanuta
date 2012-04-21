<?php

/**
 * tmcAdministrationPlugin configuration.
 *
 * @package    tmcAdministrationPlugin
 * @subpackage config
 * @author     Tito Miguel Costa <me@titomiguelcosta.com>
 * @version    SVN: $Id: tmcAdministrationPluginConfiguration.class.php 23319 2009-10-25 12:22:23Z Kris.Wallsmith $
 */
class tmcAdministrationPluginConfiguration extends sfPluginConfiguration
{
  /**
   * @see sfDoctrineConfiguration
   */
  public function initialize()
  {
    // configuration of the path to assets
    sfConfig::set('sf_admin_module_web_dir', '/tmcAdministrationPlugin');
    $this->dispatcher->connect('routing.load_configuration', array('tmcAdministrationRouting', 'listenToRoutingLoadConfigurationEvent'));

    if (in_array('dashboard_admin', sfConfig::get('sf_enabled_modules', array())))
    {
      if (true == sfAdminDash::getProperty('include_jquery_no_conflict'))
      {
        // if include_jquery_no_conflict is set to true, we need to modify the response content
        $this->dispatcher->connect('response.filter_content', array('sfAdminDashConfig', 'listenToResponseFilterContentEvent'));
      }
    }
  }
}