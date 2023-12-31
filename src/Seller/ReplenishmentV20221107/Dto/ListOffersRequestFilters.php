<?php

namespace SellingPartnerApi\Seller\ReplenishmentV20221107\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ListOffersRequestFilters extends BaseDto
{
    /**
     * @param  string  $marketplaceId The marketplace identifier. The supported marketplaces for both sellers and vendors are US, CA, ES, UK, FR, IT, IN, DE and JP. The supported marketplaces for vendors only are BR, AU, MX, AE and NL. Refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids) to find the identifier for the marketplace.
     * @param  string[]  $skus A list of SKUs to filter. This filter is only supported for sellers and not for vendors.
     * @param  string[]  $asins A list of Amazon Standard Identification Numbers (ASINs).
     * @param  string[]  $eligibilities A list of eligibilities associated with an offer.
     * @param  Preference  $preferences Offer preferences that you can include in the result filter criteria.
     * @param  Promotion  $promotions Offer promotions to include in the result filter criteria.
     * @param  string[]  $programTypes A list of replenishment program types.
     */
    public function __construct(
        public readonly string $marketplaceId,
        public readonly ?array $skus,
        public readonly ?array $asins,
        public readonly ?array $eligibilities,
        public readonly ?Preference $preferences,
        public readonly ?Promotion $promotions,
        public readonly array $programTypes,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
