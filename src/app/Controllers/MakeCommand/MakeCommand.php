<?php

namespace App\Controllers\MakeCommand;

use Klein\Request;

class MakeCommand implements MakeCommandInterface
{
    /**
     * Method constructor
     * 
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Method to make global command in bot discord
     * 
     * @var \Klein\Request $request
     */
    public function globalCommand(Request $request): array
    {
        return [];
    }
}
