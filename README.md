# burn-racing

## Tools used

* twitter bootstrap and lesscss for responsive design. 
* load js and css from cdnjs. 
* font awesome icons.
* php (to be replaced by a pure frontend framework, maybe angularjs)
* google analytics

## compile css 
We use lesscss to simplify the css codes. Before we move to a full frontend framework, we use 'lessc' to compile css. Please edit only the less files, ex. css/burn.less, and use lessc to generate corresponding min.css files. 

If you want to run it in your local to help with development, you can install it following these steps:

### Install node, npm if you haven't.

* On Mac:

http://coolestguidesontheplanet.com/installing-node-js-on-osx-10-10-yosemite/

* On Ubuntu:

https://www.digitalocean.com/community/tutorials/how-to-install-node-js-on-an-ubuntu-14-04-server

* Windows

Never tried but looks this might help:

http://dreamerslab.com/blog/en/how-to-setup-a-node-js-development-environment-on-windows/


### Install less compiler to convert less to css. 

``` 
npm install -g less
npm install -g less-plugin-clean-css
```

### Compile less file to css file

```
lessc --clean-css css/burn.less css/burn.min.css

```

