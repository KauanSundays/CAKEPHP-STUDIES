<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Product Controller
 *
 */
class ProductController extends AppController
{
    public function show($arg1, $arg2)
    {
        var_dump('product show' . $arg1 . '' . $arg2);

        die();
    }
}
