<?php
namespace jens1o\util;

/**
 * Provides an enum with all important http methods for the web
 *
 * @author     jens1o
 * @copyright  Jens Hausdorf 2017
 * @license    MIT License
 * @package    jens1o
 * @subpackage util
 */
interface HttpMethod {

    /**
     * Read a resource
     */
    public const GET = 'GET';

    /**
     * Create a resource
     */
    public const POST = 'POST';

    /**
     * Update/Modify a resource
     */
    public const PATCH = 'PATCH';

    /**
     * Update/Replace a resource
     */
    public const PUT = 'PUT';

    /**
     * Deletes a resource
     */
    public const DELETE = 'DELETE';

}