<?php

namespace App\Filament\Resources\BannerResource\Api\Handlers;

use App\Filament\Resources\SettingResource;
use App\Filament\Resources\BannerResource;
use Rupadana\ApiService\Http\Handlers;
use Spatie\QueryBuilder\QueryBuilder;
use Illuminate\Http\Request;
use App\Filament\Resources\BannerResource\Api\Transformers\BannerTransformer;

class DetailHandler extends Handlers
{
    public static string | null $uri = '/{id}';
    public static string | null $resource = BannerResource::class;


    /**
     * Show Banner
     *
     * @param Request $request
     * @return BannerTransformer
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

        return new BannerTransformer($query);
    }
}
