<?// Em config/Seeds/PositionsSeed.php
declare(strict_types=1);

use Migrations\AbstractSeed;

class PositionsSeed extends AbstractSeed
{

    public function run(): void
    {
        $data = [
            [
                'position_name' => 'Goleiro',
            ],
            [
                'position_name' => 'Zagueiro',
            ],
            [
                'position_name' => 'Lateral',
            ],
            [
                'position_name' => 'Volante',
            ],
            [
                'position_name' => 'Meia',
            ],
            [
                'position_name' => 'Atacante',
            ],
        ];

        $table = $this->table('positions');
        $table->insert($data)->save();
    }
}
