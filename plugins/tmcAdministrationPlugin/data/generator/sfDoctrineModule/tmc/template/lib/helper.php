[?php

/**
 * <?php echo $this->getModuleName() ?> module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage <?php echo $this->getModuleName()."\n" ?>
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: helper.php 12482 2008-10-31 11:13:22Z fabien $
 */
class Base<?php echo ucfirst($this->getModuleName()) ?>GeneratorHelper extends sfModelGeneratorHelper
{
  public function linkToAction($object, $params)
  {
    return link_to(__($params['label'], array(), 'tmcAdministrationPlugin'), $this->getUrlForAction($params["class_suffix"]), $object);
  }
  public function linkToNew($params)
  {
    return '<li class="sf_admin_action_new">'.link_to(__($params['label'], array(), 'tmcAdministrationPlugin'), $this->getUrlForAction('new')).'</li>';
  }
  
  public function linkToShow($object, $params)
  {
    if ($object->isNew())
    {
      return '';
    }
    return '<li class="sf_admin_action_show">'.link_to(__($params['label'], array(), 'tmcAdministrationPlugin'), $this->getUrlForAction('show'), $object).'</li>';
  }
  
  public function linkToEdit($object, $params)
  {
    return '<li class="sf_admin_action_edit">'.link_to(__($params['label'], array(), 'tmcAdministrationPlugin'), $this->getUrlForAction('edit'), $object).'</li>';
  }

  public function linkToDelete($object, $params)
  {
    if ($object->isNew())
    {
      return '';
    }

    return '<li class="sf_admin_action_delete">'.link_to(__($params['label'], array(), 'tmcAdministrationPlugin'), $this->getUrlForAction('delete'), $object, array('method' => 'delete', 'confirm' => __($params['confirm'], array(), 'tmcAdministrationPlugin'))).'</li>';
  }

  public function linkToList($params)
  {
    return '<li class="sf_admin_action_list">'.link_to(__($params['label'], array(), 'tmcAdministrationPlugin'), $this->getUrlForAction('list')).'</li>';
  }

  public function linkToSave($object, $params)
  {
    return '<li class="sf_admin_action_save"><input type="submit" class="button" value="'.__($params['label'], array(), 'tmcAdministrationPlugin').'" /></li>';
  }

  public function linkToSaveAndAdd($object, $params)
  {
    if (!$object->isNew())
    {
      return '';
    }

    return '<li class="sf_admin_action_save_and_add"><input type="submit" class="button" value="'.__($params['label'], array(), 'tmcAdministrationPlugin').'" name="_save_and_add" /></li>';
  }

  public function getUrlForAction($action)
  {
    return 'list' == $action ? '<?php echo $this->params['route_prefix'] ?>' : '<?php echo $this->params['route_prefix'] ?>_'.$action;
  }
}
