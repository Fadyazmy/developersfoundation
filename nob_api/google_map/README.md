## Google Map 

An Interactive Google Map with customizable features.
 

#### Instructions

Very simple usage.  Firstly, Place the provided code snippets in their respective files.

Get an API key for Google Maps from [here](https://developers.google.com/maps/documentation/javascript/)

Insert your API key below and place the following script in your footer.

`<script src="//maps.google.com/maps/api/js?key=PUT_YOUR_API_KEY_HERE&callback=loadedGmap" async defer></script>`

In the js file, specify the coordinates of the location you wish the map to be centered on.

   `var latlng = new google.maps.LatLng(-33.86455, 151.209);`

In the bottom of the js, change the $infowindow to display your location. 

#### Customization

In the js file, there are many ways for you to customize the map. 

There are many map styles to pick from. To change the map style, pick a style from https://snazzymaps.com/explore.
Copy the code of your desired map style and paste it to $styleArr.

In the options, there are options to change how much you can control the map. $scrollwheel is set to false by default, meaning the scroll wheel will not zoom in or out the map, but you can activiate it if you desire.
```
 var options = {
            zoom: 15,
            center: latlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            navigationControl: true,
            mapTypeControl: false,
            scrollwheel: false,
            styles: styleArr,
            disableDoubleClickZoom: true
        };
        
```

![](map.JPG)
