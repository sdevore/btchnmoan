<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Project
 *
 * @method static \Database\Factories\ProjectFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Project newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Project newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Project query()
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Environment[] $environments
 * @property-read int|null $environments_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Release[] $releases
 * @property-read int|null $releases_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\TestSuite[] $testSuites
 * @property-read int|null $test_suites_count
 */
class Project extends Model
{
    use HasFactory;

    public function owner() {
        return $this->belongTo(User::class, 'user_id');
    }

    public function environments () {
        return $this->hasMany(Environment::class);
    }

    public function releases () {
        return $this->hasMany(Release::class);
    }

    public function testSuites () {
        return $this->hasMany(TestSuite::class);
    }


}
