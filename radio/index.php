<?php
if (preg_match("/\blinux x86_64\b/i", $_SERVER['HTTP_USER_AGENT'])) {
include 'xspf.php';
} elseif (preg_match("/firefox/i", $_SERVER['HTTP_USER_AGENT'])) {
include 'm3u.php';
} elseif (preg_match("/\bandroid\b/i", $_SERVER['HTTP_USER_AGENT'])) {
include 'fallback.php';
} elseif (preg_match("/chrome/i", $_SERVER['HTTP_USER_AGENT'])) {
include 'm3u.php';
} else {
include 'fallback.php';
}
?>
