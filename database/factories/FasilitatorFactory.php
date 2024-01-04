<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fasilitator>
 */
class FasilitatorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fasil_name' => fake()->name(),
            'fasil_photo' => "https://c.pxhere.com/photos/fd/61/ben_knapen_portrait_person_face_expression_male_man_adult-1068652.jpg!d",
            'fasil_desc' => "Ir. H. Joko Widodo ( lahir 21 Juni 1961) adalah presiden Indonesia yang mulai menjabat sejak tanggal 20 Oktober 2014. Terpilih dalam Pemilu Presiden 2014, Jokowi menjadi presiden Indonesia pertama yang bukan berasal dari elite politik atau militer Indonesia. Dia terpilih bersama Wakil Presiden Jusuf Kalla dan kembali terpilih bersama Wakil Presiden Ma'ruf Amin dalam Pemilu Presiden 2019. Sebelumnya, Jokowi pernah menjabat sebagai gubernur Jakarta sejak 15 Oktober 2012 hingga 16 Oktober 2014 didampingi Basuki Tjahaja Purnama sebagai wakil gubernur."
        ];
    }
}
