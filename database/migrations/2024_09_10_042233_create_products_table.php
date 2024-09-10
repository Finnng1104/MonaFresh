 <?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateProductsTable extends Migration
    {
        public function up()
        {
            Schema::create('products', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->foreignId('category_id')->constrained('categories');
                $table->string('image')->nullable();
                $table->decimal('price', 10, 2);
                $table->decimal('sale_price', 10, 2)->nullable();
                $table->integer('quantity_sold')->default(0);
                $table->text('description')->nullable();
                $table->foreignId('status_id')->constrained('statuses');
                $table->timestamps();
            });
        }

        public function down()
        {
            Schema::table('products', function (Blueprint $table) {
                $table->dropForeign(['category_id']);
                $table->dropForeign(['status_id']);
            });

            Schema::dropIfExists('products');
        }
    }
