<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\TestRun
 *
 * @method static \Database\Factories\TestRunFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|TestRun newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TestRun newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TestRun query()
 * @mixin \Eloquent
 * @property-read \App\Models\Environment|null $environment
 * @property-read \App\Models\User|null $modifiedBy
 * @property-read \App\Models\User|null $owner
 * @property-read TestRun|null $previousTestRun
 * @property-read \Illuminate\Database\Eloquent\Collection|TestRun[] $reTestRun
 * @property-read int|null $re_test_run_count
 * @property-read \App\Models\Release|null $release
 * @property-read \App\Models\TestCase|null $testCase
 */
class TestRun extends Model
{
    use HasFactory;

    public function owner () {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function modifiedBy () {
        return $this->belongsTo(User::class, 'modified_by');
    }

    public function testCase () {
        return $this->belongsTo(TestCase::class);
    }

    public function release () {
        return $this->belongsTo(Release::class);
    }

    public function environment () {
        return $this->belongsTo(Environment::class);
    }

    public function previousTestRun () {
        return $this->belongsTo(TestRun::class);
    }

    public function reTestRun () {
        return $this->hasMany(TestRun::class);
    }
}
