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
            Schema::create('test_suites', function (Blueprint $table) {
                $table->id();
                $table->timestamps();
                $table->string('name');
                $table->string('status');
                $table->string('location');
                $table->foreignId('user_id')
                    ->constrained();
                $table->foreignId('modified_by')
                    ->nullable()
                    ->constrained('users')
                    ->restrictOnUpdate();
                $table->foreignId('project_id')
                    ->constrained();
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::dropIfExists('test_suites');
        }
    };
