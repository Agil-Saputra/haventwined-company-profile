<?php
namespace App\Filament\Resources\ContactResource\Api\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Contact;

/**
 * @property Contact $resource
 */
class ContactTransformer extends JsonResource
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
