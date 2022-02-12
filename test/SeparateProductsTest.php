<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\SeparateProducts;

class SeparateProductsTest extends TestCase
{
    private SeparateProducts $separateProducts;

    protected function setUp(): void
    {
        $this->separateProducts = new SeparateProducts();
    }

    public function test1()
    {
        $this->assertSame([
            'preto' =>  [
                'PP' => 1,
                'M' => 1,
                'G' => 1,
                'GG' => 2
            ],
            'branco' => [
                'PP'=> 1,
                'G' => 1
            ],
            'vermelho' => [
                'M' => 1
            ],
            'azul' => [
                'XG' => 3,
                'P' => 1
            ]
        ], $this->separateProducts->handle([
            "preto-PP",
            "preto-M",
            "preto-G",
            "preto-GG",
            "preto-GG",
            "branco-PP",
            "branco-G",
            "vermelho-M",
            "azul-XG",
            "azul-XG",
            "azul-XG",
            "azul-P",
        ]));
    }

    public function test2()
    {
        $this->assertSame([
            'preto' =>  [
                'PP' => 3,
                'G' => 2,
            ],
            'branco' => [
                'PP'=> 1,
                'M'=> 2,
                'G' => 1
            ],
            'vermelho' => [
                'M' => 3
            ],
            'azul' => [
                'XG' => 1,
                'P' => 1
            ]
        ], $this->separateProducts->handle([
            "preto-PP",
            "preto-PP",
            "preto-PP",
            "preto-G",
            "preto-G",
            "branco-PP",
            "branco-M",
            "branco-M",
            "branco-G",
            "vermelho-M",
            "vermelho-M",
            "vermelho-M",
            "azul-XG",
            "azul-P",
        ]));
    }

    public function test3()
    {
        $this->assertSame([
            'preto' =>  [
                'PP' => 1,
                'G' => 2,
            ],
            'branco' => [
                'PP'=> 2,
                'M'=> 1,
            ],
            'vermelho' => [
                'M' => 1,
                'G' => 2
            ],
            'azul' => [
                'XG' => 2,
                'P' => 1
            ]
        ], $this->separateProducts->handle([
            "preto-PP",
            "preto-G",
            "preto-G",
            "branco-PP",
            "branco-PP",
            "branco-M",
            "vermelho-M",
            "vermelho-G",
            "vermelho-G",
            "azul-XG",
            "azul-XG",
            "azul-P",
        ]));
    }
}
