# enucs.org.uk

This is the code that's behind our website, enucs.org.uk. It's not overly complicated, and lives here so we can pull it onto our server as and when we update it.

## Running your own instance

I don't know why you'd want to run this for yourself, it's just a website, but if you do just stick it on a PHP enabled server, or use the command `php -S localhost:8000` from the project root.

Note that the nav probably won't work with a local instance, as on the server we strip the `.php` extension

Compile sass with `sass --watch sass/main.sass:css/main.css`.

## License

This project is licensed under the WTFPL (Do What the Fuck You Want To Public License). Go nuts.
