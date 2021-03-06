<?php
/**
 * File containing the ezpRestPreRoutingFilterInterface interface
 *
 * @copyright Copyright (C) 1999-2013 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version  2013.11
 * @package kernel
 */

interface ezpRestPreRoutingFilterInterface
{
    public function __construct( ezcMvcRequest $request );
    public function filter();
}
