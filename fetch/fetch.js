const express = require("express");
const http = require('http');
const port = 8011;
const app = express();
const bodyParser = require("body-parser");

//路由
const info = require("./routes/api/info");

//CORS设置
app.all('*', function(req, res, next) {
    if(req.headers.origin === "http://127.0.0.1:8011" || req.headers.origin === "http://lapblogs.connectyoume.top" || req.headers.origin === 'null'){  
        res.header("Access-Control-Allow-Origin", req.headers.origin);
    }//作用于简单跨域请求和非简单跨域请求
    res.header("Access-Control-Allow-Headers", "*");  //作用于非简单跨域请求,服务器允许请求中携带任意字段
    res.header("Access-Control-Allow-Methods","POST,GET,OPTIONS");  //作用于非简单跨域请求,服务器允许客户端使用 POST,GET 和 OPTIONS 方法发起请求。
    // res.header("Access-Control-Max-Age",600)//允许浏览器在指定时间内，无需再发送预检请求进行协商
    res.header("Content-Type", "application/json;charset=utf-8");
    next();  
});


//使用body-parser中间件
app.use(bodyParser.urlencoded({extended:false}));
app.use(bodyParser.json());

//使用路由中间件
app.use("/api/info",info);

app.listen(port,()=>{
    console.log(`Server is running in ${port}`);
})