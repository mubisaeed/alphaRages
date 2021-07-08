<?php

namespace Database\Seeders;

use App\Models\Bank;
use Illuminate\Database\Seeder;

class BanksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $allBanks = array("HBL", "NBP", "Meezan", "MCB", "Faysal");
        foreach ($allBanks as $bank)
        {
            Bank::create([
                'name' => $bank,
            ]);
        }
    }
}
