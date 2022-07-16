<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\TestCase
 *
 * @method static \Database\Factories\TestCaseFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|TestCase newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TestCase newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TestCase query()
 * @mixin \Eloquent
 * @property-read \App\Models\User|null $modifiedBy
 * @property-read \App\Models\User|null $owner
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\TestRun[] $testRuns
 * @property-read int|null $test_runs_count
 * @property-read \App\Models\TestSuite|null $testSuite
 */
class TestCase extends Model
{
    use HasFactory;

    public function owner () {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function modifiedBy () {
        return $this->belongsTo(User::class, 'modified_by');
    }

    public function testSuite() {
        return $this->belongsTo(TestSuite::class);
    }

    public function testRuns() {
        return $this->hasMany(TestRun::class);
    }
}
