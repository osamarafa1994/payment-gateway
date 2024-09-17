<?php

namespace Osama\PaymentGateway;

use Illuminate\Support\ServiceProvider;

class PaymentGatewayServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(PaymentGateway::class, function ($app) {
            return new PaymentGateway();
        });
    }

    public function boot()
    {
        // يمكن إضافة ملفات التكوين أو أي عمليات تحتاج إلى نشر هنا.
    }
}
