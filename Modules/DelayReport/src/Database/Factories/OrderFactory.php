<?php

namespace DelayReport\Database\Factories;

use DelayReport\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;


class OrderFactory extends Factory
{

    protected $model = Order::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'owner_id' => random_int(1, 10),
            'time_delivery' => random_int(1, 50)
        ];
    }
}
