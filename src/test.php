<?php

declare(strict_types=1);

$myVariable = 'something new';

class LocalStorage {

    public bool $enabled = false;
  
    public function setEnabled(bool $enabled)
    { 
        $this->enabled = $enabled;
    }
    
    public function getEnabled(): bool
    {
        return $this->enabled;
    }
    
}
