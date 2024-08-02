<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Promo;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function view(){
        $productData = $this->getDataForLastDays(Product::class, 'created_at', 7);
        $promoData = $this->getDataForLastDays(Promo::class, 'created_at', 7);
        $userData = $this->getDataForLastDays(User::class, 'created_at', 7);

        $chartData = [
            [
                'name' => 'Product',
                'data' => $productData,
            ],
            [
                'name' => 'Promo',
                'data' => $promoData,
            ],
            [
                'name' => 'User',
                'data' => $userData,
            ],
        ];

        $data = [
            'product_count' => Product::count(),
            'promo_count' => Promo::count(),
            'user_count' => User::count(),
            'product_increase' => $this->calculateIncrease(Product::class, 'created_at'),
            'promo_increase' => $this->calculateIncrease(Promo::class, 'created_at'),
            'user_increase' => $this->calculateIncrease(User::class, 'created_at'),
            'product_data' => $productData,
            'promo_data' => $promoData,
            'user_data' => $userData,
            'chart_data' => $chartData
        ];

        return view('admin.dashboard.viewdashboard', $data);
    }

    private function calculateIncrease($model, $timestampField) {
        $yesterday = Carbon::yesterday();
        $today = Carbon::today();

        $countYesterday = $model::whereBetween($timestampField, [$yesterday, $today])->count();

        $countToday = $model::where($timestampField, '>=', $today)->count();

        $increase = $countToday - $countYesterday;

        return $increase;
    }

    private function getDataForLastDays($model, $timestampField, $days) {
        $data = [];

        for ($i = $days - 1; $i >= 0; $i--) {
            $day = Carbon::now()->subDays($i)->startOfDay();
            $nextDay = $day->copy()->endOfDay();

            $count = $model::whereBetween($timestampField, [$day, $nextDay])->count();

            $data[] = $count;
        }

        return $data;
    }
}
