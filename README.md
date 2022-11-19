# sandbox-restrict-user-enumeration
Restrict public user enumeration in a WordPress site - multisite compatible

## what happens here
- removes the rest api endpoinis for`wp-json/wp/v2/users(/<n>|<username>)` if not logged in or subscriber in a multisite
- redirects any author archive pages `/?author=<n>` to `/404`

## How to install
In your `/wp-content/` directory create a folder `mu-plugins` if it's not allready there.
Upload the files to this new directory. No further activation neccesarry.

## Updates?
Same as install.
Since every thing here is handwork, you need to upload yourself.

HF & GL.
