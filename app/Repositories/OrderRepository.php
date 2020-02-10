<?php

namespace App\Repositories;

use App\Order;
use Illuminate\Support\Facades\Log;
use App\Repositories\Contracts\RepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;

class OrderRepository implements RepositoryInterface
{
    public function index(): Collection
    {
        return Auth::user()->orders;
    }

    public function find(int $id)
    {
        return Order::find($id);
    }

    public function create(array $data)
    {
        try {
            $user = auth()->guard('api')->user();
            if ($user) {
                $data['user_id'] = $user->id;
            }
            $data['status'] = 'confirmed';
            $order = Order::create($data);
            $order->items()->createMany($data['items']);
            return $order;
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return [
                'error' => true,
                'message' => $th->getMessage() 
            ];
        }
    }

    public function update(array $data)
    {
        
    }
}