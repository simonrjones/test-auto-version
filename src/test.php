<?php

declare(strict_types=1);

$myVariable = 'something';

class LocalStorage {

    public bool $enabled = false;
  
    public function _setEnabled(bool $enabled)
    { 
        $this->enabled = $enabled;
    }
    
}
