<style>
#quytrinh-container h1 {
    width:580px; 
    font-family:verdana,arial,helvetica,sans-serif;
    font-size:18px;
    text-align:center;
    margin:40px auto;
}
#quytrinh-container {
    width:580px; 
    font-family:verdana,arial,helvetica,sans-serif;
    font-size:11px;
    text-align:center;
    margin:auto;
}  
#quytrinh-container a {
    display:block;
    color:#000;
    text-decoration:none;
    background-color:#f6f6ff;
}
#quytrinh-container a:hover {
    color:#900;
    background-color:#f6f6ff;
}
#quytrinh-container #no1 {
    width:190px;
    line-height:60px;
    border:1px solid #000;
    margin:auto;
}
#quytrinh-container #no1 a {
    height:60px;
}
#quytrinh-container #line1 {
    font-size:0;
    width:1px;
    height:20px;
    color:#fff;
    background-color:#000;
    margin:auto;
} 
#quytrinh-container #line2 {
    font-size:0;
    width:424px;
    height:1px;
    color:#fff;
    background-color:#000;    
    margin:auto;
} 
#quytrinh-container #line3 {
    font-size:0;
    display:inline;
    width:1px;
    height:20px;
    color:#fff;
    background-color:#000;
    margin-left:78px;
    float:left;
}  
#quytrinh-container #line4, #quytrinh-container #line5, #quytrinh-container #line6 {
    font-size:0;
    display:inline;
    width:1px;
    height:20px;
    color:#fff;
    background-color:#000;
    margin-left:140px;
    float:left;
}
#quytrinh-container #no2 {
    display:inline;
    border:1px solid #000;
    clear:both;
    margin-left:35px;
    float:left;
}
#quytrinh-container #no2 a,#quytrinh-container #no4 a,#quytrinh-container #no8 a {
    width:84px; 
    height:50px;
    padding-top:8px; 
}  
#quytrinh-container #no3 {
    display:inline;
    border:1px solid #000;
    margin-left:58px;
    float:left;
}
#quytrinh-container #no3 a, #quytrinh-container #no5 a,#quytrinh-container #no6 a,#quytrinh-container #no7 a, #quytrinh-container #no9 a {
    width:84px; 
    height:42px;
    padding-top:16px;  
} 
#quytrinh-container #no4 {
    display:inline;  
    border:1px solid #000;
    margin-left:53px;
    float:left;
}  
#quytrinh-container #no5 {
    display:inline;   
    border:1px solid #000;
    margin-left:55px;
    float:left;
}  
#quytrinh-container #line7, #quytrinh-container #line13 {
    font-size:0;
    display:inline;
    width:1px;
    height:38px;
    color:#fff;
    background-color:#000;
    margin-left:219px;
    float:left;
} 
#quytrinh-container #line8, #quytrinh-container #line14 {
    font-size:0;
    display:inline;
    width:1px;
    height:38px;
    color:#fff;
    background-color:#000;
    margin-left:281px;
    float:left;
}  
#quytrinh-container #no6, #quytrinh-container #no8 {
    display:inline;  
    border:1px solid #000;
    margin-left:107px;
    float:left;
}
#quytrinh-container #line9, #quytrinh-container #line11, #quytrinh-container #line15, #quytrinh-container #line17 {
    font-size:0;
    display:inline;
    width:26px;
    height:1px;
    color:#fff;
    background-color:#000;    
    margin-top:29px;
    float:left;
}  
#quytrinh-container #line10, #quytrinh-container #line12, #quytrinh-container #line16, #quytrinh-container #line18 {
    font-size:0;
    display:inline;
    width:1px;
    height:60px;
    color:#fff;
    background-color:#000;
    float:left;
} 
#quytrinh-container #line16, #quytrinh-container #line18 {
    height:30px;
}
#quytrinh-container #no7, #quytrinh-container #no9 {
    display:inline; 
    border:1px solid #000;
    margin-left:169px;
    float:left;
} 
.clear {
    clear:both;
}
</style>

<div id="quytrinh-container">
    <h1>A simple family tree using 32 divs</h1>
  <div id="no1"><a href="">Managing Director</a></div>
  <div id="line1"></div>
  <div id="line2"></div>
  <div id="line3"></div>
  <div id="line4"></div>
  <div id="line5"></div>
  <div id="line6"></div>
  <div id="no2"><a href="#">Sales &amp; Marketing Director</a></div>
  <div id="no3"><a href="#">Production Director</a></div>
  <div id="no4"><a href="#">Human Resources Director</a></div>
  <div id="no5"><a href="#">Finance Director</a></div>
  <div id="line7"></div>
  <div id="line8"></div>
  <div class="clear"></div>
  <div id="no6"><a href="#">Factory Manager</a></div>
  <div id="line9"></div>
  <div id="line10"></div>
  <div id="no7"><a href="#">Management Accountant</a></div>
  <div id="line11"></div>
  <div id="line12"></div>
  <div class="clear"></div>
  <div id="line13"></div>
  <div id="line14"></div>
  <div class="clear"></div>
  <div id="no8"><a href="#">Quality Control Manager</a></div>
  <div id="line15"></div>
  <div id="line16"></div>
  <div id="no9"><a href="#">Financial Accountant</a></div>
  <div id="line17"></div>
  <div id="line18"></div>
  <div class="clear"></div>

</div>

<script src="{{ asset('vendor/jsplumb/jsplumb.min.js') }}"></script>
<script>
    jsPlumb.bind("ready", function() {
        
    });
</script>
