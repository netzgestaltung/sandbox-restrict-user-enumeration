# sandbox-restrict-user-enumeration
Restrict public user enumeration in a WordPress site - multisite compatible

## What happens here
- removes the rest api endpoinis for`wp-json/wp/v2/users(/<n>|<username>)` if not logged in or subscriber in a multisite
- redirects any author archive pages `/?author=<n>` to `/404`

## When to use
Use on Not-Blog pages where you don't want to show author information at all this brings you additional silence in login-form brut-force attacs.
It does however not replace login-form security, so take care of that.

## Different way to approach
On Blog or (Multi-)author pages you should use a capability plugin and disable edit/write posts/pages access for administrators. They will then not be listed anymore (in theory, i still have to test this). If that works, the authors listing will does what it says.

## How to install
In your `/wp-content/` directory create a folder `mu-plugins` if it's not allready there.
Upload the files to this new directory. No further activation neccesarry.

## Updates?
Same as install.
Since every thing here is handwork, you need to upload yourself.

HF & GL.
