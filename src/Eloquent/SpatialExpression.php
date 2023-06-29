<?php

namespace Grimzy\LaravelMysqlSpatial\Eloquent;

use Illuminate\Database\Query\Expression;

class SpatialExpression extends Expression
{
    public function getValue()
    {
        return 'ST_GeomFromText(?)';
    }

    public function getSpatialValue()
    {
        return $this->value->toWkt();
    }

    public function getLat()
    {
        $this->value->getLat();
    }
    
    public function getLng()
    {
        $this->value->getLng();
    }
}
