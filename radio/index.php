<?php
if (preg_match("/safari/i", $_SERVER['HTTP_USER_AGENT'])) {
include 'fallback.php';
} elseif (preg_match("/\blinux\b/i", $_SERVER['HTTP_USER_AGENT'])) {
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
