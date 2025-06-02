<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChechoutController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request ,$plan="price_1RVXNcPYzjQ4evEeHTsVP3se")
    {
        return $request->user()
            ->newSubscription('prod_SQO89YE7tpv9uc', $plan)
            // ->trialDays(5)
            // ->allowPromotionCodes()
            ->checkout([
                'success_url' => route('success'),
                'cancel_url' => route('dashboard'),
            ]);
    }
}
