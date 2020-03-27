<?php
use App\User;
use App\product;
use App\product_image;
use App\order;
use App\state;
use App\faq;
use App\article;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        factory(User::class, 10)->create();
        factory(state::class, 32)->create();
        factory(product::class, 2)->create();
        factory(article::class, 2)->create();
        factory(product_image::class, 10)->create();
        factory(faq::class, 20)->create();
        factory(order::class, 70)->create();
        
        
    }
}
