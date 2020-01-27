<?php

declare(strict_types=1);

namespace loophp\combinator\Combinator;

use loophp\combinator\Combinator;

/**
 * Class K.
 *
 * @psalm-template AType
 * @psalm-template BType
 */
final class K extends Combinator
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
     * K constructor.
     *
     * @psalm-param AType $x
     * @psalm-param BType $y
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
     * @psalm-return BType
     */
    public function __invoke()
    {
        return $this->x;
    }
}
