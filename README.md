# read.md介紹
一些注意事項(這些東西都是從承延那邊幹過來的，遇到什麼會持續補充~)

# 網頁server

還沒有這種東西(承延解決一下好咪?XD)


# 注意事項

### 1.要用連結的時候(外部引入圖片、js、css) 請用

` {{asset('連結')}} `

### 不然放在系統上會故障

### 2.有用到資料庫的 在Model跟Controller中的Table名稱記得大小寫要相同

#### 因為在Windows中不分大小寫 但是Linux會區分 所以到時候放上去會出事

#### (相關經驗請洽:楊雅雯)



# 如何開始

`git clone git@gitlab.com:Firestar/micro-academic-credit-website.git`

`cd micro-academic-credit-website.git`

`composer install`

'npm install`

`cp .env.example .env`

`php artisan key:generate`

開編輯器 更改.env 建資料庫

`php artisan migrate`    

`php artisan db:seed`  

`php artisan serve`   

`git checkout "YourBranch"`

開始寫程式吧~~~


# 正確的git流程

### 1.對程式進行修改
### 2.完成了某項功能，提交（commit，提交到本地程式庫），1-2可以反覆進行，直到覺得可以推送到服务器上时，执行3
### 3.拉取（pull，或者用获取 fetch 然后再手动合并 merge）
### 4.如果存在冲突，解决冲突
### 5.推送（push），将数据提交到服务器上的代码库


# loader懶人包(這邊還沒弄 先留著)

- 在content裡面加入

`<?php
    include("loader/loader.php");
 ?>`
 
 - 在css裡面加入
 
 `<link rel="stylesheet" href="{{ asset('loader/loader.css') }}" media="screen">`
 
 - 在js裡面加入
 
 `setTimeout(function(){
    $('body').addClass('loaded');
  }, 1500);`


# slide in 懶人包(這邊還沒弄 先留著)

### css 跟 js 我已經import在layout裡了 所以只要在你想要的element中加入

`class = 'slideanim' `


# 程式碼準則
HTML:  
屬性永遠使用雙引號，永遠別用單引號。  
屬性應按照特定順序撰寫，確保程式碼的易讀性。
- class
- id, name
- data-*
- src, for, type, href
- title, alt
- aria-其他, role
- Class 是為了重用的元素而生，應該排第一位。ID 具體得多，應盡量少用（可用場景像是頁內書籤），所以排第二位。  

PHP:  
程式碼縮排是四個空格長  
Modal字首大寫、單數  
資料表字首小寫、複數  
Controller字首大寫  
View的檔案名稱及資料夾名稱應全小寫  
