<?php

namespace App\Filament\Resources\HeroResource\Api\Handlers;

use App\Filament\Resources\SettingResource;
use App\Filament\Resources\HeroResource;
use Rupadana\ApiService\Http\Handlers;
use Spatie\QueryBuilder\QueryBuilder;
use Illuminate\Http\Request;
use App\Filament\Resources\HeroResource\Api\Transformers\HeroTransformer;

class DetailHandler extends Handlers
{
    public static string | null $uri = '/{id}';
    public static string | null $resource = HeroResource::class;


    /**
     * Show Hero
     *
     * @param Request $request
     * @return HeroTransformer
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

        return new HeroTransformer($query);
    }
}
