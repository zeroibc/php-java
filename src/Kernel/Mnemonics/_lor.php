<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

final class _lor implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $value1 = $this->getStack();
        $value2 = $this->getStack();

        $this->pushStack(BinaryTool::orBits($value1, $value2, 8));
    }
}
