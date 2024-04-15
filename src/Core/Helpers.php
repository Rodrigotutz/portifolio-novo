<?php

function asset($path): string {
    return getenv("APP_URL"). "/public/assets/" . $path;
}