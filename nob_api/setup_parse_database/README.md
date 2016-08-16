## Setup Parse Database

#### Instructions

1: Cloning Parse Server
=====

1. Clone the server using `git clone https://github.com/ParsePlatform/parse-server-example.git folderName`
2. Make a git repo to store this
3. Push it to your own github 
```
cd folderName
git remote remove origin
git remote add origin https://link.to.your.git
git push
```
4. Run `npm update` to download dependencies and such


2: Setup mongoDb on heroku to link with server
=====

1. Click Deploy to Heroku on this link: (https://github.com/ParsePlatform/parse-server-example/blob/master/README.md#with-the-heroku-button)
2. Follow the setup on heroku. Make sure to change the mount point to https://YOUR_APP_NAME.herokuapp.com/parse
3. Change the setting so heroku auto deploys from your github
4. Optional: Setup a papertrail plugin on heroku to see logs for the server


3: Use your database :)
=====

- You can connect to your database via (JS)
```
Parse.initialize("YOUR_APP_ID");
Parse.serverURL = 'http://localhost:1337/parse'
```
or (PHP)
```
ParseClient::initialize('YOUR_APP_ID', 'YOUR_CLIENT_KEY', 'YOUR_MASTER_KEY');
ParseClient::setServerURL('http://localhost:1337/parse');
```
- Jobs are not available yet, so I dont think you can automate server tasks, try: https://github.com/Automattic/kue
- See this page for more info on how to use: https://github.com/ParsePlatform/parse-server/wiki/Parse-Server-Guide
- If you like an admin panel visit: http://adminca.com/
- See the `init.php` provided to see how to use the db