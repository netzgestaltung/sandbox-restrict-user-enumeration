# sandbox-restrict-user-enumeration
Restrict public user enumeration in a WordPress site - multisite compatible

## what happens here
- removes the rest api endpoinis for`wp-json/wp/v2/users` if not logged in
- redirects any author archive pages to `/404`

## How to install
In your `/wp-content/` directory create a folder `mu-plugins` if it's not allready there.
Upload the files to this folder. No further activation neccesarry.

## Updates?
Same as install.
Since every thing here is handwork, you need to upload yourself.

HF & GL.
