#!/bin/bash

# Cleanup dirs
rm -rf tmp/public.building tmp/public.old
mkdir -p tmp/public.building

# Recursively copy files build final web dir
cp -R vendor/wordpress/wordpress/* tmp/public.building
cp -R vendor/wordpress/wordpress-ext/* tmp/public.building
cp -R public/* tmp/public.building

# Move built web dir into place
mkdir -p public.built
mv public.built tmp/public.old && mv tmp/public.building public.built
rm -rf tmp/public.old

rm -rf public.built/wp-content/plugins/akismet
rm -rf public.built/wp-content/plugins/hello-dol*

rm -rf public.built/wp-content/themes/twentyseventeen
rm -rf public.built/wp-content/themes/twentynineteen
rm -rf public.built/wp-content/themes/twentytwentyone
rm -rf public.built/wp-content/themes/twentytwenty

# Remove files to slim down slug if we're on Heroku
#if [ ! -e .sluglocal ]
#then
#	rm -rf vendor/wordpress
#	rm -rf public
#fi

# Write some info about our slug
NOW=$( date )
cat <<EOT > public.built/.wp-heroku
Powered by WPHeroku
https://github.com/itq5/wp-heroku
=============================================

Slug Compiled : $NOW
EOT
