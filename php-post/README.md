# PHP POST 

## Overview

This is simple PHP Code which will print all your post request coming to this page into specified file as output. Normally we want to know how I can start with API which can take the request and then parse it and do further processing. So with this code it simply get everything coming under POST parameter and print that into file which we can use for further processing. 

## POST Example

We will be hitting the post.php with curl and following the example. Make sure that post.php is hosted in your webserver which support php.

<pre><code>
curl --location --request POST 'http://localhost/post.php' \
--header 'Content-Type: application/json' \
--data-raw '{
   "phone": 9876543210,
   "username": "Jane Doe",
   "password": "AbCdEfgH",
   "deviceInfo": {
       "deviceName": "MyDevice",
       "platform": "iOS",
       "imei": "imeri",
       "deviceToken": "123saca"
   },
   "userAddress": {
       "address": "Planet Earth",
       "city": "Mumbai",
       "state": "MH",
       "country": "INDIA"
   }
}'
</code></pre> 

## OUTPUT

post.txt file will have the following content when you hit the URL with above POST parameters. 

<pre><code>
{
   "phone": 9876543210,
   "username": "Jane Doe",
   "password": "AbCdEfgH",
   "deviceInfo": {
       "deviceName": "MyDevice",
       "platform": "iOS",
       "imei": "imeri",
       "deviceToken": "123saca"
   },
   "userAddress": {
       "address": "Planet Earth",
       "city": "Mumbai",
       "state": "MH",
       "country": "INDIA"
   }
}
</code></pre>
