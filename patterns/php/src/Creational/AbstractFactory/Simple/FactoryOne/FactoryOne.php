<?php declare(strict_types=1);

namespace App\Creational\AbstractFactory\Simple\FactoryOne;

use App\Creational\AbstractFactory\Simple\Contracts\AbstractFactory;


class FactoryOne implements AbstractFactory
{

    public function createProductA(): FactoryOneProductA
    {
        return new FactoryOneProductA();
    }

    public function createProductB(): FactoryOneProductB
    {
        return new FactoryOneProductB();
    }
}