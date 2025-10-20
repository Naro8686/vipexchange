<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;

class OrderController extends Controller
{
    public function index()
    {
        return view('order.index');
    }

    public function store(Request $request)
    {
        try {
            $this->validate($request, [
                'telegram' => [
                    'required',
                    'string',
                    'max:255',
                    'regex:/^@?[a-zA-Z0-9_]{5,}$/'
                ],
                'amount' => [
                    'required',
                    'numeric',
                    'min:10',
                    'max:1000000',
                    'regex:/^\d{1,7}(\.\d{1,2})?$/'
                ],
                'direction' => [
                    'required',
                    'in:USDT_TO_RUB,RUB_TO_USDT'
                ],
            ], [
                'telegram.regex' => 'Введите корректный Telegram (только буквы, цифры, подчёркивания, минимум 5 символов)',
                'amount.regex' => 'Сумма должна быть числом с максимум 2 знаками после точки',
            ]);
        } catch (ValidationException $e) {
            return response()->json(['message' => $e->getMessage()], 422);
        }

        $directionText = $request->direction === 'USDT_TO_RUB' ? 'USDT → RUB' : 'RUB → USDT';

        $data = [
            'telegram' => $request->telegram,
            'amount' => $request->amount,
            'direction' => $request->direction,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];

        try {
            DB::table('orders')->insert($data);

            Mail::send('mails.order', [
                'telegram' => $request->telegram,
                'amount' => $request->amount,
                'direction' => $directionText,
            ], function ($message) {
                $message->to(config('mail.to.address'), config('mail.to.name'))
                    ->subject('Новая заявка с сайта')
                    ->from(config('mail.from.address'), config('mail.from.name'));
            });

            return response()->json(['message' => 'Заявка успешно отправлена']);
        } catch (Exception $e) {
            Log::error('Ошибка при создании заявки: ' . $e->getMessage());
            return response()->json(['message' => 'Ошибка при сохранении заявки. Попробуйте позже.'], 500);
        }
    }
}
