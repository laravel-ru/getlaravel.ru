#!/bin/bash

DOCS_VERSIONS=(
  master
  9.x
  8.x
  7.x
  6.x
)

for v in "${DOCS_VERSIONS[@]}"; do
    if [ -d "resources/docs/$v" ]; then
        echo "Pulling latest documentation updates for $v-ru..."
        (cd resources/docs/$v && git pull)
    else
        echo "Cloning $v..."
        git clone --single-branch --branch "$v-ru" git@github.com:laravel-ru/docs.git "resources/docs/$v"
    fi;
done
