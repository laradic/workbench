<?php
/**
 * Part of the Laradic PHP Packages.
 *
 * Copyright (c) 2018. Robin Radic.
 *
 * The license can be found in the package and online at https://laradic.mit-license.org.
 *
 * @copyright Copyright 2018 (c) Robin Radic
 * @license https://laradic.mit-license.org The MIT License
 */

namespace Laradic\Workbench;

use Laradic\Workbench\Core\Component;

class Workbench extends Component
{
    public function getPackages()
    {
        return [
            'laradic/assets'  => [ 'name' => 'laradic/assets', 'type' => 'library', 'branch' => 'master' ],
            'laradic/support' => [] //..
        ];
    }

}
