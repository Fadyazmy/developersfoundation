So... Since you are in this section. I hope you have finished most of your site by now, else Good luck in clearing cache :P

But back to the point, there is many levels of cache you can implement to speed up a website.

Starting from the top: Network Level Caching

- I would suggest just using CloudFlare (cloudflare.com) for this, but will require you to have your own domain.

Next level: Client side caching (via htaccess and gzipping)

- This is pretty simple infact, just copy in my .htaccess file and it should be all setup
- Give it a read before you deploy to make sure you know whats going on

Lowest level and probably most effective level: Web workers

- Give it a read here (https://developer.mozilla.org/en-US/docs/Web/API/Cache), but I have yet to implement a successful one, so no code for now :(