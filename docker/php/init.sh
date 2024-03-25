#!/bin/bash

set -e
set -x

PROJECT_ROOT="/var/www"

echo "PROJECT ROOT: ${PROJECT_ROOT}"
cd "${PROJECT_ROOT}"

composer --no-interaction config -g optimize-autoloader true

time composer --no-interaction install