<?php
/**
 * Created by IntelliJ IDEA.
 * User: lehlohonolo
 * Date: 2017/10/04
 * Time: 3:47 PM
 */

namespace Tests\utilities;

use App\Exceptions\Handler;

class TestHandlerClass
{
    public function __construct()
    {
    }

    public function report(\Exception $e)
    {
    }

    public function render($request, \Exception $e)
    {
        throw $e;
    }
}
