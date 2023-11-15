<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\HomeController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\HomeController Test Case
 *
 * @uses \App\Controller\HomeController
 */
class HomeControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Home',
    ];
}
