<?php

declare(strict_types=1);

namespace Doctrine\ORM\Annotation;

/**
 * Caching to an entity or a collection.
 *
 * @author  Fabio B. Silva <fabio.bat.silva@gmail.com>
 * @since   2.5
 *
 * @Annotation
 * @Target({"CLASS","PROPERTY"})
 */
final class Cache implements Annotation
{
    /**
     * @Enum({"READ_ONLY", "NONSTRICT_READ_WRITE", "READ_WRITE"})
     * 
     * @var string The concurrency strategy.
     */
    public $usage = 'READ_ONLY';

    /**
     * @var string Cache region name.
     */
    public $region;
}
