<?php

function view($view, $data = []) {
    
    $basePath = __DIR__ . "/resource/view/";
    $template = explode('.',$view);
    return [
        'path' => $basePath. "/" .implode('/',$template). ".php",
        'data' => $data,
    ];
}