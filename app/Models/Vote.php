<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pwp_votes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'link', 'hour_limit', 'reward_amount', 'type'];

    /**
     * @param $type
     * @return string
     */
    public function color($type): string
    {
        $colors = [
            'cubi' => 'bg-primary hover:bg-primary-darker',
            'virtual' => 'bg-green-700 hover:bg-green-500',
        ];
        return $colors[$type];
    }
}
