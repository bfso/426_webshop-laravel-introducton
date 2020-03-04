<?php

namespace Tests\Unit;

use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\TestCase;
use App\Product;

class ProductsTest extends TestCase
{

//    protected function setUp(): void
//    {
//        parent::setUp();
//        DB::beginTransaction();
//    }

    /**
     * @return void
     */
    public function test_add_product_to_db()
    {
        $this->assertTrue(false);
//		$newProduct = new Product();
//		$newProduct->name = "test";
//		$newProduct->price = 10.20;
//		$newProduct->save();

//		$storedProduct = Product::where('name',$newProduct->name)->first();
//        $this->assertEquals($newProduct->price,$storedProduct->price);
//		$storedProduct->delete();
    }

//    public function tearDown() : void
//    {
//        DB::rollBack();
//        parent::tearDown();
//    }
}
