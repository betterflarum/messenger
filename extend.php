<?php

namespace BetterFlarum\NextAdminUI;

use Flarum\Extend;

return [
        (new Extend\Frontend('forum'))
        ->css(__DIR__.'/less/forum.less'),
    (new Extend\Frontend('admin'))
        ->css(__DIR__.'/less/admin.less')
];