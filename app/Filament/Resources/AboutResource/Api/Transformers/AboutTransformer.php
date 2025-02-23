<?php
namespace App\Filament\Resources\AboutResource\Api\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\About;

/**
 * @property About $resource
 */
class AboutTransformer extends JsonResource
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
