<?php
/**
 * File containing the ezcGraphMatrixInvalidDimensionsException class
 *
 * @package Graph
 * @version //autogentag//
 * @copyright Copyright (C) 2005-2010 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */
/**
 * Exception thrown when an operation is not possible because of incompatible
 * matrix dimensions.
 *
 * @package Graph
 * @version //autogentag//
 */
class ezcGraphMatrixInvalidDimensionsException extends ezcGraphException
{
    /**
     * Constructor
     * 
     * @param int $rows
     * @param int $columns
     * @param int $dRows
     * @param int $dColumns
     * @return void
     * @ignore
     */
    public function __construct( $rows, $columns, $dRows, $dColumns )
    {
        parent::__construct( "Matrix '{$dRows}, {$dColumns}' is incompatible with matrix '{$rows}, {$columns}' for requested operation." );
    }
}

?>
