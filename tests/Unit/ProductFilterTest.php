<?php

namespace Tests\Unit;
use App\Shop\Catalog\ProductFilter;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\TestCase;
use App\Product;
use Tests\CreatesApplication;

class ProductFilterTest extends TestCase
{
    use CreatesApplication;
    use WithFaker;

    protected $app;

    protected function setUp(): void
    {
        parent::setUp();
        $this->app = $this->createApplication();
        $this->setUpFaker();
        DB::beginTransaction();
    }

    /** @test */
    public function filter_out_products_with_a()
    {
        // Create some random products.
        $filteredProducts = ProductFilter::run(
            factory(Product::class, 100)->create()
        );

        // Check if they containing "a" in the product name
        $filteredProducts->each(function ($product){
            $this->assertStringContainsString('a', $product->name);
        });
    }

    public function tearDown() : void
    {
        DB::rollBack();
        parent::tearDown();
    }
}
