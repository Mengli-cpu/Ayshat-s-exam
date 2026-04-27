<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $jobs = ['manager', 'driver', 'admin', 'teacher', 'police officer', 'doctor', 'programmer'];
        return [
            'name' => fake()->firstName(),
            'surname' => fake()->lastName(),
            'birth_date' => fake()->date(),
            'experience' => fake()->numberBetween(0, 25),
            'gender' => fake()->boolean(50) ? 'M' : 'F',
            'email' => fake()->unique()->safeEmail(),
            'country' => fake()->country(),
            'city' => fake()->city(),
            'adress' => fake()->address(),
            'phone' => fake()->phoneNumber(),
            'nationality' => 'Turkmen',
            'job' => fake()->jobTitle(),
        ];
    }
    // https://www.google.com/search?sourceid=chrome&ie=UTF-8&aep=26&cud=0&qsubts=1776144268775&source=chrome.crn.obic&mtid=GrCvafPzBbuO2roPmenp8QQ&mstk=AUtExfB91PnZvUvFUZLqLSI_XpOpAeDgY9ahB9SrJulgv9W5gcvDQokjTxnhskntciG1FJl6x2yPnl86A2NHU3GeGUkQ7st6P0AP0HqfI7t1YPVrMxw-4kujb7aY9Am5lEyZxz6kcgC7o3WQ49wSIzANobm1RQ80FpzLoYmf6u2bcEzgpS9x4XN8V9hhqoppD091rQwasBmj-X9sZ5Q94dmk643PlW7WPWoXm-fYU5OZ3warRhKfjDQ2zuYQMvA8vakUj8g7HUJiswaPy6W9FPysDoZIFr_3n7HvhsbBwlfqrbdA6PC7cgYEdGMsiGefELn5PIEsr6x_aHnjmcuxiubAOF4BUAs0Tn-hQM7WsijmaR1dTnt27tSdBOx6&csuir=1&q=const+input+%3D+document.querySelector%28%27%23list%27%29%3B+const+button+%3D+document.querySelector%28%27button%27%29%3B+const+taskList+%3D+document.querySelector%28%27%23task%27%29%3B+function+drawTask%28text%29+%7B+const+li+%3D+document.createElement%28%27li%27%29%3B+li.textContent+%3D+text%3B+li.style.cursor+%3D+%22pointer%22%3B+li.onclick+%3D+function+%28%29+%7B+li.style.textDecoration+%3D+li.style.textDecoration+%3D%3D%3D+%27line-through%27+%3F+%27none%27+%3A+%27line-through%27%3B+%7D%3B+taskList.appendChild%28li%29%3B+%7D+let+savedTasks+%3D+JSON.parse%28localStorage.getItem%28%27myTasks%27%29%29+%7C%7C+%5B%5D%3B+savedTasks.forEach%28t+%3D%3E+drawTask%28t%29%29%3B+let+save+%3D+JSON.parse%28localStorage.getItem%28%27myTasks%27%29%29+%7C%7C+%5B%5D%3B+save.forEach%28a+%3D%3E+drawTask%28a%29%29%3B+button.onclick+%3D+function+%28%29+%7B+if+%28input.value+%21%3D%3D+%22%22%29+%7B+drawTask%28input.value%29%3B+savedTasks.push%28input.value%29%3B+localStorage.setItem%28%27myTasks%27%2C+JSON.stringify%28savedTasks%29%29%3B+input.value+%3D+%22%22%3B+%7D+%7D%3B&atvm=2&udm=50
}
