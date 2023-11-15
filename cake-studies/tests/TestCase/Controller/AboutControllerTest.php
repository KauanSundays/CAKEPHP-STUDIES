<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\AboutController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\AboutController Test Case
 *
 * @uses \App\Controller\AboutController
 */
class AboutControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.About',
    ];
}
