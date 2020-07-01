<?php

if (Route::is('pages') || Route::is('pages/*')) {
    State::set('x.page.page.chunk', 20);
    State::set('x.page.page.sort', [1, 'title']);
}
