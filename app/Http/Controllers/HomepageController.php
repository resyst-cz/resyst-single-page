<?php
/**
 * @author: Peter Holop <peter.holop@resyst.cz>
 * created: 10.12.2019
 */

declare(strict_types=1);

namespace App\Http\Controllers;

class HomepageController extends Controller
{
    public function __invoke()
    {
        $data = [
            'siteName' => 'ReSyst.cz',
            'siteSlogan' => 'Tvoříme skvělé webové stránky za super ceny',
        ];
        return view('homepage', $data);
    }
}
