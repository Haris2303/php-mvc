<?php

if (isset($_SERVER['PATH_INFO'])) {
    var_dump($_SERVER['PATH_INFO']);
} else {
    echo "Tidak ada path info";
}
