<?php
namespace PHPJava\Kernel\Mnemonics;

use \PHPJava\Exceptions\NotImplementedException;

final class _invokedynamic implements MnemonicInterface
{
    use \PHPJava\Kernel\Core\Accumulator;

    public function execute(): void
    {    
        throw new NotImplementedException(__CLASS__);
    }

}   
