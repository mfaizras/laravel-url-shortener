<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;
use PharIo\Manifest\Url;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php;

class LinkController extends Controller
{
    public function store(Request $request)
    {
        if (!$request['alias']) {
            $word = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
            for ($x = 0; $x <= 10; $x++) {
                $request['alias'] .= $word[rand(0, strlen($word) - 1)];
            }
        }
        $validatedData = $request->validate([
            'url' => 'required|url',
            'alias' => 'unique:links|alpha_num'
        ], [
            'alias.unique' => 'Aliases has been used,You must Use Different Aliases',
            'alias.alpha_num' => 'Only Alphabet and Numeric Allowed on Aliases',
            'url.active_url' => 'The URL is Not Active',
            'url.required' => 'Fiil The URL Form'
        ]);

        Link::create($validatedData);
        return redirect('/')->with('success', 'Your Url is Ready in <a href="' . url('') . '/' . $validatedData['alias'] . '" class="text-success" target="_blank">' . url('') . '/' . $validatedData['alias'] . '</a>');
    }

    public function show(Link $link)
    {
        return redirect()->away($link->url);
    }
}
