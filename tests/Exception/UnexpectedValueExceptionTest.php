<?php
/*
 * This file is part of the DateTime library.
 *
 * (c) Artem Henvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Fresh\DateTime\Tests\Exception;

use Fresh\DateTime\Exception\UnexpectedValueException;
use PHPUnit\Framework\TestCase;

/**
 * UnexpectedValueExceptionTest.
 *
 * @author Artem Henvald <genvaldartem@gmail.com>
 */
class UnexpectedValueExceptionTest extends TestCase
{
    public function testConstructor(): void
    {
        $exception = new UnexpectedValueException();

        self::assertInstanceOf(\UnexpectedValueException::class, $exception);
    }
}
