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
use Symfony\Component\Serializer\Attribute\Context;
use Symfony\Component\Serializer\Attribute\SerializedName;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Uid\Uuid;

/**
 * @deprecated
 */
final readonly class ElectronicWorkbookEstablishmentEntry extends ElectronicWorkbookEntry
{
    /**
     * @param ?non-empty-string $position
     */
    public function __construct(
        #[SerializedName('uuid')]
        public Uuid $id,
        #[Context(denormalizationContext: [DateTimeNormalizer::FORMAT_KEY => '!d.m.Y'])]
        public DateTimeImmutable $date,
        public ElectronicWorkbookOrganizationInfo $organization,
        public ?string $position = null,
        public bool $isPartTimeJob = false,
    ) {
        parent::__construct(ElectronicWorkbookEntryType::ESTABLISHMENT);
    }
}
