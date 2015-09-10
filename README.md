# burn-racing

## install less compiler

### Please install node, npm if you haven't.
http://coolestguidesontheplanet.com/installing-node-js-on-osx-10-10-yosemite/

### instal less compiler to convert less to css. Less makes the style much cleaner.

``` 
npm install -g less
npm install -g less-plugin-clean-css
```

## compile less file to css file

```
lessc --clean-css css/burn.less css/burn.min.css

```

