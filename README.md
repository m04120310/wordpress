環境安裝參考：
https://segmentfault.com/a/1190000002556269

上面網站沒提到的部份，記得在 /usr/local/etc/nginx/conf.d/default.conf 加上：

    location /phpmyadmin {
        index index.php;
    }

    location /wordpress {
        index index.php;
    }