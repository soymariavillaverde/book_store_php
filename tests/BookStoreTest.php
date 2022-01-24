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

    public function testThreeDifferent(): void
    {
        $bookStore = new BookStore;
        $basket = [1, 2, 3];
        $this->assertEquals(21.60, $bookStore->total($basket));
    }

    public function testFourDifferent(): void
    {
        $bookStore = new BookStore;

        $basket = [1, 2, 3, 4];
        $this->assertEquals(25.60, $bookStore->total($basket));
    }

        public function testFiveDifferent(): void
    {
        $bookStore = new BookStore;
        $basket = [1, 2, 3, 4, 5];
        $this->assertEquals(30.00, $bookStore->total($basket));
    }
    
}
