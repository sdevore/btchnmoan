<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\TestSuite
 *
 * @method static \Database\Factories\TestSuiteFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|TestSuite newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TestSuite newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TestSuite query()
 * @mixin \Eloquent
 * @property-read \App\Models\User|null $modifiedBy
 * @property-read \App\Models\User|null $owner
 * @property-read \App\Models\Project|null $project
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\TestCase[] $testCases
 * @property-read int|null $test_cases_count
 */
class TestSuite extends Model
{
    use HasFactory;

    public function owner () {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function modifiedBy () {
        return $this->belongsTo(User::class, 'modified_by');
    }

    public function project () {
        return $this->belongsTo(Project::class);
    }

    public function testCases () {
        return $this->hasMany(TestCase::class);
    }
}
