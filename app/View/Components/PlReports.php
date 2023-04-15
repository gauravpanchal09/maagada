<?php

/**
 * PlReports
 * @author Ashish Bairagi <https://github.com/abbackend>
 */

namespace App\View\Components;

use Illuminate\View\Component;

class PlReports extends Component
{
    /**
     * reports.
     *
     * @var \App\Models\PlTest[]
     */
    public $reports;

    /**
     * Create a new component instance.
     *
     * @param  \App\Models\PlTest[]  $reports
     * @return void
     */
    public function __construct($reports)
    {
        $this->reports = $reports;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.pl-reports');
    }
}
