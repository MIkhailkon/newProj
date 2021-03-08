<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function products(){
        return $this->belongsToMany(Product::class)->withPivot('count')->withTimestamps();
    }
    public function getSum(){
        $sum=0;
        foreach ($this->products as $product){
            $sum +=$product->getPrise();
                    }
        return  $sum;
    }
}
