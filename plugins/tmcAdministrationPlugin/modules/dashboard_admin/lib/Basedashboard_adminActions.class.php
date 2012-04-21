<?php

class Basedashboard_adminActions extends sfActions
{
  public function executeDashboard()
  {    
    $this->items = sfAdminDash::getItems();

    $this->categories = sfAdminDash::getCategories();    
  } 
  
}