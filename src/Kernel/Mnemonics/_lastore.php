<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

final class _lastore implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    /**
     * store a long to an array
     */
    public function execute(): void
    {
        $value = $this->getStack();
        $index = $this->getStack();
        $arrayref = $this->getStack();
        
        $arrayref[$index] = $value;
    }
}
