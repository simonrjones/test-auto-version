<?php

declare(strict_types=1);

$myVariable = 'something';

class LocalStorage {

    public bool $enabled = false;
  
    public function setEnabled(bool $enabled)
    { 
        $this->enabled = $enabled;
    }
    
}
