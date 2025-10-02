<?php

declare(strict_types=1);

namespace App\Model\Repository;

/**
 * Classe QuoteRepository
 */
class QuoteRepository extends AbstractRepository
{
    protected string $table = 'quote';

    protected string $entity = 'Quote';
}
