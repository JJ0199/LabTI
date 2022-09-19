<?php
session_start();
if ($_SESSION['nombre']) {
    session_destroy();
    header('Location: http://localhost/mat/');
} else {
    header('Location: http://localhost/mat/');
}
