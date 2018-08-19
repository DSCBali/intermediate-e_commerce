<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public $i = 1;

    public function setVal($value)
    {
        $this->i += $value;
    }

    public function getVal()
    {
        return $this->i;
    }

    public function setCart($id)
    {
        // session(['cart' => [$id => $i]]);

        if (!empty(session()->get('cart'))) {
            self::setVal(1);
            session(['cart' => [$id => self::getVal()]]);
        } else {
            session(['cart' => [$id => 1]]);
        }

        return redirect()->route('index');
    }
}
