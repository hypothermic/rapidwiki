#!/bin/sh
#cd "$(dirname "$0")"

# get tag value example: sed -ne '/baseUrl/{s/.*<baseUrl>\(.*\)<\/baseUrl>.*/\1/p;q;}' <<< echo ../../../wiki.xml
#sed -ne '/baseUrl/{s/.*<baseUrl>\(.*\)<\/baseUrl>.*/\1/p;q;}' << echo "$1"
sed -ne '/'"$2"'/{s/.*<'"$2"'>\(.*\)<\/'"$2"'>.*/\1/p;q;}' << echo "$1"