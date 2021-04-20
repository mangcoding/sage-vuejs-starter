<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class App extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        '*',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'siteName'       => $this->siteName(),
            'question_email' => 'question@email.com',
            'question_phone' => '085759402332',
            'partner_email'  => 'partner@email.com',
            'partner_phone'  => '0857123456',
            'address'        => 'put your address here',
        ];
    }

    /**
     * Returns the site name.
     *
     * @return string
     */
    public function siteName()
    {
        return get_bloginfo('name', 'display');
    }
}
