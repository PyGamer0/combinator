<?php

declare(strict_types=1);

namespace loophp\combinator\Combinator;

use loophp\combinator\Combinator;

/**
 * Class H.
 *
 * @psalm-template AType
 * @psalm-template BType
 * @psalm-template CType
 */
final class H extends Combinator
{
    /**
     * @var callable
     */
    private $f;

    /**
     * @var mixed
     */
    private $x;

    /**
     * @var mixed
     */
    private $y;

    /**
     * H constructor.
     *
     * @psalm-param callable(AType): callable(BType): callable(AType): CType $f
     * @psalm-param AType $x
     * @psalm-param BType $y
     *
     * @param callable $f
     * @param mixed $x
     * @param mixed $y
     */
    public function __construct(callable $f, $x, $y)
    {
        $this->f = $f;
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * @psalm-return CType
     */
    public function __invoke()
    {
        return ((($this->f)($this->x))($this->y))($this->x);
    }
}
