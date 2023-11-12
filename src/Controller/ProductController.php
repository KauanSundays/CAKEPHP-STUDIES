<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Product Controller
 *
 */
class ProductController extends AppController
{
    public function show($id, $name)
    {
        var_dump($id, $name);

        dd($id);
    }
}
