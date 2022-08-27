# youtube-mirror

## Install requirements
### #1 install php 5.6 7.0+ 8.0+
How to install php in Winows, Linux, Mac [how to install php](https://yourblogcoach.com/how-to-install-php-on-windows-macos-linux/)

do not forget to install **lib curl and json** for php

for ubuntu php7.4 you can use these commands
```
sudo apt install php7.4-curl php7.4-json
```



### #2 install composer
first install composer [Download Composer](https://getcomposer.org/download/)

### #3 install requirements
``` 
composer require athlon1600/php-proxy 
composer require athlon1600/youtube-downloader

```


## How to use
### to get json data of video
```
v= short key of video
json=true returns the json list of all qualities
https://YOURSERVER/?v=rv4LlmLmVWk&json=true
```

## to stream video directly
```
q= array index of quality 
https://YOURSERVER/?v=rv4LlmLmVWk&q=2
```
