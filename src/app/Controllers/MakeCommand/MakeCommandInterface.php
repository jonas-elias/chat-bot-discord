<?php

namespace App\Controllers\MakeCommand;

use Klein\Request;

/**
 * Interface MakeCommandInterface
 * 
 * @package App\Controllers\MakeCommand
 * @author <jonas-elias/>
 */
interface MakeCommandInterface
{
    /**
     * Method to make global command
     * 
     * @param Klein\Request $request
     * @return array
     */
    public function globalCommand(Request $request): array;
}
