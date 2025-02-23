<?php
namespace App\Filament\Resources\HeroResource\Api\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Hero;

/**
 * @property Hero $resource
 */
class HeroTransformer extends JsonResource
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
