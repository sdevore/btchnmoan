<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Environment
 *
 * @method static \Database\Factories\EnvironmentFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Environment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Environment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Environment query()
 * @mixin \Eloquent
 * @property-read \App\Models\User|null $owner
 * @property-read \App\Models\Project|null $project
 */
class Environment extends Model
{
    use HasFactory;

    public function owner () {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
