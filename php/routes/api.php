<?php

Route::post('/gitlab/pull', function() {
    exec("cd /home4/hassanson/codista.co && git pull");

    return response()->json(['success' => true]);
});
