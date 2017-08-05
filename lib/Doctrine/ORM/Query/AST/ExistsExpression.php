<?php

declare(strict_types=1);

namespace Doctrine\ORM\Query\AST;

/**
 * ExistsExpression ::= ["NOT"] "EXISTS" "(" Subselect ")"
 *
 * @link    www.doctrine-project.org
 * @since   2.0
 * @author  Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author  Jonathan Wage <jonwage@gmail.com>
 * @author  Roman Borschel <roman@code-factory.org>
 */
class ExistsExpression extends Node
{
    /**
     * @var bool
     */
    public $not;

    /**
     * @var Subselect
     */
    public $subselect;

    /**
     * @param Subselect $subselect
     */
    public function __construct($subselect)
    {
        $this->subselect = $subselect;
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch($sqlWalker)
    {
        return $sqlWalker->walkExistsExpression($this);
    }
}
