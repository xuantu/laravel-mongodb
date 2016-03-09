<?php

namespace CMS\Http\Controllers;

use CMS\Test;
use Illuminate\Http\Request;

use CMS\Http\Requests;

class PostsController extends Controller
{
    function test()
    {
        $test = new Test();
        $test->title = 'Lorem ipsum dolor sit amet';
        $test->short_description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit';
        $test->description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis scelerisque lorem. Ut malesuada metus sed fermentum lacinia. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean porttitor quis velit quis venenatis. Donec tristique hendrerit ligula, non vulputate est condimentum nec. Curabitur id ante luctus, rutrum est a, faucibus est. Aliquam erat volutpat.';
        $saved = $test->save();
    }
}
