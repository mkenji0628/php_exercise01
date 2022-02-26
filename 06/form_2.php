<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo htmlspecialchars('私の名前は'.$_POST['message'].'です。', ENT_QUOTES, 'UTF-8');
}
