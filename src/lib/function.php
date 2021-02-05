<?php

function alert($text) {
    echo "<script>alert('{$text}');</script>";
};

function move(string $path) {
    echo "<script>location.href = '{$path}'</script>";
};