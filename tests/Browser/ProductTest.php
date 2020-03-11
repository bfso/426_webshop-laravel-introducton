<?php

namespace Tests\Browser;

use App\Product;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ProductTest extends DuskTestCase
{
    use WithFaker;
    /**
     * @throws \Throwable
     * @test
     */
    public function index_link_to_create_product_page()
    {
        $this->setUpFaker();
        $name = $this->faker->word;
        $price = $this->faker->randomFloat(2,-10,100);

        $this->browse(function (Browser $browser) use ($name,$price) {
            $browser->visit('/products')
                ->assertVisible('#create-product-link')
                ->visit(
                    $browser->attribute('#create-product-link', 'href')
                )
                ->assertSee('Form to create new Products')
                ->type('name',$name)
                ->type('price',$price)
                ->click('#submit');

            $browser->visit('/products')
                ->assertSee($name)
                ->assertSee($price);
        });

        $lastProduct = Product::orderBy('created_at', 'desc')->first();
    }
}
