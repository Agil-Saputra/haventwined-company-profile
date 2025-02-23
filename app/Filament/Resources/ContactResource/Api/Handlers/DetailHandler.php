<?php

namespace App\Filament\Resources\ContactResource\Api\Handlers;

use App\Filament\Resources\SettingResource;
use App\Filament\Resources\ContactResource;
use Rupadana\ApiService\Http\Handlers;
use Spatie\QueryBuilder\QueryBuilder;
use Illuminate\Http\Request;
use App\Filament\Resources\ContactResource\Api\Transformers\ContactTransformer;

class DetailHandler extends Handlers
{
    public static string | null $uri = '/{id}';
    public static string | null $resource = ContactResource::class;


    /**
     * Show Contact
     *
     * @param Request $request
     * @return ContactTransformer
     */
    public function handler(Request $request)
    {
        $id = $request->route('id');
        
        $query = static::getEloquentQuery();

        $query = QueryBuilder::for(
            $query->where(static::getKeyName(), $id)
        )
            ->first();

        if (!$query) return static::sendNotFoundResponse();

        return new ContactTransformer($query);
    }
}
