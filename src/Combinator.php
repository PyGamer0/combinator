<?php

declare(strict_types=1);

namespace loophp\combinator;

use Closure;
use InvalidArgumentException;
use loophp\combinator\Contract\Combinator as CombinatorInterface;

use function is_callable;

/**
 * Class Combinator.
 */
abstract class Combinator implements CombinatorInterface
{
    /**
     * @psalm-pure
     */
    public static function with(): Closure
    {
        $possibleCallable = ['static', 'on'];

        if (true === is_callable($possibleCallable)) {
            return Closure::fromCallable($possibleCallable);
        }

        throw new InvalidArgumentException('Implement on() method in ' . static::class . '.');
    }
}
