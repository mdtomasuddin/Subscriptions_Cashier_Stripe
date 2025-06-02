<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class StripeWebhookController extends Controller
{
      public function handleInvoicePaymentSucceeded($payload)
    {
        Log::info('✅ Payment Success: ', $payload);
        // Custom logic: update order, notify user etc.
    }

    public function handleInvoicePaymentFailed($payload)
    {
        Log::warning('❌ Payment Failed: ', $payload);
        // Custom logic: notify user, retry logic etc.
    }
}
