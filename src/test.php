<?php

declare(strict_types=1);

$myVariable = 'something';

class LocalStorage {

    public bool $enabled;
  
    public function __construct(bool $enabled = false)
    { 
        $this->enabled = $enabled;
    }
    
}
