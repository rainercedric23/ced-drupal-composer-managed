<?php
echo "Rebuilding cache.\n";
passthru('drush cr');
echo "Rebuilding cache complete.\n";