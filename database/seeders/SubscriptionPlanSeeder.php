<?php

namespace Database\Seeders;

use App\Models\SubscriptionPlan;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubscriptionPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentDatePlan = Carbon::now()->format("Y-m-d H:i:s");

        SubscriptionPlan::insert([
            [
                'name' => 'Monthly',
                'stripe_price_id' => 'price_1ReCthPYzjQ4evEe5Z8XI4pt',
                'trial_days' => 5,
                'amount' => 12,
                'type' => 0,
                'enabled' => 1,
                'created_at' => $currentDatePlan,
                'updated_at' => $currentDatePlan,
            ],
            [
                'name' => 'Yearly',
                'stripe_price_id' => 'price_1ReCw2PYzjQ4evEetcmZNzPX',
                'trial_days' => 5,
                'amount' => 100,
                'type' => 1,
                'enabled' => 1,
                'created_at' => $currentDatePlan,
                'updated_at' => $currentDatePlan,
            ],
            [
                'name' => 'Lifetime',
                'stripe_price_id' => 'price_1ReCxBPYzjQ4evEehx8RaIAx',
                'trial_days' => 5,
                'amount' => 400,
                'type' => 2,
                'enabled' => 1,
                'created_at' => $currentDatePlan,
                'updated_at' => $currentDatePlan,
            ]
        ]);
    }
}
