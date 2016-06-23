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


2: Setup mongoDb on heroku to link with server
=====

1. Click Deploy to Heroku on this link: (https://github.com/ParsePlatform/parse-server-example/blob/master/README.md#with-the-heroku-button)
2. Follow the setup on heroku. Make sure to change the mount point to https://YOUR_APP_NAME.herokuapp.com/parse
3. Change the setting so heroku auto deploys from your github


