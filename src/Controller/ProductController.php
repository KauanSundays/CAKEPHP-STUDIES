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
        var_dump('product show' . $id . '' . $name);

        // Se você está usando `dd`, certifique-se de que ele está disponível.
        // Caso contrário, substitua por `var_dump` ou `print_r`.
        dd($id, $name);
    }
}

