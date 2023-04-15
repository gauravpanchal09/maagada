<?php

/**
 * HistoryModel
 * @author Ashish Bairagi <https://github.com/abbackend>
 */

namespace App\View\Components;

use Illuminate\View\Component;

class HistoryModel extends Component
{
    /**
     * histories.
     *
     * @var array
     */
    public $histories;

    /**
     * test.
     *
     * @var string
     */
    public $test;

    /**
     * Create a new component instance.
     *
     * @param  array  $histories
     * @param  string  $test
     * @return void
     */
    public function __construct($histories, $test)
    {
        $this->histories = $histories;
        $this->test = $test;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.history-model');
    }
}
