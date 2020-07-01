<?php

if (Route::is('projects') || Route::is('projects/*')) {
    State::set('x.page.page.chunk', 8);
    State::set('x.page.page.sort', [-1, 'time']);
}
