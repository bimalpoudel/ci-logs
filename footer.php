<?php
# Include this file in bottom of CI/index.php

/**
 * Echo the output as regular.
 * Log what output has been produced.
 */
$contents = ob_get_flush();
file_put_contents(sprintf('%s/logs/urls-%s.log', dirname(__FILE__), $timestamp), $contents, FILE_APPEND);
