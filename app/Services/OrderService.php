<?php

namespace App\Services;

use App\MenuItem;
use Illuminate\Support\Facades\Log;
use App\Services\Contracts\OrderServiceInterface;

class OrderService implements OrderServiceInterface
{
    public function checkItems(array $data): array
    {
        try {
            $data['modified'] = false;
            foreach ($data['items'] as $item) {
                $menuItem = MenuItem::find($item['id']);
                $option = $menuItem->options()->where('name', $item['option'])->first();
                if ((float)$option->price !== (float)$item['price']) {
                    $item['price'] = $option->price;
                    $data['modified'] = true;
                }
            }
            if ($data['modified'] === true) {
                $data['total'] = 0;
                foreach ($data['items'] as $item) {
                    $data['total'] = $data['total'] + ($item['price'] * $item['qty']);
                }
            }
            return $data;
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            throw $th;
        }
    }
}