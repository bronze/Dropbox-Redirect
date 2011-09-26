#Dropbox Custom Domain

Droping these on a subdomain, you can link to your dropbox public files using your own domain name.
Ex: http://sub.yourdomain.com/file.txt instead of http://dl.dropbox.com/u/USERID/file.txt

##Original
The [original code][gist] was made by Lee Byron.
Read more about it on his [blog post][blog].

##Changes
Since chaging servers, the code stoped working for me.
After researching about it, i found out i couldnt mirror the files anymore, since mod_proxy was disabled for me.
Removing the proxy flag and effectively redirecting the user to the file on Dropbox's servers works fine though.

[blog]: http://leebyron.com/how/2010/03/09/dropbox-custom-domain/
[gist]: https://gist.github.com/326328