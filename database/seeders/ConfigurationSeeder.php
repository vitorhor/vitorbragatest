<?php

namespace Database\Seeders;

use App\Models\Configuration;
use Illuminate\Database\Seeder;

class ConfigurationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Configuration::create([
            "facebook_pixel" => "<script>!function(f,b,e,v,n,t,s) {if(f.fbq)return;n=f.fbq=function(){n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,document,'script','https://connect.facebook.net/en_US/fbevents.js');fbq('init','848667939238938');fbq('track','PageView');</script><noscript><img height=\"1\"width=\"1\"style=\"display:none\" src=\"https://www.facebook.com/tr?id=848667939238938&ev=PageView&noscript=1\" /></noscript>",
            "google_analytics" => "<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-36850148-1\"></script><script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);} gtag('js',new Date());gtag('config','UA-36850148-1');</script>",
            "mail_host" => "smtp.gmail.com",
            "mail_port" => "587",
            "mail_username" => "contato@moonlighters.com.br",
            "mail_password" => "6yhnhy67ujmju7",
            "mail_from_address" => "contato@moonlighters.com.br"
        ]);
    }
}
