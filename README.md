# Php + Selenium   
- https://github.com/php-webdriver/php-webdriver

##### Dependencies
* php-webdriver/webdriver

## Drivers   
### Chrome driver   
- https://chromedriver.chromium.org/downloads

### Gecko driver   
- https://github.com/mozilla/geckodriver/releases

### Selenium Server
- https://www.selenium.dev/downloads/

## Commands
Run Chrome driver
```bash
drivers/chromedriver --port=4444
```
   
Run gecko driver
```bash
drivers/geckodriver --port=4444
```

Run selenium server   
```bash
 java -jar drivers/selenium-server-4.0.0-alpha-4.jar standalone 
```

Other selenium commands   
````bash
java -jar drivers/selenium-server-4.0.0-alpha-4.jar info
````

````bash
java -jar selenium.jar --ext example.jar:dir standalone --port 1234
java -Dwebdriver.chrome.driver="/..../drivers/chromedriver" -jar drivers/selenium-server-4.0.0-alpha-4.jar
java -Dwebdriver.gecko.driver="/..../drivers/geckodriver" -jar  -jar drivers/selenium-server-4.0.0-alpha-4.jar
````

