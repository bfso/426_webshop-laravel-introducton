<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Product;

class ProductsTest extends TestCase
{
    /**
     * @return void
     */
    public function test_add_product_to_db()
    {
		$newProduct = new Product();
		$newProduct->name = "test";
		$newProduct->price = 10.20;
		$newProduct->save();
		
		$storedProduct = Product::where('name',$product->name)->first();
        $this->assertEquals($newProduct->price,$storedProduct->price);
		$storedProduct->delete();
    }
}
