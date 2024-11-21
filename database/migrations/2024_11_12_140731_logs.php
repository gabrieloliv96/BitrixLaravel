<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('logs_bitrix', function (Blueprint $table) {
            $table->id();
            $table->json('description_payload');
            $table->boolean('processed')->default(false);
            $table->timestamp('processed_at')->nullable();
            $table->timestamps();
        });
        Schema::create('logs_clockify', function (Blueprint $table) {
            $table->id();
            $table->json('description_payload');
            $table->boolean('processed')->default(false);
            $table->timestamp('processed_at')->nullable();
            $table->timestamps();
        });
        Schema::create('bitrix_tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Título da requisição
            // $table->integer('stage_id');
            $table->text('description');
            $table->text('description_in_bbcode')->nullable();
            $table->string('priority', 10);
            $table->json('accomplices')->nullable();
            $table->json('auditors')->nullable(); 
            $table->json('tags')->nullable();
            $table->string('allow_change_deadline', 1)->default('N');
            $table->string('task_control', 1)->default('N');
            $table->integer('parent_id')->default(0);
            $table->json('depends_on')->nullable();
            $table->integer('group_id');
            $table->integer('responsible_id');
            $table->integer('time_estimate')->default(0);
            $table->integer('task_id'); // ID
            $table->integer('created_by');
            $table->string('responsible_name');
            $table->string('responsible_last_name');
            $table->string('responsible_second_name')->nullable();
            $table->timestamp('created_date')->nullable();
            $table->integer('changed_by');
            $table->timestamp('changed_date')->nullable();
            $table->timestamp('status_changed_date')->nullable();
            $table->integer('closed_by')->nullable();
            $table->timestamp('closed_date')->nullable();
            $table->timestamp('activity_date')->nullable();
            $table->uuid('guid');
            $table->string('mark')->nullable();
            $table->timestamp('viewed_date')->nullable();
            $table->integer('time_spent_in_logs')->nullable();
            $table->string('favorite', 1)->default('N');
            $table->string('allow_time_tracking', 1)->default('N');
            $table->string('match_work_time', 1)->default('N');
            $table->string('add_in_report', 1)->default('N');
            $table->integer('forum_id')->nullable();
            $table->integer('forum_topic_id')->nullable();
            $table->integer('comments_count')->default(0);
            $table->string('site_id');
            $table->string('subordinate', 1)->default('N');
            $table->integer('forked_by_template_id')->nullable();
            $table->string('multitask', 1)->default('N');
            $table->json('scenario_name')->nullable();
            $table->string('is_regular', 1)->default('N');
            $table->integer('flow_id')->nullable();
            $table->json('uf_crm_task')->nullable();
            $table->json('uf_mail_message')->nullable();

            // Timestamps
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logs');
        Schema::dropIfExists('logs_clockify');
        Schema::dropIfExists('logs_bitrix');
        Schema::dropIfExists('bitrix_tasks');
    }
};
