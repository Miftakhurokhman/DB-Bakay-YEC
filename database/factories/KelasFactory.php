<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kelas>
 */
class KelasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'class_name' => fake()->sentence(mt_rand(4, 8)),
            'class_desc' => "Menggunakan Bahasa Inggris Bagi Calon Sekretaris adalah kelas yang disusun khusus untuk peserta yang ingin belajar Bahasa Inggris khususnya bagi yang berprofesi sebagai Sekretaris. Pelatihan ini menggunakan metode ajar webinar. Kelas ini merujuk pada SKKNI Nomor 27 Tahun 2009. Peserta akan mendapatkan pengetahuan tentang menggunakan Bahasa Inggris bagi seorang calon sekretaris meliputi perkenalan okupasi sekretaris, cakupan tugas, dan pentingnya belajar Bahasa Inggris bagi sekretaris, orang-orang di tempat kerja (people at work), membuat dan menerima panggilan (making and receiving calls), menerima dan memberi pesan (taking and giving messages), menyambut dan menerima tamu (welcoming and receiving visitors), dan membuat surat, memo, dan permohonan (letters, inter-office memos, and requests) mengingat banyaknya perusahaan multinasional yang terdapat di Indonesia serta pentingnya penguasaan Bahasa Inggris sebagai bahasa internasional.",
            'category_id' => fake()->numberBetween(1,3),
            'class_thumbnail' => "yec".fake()->numberBetween(1,13).".png"
        ];
    }
}
