# Another Angular Starter

This repo is an Angular starter including [unsemantic](http://unsemantic.com/) CSS framework and working with Gulp

### How to install

To install the project, just clone it in a new folder 
```
cd www
git clone https://github.com/TheoKleman/angular-starter.git
```

Run npm install
```
npm install
```

You have to generate the JS and CSS files before starting to work 
```
gulp js_libs
gulp js_app
gulp_sass
```

Then start the gulp default task  
```
gulp
```

### Production

There is another gulp task which is made to create a /prod folder with all the files optimized and ready to be deployed with a FTP client

```
gulp prod
```
