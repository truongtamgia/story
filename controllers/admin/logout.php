<?php
    session_destroy();
    header("location:".baseurl."index.php?controller=login&action=login");