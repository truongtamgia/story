<?php
    session_destroy();
    redirect(baseurl."index.php?controller=login&action=login");