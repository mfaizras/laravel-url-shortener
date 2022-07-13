<?php

namespace App\Http\Controllers\Api;

use App\Models\Link;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use function PHPUnit\Framework\isEmpty;

class LinkController extends Controller
{
    public function store(Request $request)
    {
        $response = [];

        if (!$request['alias']) {
            $word = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
            for ($x = 0; $x <= 10; $x++) {
                $request['alias'] .= $word[rand(0, strlen($word) - 1)];
            }
        }
        $validatedData = Validator::make($request->all(), [
            'url' => 'required|url',
            'alias' => 'unique:links|alpha_num'
        ], [
            'alias.unique' => 'Aliases has been used,You must Use Different Aliases',
            'alias.alpha_num' => 'Only Alphabet and Numeric Allowed on Aliases',
            'url.active_url' => 'The URL is Not Active',
            'url.required' => 'Fill The URL Form'
        ]);

        if ($validatedData->fails()) {
            $response['status'] = 'error';
            $response['message'] = $validatedData->messages();
            return response()->json($response);
        } else {
            $message = "" . url('/') . '/' . $request['alias'] . "";
            $response['status'] = 'success';
            $response['message'] = 'Data Added Succesfully';
            $response['alias'] = $request['alias'];
            $response['url'] = $message;
            Link::create($validatedData->validate());
            return response()->json($response);
        }
    }
}
