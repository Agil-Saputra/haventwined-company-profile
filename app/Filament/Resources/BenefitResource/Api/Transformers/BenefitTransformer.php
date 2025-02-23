<?php
namespace App\Filament\Resources\BenefitResource\Api\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Benefit;

/**
 * @property Benefit $resource
 */
class BenefitTransformer extends JsonResource
{

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return $this->resource->toArray();
    }
}
