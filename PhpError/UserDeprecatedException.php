<?php

/*
 * This file is part of the OpenStates Framework (osf) package.
 * (c) Guillaume Ponçon <guillaume.poncon@openstates.com>
 * For the full copyright and license information, please read the LICENSE file distributed with the project.
 */


/*
 * This file is part of the OpenStates Framework (osf) package.
 * (c) Guillaume Ponçon <guillaume.poncon@openstates.com>
 * For the full copyright and license information, please read the LICENSE file distributed with the project.
 */

namespace Osf\Exception\PhpError;

use Osf\Exception\PhpErrorException;

/**
 * PHP error generated through error handler
 *
 * @author Guillaume Ponçon <guillaume.poncon@openstates.com>
 * @copyright OpenStates
 * @version 1.0
 * @since OSF-3.0.0 - 2018
 * @package osf
 * @subpackage exception
 */
class UserDeprecatedException extends PhpErrorException
{
    /**
     * Log level ajustment
     * @return string
     */
    public function getLogLevel(): string
    {
        return \Osf\Log\LogProxy::LEVEL_WARNING;
    }
}
