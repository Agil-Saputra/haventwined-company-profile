<?php

namespace App\Filament\Resources\BenefitResource\Api\Handlers;

use App\Filament\Resources\SettingResource;
use App\Filament\Resources\BenefitResource;
use Rupadana\ApiService\Http\Handlers;
use Spatie\QueryBuilder\QueryBuilder;
use Illuminate\Http\Request;
use App\Filament\Resources\BenefitResource\Api\Transformers\BenefitTransformer;

class DetailHandler extends Handlers
{
    public static string | null $uri = '/{id}';
    public static string | null $resource = BenefitResource::class;


    /**
     * Show Benefit
     *
     * @param Request $request
     * @return BenefitTransformer
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

        return new BenefitTransformer($query);
    }
}
