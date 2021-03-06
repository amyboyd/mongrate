<?php

namespace Mongrate\Exception;

use Mongrate\Model\Name;

class MigrationDoesntExist extends \Exception
{
    public function __construct(Name $name, $file)
    {
        parent::__construct('There is no migration called "' . $name . '" in "' . $file . '".');
    }
}
