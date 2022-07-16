<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Release
 *
 * @method static \Database\Factories\ReleaseFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Release newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Release newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Release query()
 * @mixin \Eloquent
 * @property-read \App\Models\User|null $owner
 * @property-read \App\Models\Project|null $project
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\TestRun[] $testRuns
 * @property-read int|null $test_runs_count
 */
class Release extends Model
{
    use HasFactory;

    public function owner() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function project() {
        return $this->belongsTo(Project::class);
    }

    public function testRuns () {
        return $this->hasMany(TestRun::class);
    }
}
