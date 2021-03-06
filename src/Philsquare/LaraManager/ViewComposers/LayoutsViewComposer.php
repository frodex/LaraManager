<?php namespace Philsquare\LaraManager\ViewComposers; 

use Illuminate\Contracts\View\View;
use Philsquare\LaraManager\Models\Setting;

class LayoutsViewComposer {

    protected $setting;

    public function __construct(Setting $setting)
    {
        $this->setting = $setting;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $settings = $this->setting->all()->pluck('value', 'slug')->all();

        $view->with(compact('settings'));
    }

}