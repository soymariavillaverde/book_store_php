<?php
namespace Tests;

use App\BookStore;
use PHPUnit\Framework\TestCase;

class BookStoreTest extends TestCase
{
    
    public function testSingleBook(): void
    {
        $bookStore = new BookStore;
        $basket = [1];
        $this->assertEquals(8.0, $bookStore->total($basket));
    }

    public function testTwoSame(): void
    {
        $bookStore = new BookStore;
        $basket = [2, 2];
        $this->assertEquals(16.0, $bookStore->total($basket));
    }

    public function testEmpty(): void
    {
        $bookStore = new BookStore;
        $basket = [];
        $this->assertEquals(0.0, $bookStore->total($basket));
    }

    public function testTwoDifferent(): void
    {
        $bookStore = new BookStore;
        $basket = [1, 2];
        $this->assertEquals(15.2, $bookStore->total($basket));
    }
    
}
