const express = require("express");
const router = express.Router();

router.post("/getInfo",(req,res)=>{
    return res.json({"status":0,"msg":"post success!"});
});

router.get("/getInfo",(req,res)=>{
    return res.json({"status":0,"msg":"get success!"});
});
    
module.exports = router;