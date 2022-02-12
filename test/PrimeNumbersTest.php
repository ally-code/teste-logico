<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\PrimeNumbers;

class PrimeNumbersTest extends TestCase
{
    private PrimeNumbers $primeNumbers;

    protected function setUp(): void
    {
        $this->primeNumbers = new PrimeNumbers();
    }
    
    public function test1()
    {
        $this->assertSame([
            [ 
                'numero' => 2477,
                'par' => false,
                'impar' => true,
                'somaDigitos' => 20
            ],
            [ 
                'numero' => 2473,
                'par' => false,
                'impar' => true,
                'somaDigitos' => 16
            ],
            [ 
                'numero' => 2467,
                'par' => false,
                'impar' => true,
                'somaDigitos' => 19
            ],
            [ 
                'numero' => 2459,
                'par' => false,
                'impar' => true,
                'somaDigitos' => 20
            ],
            [ 
                'numero' => 2447,
                'par' => false,
                'impar' => true,
                'somaDigitos' => 17
            ],
        ], $this->primeNumbers->handle(2496));
    }

    public function test2()
    {
        $this->assertSame([
            [
                'numero' => 5,
                'par' => false, 
                'impar' => true, 
                'somaDigitos' => 5
            ],
            [
                'numero' => 3,
                'par' => false, 
                'impar' => true, 
                'somaDigitos' => 3
            ],
            [
                'numero' => 2,
                'par' => true, 
                'impar' => false, 
                'somaDigitos' => 2
            ],
        ], $this->primeNumbers->handle(5));
    }

    public function test3()
    {
        $this->assertSame([
            [
                'numero' => 17,
                'par' => false, 
                'impar' => true, 
                'somaDigitos' => 8
            ],
            [
                'numero' => 13,
                'par' => false, 
                'impar' => true, 
                'somaDigitos' => 4
            ],
            [
                'numero' => 11,
                'par' => false, 
                'impar' => true, 
                'somaDigitos' => 2
            ],
            [
                'numero' => 7,
                'par' => false, 
                'impar' => true, 
                'somaDigitos' => 7
            ],
            [
                'numero' => 5,
                'par' => false, 
                'impar' => true, 
                'somaDigitos' => 5
            ],
        ], $this->primeNumbers->handle(17));
    }
}