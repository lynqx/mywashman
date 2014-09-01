<?php

function prompter($status){
    switch($status){
        case "success":
            header('HTTP/1.1 200 Ok');
        break;

        
        case "failed":
            header('HTTP/1.1 401 Unauthorized');
            header('X-error: Access Denied');
            exit;
        break;

        
        case "badquery":
            header('HTTP/1.1 406 Not Acceptable');
            header('X-error: Database Query failed');
            exit;
        break;
        

        case "badrequest":
            header('HTTP/1.1 400 Bad Request');
            header('X-error: Improper Request');
            exit;
        break;
        

        case "invalid":
            header('HTTP/1.1 405 Method Not Allowed');
            header('X-error: Method is invalid');
            exit;
        break;
        

        case "error":
            header('HTTP/1.1 500 Internal Server Error');
            header('X-error: Server error');
            exit;
        break;
        }
    }
