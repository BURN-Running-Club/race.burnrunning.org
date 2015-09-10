# burn-racing

## install less compiler

### Please install node, npm if you haven't.

On Mac:
http://coolestguidesontheplanet.com/installing-node-js-on-osx-10-10-yosemite/

On Ubuntu:
https://www.digitalocean.com/community/tutorials/how-to-install-node-js-on-an-ubuntu-14-04-server

### instal less compiler to convert less to css. Less makes the style much cleaner.
gi
``` 
npm install -g less
npm install -g less-plugin-clean-css
```

## compile less file to css file

```
lessc --clean-css css/burn.less css/burn.min.css

```

