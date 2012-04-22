<?php

/**
 * homepage actions.
 *
 * @package    UniwersytetKompetencji
 * @subpackage homepage
 * @author     Zaklina Data
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class homepageActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {


      //META
//      $this->setMetatags();
  }

  /**
     * Sets metatags
     */
    protected function setMetatags()
    {
        $page = Doctrine::getTable('Page')->createQuery('q')
                        ->where('q.is_mainpage = ?', true)
                        ->fetchOne();

        $metas = $page->getMetatags();
        $this->getResponse()->setTitle($metas['title']);
        $this->getResponse()->addMeta('description', $metas['desc']);
        $this->getResponse()->addMeta('keywords', $metas['keys']);
    }
}
