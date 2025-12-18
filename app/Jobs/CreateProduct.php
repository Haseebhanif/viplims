<?php

namespace App\Jobs;

use App\Http\Controllers\PaypalController;
use App\Models\Products;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class CreateProduct implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

        $paypal = new PaypalController();
        $my_product = Products::first();
        $product = $paypal->get_all_product();
        if (isset($product->products)) {
            $exist = false;
            foreach ($product->products as $key => $single_product) {
                if (isset($single_product->name) && $single_product->name === 'My Product' && !empty($my_product)) {
                    $exist = true;
                }
            }
            if ($exist === false) {
                $data = ['name' => 'My Product',
                    'description' => 'snaptime',
                    'type' => 'SERVICE',
                    'category' => 'SERVICES',
                    'home_url' => env('APP_URL'),];
                $new_product = $paypal->make_product($data);
                if (!isset($new_product->debug_id)) {
                    Products::create([
                        'name' => 'My Product',
                        'description' => 'Up to 5 users.
                                Basic support on Github.
                                Monthly updates.
                                Free cancellation.',
                        'type' => 'SERVICE',
                        'category' => 'SERVICES',
                        'product_url' => env('PRODUCT_URL'),
                        'response' => $new_product,
                    ]);
                    $user = User::find(Auth::id());
                    Mail::send('emails.product',$user->toArray(), function ($m) use($user) {
                        $m->to($user->email, $user->first_name.' '.$user->last_name);
                        $m->subject('A new product is created');
                    });
                }
            }
        }
    }
}
