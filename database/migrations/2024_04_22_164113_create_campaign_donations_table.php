<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampaignDonationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaign_donations', function (Blueprint $table) {
            $table->foreignId('campaign_id')->constrained()->onDelete('CASCADE');
            $table->foreignId('donation_id')->constrained()->onDelete('CASCADE');
            $table->primary(['campaign_id', 'donation_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campaign_donations');
    }
}

