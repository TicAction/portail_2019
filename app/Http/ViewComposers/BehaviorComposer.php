<?php

namespace App\Http\ViewComposers;

use App\Behavior;
use Illuminate\View\View;
use App\Repositories\BehaviorRepository;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Pagination;

class BehaviorComposer
{
    // Behavior::where('behavior_date', '>=', $dateMoinsUneSemaine,' or',' user_id', '=', $user)->get()

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $dateMoinsUneSemaine = Carbon::now()->subDays(30)->format('Y-m-d');
        $behaves = Behavior::where('behavior_date', '>=', $dateMoinsUneSemaine)->get();
        $view->with('behaves', $behaves);
    }
}
