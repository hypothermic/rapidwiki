#!/bin/sh
cd "$(dirname "$0")"

baseUrl=`sh ./util/rel-xmlparser.sh ../../wiki.xml baseUrl`

echo "$baseUrl"

# --- update base url in each link --- #
sed 's@<loc>.*www.\w*\.\w*/@<loc>' "$baseUrl" '/@' ../../webroot/sitemap.xml

# basically, replace the baseUrl in every absolute url in sitemap with the one in wiki.xml
# check first if the <baseUrl> tag is not empty in wiki.xml
