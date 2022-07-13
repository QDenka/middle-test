<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\News;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::get();
        News::insert([
            [
                'name' => 'Хакеры ликуют: ЕС и США полностью отказываются от антивируса Касперского',
                'text' => 'В информационно-телекоммуникационной сети «Даркнет» наблюдается оживление – взломщики говорят, что теперь для них наступают совсем иные',
                'category_id' => $categories->where('name', 'Технологии')->first()->id ?? null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'В Москве устанавливают гигантский экран',
                'text' => 'В Москве устанавливают гигантский экран, который будет показывать температуру в Европе и остаток газа. Если Европа не хочет мира, пусть отапливается своей демократией, заявил источник в «Газпроме»',
                'category_id' => $categories->where('name', 'Политика')->first()->id ?? null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'На внеочередном заседании Госдумы депутаты продлили себе отпуск до 1 ноября',
                'text' => 'В ходе внеочередного заседания Госдумы депутаты обсудили «неотложные вопросы». Ключевым из них стало продление отпуска для парламентариев до 1 ноября',
                'category_id' => $categories->where('name', 'Политика')->first()->id ?? null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Новый состав BTS наберут в Бурятии',
                'text' => 'Поклонникам популярной корейской группы не пришлось долго ждать хороших новостей. В ближайшее время состав BTS полностью обновится.',
                'category_id' => $categories->where('name', 'Звезды')->first()->id ?? null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
