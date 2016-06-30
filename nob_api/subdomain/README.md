## Subdomain

This file allows you to have a subdomain on your website.

#### Instructions

Change this line (`RewriteRule ^(.*)$ http://developersfoundation.ca/microsoft.php [L,NC,QSA]`) to the part you want to point the subdomain to. 

For example:

Right now what it does is redirect microsoft.develoeprsfoundation.ca (A subdomain pointed by a *CNAME*) to portal.microsoft.com.