#!/bin/sh
cd "$(dirname "$0")"

# Hardcoded paths, please adjust if you need to move the script.
baseUrl=`sh ./util/rel-xmlparser.sh ../../wiki.xml baseUrl`

# Check if the URL in wiki.xml already contains a seperator at the end. If yes, remove it.
if [ `echo -n "$baseUrl" | tail -c -1` = "/" ]; then
    baseUrl="${baseUrl%?}"
fi

# --- update base url in each link --- #
sed -i `echo 's@<loc>.*www.\w*\.\w*/@<loc>'"$baseUrl"'/@'` ../../webroot/sitemap.xml

# basically, replace the baseUrl in every absolute url in sitemap with the one in wiki.xml
# check first if the <baseUrl> tag is not empty in wiki.xml
