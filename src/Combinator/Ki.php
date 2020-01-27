<?php

declare(strict_types=1);

namespace loophp\combinator\Combinator;

use loophp\combinator\Combinator;

/**
 * Class Ki.
 *
 * @psalm-template XType
 * @psalm-template YType
 */
final class Ki extends Combinator
{
    /**
     * @var mixed
     */
    private $x;

    /**
     * @var mixed
     */
    private $y;

    /**
     * Ki constructor.
     *
     * @psalm-param XType $x
     * @psalm-param YType $y
     *
     * @param mixed $x
     * @param mixed $y
     */
    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * @psalm-return YType
     */
    public function __invoke()
    {
        return $this->y;
    }
}
