# <center>Developer's Foundation</center>
#### <center>HQ Developer Manual</center>
###### _<div style="text-align: right"> Author: Jashan Shewakramani</div>_

I would like to officially welcome you to your journey as an HQ Software Engineer
at Developer's Foundation. We're a group of passionate university students, spread
all around the world, hoping to empower both students and non-profits across borders.
We're ambitious, with a long road of growth ahead of us -- and I can't wait to see
the amazing work we'll soon accomplish, taking our services to the next level.   
<br/>
This guide aims to provide a brief overview of our Content Management System, and your
responsibilities and roles working as a developer with us. I hope that you find it helpful
in understanding what the product is, how it works, and why it is necessary. The backend
can get quite complicated, and I wouldn't expect you to understand how everything works
immediately. Please do feel free to reach out to me if you have any questions at all.    


#### The Content Management System (CMS)

We build websites for clients -- and websites often need updating, with new mission
statements, goals, achievements, contact information, photographs, and much more. In the
past, clients have had their website's content updated by simply calling us, sending us
their assets, and waiting for us to make the changes in static html. As we seek to expand
with an increasing number of clients, this approach is not scaleable -- and as students,
we often simply don't have the time to always be 100% responsive.   

This motivates the development of a rich CMS, which allows clients to efficiently make changes,
with solid, immediate, real-time feedback. Our CMS is still far from complete, both in terms of the
features it offers, and its stability and security, but we're hoping to deliver a Minimum Viable
Product as soon as possible.   

##### The Core Technologies: PHP and ParseDB

Fundamentally, our application servers are powered by PHP 7.0 and our databases by ParseDB.
Do not worry if you haven't worked with these technologies before -- I certainly hadn't when
I started working here. I would first recommend exploring the code on our git repository, and then
spending some time reading about the technologies you need through W3C or any other online resource
to attain a better understanding of what's really going on under the hood.   

But before any of that, you'll need to get your system set up. If you use macOS or Linux, the
easiest way to get PHP set up is via Homebrew or your local package manager. ParseDB additionally
requires Node.js and NPM, both of which are easily available. With NPM ready, setting up Parse is
incredibly straightforward. Simply execute the following command in your terminal:   

`npm install -g parse-dashboard`   

This globally installs the core node modules you will need to see and manipulate the database.
During development, you will need to connect to our production database server in order to understand
the schema, and see how everything works together. We currently have our database deplopyed on Heroku,
and you can connect to it via the following command and authentication credentials:   

`parse-dashboard --appId developers-foundation-db --masterKey Abcd1234 --serverURL "https://developers-foundation-db.herokuapp.com/parse"`

We'll be turning up the security here. *Abcd1234* isn't exactly the safest of passwords,
but it does the job for the moment. Assuming you have everything set up correctly, this
command should set up a local server on your machine. Opening this in your browser will give
you complete access to the database. Be careful with it.  

<img src="parse-dashboard-ex.png" width=600/>

*<center>The Parse Dashboard, in all its glory</center>*
<br/>

As a side note, I personally like to save this long command as a shell script, simply
so that I don't have to keep re-entering the credentials over and over again. Before continuing,
I'd also recommend checking out Parse's documentation for the dashboard and PHP API [here](https://www.parse.com/docs).   

Moving on to the PHP and actual application, the entire CMS is stored in its entirety in the
`/public_html/backend` directory of the git repository. Fundamentally, what's happening here
is quite simple. We have the PHP talking to our database, dynamically retrieving data,
populating HTML templates with it, and sending it to the client. All user interactivity,
and requests to update the database are made entirely through HTML forms and JavaScript
(that also talks directly to our Parse server).  

I won't be discussing the code here in too much depth, mostly because it is subject to a lot of change,
and questions here are more efficiently addressed if you contact me directly. I encourage you to
play around with the code, and inspect it. Try and match the collections and fields in
the database to the points in code where resources are being accessed and updated. And of course,
feel free to contact me if you're looking for answers, explanations, or even pointers to good resources
where you could pick a skill or two.  
