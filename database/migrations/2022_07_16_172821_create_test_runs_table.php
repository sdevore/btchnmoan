<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration {

        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('test_runs', function (Blueprint $table) {
                $table->id();
                $table->timestamps();
                $table->string('status');
                $table->string('comment');
                $table->foreignId('environment_id')
                    ->constrained();
                $table->foreignId('test_case_id')
                    ->constrained();
                // for re-runs or retest
                $table->foreignId('user_id')
                    ->constrained();
                $table->foreignId('release_id')
                    ->constrained();
            });
            Schema::table('test_runs', function (Blueprint $table) {
                $table->foreignId('test_run_id')
                    ->constrained('test_runs');
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::dropIfExists('test_runs');
        }
    };
