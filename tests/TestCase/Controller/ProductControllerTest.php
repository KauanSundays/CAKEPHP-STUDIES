<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\ProductController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\ProductController Test Case
 *
 * @uses \App\Controller\ProductController
 */
class ProductControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Product',
    ];
}
