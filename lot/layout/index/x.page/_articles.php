<?php

if (Route::is('articles') || Route::is('articles/*')) {
    State::set('x.page.page.chunk', 6);
    State::set('x.page.page.sort', [-1, 'time']);
}
