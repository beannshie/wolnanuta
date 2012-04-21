<?php

/**
 * sfAdminDashConfig class
 * 
 * This class handles configuration for the sfAdminDashPlugin
 *
 * @package    plugins
 * @subpackage sfAdminDash
 * @author     Ivan Tanev aka Crafty_Shadow @ webworld.bg <vankata.t@gmail.com>
 * @version    SVN: $Id: sfAdminDashConfig.php 25407 2009-12-15 12:35:24Z Crafty_Shadow $
 */
class sfAdminDashConfig {
  /**
   * This is the right way to add stuff to the <head> tag after the page has been generated :)
   * The principle is the same as with the old sfCommonFilter and asset insertion in sf 1.0-1.2
   *
   * @param sfEvent $event
   * @param string  $content
   *
   * @return string
   */
  public static function listenToResponseFilterContentEvent(sfEvent $event, $content = null) {
    $jquery_include_tag = '<script type="text/javascript" src="' . sfAdminDash::getProperty('web_dir') . '/js/' . sfAdminDash::getProperty('jquery_filename') . '"></script>';
    $jquery_no_conflict_tag = '<script type="text/javascript">jQuery.noConflict();</script>';

    if (false !== ($pos = strpos($content, $jquery_include_tag))) {
      $content = substr($content, 0, $pos + strlen($jquery_include_tag)) . $jquery_no_conflict_tag . substr($content, $pos + strlen($jquery_include_tag));
    }

    return $content;
  }

}