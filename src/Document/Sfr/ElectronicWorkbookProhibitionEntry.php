<?php

/**
 * ESIA Struct
 *
 * @author Dmitriy Kaufman <d.kaufman@pos-credit.ru>
 * @copyright Copyright (c) 2026, The Vanta
 */

declare(strict_types=1);

namespace Vanta\Integration\Esia\Struct\Document\Sfr;

use DateTimeImmutable;
use Symfony\Component\Uid\Uuid;

/**
 * @deprecated
 */
final readonly class ElectronicWorkbookProhibitionEntry extends ElectronicWorkbookEntry
{
    /**
     * @param non-empty-string|null $position
     */
    public function __construct(
        Uuid $id,
        DateTimeImmutable $date,
        ElectronicWorkbookOrganizationInfo $organization,
        bool $isPartTimeJob = false,
        public ?string $position = null,
    ) {
        parent::__construct(
            type: ElectronicWorkbookEntryType::PROHIBITION,
            id: $id,
            date: $date,
            organization: $organization,
            isPartTimeJob: $isPartTimeJob,
        );
    }
}
