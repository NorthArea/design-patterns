<?php


namespace App\Behavioral\Command\Simple\Contracts;


interface Receiver
{
    public function action(string $information): string;
}