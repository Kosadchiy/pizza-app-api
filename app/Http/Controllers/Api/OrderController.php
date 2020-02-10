<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CheckOrderItems;
use App\Http\Requests\ConfirmOrder;
use App\Repositories\Contracts\RepositoryInterface;
use App\Services\Contracts\OrderServiceInterface;

class OrderController extends Controller
{
    protected $orderRepository;
    protected $orderService;

    public function __construct(RepositoryInterface $orderRepository, OrderServiceInterface $orderService)
    {
        $this->orderRepository = $orderRepository;
        $this->orderService = $orderService;
    }

    public function check(CheckOrderItems $request)
    {
        $data = $request->all();
        $cart = $this->orderService->checkItems($data);
        if (isset($cart['error']) && $cart['error'] === true) {
            return response()->json($cart, 500);
        }
        return response()->json($cart);
    }

    public function confirm(ConfirmOrder $request)
    {
        $data = $request->all();
        $data = $this->orderService->checkItems($data);
        if (isset($data['error']) && $data['error'] === true) {
            return response()->json($data, 500);
        } else if ($data['modified']) {
            return response()->json($data);
        }
        $order = $this->orderRepository->create($data);
        return response()->json($order);
    }
}
