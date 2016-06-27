<?php
# Include this file in head of CI/index.php

$contents = ob_get_flush();
file_put_contents(sprintf('%s/logs/urls-%s.log', dirname(__FILE__), $timestamp), $contents, FILE_APPEND);
