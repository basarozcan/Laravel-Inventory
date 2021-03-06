<?php

namespace Caryley\LaravelInventory;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $guarded = [];

    protected $table = 'inventories';

    /**
     * Relationship.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function model()
    {
        return $this->morphTo();
    }

    public function __toString()
    {
        return $this->name;
    }
}
