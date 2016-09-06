mac 環境安裝參考：
https://segmentfault.com/a/1190000002556269

上面網站沒提到的部份，記得在 /usr/local/etc/nginx/conf.d/default.conf 加上：

    location /phpmyadmin {
        index index.php;
    }

    location /wordpress {
        index index.php;
    }

本機測試環境：
1. 直接拉下來後，因本機和server上的DB設定不同(如db的帳密)，需重新設定一次database。
請登入phpmyadmin後台，創建一個新的db(名字可以自取)。
2. 目前已將wp-config.php移出git的追蹤，因此第一次拉到本機應該會重新引導你安裝wordpress。
中間會有一步是請你設定db相關資料，請在db名稱那打入你剛剛新創的db名稱。
3. 因為DB重新設定，本來設定過的一些頁面資訊(排版、外掛設定、商品資料等等)都會不見。
請根據自己本機的測試需求去重新開啟並設定排版、外掛等部份。