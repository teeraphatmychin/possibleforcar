<!DOCTYPE html>
<!-- saved from url=(0049)https://www.krungsriauto.com/auto/Calculator.html -->
<html><head id="head"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>
	คำนวณสินเชื่อรถยนต์ | กรุงศรี ออโต้ | สินเชื่อรถยนต์ กรุงศรี นิวคาร์  - กรุงศรี คาร์ ฟอร์ แคช  โปะ  - กรุงศรี ยูสด์ คาร์ - กรุงศรี แคช ทู คาร์ ต้องการเงินสด รถคุณช่วยได้ - กรุงศรี ออโต้
</title> 
<link href="{{asset('test/KA-CSS.css')}}" type="text/css" rel="stylesheet"> 
<link href="{{asset('test/FontKrungsri.css')}}" type="text/css" rel="stylesheet">
<link href="{{asset('test/GlyphIcon.css')}}" type="text/css" rel="stylesheet">
<link href="{{asset('test/Extend.css')}}" type="text/css" rel="stylesheet">
<link href="{{asset('test/OwlCarousel.css')}}" type="text/css" rel="stylesheet">
<link href="{{asset('test/FancyBoxCSS.css')}}" type="text/css" rel="stylesheet">
<link href="{{asset('test/Bootstrap-select.min.css')}}" type="text/css" rel="stylesheet">
<link href="{{asset('test/Search.css')}}" type="text/css" rel="stylesheet">


 
<script async="" type="text/javascript" src="{{asset('test/prod')}}"></script><script async="" src="{{asset('test/1375-v1.js')}}"></script><script async="" type="text/javascript" src="{{asset('test/prod(1)')}}'"></script><script async="" src="{{asset('test/1375-v1.js')}}"></script><script type="text/javascript" async="" src="{{asset('test/ga.js')}}"></script><script async="" type="text/javascript" src="{{asset('test/prod(2)')}}"></script><script async="" src="{{asset('test/1375-v1.js')}}"></script><script type="text/javascript" src="{{asset('test/jquery-2.1.4.min.js')}}"></script>
<script type="text/javascript" src="{{asset('test/jquery-ui.js')}}"></script>
<script type="text/javascript" src="{{asset('test/bootstrap.min.js')}}"></script>

<script type="text/javascript">
  var $cms = jQuery.noConflict();
  $cms(document).ready(function(){
    function mobileMenu(){
      $cms('header').toggleClass('menu-on');
      $cms('nav').toggleClass('active');
    }
    $cms('#navmobile').on('click', mobileMenu);
    
    $cms(".qlink").on('focusout', function(e){
        e.preventDefault();
        $cms("#tabQl").slideUp("slow");
    })
    $cms(".qlink").on('click', function(e){
        e.preventDefault();
        $cms("#tabQl").slideToggle("slow");
    })
    $cms(".addline").on("click", function(){
      // Add additional settings here (optional)
     //_st('addTagProperty','addLine', 'true');
      hash_data('addTagProperty','addLine', 'true');
      _st("loadTags");
    })
});
  
   


<link href="{{asset('test/components.css')}}" type="text/css" rel="stylesheet"> 
<link href="{{asset('test/KA-Masterpage')}}" type="text/css" rel="stylesheet"> 
<link href="{{asset('test/CMS.Article.KA-Footer-II.css')}}" type="text/css" rel="stylesheet"> 
<script type="text/javascript" charset="utf-8" async="" data-cmsrequirecontext="_" data-cmsrequiremodule="CMS/EventHub" src="{{asset('test/EventHub.js')}}"></script><script type="text/javascript" charset="utf-8" async="" data-cmsrequirecontext="_" data-cmsrequiremodule="CMS/Application" src="{{asset('test/Application.js')}}"></script><script type="text/javascript" charset="utf-8" async="" data-cmsrequirecontext="_" data-cmsrequiremodule="Underscore" src="{{asset('test/underscore.min.js')}}"></script></head>


<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['form'];
if (!theForm) {
    theForm = document.form;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script>


<script src="{{asset('test/WebResource.axd')}}" type="text/javascript"></script>

<input type="hidden" name="lng" id="lng" value="th-TH">
<script type="text/javascript">
	//<![CDATA[

function PM_Postback(param) { if (window.top.HideScreenLockWarningAndSync) { window.top.HideScreenLockWarningAndSync(1080); } if(window.CMSContentManager) { CMSContentManager.allowSubmit = true; }; __doPostBack('m$am',param); }
function PM_Callback(param, callback, ctx) { if (window.top.HideScreenLockWarningAndSync) { window.top.HideScreenLockWarningAndSync(1080); }if (window.CMSContentManager) { CMSContentManager.storeContentChangedStatus(); };WebForm_DoCallback('m$am',param,callback,ctx,null,true); }
//]]>
</script>
<script type="text/javascript">
	//<![CDATA[
function modalDialog(url, name, width, height, otherParams, noWopener, forceModal, forceNewWindow, setTitle) {
    
    // Header and footer is greater than before, increase window size accordingly
    if (typeof(height) === "number") {
        height += 66;
    }

    // Set default parameter values
    if (setTitle == undefined) {
        setTitle = true;
    }
    if (forceModal == undefined) {
        forceModal = true;
    }
    if (otherParams == undefined) {
        otherParams = 'toolbar=no,directories=no,menubar=no,modal=yes,dependent=yes,resizable=yes';
    }

    var advanced = false;
    try {
        advanced = window.top.AdvancedModalDialogs;
    } catch (err) {
    }

    if (advanced && !forceNewWindow) {
        window.top.advancedModal(url, name, width, height, otherParams, noWopener, forceModal, setTitle, this);
    }
    else {
        var dHeight = height;
        var dWidth = width;
        if (width.toString().indexOf('%') != -1) {
            dWidth = Math.round(screen.width * parseInt(width, 10) / 100);
        }
        if (height.toString().indexOf('%') != -1) {
            dHeight = Math.round(screen.height * parseInt(height, 10) / 100);
        }

        var oWindow = window.open(url, name, 'width=' + dWidth + ',height=' + dHeight + ',' + otherParams);
        if (oWindow) {
            oWindow.opener = this;
            oWindow.focus();
        }
    }
}
//]]>
</script>
<script src="{{asset('test/require.js')}}" type="text/javascript"></script>
<script src="{{asset('test/config.js')}}" type="text/javascript"></script>
<script src="{{asset('test/cms.js')}}" type="text/javascript"></script>
<script type="text/javascript">
	//<![CDATA[
if ((window.originalPostback == null) && (window.__doPostBack != null)) { window.originalPostback = __doPostBack; __doPostBack = __doPostBackWithCheck; } 

//]]>
</script>
<script src="{{asset('test/ScriptResource.axd')}}" type="text/javascript"></script>
<script src="{{asset('test/ScriptResource(1).axd')}}" type="text/javascript"></script>
<script type="text/javascript">
	//<![CDATA[

var CMS = CMS || {};
CMS.Application = {
  "isRTL": "false",
  "isDebuggingEnabled": false,
  "applicationUrl": "/auto/",
  "imagesUrl": "/auto/CMSPages/GetResource.ashx?image=%5bImages.zip%5d%2f",
  "isDialog": false
};

//]]>
</script>

    <script type="text/javascript">
//<![CDATA[
Sys.WebForms.PageRequestManager._initialize('manScript', 'form', ['tctxM','','tdm$pM$pMP',''], [], [], 90, '');
//]]>
</script>
<div id="dm_pM_pMP">

</div><input type="hidden" name="dm$hdnArgs" id="dm_hdnArgs"><input type="hidden" name="dm$hdnAnother" id="dm_hdnAnother"><input type="hidden" name="dm$hdnClose" id="dm_hdnClose"><input type="hidden" name="dm$hdnComment" id="dm_hdnComment"><input type="hidden" name="dm$hdnCurrStep" id="dm_hdnCurrStep" value="0">
    <div id="ctxM">

</div>

<section class="KA-Content">
  



  <section class="calculator-section">
    <div class="container-padding">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="btn-group bootstrap-select" style="width: 100%;">
                          <button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" role="button" data-id="product_type" title="กรุงศรี นิวคาร์" aria-expanded="false">
                            {{-- <span class="filter-option pull-left">กรุงศรี นิวคาร์</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span> --}}
                          </button>

                            <select class="selectpicker" data-width="100%" name="product_type" id="product_type" tabindex="-98">
                                <option value="new">คำนวณเงินดาว</option>
                                
                            </select></div>
                    </div>
                </div>
              
                <hr>
                <div id="accordion" class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <section class="form-horizontal calculator" role="form" id="form-one">
                                <div class="accordion-wrapper">
                                    <div class="panel-collapse collapse in" id="form-collapse1" aria-expanded="true">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label required" for="car_price1" id="car_price_label1"><span class="text">ราคารถ (รวม VAT)</span><span class="star"> *</span></label>
                                            <div class="col-sm-4">
                                                <div class="input-group">
                                                    <input type="text" id="car_price1" name="car_price1" value="{{ $post->price }}" class="form-control numeral price payment car_price" maxlength="14" style="text-align: right;  ">
                                                    <div class="input-group-addon">บาท</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label required new" for="down_payment1" id="down_payment_label1"><span class="text">เงินดาวน์</span><span class="star"> *</span></label>
                                            <div class="col-sm-4">
                                                <div class="input-group">
                                                    <input type="text" id="down_payment1" name="down_payment1" class="form-control numeral price down_payment" maxlength="14" style="text-align: right;">
                                                    <div class="input-group-addon">บาท</div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="input-group">
                                                    <label class="input-group-addon title" id="down_payment_percent_label1">หรือ ดาวน์</label>
                                                    <input type="text" id="down_payment_percent1" name="down_payment_percent1" class="form-control numeral percent down_payment_percent" maxlength="5" style="text-align: right;">
                                                    <div class="input-group-addon">%</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 control-label required" for="installments_period1" id="installments_period_label1">
                                                <span class="text">ระยะเวลาผ่อนชำระ</span><span class="star"> *</span></label>
                                            <div class="col-sm-4">
                                                <div class="input-group">
                                                    <div class="btn-group bootstrap-select input-group-btn installments_period" style="width: 100%;">
                                                       
                                                    <select class="selectpicker installments_period" data-width="100%" name="installments_period1" id="installments_period1" tabindex="-98">
                                                        <option value="12">12</option>
                                                        <option value="24">24</option>
                                                        <option value="36">36</option>
                                                        <option value="48">48</option>
                                                        <option value="60">60</option>
                                                        <option value="72">72</option>
                                                        <option value="84">84</option>
                                                    </select>
                                                </div>
                                                    <div class="input-group-addon">เดือน</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label required" for="interest_rate_percent1" id="interest_rate_percent_label1"><span class="text">อัตราดอกเบี้ยต่อปี</span><span class="star"> *</span></label>
                                            <div class="col-sm-4">
                                                <div class="input-group">
                                                    <input type="text" id="interest_rate_percent1" name="interest_rate_percent1" class="form-control numeral percent interest_rate_percent" maxlength="4" style="text-align: right;">
                                                    <div class="input-group-addon">%</div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 control-label" id="interest_rate_percent_label_subtitle1" style="text-align: left"></div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-7 col-sm-offset-3">
                                                <button type="button" class="calculator btn" id="calculateButton1" disabled="disabled">คำนวณ</button>
                                                <button type="button" class="reset btn" id="resetButton1">เริ่มต้นใหม่</button>
                                            </div>
                                        </div>
                                        <h4>ผลการคำนวณ</h4>
                                        <div class="wrapper">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" id="buy_loan_label1">ยอดจัดเช่าซื้อ</label>
                                                <div class="col-sm-4">
                                                    <div class="input-group">
                                                        <input type="text" id="buy_loan1" name="buy_loan1" class="form-control numeral price buy_loan" maxlength="14" readonly="" style="text-align: right;">
                                                        <div class="input-group-addon">บาท</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" id="loan_per_month_label1">ค่างวดต่อเดือน (รวม VAT)</label>
                                                <div class="col-sm-4">
                                                    <div class="input-group">
                                                        <input type="text" id="loan_per_month1" name="loan_per_month1" class="form-control numeral price loan_per_month" maxlength="14" readonly="" style="text-align: right;">
                                                        <div class="input-group-addon">บาท</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    
                   
                </div>
            </div>
        </div>
    </div>
</section>




  
</section>
 

<script type="text/javascript">
//<![CDATA[
(function() {var fn = function() {$get("manScript_HiddenField").value = '';Sys.Application.remove_init(fn);};Sys.Application.add_init(fn);})();//]]>
</script>

<script type="text/javascript">
	//<![CDATA[
if (typeof(Sys.Browser.WebKit) == 'undefined') {
    Sys.Browser.WebKit = {};
}
if (navigator.userAgent.indexOf('WebKit/') > -1) {
    Sys.Browser.agent = Sys.Browser.WebKit;
    Sys.Browser.version = parseFloat(navigator.userAgent.match(/WebKit\/(\d+(\.\d+)?)/)[1]);
    Sys.Browser.name = 'WebKit';
}
//]]>
</script>
<script type="text/javascript">
//<![CDATA[

var callBackFrameUrl='/auto/WebResource.axd?d=beToSAE3vdsL1QUQUxjWddsjLGk7HETVi_BCXaCwHIPgZ269d8KVl3E9ZaMsahz3IFO9Lo1scPciNgrs0_xT8w2&t=636576778480000000';
WebForm_InitCallback();//]]>
</script>

<script type="text/javascript">
	//<![CDATA[
document.pageLoaded = true;
//]]>
</script>
<script type="text/javascript">
	//<![CDATA[

cmsrequire(['CMS/EventHub', 'CMS/Application'], function (hub, app) {
    hub.publish('PageLoaded', app.getData(null, window));
});

//]]>
</script>
<script src="{{asset('test/bootstrap-select.min.js')}}"></script>
<script src="{{asset('test/inputmask.js')}}"></script>
<script src="{{asset('test/inputmask.numeric.extensions.js')}}"></script>
<script src="{{asset('test//jquery.inputmask.js')}}"></script>
<script src="{{asset('test/calculator.js')}}"></script>
<script defer="">
  (function ($) {
    var acc = $(".accordion");
    acc.on('click', function(){
      $(this).toggleClass("active");
    });

    function generate_dropdown_ui(products) {

      var car = ["12","24","36","48","60","72","84"];
      var mc = ["18","24","30","36","42","48"];

      $("#installments_period1, #installments_period2").empty();

      if (products === "mc") {

        $.map(mc, function(v){
          $("#installments_period1, #installments_period2").append('<option value="'+v+'">'+v+'</option>');
        });
        $('#installments_period1, #installments_period2').selectpicker('val', '48');

      } else {
        
        $.map(car, function(v){
          $("#installments_period1, #installments_period2").append('<option value="'+v+'">'+v+'</option>');
        });
        $('#installments_period1, #installments_period2').selectpicker('val', '84');
        
      }

      $('#installments_period1, #installments_period2').selectpicker('refresh');

    }
    
    $("#product_type").on("loaded.bs.select", function(){
      generate_dropdown_ui("new")
    })
      
    $("#product_type").on("changed.bs.select", function(){
      generate_dropdown_ui($(this).val())
    })
     $("#calculateButton1").on("click", function(){
       (function(a,d,e,b,f,c,s){a[b]=a[b]||function(){a[b].q.push(arguments);};
        a[b].q=[];c=d.createElement(e);c.async=1;c.src="//tdn.r42tag.com/lib/"+f
        +".js";
        s=d.getElementsByTagName(e)[0];s.parentNode.insertBefore(c,s);})
        (window,document,"script","_st", "1375-v1");
       // Add additional settings here (optional)

       var product_type = $( "#product_type" ).val();
       var car_price1 = $( "#car_price1" ).val();
       var down_payment1 = $( "#down_payment1" ).val();
       var down_payment_percent1 = $( "#down_payment_percent1" ).val();
       var installments_period1 = $( "#installments_period1" ).val();
       var interest_rate_percent1 = $( "#interest_rate_percent1" ).val();
       
       var json = {
           'product_type' : product_type,
           'car_price1' : car_price1,
           'down_payment1' : down_payment1,
           'down_payment_percent1' : down_payment_percent1,
           'installments_period1' : installments_period1,
           'interest_rate_percent1' : interest_rate_percent1
       }
           
           hashdata(json)
           //console.log(123,json)
            // _st('addLocalTagProperties',json)
             //_st("loadTags");
      })
       
       function hashdata(data){
        (function(){
          var Sha256={};Sha256.HEX_CHARS="0123456789abcdef".split(""),Sha256.EXTRA=[-2147483648,8388608,32768,128],Sha256.SHIFT=[24,16,8,0],Sha256.K=[1116352408,1899447441,3049323471,3921009573,961987163,1508970993,2453635748,2870763221,3624381080,310598401,607225278,1426881987,1925078388,2162078206,2614888103,3248222580,3835390401,4022224774,264347078,604807628,770255983,1249150122,1555081692,1996064986,2554220882,2821834349,2952996808,3210313671,3336571891,3584528711,113926993,338241895,666307205,773529912,1294757372,1396182291,1695183700,1986661051,2177026350,2456956037,2730485921,2820302411,3259730800,3345764771,3516065817,3600352804,4094571909,275423344,430227734,506948616,659060556,883997877,958139571,1322822218,1537002063,1747873779,1955562222,2024104815,2227730452,2361852424,2428436474,2756734187,3204031479,3329325298],Sha256.sha224=function(S){return Sha256.sha256(S,!0)},Sha256.sha256=function(S,H){var a="string"!=typeof S,h=[];a&&S.constructor==root.ArrayBuffer&&(S=new Uint8Array(S));var A,C,E,R,X,_,r,o,t,T,e,F,I,f,n,s,c,i,u,v,K,d,l=!0,y=!1,g=0,p=0,w=0,b=S.length;H?(A=3238371032,C=914150663,E=812702999,R=4144912697,X=4290775857,_=1750603025,r=1694076839,o=3204075428):(A=1779033703,C=3144134277,E=1013904242,R=2773480762,X=1359893119,_=2600822924,r=528734635,o=1541459225),t=0;do{if(h[0]=t,h[16]=h[1]=h[2]=h[3]=h[4]=h[5]=h[6]=h[7]=h[8]=h[9]=h[10]=h[11]=h[12]=h[13]=h[14]=h[15]=0,a)for(e=p;b>g&&64>e;++g)h[e>>2]|=S[g]<<Sha256.SHIFT[3&e++];else for(e=p;b>g&&64>e;++g)T=S.charCodeAt(g),128>T?h[e>>2]|=T<<Sha256.SHIFT[3&e++]:2048>T?(h[e>>2]|=(192|T>>6)<<Sha256.SHIFT[3&e++],h[e>>2]|=(128|63&T)<<Sha256.SHIFT[3&e++]):55296>T||T>=57344?(h[e>>2]|=(224|T>>12)<<Sha256.SHIFT[3&e++],h[e>>2]|=(128|T>>6&63)<<Sha256.SHIFT[3&e++],h[e>>2]|=(128|63&T)<<Sha256.SHIFT[3&e++]):(T=65536+((1023&T)<<10|1023&S.charCodeAt(++g)),h[e>>2]|=(240|T>>18)<<Sha256.SHIFT[3&e++],h[e>>2]|=(128|T>>12&63)<<Sha256.SHIFT[3&e++],h[e>>2]|=(128|T>>6&63)<<Sha256.SHIFT[3&e++],h[e>>2]|=(128|63&T)<<Sha256.SHIFT[3&e++]);w+=e-p,p=e-64,g==b&&(h[e>>2]|=Sha256.EXTRA[3&e],++g),t=h[16],g>b&&56>e&&(h[15]=w<<3,y=!0);var B=A,U=C,j=E,k=R,m=X,q=_,x=r,z=o;for(F=16;64>F;++F)s=h[F-15],I=(s>>>7|s<<25)^(s>>>18|s<<14)^s>>>3,s=h[F-2],f=(s>>>17|s<<15)^(s>>>19|s<<13)^s>>>10,h[F]=h[F-16]+I+h[F-7]+f<<0;for(d=U&j,F=0;64>F;F+=4)l?(H?(u=300032,s=h[0]-1413257819,z=s-150054599<<0,k=s+24177077<<0):(u=704751109,s=h[0]-210244248,z=s-1521486534<<0,k=s+143694565<<0),l=!1):(I=(B>>>2|B<<30)^(B>>>13|B<<19)^(B>>>22|B<<10),f=(m>>>6|m<<26)^(m>>>11|m<<21)^(m>>>25|m<<7),u=B&U,n=u^B&j^d,i=m&q^~m&x,s=z+f+i+Sha256.K[F]+h[F],c=I+n,z=k+s<<0,k=s+c<<0),I=(k>>>2|k<<30)^(k>>>13|k<<19)^(k>>>22|k<<10),f=(z>>>6|z<<26)^(z>>>11|z<<21)^(z>>>25|z<<7),v=k&B,n=v^k&U^u,i=z&m^~z&q,s=x+f+i+Sha256.K[F+1]+h[F+1],c=I+n,x=j+s<<0,j=s+c<<0,I=(j>>>2|j<<30)^(j>>>13|j<<19)^(j>>>22|j<<10),f=(x>>>6|x<<26)^(x>>>11|x<<21)^(x>>>25|x<<7),K=j&k,n=K^j&B^v,i=x&z^~x&m,s=q+f+i+Sha256.K[F+2]+h[F+2],c=I+n,q=U+s<<0,U=s+c<<0,I=(U>>>2|U<<30)^(U>>>13|U<<19)^(U>>>22|U<<10),f=(q>>>6|q<<26)^(q>>>11|q<<21)^(q>>>25|q<<7),d=U&j,n=d^U&k^K,i=q&x^~q&z,s=m+f+i+Sha256.K[F+3]+h[F+3],c=I+n,m=B+s<<0,B=s+c<<0;A=A+B<<0,C=C+U<<0,E=E+j<<0,R=R+k<<0,X=X+m<<0,_=_+q<<0,r=r+x<<0,o=o+z<<0}while(!y);var D=Sha256.HEX_CHARS[A>>28&15]+Sha256.HEX_CHARS[A>>24&15]+Sha256.HEX_CHARS[A>>20&15]+Sha256.HEX_CHARS[A>>16&15]+Sha256.HEX_CHARS[A>>12&15]+Sha256.HEX_CHARS[A>>8&15]+Sha256.HEX_CHARS[A>>4&15]+Sha256.HEX_CHARS[15&A]+Sha256.HEX_CHARS[C>>28&15]+Sha256.HEX_CHARS[C>>24&15]+Sha256.HEX_CHARS[C>>20&15]+Sha256.HEX_CHARS[C>>16&15]+Sha256.HEX_CHARS[C>>12&15]+Sha256.HEX_CHARS[C>>8&15]+Sha256.HEX_CHARS[C>>4&15]+Sha256.HEX_CHARS[15&C]+Sha256.HEX_CHARS[E>>28&15]+Sha256.HEX_CHARS[E>>24&15]+Sha256.HEX_CHARS[E>>20&15]+Sha256.HEX_CHARS[E>>16&15]+Sha256.HEX_CHARS[E>>12&15]+Sha256.HEX_CHARS[E>>8&15]+Sha256.HEX_CHARS[E>>4&15]+Sha256.HEX_CHARS[15&E]+Sha256.HEX_CHARS[R>>28&15]+Sha256.HEX_CHARS[R>>24&15]+Sha256.HEX_CHARS[R>>20&15]+Sha256.HEX_CHARS[R>>16&15]+Sha256.HEX_CHARS[R>>12&15]+Sha256.HEX_CHARS[R>>8&15]+Sha256.HEX_CHARS[R>>4&15]+Sha256.HEX_CHARS[15&R]+Sha256.HEX_CHARS[X>>28&15]+Sha256.HEX_CHARS[X>>24&15]+Sha256.HEX_CHARS[X>>20&15]+Sha256.HEX_CHARS[X>>16&15]+Sha256.HEX_CHARS[X>>12&15]+Sha256.HEX_CHARS[X>>8&15]+Sha256.HEX_CHARS[X>>4&15]+Sha256.HEX_CHARS[15&X]+Sha256.HEX_CHARS[_>>28&15]+Sha256.HEX_CHARS[_>>24&15]+Sha256.HEX_CHARS[_>>20&15]+Sha256.HEX_CHARS[_>>16&15]+Sha256.HEX_CHARS[_>>12&15]+Sha256.HEX_CHARS[_>>8&15]+Sha256.HEX_CHARS[_>>4&15]+Sha256.HEX_CHARS[15&_]+Sha256.HEX_CHARS[r>>28&15]+Sha256.HEX_CHARS[r>>24&15]+Sha256.HEX_CHARS[r>>20&15]+Sha256.HEX_CHARS[r>>16&15]+Sha256.HEX_CHARS[r>>12&15]+Sha256.HEX_CHARS[r>>8&15]+Sha256.HEX_CHARS[r>>4&15]+Sha256.HEX_CHARS[15&r];return H||(D+=Sha256.HEX_CHARS[o>>28&15]+Sha256.HEX_CHARS[o>>24&15]+Sha256.HEX_CHARS[o>>20&15]+Sha256.HEX_CHARS[o>>16&15]+Sha256.HEX_CHARS[o>>12&15]+Sha256.HEX_CHARS[o>>8&15]+Sha256.HEX_CHARS[o>>4&15]+Sha256.HEX_CHARS[15&o]),D},Sha256.hash=Sha256.sha256;
          var data_hash;
         if(data !== '' && data !== 'undefined' && data !== 'empty' && !! data && data !== 'N/A' && data !== 'n/a'){
           data_hash = {
             'product_type' : Sha256.hash(data.product_type.toLowerCase().replace(/ /g,"")),
             'car_price1' : Sha256.hash(data.car_price1.toLowerCase().replace(/ /g,"")),
             'down_payment1' : Sha256.hash(data.down_payment1.toLowerCase().replace(/ /g,"")),
             'down_payment_percent1' : Sha256.hash(data.down_payment_percent1.toLowerCase().replace(/ /g,"")),
             'installments_period1' : Sha256.hash(data.installments_period1.toLowerCase().replace(/ /g,"")),
             'interest_rate_percent1' : Sha256.hash(data.interest_rate_percent1.toLowerCase().replace(/ /g,""))
           }
             
             _st('addLocalTagProperties',data_hash)
            
        } else {
          data_hash = 'N/A'
          _st('addLocalTagProperties',data_hash)
        }
          
          _st("loadTags"); 
      //return data_hash
        
        
        
    })();
  
     
    }
 })(jQuery)
 </script>
<style>
  #form-collapse2 {max-height: unset !important}
</style>
<script type="text/javascript">
//<![CDATA[

theForm.oldSubmit = theForm.submit;
theForm.submit = WebForm_SaveScrollPositionSubmit;

theForm.oldOnSubmit = theForm.onsubmit;
theForm.onsubmit = WebForm_SaveScrollPositionOnSubmit;
//]]>
</script>
</form>


</body></html>