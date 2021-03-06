<?php if (!defined('THINK_PATH')) exit();?>
      
    
    
    
<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <script>
            window._jHeadStart = ( new Date() ).getTime();
        </script>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <meta name="renderer" content="webkit">
        <meta name="google-site-verification" content="oQXrGa_mTgxg7joO0himE0QuFeqOVmm-SDC1H2dzT4c">
        <meta name="baidu-site-verification" content="wibJopuIuI" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <meta name="keywords" content="U计划-C160607-2期|U计划|优选计划|WE|人人贷|投资理财|实地认证标|机构担保标|信用认证标|智能理财标|网络理财|个人理财|P2P理财|P2P|互联网金融">
        <meta name="description" content="U计划是WE(Wealth Evolution)为您提供的本金自动循环出借及到期自动转让退出的理财工具。U计划-C160607-2期所对应的借款均100%适用于人人贷用户利益保障机制，安全性高。您出借所获得的利息收益可选择每月复投或返还，并由系统为您实现分散投资，更好的满足您多样化的理财需求">
        <title>U计划-C160607-2期-人人贷WE理财(Wealth Evolution)官网</title>
    
        <link rel="shortcut icon" type="image/x-icon" href="/static/common/img/favicon.ico" />
        <link rel="stylesheet" type="text/css" href="/TP/one/Public/css/base_7d5db66.css">
        <!--header中的css-->
        
        
        <script>
            !function(){var c=Object.prototype.toString;var a=/complete|loaded|interactive/;var m="m.we.com/s1/w.gif";var d="";var p=location.protocol;var k="";var l=p+"//"+m;function b(q){return c.call(q)==="[object String]"}function j(s,r){for(var q in r){if(r.hasOwnProperty(q)){s[q]=r[q]}}}function o(s){var q="";for(var r in s){q+=r+"="+encodeURIComponent(s[r])+"&"}return q}function g(t){var s=(new Date()).getTime();var r="___log_"+s;var q=new Image();window[r]=q;q.onload=q.onerror=function(){q.onload=q.onerror=null;window[r]=null;q=null};q.src=t+"&_r="+s}function f(t){var q={pl:d,pid:k};for(var s in t){if(t.hasOwnProperty(s)){if(!b(t[s])){q[s]=JSON.stringify(t[s])}else{q[s]=t[s]}}}var r=l+"?"+o(q);g(r)}var n=false;var i={};var e={init:function(q){d=q.platform;k=q.pageID;if(!k){k=location.pathname}},perf:{headStart:function(q){i.jhead_start=q;return e},bodyStart:function(q){q=q||(new Date()).getTime();i.jbody_start=q;return e},bodyEnd:function(q){q=q||(new Date()).getTime();i.jbody_end=q;return e},domReady:function(q){if(i.jdom_ready){return}q=q||(new Date()).getTime();i.jdom_ready=q;return e},fullLoad:function(q){q=q||(new Date()).getTime();i.jfull_load=q;return e},send:function(){if(!n){if(window.performance&&window.performance.timing&&typeof window.performance.timing.toJSON==="function"){j(i,window.performance.timing.toJSON())}f({perf:i})}n=true}}};if(a.test(document.readyState)&&document.body){e.perf.domReady()}else{if(typeof document.addEventListener==="function"){document.addEventListener("DOMContentLoaded",function(){e.perf.domReady()})}}window.weLogger=e;function h(){e.perf.fullLoad();e.perf.send()}if(document.readyState!=="complete"){if(typeof window.addEventListener==="function"){window.addEventListener("load",h)}else{if(window.attachEvent){window.attachEvent("onload",h)}}}}();
        </script>
        <script src="/TP/one/Public/js/vendors_8a6040f.js"></script>
        <!--header中的js-->
        
        
<div id="surplus-amount-helper" data-overplusAmount="" data-buyInRate="0.0" data-alreadyDepositAmount="" style="display:none"></div>
<script id="dialog2-message" type="text/x-handlebars-template">
<div class="ui-message-content-new">
    {{# if title }}
    <h3>{{ title }}</h3>
    {{/ if}}
    
    <div class="ui-message-button text-center">
        <a class="ui-button ui-button-blue ui-button-mid ui-message-close-button" {{# if button }}href="{{ button.link }}"{{/ if }}>{{# if button }}{{ button.text }}{{ else }}关闭{{/ if }}</a>
    </div>
</div>
</script>
<script id="reserve-template" type="text/x-handlebars-template">
 <table  width="100%" >
          <thead>
            <tr class="ui-list-header ">
              <th class="text-left  ui-list-title" width="7%"><span class="pl25">序号</span></th>
              <th class="text-right ui-list-title" width="17%"><span>投资人</span></th>
              <th class="text-right ui-list-title" width="21%"><span>加入金额</span></th>
              <th class="text-right ui-list-title" width="26%"><span>预定时间</span></th>
              <th class="text-center ui-list-title" width="13%"><span>来源</span></th>
              <th class="text-right ui-list-title" width="16%"><span class="pr25">状态</span></th>
            </tr>
          </thead>
          <tbody>
{{# each rsvList }}
  <tr class=" {{ itemStyle }} ui-list-item"><!--
              --><td class="ui-list-field text-left"><div class="pl25">{{ id }}</div></td><!--
              --><td class="ui-list-field text-right"><div><a class="inline-block fn-text-overflow w100" href="/account/myInfo.action?userId={{userId}}" target="_blank">{{ investor }}</a></div></td><!--
              --><td class="ui-list-field text-right"><div>{{ planAmount }}元</div></td><!--
              --><td class="ui-list-field text-right"><div>{{ date }}</div></td><!--
              --><td class="ui-list-field text-center"><div>
{{#if ucodeUsed }}
    <a title="U-code预定" target="_blank" href="/help/terms/terms!terms.action#ucode"><i class="icon-u icon-u-code"></i></a>
{{/ if }}
{{#if mobileUsed }}
 	<a title="手机预定" target="_blank" href="http://www.we.com/event/app.action"><i class="icon-u icon-u-mobile"></i></a>
{{/ if }}
 	
</div></td><!--
              --><td><div class="ui-td-bg text-right pr25">{{ status }}</div></td><!--
            --></tr>
{{ else }}
<tr class="ui-list-item">
 <td colspan="6" class="ui-list-field  color-gray-text "style="font-size:24px; padding-top:50px;text-align:center;">{{# if _message }}{{ _message }}{{ else }}暂无预定记录{{/ if }}</td>
</tr>
{{/ each }}
          </tbody>
        </table>
</script>
<script id="joined-template" type="text/x-handlebars-template">
        <table style="width:100%;">
          <thead>
            <tr class="ui-list-header">
              <th width="115px" class="ui-list-title text-left"><span class="pl25">序号</span></th>
              <th width="260px" class="ui-list-title text-left"><span style="padding-left: 88px;" class="">投资人</span></th>
              <th width="200px" class="ui-list-title text-right"><span style="padding-right: 45px;" class="">加入金额</span></th>
              <th width="310px" class="ui-list-title text-center"><span class="">来源</span></th>
              <th  class="ui-list-title text-center"><span class="">加入时间</span></th>
            </tr>
          </thead>
          <tbody>
{{# each jsonList }}
            <tr class="{{ itemStyle }} ui-list-item">
             <td class="ui-list-field text-left"><div class="ui-td-bg  pl25">{{ id }}</div></td>
             <td class="ui-list-field  text-left"><div style="padding-left: 88px;" class="ui-td-bg "><a style="width: 170px;" class="inline-block fn-text-overflow " href="/account/myInfo.action?userId={{userId}}" target="_blank">{{ investor }}</a></div></td>
             <td class="ui-list-field  text-right"><div style="padding-right: 45px;" class="ui-td-bg ">{{ amount }}元</div></td>
            <td class="ui-list-field  text-center">
                <div class="ui-td-bg buy-source-holder text-center">
                    {{#if ucodeUsed }}
                    <a title="U-code预定" target="_blank" href="/help/terms/terms!terms.action#ucode"><i class="icon-u icon-u-code"></i></a>
                    {{/ if }}
                    {{#if mobileUsed }}
                    <a title="手机预定" target="_blank" href="http://www.we.com/event/app.action"><i class="icon-u icon-u-mobile"></i></a>
                    {{/ if }}
                </div>
            </td>
             <td class="ui-list-field  text-center"><div class="ui-td-bg ">{{ date }}</div></td>
            </tr>
{{ else }}
<tr clss="ui-list-item">
 <td colspan="4" class="color-gray-text ui-list-field"style="font-size:24px; padding-top:50px;text-align:center;">{{# if _message }}{{ _message }}{{ else }}暂无加入记录{{/ if }}</td>
</tr>
{{/ each }}
  </tbody>
        </table>
</script>
<script id="confirm-plan-reserve-template" type="text/x-handlebars-template">
<div class="ui-confirm conform_pay_div" style="height:600px">
  <span class="title">请确认预定信息</span>
  <div class="ui-confirm-content">
    <form id="reserveForm" data-name="confirmReserve" class="ui-form" action="/financeplan/financeplan/applyFinancePlanRsv{{ append }}.action" autocomplete="off">
      <ul>
        <li><span>计划名称</span>U计划-C160607-2期</li>
        <li><span>预期收益</span><em data-value="8.80">8.80%</em>/年</li>
        <li><span>理财期限</span>12</em>个月</li>
        <!--li><span>加入费用</span>{{ fee }}</em>元</li-->
        <li><span>加入金额</span>{{ amount }}</em>元</li>
         <li style="display:none"><span>处理方式</span>{{ gainText }} {{# if intoBank }}<em>{{ bankText }}</em>{{/ if }}</li>
        {{# if isAppend }}
        <li class="fn-clear">
          <span class="fn-left">验证码&nbsp;&nbsp;&nbsp;&nbsp;</span>
          <span class="fn-left ui-confirm-value last" id="captcha">
            <input id="captcha-input" type="text" name="randCode" value="" />
            <img class="cursor-pointer" id="captcha-img" src="/TP/one/Public/js/image_https.jsp" />
            <label for="captcha-input" class="error" style="display: none;margin-top: -16px">验证码不能为空</label>
          </span>
        </li>
        {{/ if }}
      </ul>
          <div class="money-div">
            <p><span">应付定金</span><em class="ml20">{{ deposit }}</em>元</p>
        </div>
      <p style="line-height: normal"><input type="checkbox" checked="checked" name="joinContract" id="joinContract">我已阅读 <a class="text" href="javascript:void(0)" onclick="javascript:window.open('/financeplan/getDemoFinancePlanContract.action?financePlanId=2745', '_blank', 'height=768, width=1024,toolbar=no,scrollbars=yes,menubar=no,status=no')">《U计划-C160607-2期协议》</a><label for="joinContract" class="error"></label></p>
      <p style="line-height: normal"><input type="checkbox" checked="checked" name="reserveContract" id="reserveContract">我已阅读并同意签署 <a class="text" href="javascript:void(0)" onclick="javascript:window.open('/financeplan/getFinancePlanContract!getPlanRsvContract.action?financePlanId=2745&noRsvRecord=false', '_blank', 'height=768, width=1024,toolbar=no,scrollbars=yes,menubar=no,status=no')">《U计划-C160607-2期预定协议》</a><label for="reserveContract" class="error" style="display: none"></label></p>
      <div class="ui-info-box ml10 mr10 mt20">
        <div class="mb10"><i class="icon icon-info mr10"></i>温馨提示：</div>
        <div>若您预定成功后，请于<strong class="color-orange-text font-normal">2016-06-07 18:53</strong>前支付剩余金额{{ restAmount }}元。超过时限未完成支付，视为您主动放弃加入本计划，加入资格将作废，定金不予返还。</div>
      </div>
      <div class="mt10 text-center">
        <input type="hidden" name="financePlanIdStr" value="2745" />
        <input type="hidden" name="amountStr" value="{{ amount }}" />
        <input type="hidden" name="couponId" value="" />
         <input type="hidden" name="cashTypeStr" value="{{ gain }}" />
        <div class="fn-clear ui-confirm-submit-box">
          <input type="submit" value="确认" class=" ui-button-blue ui-button-mid btn-savecon" />
          <input type="buttton"  value="取消" id="closeRsvDialog" class=" ui-button-gray ui-button-mid btn-savecon" />
        </div>
      </div>
    </form>
  </div>
</div>
</script>
<script id="confirm-plan-join-template" type="text/x-handlebars-template">
<div class="ui-confirm conform_pay_div mt20">
  <span class="title data-dialog-title">确认加入</span>
  <div class="ui-confirm-content">
    <form class="ui-confirm-form" action="/financeplan/applyFinancePlan.action" method="post">
      <ul>
        <li class="fn-clear"><span class="j-dialog-label">计划名称</span><span class="j-dialog-value">U计划-C160607-2期</span></li>
        <li class="fn-clear"><span class="j-dialog-label">预期收益</span><span class="j-dialog-value"><em data-value="8.80">8.80%</em>/年</span></li>
        <li class="fn-clear"><span class="j-dialog-label">理财期限</span><span class="j-dialog-value">12个月</span></li>
        <!--li><span>加入费用</span>{{ fee }}元</li-->
        <li class="fn-clear"><span class="j-dialog-label">加入金额</span><span class="j-dialog-value">{{ amount }} 元</span></li>
        
        
        
          
          
            
            
          
        
        
          <li class="fn-clear">
              <span class="j-dialog-label">处理方式</span>
              <span class="j-dialog-value">
                  <div class="j-select">
                      <div class="j-select-indicator">
                          <span class="text-holder">{{ gainText }}</span>
                          <span class="j-select-arrow">
                              <span class="icon-down3"></span>
                          </span>
                      </div>
                      <ul class="j-select-list">
                          {{# each cashTypeList }}
                          <li class="j-select-item" data-value="{{ value }}" >
                              {{ text }}
                          </li>
                          {{/ each}}
                      </ul>
                  </div>
              </span>
          </li>
      </ul>
        <div class="money-div">
          <div class="J_coupon_wrap"></div>
          <p class="fn-clear"><span class="j-dialog-label">应付金额</span><span class="j-dialog-value orange-highlight"><em class="J_payable num-family" data-payable="{{ amountAndFee }}" >{{ formatAmountAndFee }}</em> 元</span></p>
          <p class="ui-confirm-yue rrdcolor-red-text text-small fn-hide j-dialog-margin-left" ></p>
        </div>
      <div class="mt10 text-small">
        <p class="j-dialog-margin-left"><input type="checkbox" checked="checked" id="agree-contract" name="agree-contract" />我已阅读并同意签署 <a class="text" href="javascript:void(0)" onclick="javascript:window.open('/financeplan/getDemoFinancePlanContract.action?financePlanId=2745', '_blank', 'height=768, width=1024,toolbar=no,scrollbars=yes,menubar=no,status=no')">《U计划-C160607-2期协议》</a></p>
        <p class="ui-confirm-hint rrdcolor-red-text text-small j-dialog-margin-left" style="display: none;"></p>
      </div>
    <div class="mt10 text-center">
        <input type="hidden" name="financePlanIdStr" value="2745" />
        <input type="hidden" id="cash-type-str-input" name="cashTypeStr" value="{{ gain }}" />
        <input type="hidden" name="amountStr" value="{{ amount }}" />
        <div class="fn-clear ui-confirm-submit-box">
          <input class="j-btn j-dialog-btn-small j-btn-orange btn-savecon" type="submit" value="确 定"/>
          <input type="button"  class=" ui-confirm-cancel-link j-btn j-btn-cancel j-dialog-btn-small btn-savecon" value="取 消"/>
        </div>
      </div>
        <div class="j-dialog-footer">
            <h3 class=" j-dialog-section-title">温馨提示</h3>
            <p class="warm-p">1.收益处理方式一经选择，无法修改。</p>
            <p class="warm-p">2.可提取金额为该计划获取的收益部分，本金部分将继续滚动投标，直至锁定期结束，自动退出本计划。</p>
            <br />
        </div>
    </form>
  </div>
</div>
</script>
<script id="confirm-plan-join-coupon-template" type="text/x-handlebars-template">
<div class="addCoupon J_addCoupon fn-clear">
  <span class="txt-name fn-left j-dialog-label">优惠券</span>
  <input id="chooseCoupon" type="checkbox" checked="checked" class="fn-left"  name="">
  <div class="ui-selectdrop ui-selectdrop-dialog fn-left j-big-input-item">
    <div class="s_select_bg  clearfix J_select_btn j-big-input">
      <span class="txt J_txt">{{initCouponValue.name}}</span>
      <input type="hidden" id="getUseCouponId" name="couponId" value="{{initCouponValue.couponId}}" />
      <span class="arrow">
        <i class="icon-down3"></i>
      </span>
    </div>
    <ul class="popBox J_popBox j-big-input" style="display:none">
      {{# each couponList }}
        <li class="" datavalue="{{ couponId }}" unrepayamout="{{../unRepayAmountNotComma}}" couponvalue="{{couponValue}}" couponType="{{couponTypeEng}}" >
          <span>{{ name }}</span>
        </li>
      {{/ each}}
    </ul>
  </div>
  <a href="javascript:" class="fn-left use-psw J_use_psw j-btn j-btn-blue">+ 兑换优惠券</a>
</div>
<div class="fn-hide J_red_packet_tips pr2" >
本次投资可抵扣<span>{{initCouponValue.couponValue}}</span>元
</div>
<div class="ui-form-item ui-form J_use_psw_wrap">
  <input class="ui-input s_select_bg clearfix " type="text" value="" placeholder="请输入您的优惠券密码"><span class="J_use_coupon use-ucode-btn ui-button j-btn j-btn-blue j-btn-small">兑 换</span>
  <label class="J_use_coupon_tips use-coupon-tips fn-hide error"></label>
</div>
</script>
<script id="use-ucode-join-template" type="text/x-handlebars-template">
    <div class="ui-confirm conform_pay_div mt20">
        <span class="title data-dialog-title">提前加入U计划</span>
        <div class="ui-confirm-content">
            <div style="font-size: 16px;" class="j-dialog-margin-left mb10">您正在使用U-CODE提前加入本期U计划。</div>
            <form class="ui-confirm-form" action="/financeplan/applyFinancePlan.action" method="post">
                <input type="hidden" name="ucodeId" value="" />
                <ul>
                    <li class="fn-clear"><span class="j-dialog-label">兑换产品</span><span class="j-dialog-value">U计划-C160607-2期</span></li>
                    <li class="fn-clear"><span class="j-dialog-label">预期收益</span><span class="j-dialog-value"><em data-value="8.80">8.80%</em>/年</span></li>
                    <li class="fn-clear"><span class="j-dialog-label">理财期限</span><span class="j-dialog-value">12个月</span></li>
                    <!--li><span>加入费用</span>{{ fee }}元</li-->
                    <li class="fn-clear"><span class="j-dialog-label">加入金额</span><span class="j-dialog-value">{{ amount }} 元</span></li>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    <li class="fn-clear">
                        <span class="j-dialog-label">处理方式</span>
              <span class="j-dialog-value">
                  <div class="j-select">
                      <div class="j-select-indicator">
                          <span class="text-holder">{{ gainText }}</span>
                          <span class="j-select-arrow">
                              <span class="icon-down3"></span>
                          </span>
                      </div>
                      <ul class="j-select-list">
                          {{# each cashTypeList }}
                          <li class="j-select-item" data-value="{{ value }}" >
                              {{ text }}
                          </li>
                          {{/ each}}
                      </ul>
                  </div>
              </span>
                    </li>
                </ul>
                <div class="money-div">
                    <div class="J_coupon_wrap"></div>
                    <p class="fn-clear"><span class="j-dialog-label">应付金额</span><span class="j-dialog-value orange-highlight"><em class="J_payable num-family" data-payable="{{ amountAndFee }}" >{{ formatAmountAndFee }}</em> 元</span></p>
                    <p class="ui-confirm-yue rrdcolor-red-text text-small fn-hide j-dialog-margin-left" ></p>
                </div>
                <div class="mt10 text-small">
                    <p class="j-dialog-margin-left"><input type="checkbox" checked="checked" id="agree-contract" name="agree-contract" />我已阅读并同意签署 <a class="text" href="javascript:void(0)" onclick="javascript:window.open('/financeplan/getDemoFinancePlanContract.action?financePlanId=2745', '_blank', 'height=768, width=1024,toolbar=no,scrollbars=yes,menubar=no,status=no')">《U计划-C160607-2期协议》</a></p>
                    <p class="ui-confirm-hint rrdcolor-red-text text-small j-dialog-margin-left" style="display: none;"></p>
                </div>
                <div class="mt10 text-center">
                    <input type="hidden" name="financePlanIdStr" value="2745" />
                    <input type="hidden" id="cash-type-str-input" name="cashTypeStr" value="{{ gain }}" />
                    <input type="hidden" name="amountStr" value="{{ amount }}" />
                    <div class="fn-clear ui-confirm-submit-box">
                        <input class="j-btn j-dialog-btn-small j-btn-orange btn-savecon" type="submit" value="确 定"/>
                        <input type="button"  class=" ui-confirm-cancel-link j-btn j-btn-cancel j-dialog-btn-small btn-savecon" value="取 消"/>
                    </div>
                </div>
                <div class="j-dialog-footer">
                    <h3 class=" j-dialog-section-title">温馨提示</h3>
                    <p class="warm-p">1.收益处理方式一经选择，无法修改。</p>
                    <p class="warm-p">2.可提取金额为该计划获取的收益部分，本金部分将继续滚动投标，直至锁定期结束，自动退出本计划。</p>
                    <br />
                </div>
            </form>
        </div>
    </div>
</script>
    
        <script>
            weLogger.init({ platform : 'pc' });
            weLogger.perf.headStart( _jHeadStart );
        </script>
    <link rel="stylesheet" type="text/css" href="/TP/one/Public/css/common_widget_a0ac30b.css" /><link rel="stylesheet" type="text/css" href="/TP/one/Public/css/invest_widget_b84cfd4.css" /></head>
    <body class="body">
        <script>
            weLogger.perf.bodyStart( );
        </script>
        
        
        
            
<div class="wdg-top-header">
    <div class="main-section">
        <span class="tel-phone"><i class="icon-phone"></i>客服电话: 400-090-6600</span>
        <ul class="site-nav">
            
                <li class="nav-item"><a target="_self" href="/loginPage.action">立即登录</a></li>
                <li class="nav-item-split"></li>
                <li class="nav-item"><a target="_self" href="/regPage.action?registerSource=web_top">快速注册</a></li>
                <li class="nav-item-split"></li>
            
            
            <li class="nav-item"><a target="_blank" href="/about/about.action?flag=intro">关于我们</a></li>
            <li class="nav-item-split"></li>
            <li class="nav-item"><a target="_blank" href="/help/index.action">帮助中心</a></li>
            <li class="nav-item-split"></li>
            <li class="nav-item"><a target="_blank" href="http://bbs.we.com/">理财论坛</a></li>
            <li class="nav-item-split"></li>
            <li class="nav-item"><i class="icon-mobile3"></i><a target="_blank" href="/event/app.action">移动客户端</a></li>
        </ul>
    </div>
</div>
            
<div class="wdg-second-header">
    <div class="main-section">
        <a href="/" class="brand-logo mt15">
            <img src="/TP/one/Public/images/we-logo_79fb26f.png" alt="logo" />
        </a>
        <ul class="site-nav">
            <li class="user-item fn-clear">
                
                    <div class="user-avatar-container fn-left">
                        <img src="/TP/one/Public/images/.com/financeplan/2745/data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACYAAAAmCAYAAACoPemuAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyNpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDE0IDc5LjE1MTQ4MSwgMjAxMy8wMy8xMy0xMjowOToxNSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChNYWNpbnRvc2gpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjlFMzdFM0U2NTNCOTExRTVBNUM0ODE2MTc5OUFCNDBEIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjlFMzdFM0U3NTNCOTExRTVBNUM0ODE2MTc5OUFCNDBEIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6OUUzN0UzRTQ1M0I5MTFFNUE1QzQ4MTYxNzk5QUI0MEQiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6OUUzN0UzRTU1M0I5MTFFNUE1QzQ4MTYxNzk5QUI0MEQiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7KYAvEAAADpklEQVRYw81Y20uUQRSX9sV813f9IyIs6iEvQb31pF2gKHETMgIjK0vC0i4QukJuYhmuWhpdCAo1eqgUNzJBqdYuVNrL2oqCle5u7en8Pmdy+NzLzPo9OPDDz5lzfuf3zcyeM/NlEFHGWkS6jrmMcoaPMcIIMcICIdHnEza5aQvbcOBqSrCdi1HCGGTESL/FhA98XRpx9IWxTQHjvYz0ezFC/f4Jqr/1lPbXdVPxUS9tLmuygGf0YQw2sFUaOApWLYzHMhleyfp9eo7Otw/QVncz8bgWYAufqeCcKhCcmWkJ4/5sxiuwhCNRau59QZt4RnQF2QFfcIBLNHBnGwkTogLwxpvuqfWlLcgOcE0FZ6W4gF1cQmH8fxZj2PL6GqTtvGecEiUBzsC3oBSHWFk6wlqXZmqWiitbHBclAW5l5lqTChO/PloMRx1dvkTYfdZnxRKtIK4w/ruO8Q4W2KS65DtOdFGFd5hO3glYwDP6dP09HEtJJa54wkrkZs8/1Kj3xg1PqObup7jAmA4HYimppCSesJcYQc7RnalEoiR0Z67uZr8UNmivlahnsV8LYe3kiSVLJQw2ukkYsUX5ylOFudGLEqK7N6pvB1IKg40uH2KL5laF4SRAFzSXUVcYfgy6fIgtmk8VNooeFF9dIieXEkBs0d6ownCGoqIjLUZpwqnNDyC2aDOqMGvnmRZpJ9KFWuRFC69aGLCzulsk2AkLpgk2lTDjpXQaiZbSePM7DWXzj6rCOk3ThdNIlC6ME+y2yjYqrX/Me8pPxzvf0qmeDxbwjD6MwWa1CTZPtyQVHWuniuv+lKliOZf5LZ9knFvKPfFLklrEUVDjOW882Ej7rgxoC7IDvuAwKuKpjj35ZR6tTK9TCcC18tgzm/TY45J3R49yUMRbOiFKFafOXFPP8+QHRfvRuvRMx9Kt5lKfY6Ik9l7us7gRY2H5aF2Y6jJyQ15GdtV00+nej44LAye4lSVsM7q+Tf74SRcffXFcGDjBbXR9s194Z+Yj1Dww6ZgocIHT+MKrGOQwXsM7+idGfWMhqr33OW1B8AUHuEQDd47xtwv3tSGMrVc/quBNH4xM07n7+gJhC5/QfGTFRxXEMBZW1TGewcQW8IuRS2udS6J/aWxynh5yQO+zKWrgPYMZAfCMPozBBrZKA0eh5K3yjZsL47PVf2FCnPxwN2T44Y6ETyk4VE6urebCVAI7xHXvMKNLnNFxnosIhERfl7DJTcaVVNhaxD/MH9XEf+bN6AAAAABJRU5ErkJggg=="  />
                        <div class="avatar-masking"><a href="/account/index.action"></a></div>
                    </div>
                    <div class="user-name fn-clear">
                        <a href="/loginPage.action">我的账户</a>
                    </div>
                
                
            </li>
            <li class="channel-item"><a href="/">首页</a></li>
            <li class="channel-item"><a href="/fund/info/tag000001">基金</a></li>
            <li class="channel-item"><a href="/financeplan">U计划</a></li>
            <li class="channel-item"><a href="/autoinvestplan">薪计划</a></li>
            
            
            <li class="channel-item"><a href="/loan">债权</a></li>
            <li class="channel-item"><a href="/newComerLoan">新手专区</a></li>
             
               
                
                    
                        
                    
                    
                        
                    
                    
                        
                    
                
             
        </ul>
    </div>
</div>
<div id="header-helper" style="display: none;">
    <span id="header-helper-authenticated">
      
      false
    </span>
</div>
        
        
            
        
        
            
        
        <div id="pg-server-message" data-status="" data-message="" data-ispop="true" data-fundTips="" style="display: none;"></div>
        <div class="maincontent">
            
        <!--
        @require "common:widget/oui/oui.css"
        @require "invest:widget/static/css/invest-common.less"
        -->
        <script id="account-info-rsp" type="text/x-json"></script>
        <div id="pg-plan-join" class="pg-details">
            
    
    
<div id="wdg-u-detail-header">
    <div class="FUND_TIPS fn-hide">
        <div class="Fund_TIPS_WRAP">
            
            <a href="" class="gotourl">查看详情></a>
        </div>
    </div>
    <div class="FUND_MSG fn-hide"></div>
    <div class="FUND_URL fn-hide"></div>
<div id="plan-basic">
    <div id="plan-status" style="display: none;"></div>
    <div class="container_12_1080  mt10 pg-details" id="plan-basic-panel">
        
        <div class="ui-box-white-bg pl25  pr25 fn-clear">
            <div class="ui-box-title fn-clear">
                
                
                    <div class="fn-left fn-text-overflow text-big">U计划-C<span class='text-big'>（160607-2期）</span></div>
                
                <div class="fn-right text ui-box-text">
                    <a id="plan-basic-contract" href="javascript:void(0)"
                        onclick="javascript:window.open('../financeplan/getDemoFinancePlanContract.action?financePlanId=2745', '_blank', 'height=768, width=1024,toolbar=no,scrollbars=yes,menubar=no,status=no')">U计划-C160607-2期协议（范本）</a>
            
                </div>
            </div>
            <input type="hidden" id="financePlanCategory" value="C" />
            <input type="hidden" id="invest-type" value="U-Plan" /> 
            <div class="fn-clear">
                <div class="fn-left  pt10  planinfo">
                    <div class="fn-clear  mb25">
                        <dl class="fn-left w320">
                            <dd class="basic-all color-orange-text">
                               <span class="text-xxxl num-family  "> 7,000,000</span><span class="font-18px basic-text">元</span>
                            </dd>
                            <dt class="minus-mt-5">计划金额</dt>
                        </dl>
                        <dl class="fn-left w240">
                            <dd class="basic-all ">
                                
                                    <span class="text-xxxl num-family color-dark-text">8.80</span>
                                    <span class="font-24px">%</span>
                                
                                
                            </dd>
                            <dt class="minus-mt-5">预期年收益</dt>
                        </dl>
                        <dl class="fn-left w140">
                            <dd class="h56 basic-all">
                                
                                
                                 
                                     <span class="text-xxxl color-dark-text num-family">12</span>
                                     <span class="font-18px basic-text">个月</span>
                                  	
                            </dd>
                            <dt class="minus-mt-5">投资期限</dt>
                        </dl>
                    </div>
                    <ul>
                        <li class="fn-clear">
                            <span class="fn-left basic-label">保障方式</span>
                            <span class="fn-left basic-value">100%适用用户利益保障机制 <a id="tips_0"
                                class="icon-info color-gray-text"
                                href="/help/security/security!detail.action?flag=bjbz"
                                target="_blank"></a>
                            </span>
                            <span class="fn-left basic-label">加入上限</span> 
                            <span class="fn-left basic-value">
                                <em>
                                    2,000,000
                                </em>元
                            </span>
                        </li>
                        
                        <li class="fn-clear" style="display:none">
                            <span class="fn-left basic-label">投标范围</span>
                            <span class="fn-left basic-value last" id="plan-basic-products"
                                  data-products="机构担保标,实地认证标">
                            </span> 
                            <span class="fn-left basic-label">退出日期</span>
                            <span class="fn-left basic-value">2017年06月12日 </span> 
                            <span class="fn-left basic-label">加入上限</span> 
                            <span class="fn-left basic-value">
                                <em>
                                    2,000,000
                                </em>元
                            </span>
                        </li>
                        
                         
                        
	                          <li class="fn-clear basic-progress ">
	                        	    <span class="fn-left basic-label w70">
	                            加入进度</span>
	                            <span class="fn-left basic-value fn-clear ">
		                            <span class="fn-left basic-progress-bg"> 
		                            	<b class="basic-percent"  style="width: 86%"></b>
		                            </span>	                          
	                              	<span class="fn-left basic-progress-value"><em>86%</em></span>
	                            </span>
	                         
	                        </li>
                        
                    </ul>
                    <div id="tipCon_0" class="ui-poptip ui-poptip-new fn-hide" data-widget-cid="widget-2" style="width:156px;z-index: 99; position: absolute; left: 264.5px; top: 330.5px; display: none;">
                  <div class="ui-poptip-shadow">
                      <div class="ui-poptip-container">
                          <div class="ui-poptip-arrow ui-poptip-arrow-10" style="left:-21px;top:7px;">
                              <em></em>
                              <span></span>
                          </div>
                          <div data-role="content" class="ui-poptip-content">
                              详情参见<a target="_blank" href="/help/security/security!detail.action?flag=bjbz">用户利益保障机制</a>
                          </div>
                      </div>
                  </div>
              </div>
	</div>
            
                <div class="fn-right  ui-term-box  border-left-gray" id="investment-terminal">
                    <dl class="pd4">
                        <dd class="mt6 color-orange-text">
                            <em class="font-36px num-family">940,000</em> <em class="unit">元</em>
                        </dd>
                        <dt class="minus-mt-10"> 剩余金额 
                            
                        </dt>                        
                    </dl>
                <!-- 预定 未登录-->
                
                <!-- 加入 已登录-->
                
                    <div class="ui-term-content">
                        
                            <p>
                                <a href="/loginPage.action">登录</a>后可见
                            </p>
                        
                        
                        <form class="ui-term-form ui-form" autocomplete="off">
                            <div class="ui-term-field invest">
                                
                                
                                
                                      <input class="ui-term-input ui-input ui-input-text" type="text">
                                
                              
                                <p class="ui-term-placeholder">输入加入金额，为10,000元的整数倍</p>
                                <p id="share-amount" data-share-amount="10000" style="display: none;"></p>
                                <p class="ui-term-inputunit">元 <span class="ui-term-eq share" style="display:none;"></span>
                                </p>
                                <p class="mt5 mb10 ui-term-gain" style="display:none">
                                      <span class="ui-term-radio">
                                      <input type="radio" checked="checked" value="INVEST" name="gain">
                                      <em class="ui-term-radio-text">收益再投资</em>
                                    </span>
                                    <span class="ui-term-radio ml15">
                                      <input type="radio" value="RRD" name="gain">
                                      <em class="ui-term-radio-text">提取至主账户</em>
                                    </span>
                                </p>
                                <p class="ui-term-hint" style="display: block;"></p>
                                <p class="ui-term-error" style="display: none; "></p>
                            </div>
                              
                                     
                                     
                                        <button
                                            class="ui-term-button ui-button  ui-button-orange plan-button mt5 mb10"   type="submit">
                                            <span class="ui-button-text"> 
                                                    加 入
                                                    
                                            </span>
                                        </button>
                                    
                        </form>
                    </div>
                
                    
                    
                <!-- 等待预定 已登录-->
                
            </div>
            
   			<!-- 等待开放加入 已登录-->
            
            <!-- 预定满额 -->
            
            <!-- 加入满额 -->
            
            <!-- 收益中 -->
            
            <!-- 退出 -->
            
            <!-- 开放期 -->
            
        </div>
    </div>
</div>
<script id="plan-basic-products-template" type="text/x-handlebars-template">
  {{# each products }}<span class="fn-left ui-loantype {{ product }}" title="{{ productName }}"></span>{{/ each }}
  </script>
<script id="select-bank-accounts-template" type="text/x-handlebars-template">
  {{# each accounts }}<option value="{{ userBankId }}">{{ bankType }} {{ dealCardId }}</option>{{ else }}<option value="">请先添加银行卡</option>{{/ each }}
  </script>
<div id="buyType"></div>
</div>
</div>
            <div id="plan-details" class="mt14">
              	
<div class="container_12_1080">
    <div class="ui-box-white-bg  fn-clear pl25  pr25">
      <div class="ui-box-title fn-clear">
        <h3 class="fn-left fn-text-overflow text-big">计划进度</h3>
        <a class="fn-right text ui-box-text" href="/help/invest/invest!detail.action?flag=jryxlc" target="_blank">如何加入U计划</a>
      </div>
  	  <div class="plan-progress fn-clear pl15">
    		<div class="step step-one plan-progress-current " mm="4">
            <div class="step-bg step-pass-bg fn-clear">
              <span class="step-bg-1"></span>
            </div>
            <p class="step1"><span>U计划发布</span></p>
            <div class="progressbar"></div>
          </div>    
        
          <div class="step step-two plan-progress-current">
            <div class="step-bg step-pass-bg fn-clear">
              <span class="step-bg-5"></span>
            </div>
            <p class="step2"><span>开始加入</span><br />06月07日 18:53</p>
            <div class="progressbar"></div>
            <div class="end-time">
	           		             	
	                
	                    <span>剩余时间</span>
	                    <span><em>4天9时32分13秒</em></span>
	                
            </div>
          </div>
        
        
		
        
          <div class="step step-three fn-clear">
            <div class="step-bg fn-clear">
              <span class="step-bg-6 "></span>
            </div>
            <p class="step3"><span>进入锁定期</span><br />06月12日 18:53</p>
            <div class="progressbar"></div>
          </div> 
        
        
        
          <div class="step step-four fn-clear">
            <div class="step-bg fn-clear">
              <span class="step-bg-7"></span>
            </div>
            <p class="step4"><span>到期退出</span><br />2017年06月12日</p>
          </div>
        
      </div>
    </div>
  </div>
                
<div id="wdg-u-detail-tab " class="mt14">
  <div class="container_12_1080">
      <div class="ui-tab ui-tab-transparent" id="plan-tab">
        <ul class="ui-tab-items fn-clear">
          
          
              <li class="ui-tab-item  ui-tab-item-4 ui-tab-item-current" data-name="intro">
          
                  <a class="ui-tab-item-link">计划介绍</a>
              </li>
          
          
          
              <li class="ui-tab-item ui-tab-item-4" data-name="joined">
          
                <a class="ui-tab-item-link">加入记录</a>
              </li>
          
          
              <li class="ui-tab-item ui-tab-item-4" data-name="performance">
          
                  <a class="ui-tab-item-link">计划表现</a>
              </li>
          
          
              <li class="ui-tab-item ui-tab-item-4" data-name="question">
          
                  <a class="ui-tab-item-link">常见问题</a>
              </li>
        </ul>
      </div>
  </div>
  <div class="container_12_1080" id="plan-tab-content">
      <div class="ui-box-white-bg">
        <div class="ui-tab-content ui-tab-content-current pt10 plr60" data-name="intro">
          <table class="ui-table ui-table-light-blue">
            <tbody>
              <tr >
                <th width="20%">名称</th>
                <td>U计划-C160607-2期</td>
              </tr>
              <tr class="dark">
                <th>计划介绍</th>
                <td>U计划是WE.COM平台为您提供的本金自动循环出借及到期自动转让退出的投标工具，并由系统为您实现分散投标，更好的满足您多样化的理财需求。该计划所对应的借款均100%适用于人人贷WE理财用户利益保障机制，安全性高。您出借所获得的利息收益可选择每月复投或由您自行支配。详情参见<a href="/static/misc/u-plan-intro.pdf" target="_blank">《人人贷U计划说明书》</a></td>
              </tr>
              <tr >
                <th>投标范围</th>
                <td>机构担保标、实地认证标</td>
              </tr>
               <tr class="dark">
                <th>收益处理方式及<br>预期年收益</th>
                <td>
                
                <dl>
                   
                        <dd>1.收益再投资 9.16%</dd>
                        <dd>2.提取至账户 8.80%</dd>
                         <dd><font color="#ff0000">*</font>一经选择，无法修改。</dd>
                    
                    
                  </dl>
                </td>
              </tr>
               <tr>
                <th>锁定期</th>
                <td>12个月</td>
              </tr>
               <tr class="dark">
                <th>退出日期</th>
                <td>2017年06月12日 </td>
              </tr>
               <tr  >
                <th>加入条件</th>
                <td>加入金额10,000元起，且为10,000元的整数倍递增。</td>
              </tr>
             <tr class="dark">
                <th>加入上限</th>
                <td>2,000,000元</td>
              </tr>
              <tr  >
                <th>开始加入时间</th>
                
                
                 <td>2016年06月07日 18:53</td>
                
              </tr>
              <tr class="dark">
                <th>到期退出方式</th>
                <td>系统将通过债权转让自动完成退出，您所持债权出售完成的具体时间，视债权转让市场交易情况而定。</td>
              </tr>
               <tr>
                <th>提前退出方式</th>
                <td>锁定期内支持提前退出，详情参见<a onclick="javascript:window.open('/financeplan/getDemoFinancePlanContract.action?financePlanId=2745','','dialogWidth=1024px;dialogHeight=768px,status=0,toolbar=no,menubar=no,location=no,scrollbars=yes,top=20,left=20,resizable=no')" href="javascript:void(0)">《U计划服务协议》</a>。</td>
              </tr>
               <tr class="dark">
                <th>费用</th>
                <td>
                  <dl>
                    
                    <dd>加入费用：<font color="#fe974a">0.0%</font></dd>
                    <dd>管理费用：参见<a onclick="javascript:window.open('/financeplan/getDemoFinancePlanContract.action?financePlanId=2745','','dialogWidth=1024px;dialogHeight=768px,status=0,toolbar=no,menubar=no,location=no,scrollbars=yes,top=20,left=20,resizable=no')" href="javascript:void(0)">《U计划服务协议》</a></dd>
                    <dd>退出费用：<font color="#fe974a">0.0%</font></dd>
                    <dd>提前退出费用：加入金额 x <font color="#fe974a">2.0%</font>，详情参见<a onclick="javascript:window.open('/financeplan/getDemoFinancePlanContract.action?financePlanId=2745','','dialogWidth=1024px;dialogHeight=768px,status=0,toolbar=no,menubar=no,location=no,scrollbars=yes,top=20,left=20,resizable=no')" href="javascript:void(0)">《U计划服务协议》</a>
              </dd>
                    
                    
                  </dl>
                </td>
              </tr>
              <tr>
                <th>保障方式</th>
                <td>100%用户利益保障机制</td>
              </tr>
              <tr class="dark">
                <th>服务协议</th>
                <td><a onclick="javascript:window.open('/financeplan/getDemoFinancePlanContract.action?financePlanId=2745','','dialogWidth=1024px;dialogHeight=768px,status=0,toolbar=no,menubar=no,location=no,scrollbars=yes,top=20,left=20,resizable=no')" href="javascript:void(0)">【点击查看】</a></td>
              </tr>
            </tbody>
          </table>
        </div>
 			 
        <div class="ui-tab-content pt10" data-name="joined">
        	<div class="text-right text color-lightdark-text mb10 pr25">
            <span class="mr50">加入总人次 <em id="joined-count"></em>人</span>
            <span class="mr10">加入金额 <em id="reserve-had-pay-amount"></em>元</span>
          </div>
       	  <ul id="joined-records" class="ui-list ui-list-s"></ul>
        </div>
        
  
       <div class="ui-tab-content pt10" data-name="performance" id="J_NEW_PRO_DIV">
       				<div class="ui-performance-div">
								<div class="ui-performance-content">
										<div class="ui-performance-bg"></div>
									  <div class="ui-performance-box ui-performance-box-left ui-performance-box-left-1">
	       	 			  		<ul>
	       	 			  			  <li><dl><dt>发布时间</dt><dd id="J_PER_FBSJ">&nbsp;</dd></dl></li>
	       	 			  			  <li><dl><dt>计划金额</dt><dd>7,000,000</dd></dl></li>
	       	 			  		</ul>
	       	 			  		  <img src="/TP/one/Public/images/u-details_07_7169b9f.jpg" class="arrow left-arrow"/>
	       	 			  			  <img src="/TP/one/Public/images/u-details_02_2beaea1.png" class="box-img box-left-img"/>
       	 			  		</div>
       	 			  		<div class="ui-performance-box ui-performance-box-left ui-performance-box-left-2">
	       	 			  		<ul>
	       	 			  			  <li><dl><dt>自动投标</dt><dd id="J_PER_ZDTB">&nbsp;</dd></dl></li>
	       	 			  			  <li><dl><dt>帮助借款用户</dt><dd id="J_PER_BZJKYH">&nbsp;</dd></dl></li>
	       	 			  		</ul>
	       	 			  		 <img src="/TP/one/Public/images/u-details_07_7169b9f.jpg" class="arrow left-arrow">
	       	 			  		 <img src="/TP/one/Public/images/u-details_09_3eeb877.png" class="box-img box-left-img box-left-img-2"/>
       	 			  		</div>
       	 			  		<div class="ui-performance-box ui-performance-box-left ui-performance-box-left-3">
	       	 			  		<ul>
	       	 			  			  <li><dl><dt>为用户赚取</dt><ddid="J_PER_BZJKYH">&nbsp;</dd></dl></li>
	       	 			  		</ul>
	       	 			  		 <img src="/TP/one/Public/images/u-details_07_7169b9f.jpg" class="arrow left-arrow">
	       	 			  			<img src="/TP/one/Public/images/u-details_06_6462739.png" class="box-img box-left-img box-left-img-3"/>
       	 			  		</div>
       	 			  		<div class="ui-performance-box ui-performance-box-right ui-performance-box-right-1">
	       	 			  		<ul>
	       	 			  			  <li><dl><dt>加入人数</dt><dd id="J_PER_JRRS">&nbsp;</dd></dl></li>
	       	 			  			  <li><dl><dt>满额用时</dt><dd id="J_PER_MEYSJW">&nbsp;</dd></dl></li>
	       	 			  		</ul> 
	       	 			  		 <img src="/TP/one/Public/images/u-details_08_2c1ce36.png" class="arrow right-arrow">
	       	 			  			<img src="/TP/one/Public/images/u-details_03_c858991.png" class="box-img box-right-img box-right-img-1"/>
       	 			 			</div>
       	 			 			<div class="ui-performance-box ui-performance-box-right ui-performance-box-right-2">
	       	 			  		<ul>
	       	 			  			  <li><dl><dt>借款人地域分布</dt> 
	       	 			  			  		<dd id="J_PER_DYFB">
							                   <p>&nbsp;</p>
							                </dd>
	       	 			  			  </dl></li>
	       	 			  		</ul> 
	       	 			  		 		<img src="/TP/one/Public/images/u-details_08_2c1ce36.png" class="arrow right-arrow">
	       	 			  			  <img src="/TP/one/Public/images/u-details_05_028a142.png" class="box-img box-right-img"/>
       	 			  		</div>
       	 			  	</div>     	 			  		
       	 				</div>
       	 </div>
  
  
        <div class="ui-tab-content plr35 pd30" data-name="question">
  				<ul class="question_ul">
            <li>1. U计划安全吗？
                <p>人人贷WE理财以严谨负责的态度对每笔借款进行严格筛选。同时，U计划所对应借款100%适用人人贷WE理财用户利益保障机制。</p>
            </li>
            <li>2. U计划发布时间？
                <p> 
                    
                    
                          自2015年8月13日起，U计划发布机制改为每个工作日上午10:00发布，同时根据用户投资情况在周末与法定节假日随机发布U计划，并可能灵活调整限额，具体发布时间您可在人人贷WE理财官网首页查看。
                    
               </p>   
            </li>
            <li>3. U计划收益有多少？
                <p>
                    
                    
                          U计划分为三种，
                            U计划A收益期3个月，预期年收益6.2%；
                            U计划B收益期6个月，预期年收益7.5%；
                            U计划C收益期12个月，预期年收益8.8%。
                    
                   
               </p>
            </li>
            <li>4. U计划收益处理方式是什么？
                <p>
                    U计划提供以下两种出借所获利息收益处理方式：再出借，或由用户自行支配。用户在加入U计划时可进行选择，暂不支持中途修改。
                      
                    <br>
                  另外，在U计划退出后，债权转让所得资金及借款回款本息将返回至用户的民生银行存管账户，供用户自行支配。 
                </p>
            </li>
            <li>
                  
                 
                     5. 收益期是什么？
                    <p>U计划具有收益期锁定限制。收益期内，您可操作提前退出，但会产生相应费用，提前退出费用=加入计划金额*2.0%。锁定期满后自动退出。</p>
                   
            </li>
            <li>6. U计划到期后，我如何退出并实现收益? 
                <p>U计划到期当日，系统将自动通过债权转让为您收回出借本金，转让完成时间一般为1~3个工作日。
                      
                </p>
            </li>
            <li>
              人人贷WE理财仅为信息发布平台，未以任何明示或暗示的方式对出借人提供担保或承诺保本保息，出借人应根据自身的投资偏好和风险承受能力进行独立判断和作出决策，并自行承担资金出借的风险与责任。市场有风险，投资需谨慎。
            </li>
          </ul>
        </div>
   </div>
</div>
</div>
 
            </div>
            <div id="pg-helper" style="display: none;">
                <span id="pg-helper-plan-id">2745</span>
                <span id="pg-helper-is-investor">false</span>
                <span id="pg-helper-be-investor-message"></span>
                <span id="pg-helper-has-withdraw-password">true</span>
                <span id="pg-helper-success-hint"></span>
                <span id="authenticated">false</span>
            </div>
        </div>
        
    
        </div>
        <div class="pg-container-content"></div>
        
            
<div class="ui-footer" id="footer">
  <div class="main-section">
    <div class="ui-footer-section ui-footer-narrow-hide fn-clear" style="width: 1150px;">

  <h4 class="color-gray-text text-big fn-left w100">友情链接</h4>

  <ul class="ui-footer-links fn-left friendlink">

    <li class="fn-left">

      <a class="gray" target="_blank" href="http://www.we.com">人人贷</a>

    </li>

    <li class="fn-left">

      <a class="gray" target="_blank" href="http://bbs.we.com">理财论坛</a>

    </li>

    <li class="fn-left">

      <a class="gray" target="_blank" href="http://www.rong360.com/licai/">融360理财</a>

    </li>

    <li class="fn-left">

      <a class="gray" target="_blank" href="http://bbs.kjj.com">酷基金论坛</a>

    </li>

    <li class="fn-left">

      <a class="gray" target="_blank" href="http://fenlei.baike.com">微百科</a>

    </li>

    <li class="fn-left">

      <a class="gray" target="_blank" href="http://www.asiafinance.cn">亚洲财经</a>

    </li>

    <li class="fn-left">

      <a class="gray" target="_blank" href="http://www.wangdaiabc.cn">网贷ABC</a>

    </li>

    <li class="fn-left">

      <a class="gray" target="_blank" href="http://www.dimeng.net">P2P系统</a>

    </li>

    <li class="fn-left">

      <a class="gray" target="_blank" href="http://www.chuangtianxia.cn ">创业者</a>

    </li>

    <li class="fn-left">

      <a class="gray" target="_blank" href="http://www.angelclub.com">天使客</a>

    </li>

    <li class="fn-left">

      <a class="gray" target="_blank" href="http://www.tianshijie.com.cn/">天使街</a>

    </li>

    <li class="fn-left">

      <a class="gray" target="_blank" href="http://news.smm.cn">贵金属资讯</a>

    </li>

    <li class="fn-left">

      <a class="gray" target="_blank" href="http://www.wangdaigw.com   ">网贷港湾</a>

    </li>

    <li class="fn-left">

      <a class="gray" target="_blank" href="http://www.wquant.com ">微量网</a>

    </li>

    <li class="fn-left">

      <a class="gray" target="_blank" href="http://www.chemayi.com">互联网车险</a>

    </li>

    <li class="fn-left">

      <a class="gray" target="_blank" href="http://www.trust-one.com">信托投资</a>

    </li>

    <li class="fn-left">

      <a class="gray" target="_blank" href="http://www.jiedai.cn"> 借贷网  </a>

    </li>

    <li class="fn-left">

      <a class="gray" target="_blank" href="http://www.dib66.com">地标金融 </a>

    </li>

    <li class="fn-left">

      <a class="gray" target="_blank" href="http://www.cpiaoju.com">云票据</a>

    </li>

    <li class="fn-left">

      <a class="gray" target="_blank" href="http://99dai.cn">99贷</a>

    </li>

    <li class="fn-left">

      <a class="gray" target="_blank" href="http://www.lvhuadai.com">绿化贷</a>

    </li>

    <li class="fn-left">

      <a class="gray" target="_blank" href="http://www.qianxiangbank.com">钱香金融</a>

    </li>

    <li class="fn-left">

      <a class="gray" target="_blank" href="http://www.cnaidai.com">爱贷网</a>

    </li>

    <li class="fn-left">

      <a class="gray" target="_blank" href="http://www.tuandai.com">团贷网</a>

    </li>

    <li class="fn-left">

      <a class="gray" target="_blank" href="http://www.auagm.com">贵金属公司</a>

    </li>

    <li class="fn-left">

      <a class="gray" target="_blank" href="http://www.hhrfs.com ">合伙人</a>

    </li>

    <li class="fn-left">

      <a class="gray" target="_blank" href="http://www.yunxindai.com">云信贷理财</a>

    </li>

    <li class="fn-left">

      <a class="gray" target="_blank" href="http://www.btctrade.com">比特币</a>

    </li>

    <li class="fn-left">

      <a class="gray" target="_blank" href="http://group.ppdai.com">拍拍贷</a>

    </li>

    <li class="fn-left">

      <a class="gray" target="_blank" href="http://www.ycb.com">银承宝</a>

    </li>

    <li class="fn-left">

      <a class="gray" target="_blank" href="https://www.tzg.cn/">铜掌柜</a>

    </li>

    <li class="fn-left">

      <a class="gray" target="_blank" href="http://www.renrencaopan.com">人人操盘</a>

    </li>

    <li class="fn-left">

      <a class="gray" target="_blank" href="http://www.wangdaishequ.cn/">网贷社区</a>

    </li>

    <li class="fn-left">

      <a class="gray" target="_blank" href="http://www.daicash.com">贷金所</a>

    </li>

  </ul>

</div>

    <i class="icon icon-footer-snow-down"></i>
    <div class="ui-footer-section ui-footer-links second">
      <ul class="fn-clear">
        <li class="fn-left">
          <h4 class="color-gray-text text-big w100">
            <a class="gray" target="_blank" href="/about/about.action?flag=intro">公司介绍</a></h4>
        </li>
       
        <li class="fn-left">
          <a class="gray" target="_blank" href="/about/about.action?flag=report">媒体报道</a>
        </li>
        <li class="fn-left">
          <a class="gray" target="_blank" href="/about/about.action?flag=responsibility">社会责任</a>
        </li>
        <li class="fn-left">
          <a class="gray" target="_blank" href="/about/about.action?flag=invite">招贤纳士</a>
        </li>
        
        <li class="fn-left">
          <a class="gray" target="_blank" href="/help/index.action">帮助中心</a>
        </li>
        <li class="fn-left">
          <a class="gray" target="_blank" href="/about/about.action?flag=contact">联系我们</a>
        </li>
      </ul>
      <ul class="fn-clear icons">
        <li class="fn-left">
          <h4 class="color-gray-text text-big w100">客户服务</h4>
        </li>
        <li class="fn-left"><a id="wexinBtn" class="gray" href="javascript:;" tabindex="-1">
          <i class="icon we-chat"></i>微信</a></li>
        <li class="fn-left"><a class="gray" target="_blank" href="http://e.weibo.com/renrendai?ref=http%3A%2F%2Fwww.renrendai.com%2F"><i class="icon weibo"></i>新浪微博</a></li>
        <li class="fn-left"><a class="gray cursor-pointer" target="_blank" onclick="online_service();"><i class="icon online-customer-service"></i>在线客服</a></li>
      </ul>
      <ul class="fn-clear service">
        <li class="fn-left">
          <h4 class="color-gray-text text-big w100">客服电话</h4>
        </li>
        <li class="fn-left ui-footer-phone-number">400-090-6600</li>
        <li class="fn-left">9:00 - 21:00</li>
      </ul>
      <div class="weixin fn-clear">
        <dl class="fn-left">
          <dd><img src="/TP/one/Public/images/we-weixing_334069c.png" alt=""></dd>
          <dt>关注微信账号</dt>
        </dl>
        <dl class="fn-left app-down">
          <dd><img src="/TP/one/Public/images/app-weixin_32107fa.png" alt=""></dd>
          <dt>下载手机app</dt>
        </dl>
      </div>
    </div>
    <div class="ui-footer-section">
      <div class="ui-footer-copyright">
        <span class="ui-footer-contact-link color-gray-text">© 2016 人人贷 All rights reserved</span>
        <span class="ui-footer-contact-link color-gray-text has-separator">人人贷商务顾问(北京)有限公司</span>
        <span class="ui-footer-contact-link color-gray-text has-separator"><a class="gray" target="_blank" href="/icp/icp.html">京ICP证 100953号</a></span>
        <span class="ui-footer-contact-link color-gray-text has-separator">京公网安备11010502020657</span>
        <span class="ui-footer-contact-link color-gray-text has-separator last">京ICP备12025643号-1</span>
      </div>
      <div class="ui-footer-warn"><span class="color-gray-text">市场有风险  投资需谨慎</span></div>
      <div class="ui-footer-verification fn-clear">
        <a class="ui-footer-verification-item fn-left credibility" title="人人贷WE理财荣获中国电子商务协会“诚信网站”认证殊荣" id='___szfw_logo___' href='https://credit.szfw.org/CX20151016011685230181.html' target='_blank'></a>
        <a class="ui-footer-verification-item fn-left trust" id="kx_verify" href="https://ss.knet.cn/verifyseal.dll?sn=e15112011010561538m3ux000000&ct=df&a=1&pa=0.6757671611849219"title="人人贷WE理财已通过中网权威数据库对比，获得“可信网站”身份验证，您可放心使用。"  target="_blank">
        </a>
        <a class="ui-footer-verification-item fn-left internet" href="http://si.trustutn.org/info?sn=339151201000317676777" title="人人贷WE理财已通过认证联盟权威数据库对比，获得“互联网金融行业认证”，您可放心使用。" target="_blank"></a>
        <a class="ui-footer-verification-item fn-left itrust" title="人人贷WE理财已经成为中国互联网信用评价中心网络诚信联盟成员，并且完成企业信用评级 " href="http://www.itrust.org.cn/Home/Index/itrust_certifi?wm=1012817080" target="_blank"></a>
        <a class="ui-footer-verification-item fn-left norton" title="人人贷WE理财已引入VeriSign SSL加密技术，您的隐私及个人资料安全已受最高级别的保护。" href="https://trustsealinfo.websecurity.norton.com/splash?form_file=fdf/splash.fdf&dn=www.we.com&lang=zh_cn" target="_blank" ></a>
        <!-- <a class="ui-footer-verification-item fn-left police" title="人人贷已经完成在公安机关的信息备案，您可了解网站相关备案信息。" href="http://gawa.bjchy.gov.cn/websearch/" target="_blank"></a>
        <a class="ui-footer-verification-item fn-left gongshang" title="人人贷已经完成在北京市工商局网站备案，您可了解网站相关备案信息。" href="http://www.hd315.gov.cn/beian/view.asp?bianhao=010202013052900002" target="_blank"></a> -->
      </div>
    </div>
  </div>
</div>
<ul class="fixed-download-goBack">
  <li class="fixed-calculator">
    <a class="fixed-icon" target="_blank" href="/lend/calculator.action?prodType=Loanplan"></a>
  </li>
  <li class="fixed-service">
    <a class="fixed-icon" href="javascript:" onclick="online_service();"></a>
  </li>
  <li class="fixed-download">
    <a class="fixed-icon" href="javascript:"></a>
    <div class="download-app-wrap-opacity">
       <div class="fixed-arrow"></div>
    </div>
    <div class="download-app-wrap">
      <h2>人人贷WE理财APP下载</h2>
      <div class="fn-clear">
        <div class="ewm-big">
          <img src="/TP/one/Public/images/.com/financeplan/2745/data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIwAAACMAQMAAACUDtN9AAAABlBMVEX///8AAABVwtN+AAAB1klEQVRIx63VPY7kIBAF4GdVQNZcwDLXcIDElRw6g4ywr4TkwNfA8gVwRoD8NhjNbDjeZiv8gifVj1TAp2XIMpD1yhLLQLKDJmCBsPJkLEeCfkyuLjccmYVl2PjuJJ57KCYp/a8Ek1QZpZajk4DFnHu9sl0x/LT9ERmyHOceX6Ndy/Ez+98JAExTldyo89+Nf0RSvWkqQkhkuPCUho3vI0MxAzBbRQ8lX8yZfDEbYZh0B5mkwi17ZbMrTXLhMTV4NheYsYJtRgfBVT1hVi8I9S17eUqTkNPowkVGPWxkBwGrBlQc2FY9OYYOmlz1A/dKNo8hqcdkknpnqWpoUnlbVzoIdl2GrOItGzUs9FMamn9jxHqRLBnz0ke8xxk8twpuVf8DBTYVi5DMjqGDYD2PPK/XyaizVN1DUpHNHpkl6sk6PiYLf2TF12g94L7iP6TJxfc0qlgkqTIkF56Saas3JC+yEo7vDppc1ZC9vgwDslVdZNeFeQakKU1W/5QAIMse2CxKFpYOMmS5MeMeheXYvt/J7zQBiyHjS5Jnlrr0kKtLHueV5xZIJt9LcAGj9Tja1008pYHJF2HE7b6zPiNgMdx5j1IBt/MpGbLAVFzNVWTMuoP+Y/0BZ3Vx/2T1cjwAAAAASUVORK5CYII=" alt="二维码" />
        </div>
        <div class="download-btns">
          <a target="_blank" class="ios" href="http://itunes.apple.com/us/app/id883561142?mt=8"><img src="/TP/one/Public/images/.com/financeplan/2745/data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAL4AAAAsCAYAAADb2gLVAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6RDUzMEVBODczMUU2MTFFNThGNjhBQTlFQTQ4QTlBMzYiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6RDUzMEVBODgzMUU2MTFFNThGNjhBQTlFQTQ4QTlBMzYiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpENTMwRUE4NTMxRTYxMUU1OEY2OEFBOUVBNDhBOUEzNiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpENTMwRUE4NjMxRTYxMUU1OEY2OEFBOUVBNDhBOUEzNiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PqnSjxsAAA9QSURBVHjarV3Nj1xHEX8n/xf9hAQcQOKEuNiHADcuKCAOcIADgROXiHBHioUECKFaAka2II5BCNsIZBMwRkJ2oi07TtaOQ+xk17FhHZusI3vXiWMbf2E/pt5Mz7x53VX167d50uzMzrzP7urqX/3qo6uFxXrLwmJYGL1vjF7NAo9e8r4YJu/x8+QVf5/uN/uf4jH936bH586dOR/3ju3/j3zmevbKXaf3nNQ9vvMb5e613yb98ybH5889/13ItEFInyfTRpTrH+3FyHP1z53uR14fquf3X9R97ukzeecLjsy193d9IutbqtEf0g/oCUW/01i7eLBvMOnooN/sItKY2nHpwCDr/KwNtrrsnqyO0pSCpSx4vs2p10eUVQCgouFU6Kh3T9QfwP2BzXX2N/eZNdlgQyH0FY7yfKTsM2mrH1ZTTZ8RaDIFMSdIAXpIygyuXMeQqu1DMhgpEYz+PYbscd3rkzbglYFGOS3DijbPaX91sIasgFJyX6AAqQLYEWrWNHkwBA7vd0IHpDYDsC7YeRk0z71RecKXbQy2hSKvHQBtaA62YGjK/uyBNm66r37vqSbMt1PQtfViDg4pGpFLZz2rnRT4VApDGJxV2FF6DvwkSyFwqlDSttcHetynymI2RqZnTWMCWJN1LUCO0FNH05I5uBzN7M5gwcC7DgQEZsfk2dmBYSqcyUGeUAY9F3UIa7VdHot78MbC4gaM6UM81m1Aymr9+baoTIOFNSO31huIndGd7JtOU+nvAdNo6igv0JzsncMQOvbsGs2QD2Y7uhqMhzx70PuWaxN+kjNYckJPGvxC7S+0P7mGEEOFafXahTqJttdYE2cgkGqo1AX40hKI/DRNELzyBY2MQUomc+MNMkv5hE2yJwpLBbVfKGDwPJumd23NaGaPCFHukRWNb2orp8PIneoKtKBrNBnUYBE+NvB97ll5mA1BfVrSExhjmk7gEqPaHbSfuIDizFCulIUuJYNTp1MpK8gaWWIb/dVCtlN8Oor6DAk7BhHrPK8mcOYD5WivHPWmNJaON/NaA7UnFjJUoOkX0ahUBmFZIf9u+U5stigMnFmCYwwHx4jGYC5Bhu3st8rTGpSFLiFjDJdMb34n6gJsCGUiUEE3qtmjVo1OYsDxwo5wWo4kx8agEqOVPXoRdEaxcm1XkWhUYwAHSO0rDvbtFEoxfjmTQFkBCzYW1ZwJ7BusZExjZGFe1lgJZ7ZBNBRrRjHCPKRGMuUgEWMGNmmOpaLZwNPAIe/4AmzDXB8Q6FQjl5WzfDO6c7DS2YRgurxzXlz4Bq2GYb2zCJjyyTCwbW0acEHwNJQWTuBdk4ewUahjTBc8KmHNrD5jx1NvykTPRuAa8IhjHvYcTK1MViQrdAFwQJUYjjUGU5TXwTe+3azdON2cX/87ZoDnnEzmwPY6YCAjZPhO/LCKAMbdGD4E9vog2DFH6OBVHE7QoOYSxxvCLs1myMo32EADd9EJLANvXo07yfDdL/77B03cli7vBOBNMGaXdECQCdVC3uDlGsaZkPHoBb3BMUOWTyUU3ONQL3IwDGkgpGLRosc9/1PanlWZixoLNEKgi+bxxfBgaJ47+fnm0aOHrdD/7+Hd5rmlx2AmAu7cyb0fPPuUognr4UwK236Bk5f3QQK0Z+lLjgAF0FP9Ib5Y0dKs2HVKm5ACqfXnCJiTtYU6DIxergFaCZjyATc2gQFixy7SROjvNYdWnizWpLrGmW/A46vPttc5vvrrRPj3LD3enLq8v7lyY2X0Wm4uXj/ZHL1A6tQv+59Z+2u779r7y83ZtUPtd/Fe5LvxIKvba8ZrHb2w0Jy8tK+9llxD9tu4fWk62x1e2Z5qb9ZnMj8yNJ1hIMciI7Rm8MPS3TgjazAEB8p1Pbc85EFqNTrSw2W+Wz6d3n55/FPNr17Z1vxs8SPtd4fPfa95+dKOZvfS50avx5rfnf5is/PEpw27BGQuetBi7+lvtoK677Un5s599DxNBW/j1tutMN68t97+vz76f29nf3mJ8MYtDpR7D/7bHhf3ke/mBT9+v9Kcu/piK/gyExxe3t7uJ6+dL20tm3m4Bu2RwjAPxEhnz2sMUJnebMZYG1RQvI3HhrDhFeSSgZTOKs+/+Z3m3Ztnp0Jz+/5G8/qVvc2h5Sebly/vaN6/c7Hpbu988OpISL+SZQ0oO4WWhBCMX6Jho8CPBXz2fMcvPjsV/p0vbWu/k/d2/5GW3jX5bg5G8UzwD5z5bnt/fcGPAwILGCsJZQhGjJat8f0w4ADDXUu7I/ZAdiBxJimJezw+4kixEx50Plx1MLHNChxb/WkzZHvYPGj+8M+vqo4N246YNwZ3ndjWHGg167bp/jfvXmu19Z5XHs9idYElXXgkx8sm31tQT4M64wHxlMm9k5K0grAdBDJpFgylRAEiMT1WzsUAo7mAIq4gVzh7PHcaOwHNFAbN9fvXvjzq+keDBH/l6vPNz/njKtyiAo/nwYnQiibu/i9YXbNTooYXgY3YfjYLbFXxqAh+f5PBkvu+u0H91w8dMeKtSMuOY4BOZC9URUETpbOCxkZx7adVpqxOKBxxdsyJGQ7B1pQZRsL7l0FCv357pXmGP+aGQ6Bhu1FbR2YnavPDy0+btJsI/UwoQztQZJOZ4sh5yrbzTLPP/3ZlMhPMZoEJ5Bph/Zt311M4hzrgGKAqubaDzjjX11aQWjANUxs2AemGjEUSVKYGdBNQgupmLvPMpgPu1v1rgwT/yIXvA8YT6AThVONHwU+gR8+onwn+7LpiG4igyibvkY2J9xsxfl/gotErNsLe009Mr3Vm7VBr9M5rddwBiKcDhjIqM9PfXiECP1koqBlghKaxqlDHM0SRYLaS0W00+NDtj2e+brvOGXBIdb4/2NX4XHc0/nZTKcxr/PnfhfIUzS+bsD2xbQTSnLv6QnuNrj0QjVuhP8d2w7i9hUX6W2/myUdchqyzLpvwwzWuIHjzg4UKnWJWcpOmcHO2aeVdjDznBw98cCfVLjqnSjehOeFqA+y7ykWzz6BODuOnWm6K8TtUZV8oZZ9If0b2RwaLaPA4uLpsj1xXZogPRob1DOZcM/IaDAOeLUcTEK7AZYYk5iANTrJPSQxRcFMxqyxN5Ma51EAUIVLyQeeAb9x5Z5Dgr15/AaD88KwdgR5djC/fiba+++D2mJrMaJRTl/dNtDmZhlwU8Diopjw+13OC3zJIIwNZPovgi5YX2CPUqZtDwXj6IQEMnZ2ZZYR4w+mc3uwCZI5lk3+yUCek0x0DsepGTi4hHK5Bl567dmgw3Dl64emBqXxp584w/gzTH5k4r4TH/80kZCDee/T0imDG/YXrn/Pottz+1qn3NZ5DBDx+joIv/3dtBRH6KWPEYAi1S2AEs2yHpjlhmMIGHc4FNgZbcflloRcVeQexl2jtaFMXCs2C3br3IpBlM9vy1T+Xp91lPucEv6uto5ALrIm4fePWpTneXwRfNpklBMevdfaNkEkGQtcmiJ/FQ/z29ZPTe4oeYzGOD3ScWiVCSG4IdvDLfCAVJdhACsUxQkhxgACkY/YwPmm5oVDVgeDGXUOJH53jf3HsE82d++8NFvyL77FpfJk1cjrPLBBDhLx1VvXuV7SxCK4Ismjgt0b4fKzZ0/NKyIMYp2Koyv5y3BQ+8dgbLDNIbIMo+GIHiAEs15I4HcH1MpAiPSrXzAWqkRVPxR41HcBY/KDA5HrgzI84FgsrLrAp+ANqrwwOVw2wMbS4+uPBgr//9a9tsoajxUsHfTZkFFbMC5gIcNT+MWRBBpEIurzLbCG/j2eS8b2JxpeBIUwQmrboMnOgY48Qj6wDu8jNlEISegIGrbhWMH6RKxhzfpBVQYz9agrPHPtoc/XWm8VCf/bd/RltgRi5iHOlBmNTgm349dpBBDoasNFxJu/ynRjR01id3mCU49JANcQ28wPXcrH6qt3XS+ChUjjDaNoiQo/6uL/Srd9gTEMFCeSMxGbosGP30mebOw9wyHPt1nKz4/gn8Yg+roGsKI+2CwaT4pQ+9CrZsU8JE9g3lpY2E1K4LkADdjINVmqldthCLZMNz/qriiL4GA1gKykI5Rdc+u2pL0wiNB8167ffao6t/qT505lvNAfe+Fbz6n92t9Tnw0cPmn9d/0ez68RnGr0qc20Wm7VT1jz/Q0EhKbdqXQBSKG1CgbSEdDh9z3Jo2eW7ydO4SPVktiJODcjJWG505TI6BR1SnKScEyi2Aqa8sAc8h4AGeRaDWxXAL5cd7Nr8ULyTInhszaDltXmworYF2Bsu+Y7bhhpZQg7rWJFVBVgNAEKcDwFMGggu5KCSeA63lg3m5YRoNzi/AF2wYYD3s1iAClg2x4BdMBkir8KyVpsp4IqJhw+wKimyxGiiApqUYOeqElq+wys3zt7KIUCFhaJsI7yoUy5WnoDqFnhCvrEqC6MVFvSaQKQKbRhQUKCwndnKCQi2c8woZ1KZWhCil8BFCUwXcgkO1Ve78FbmIJNzLqtNQ4VRnoOWzrEqLPBmUgytMuN4SfVBqY2cCR9my7vrl0cvqs/KViKKy+aUVsTF4kVy9CMNODehFBxYfKjouJJ6McUx8sA0zyVtNYRyrAurTITCkiLzpATGLoGFxjrnq1xNwFgDuVAJXSKIvfACoG5iaaqdW8E4FMSHB6PshVNOUYOHQBYTDSAasIR/vXrGsNIkwfYjACEuVgYfJW2WRxiVRa+RuvABkueY52v9lVcCGO+tr3sFl+3jIfhzMx7IgtnEKgbl0neFRjq8AEaBL8OFdQGghgHli4bWcL+EIDt0HNDgWWaIh7EMWa3DSP7v0FLUSNk5J5jN5Y6DT8MCWpmKDEY8KIygMohOHM2HUuEZl5ussmEgm5CnGh8IReiNKtKwOZwvWWOLwLFvUPqOoABPucjqeX4d9pAVppIKxVTM7NSFqzgO593JWFHRzYBiW3urjBNjlT5KKl/3lvtEVucAQ5C9BBVWokJLOhvRCowb11jSvOcsKV2xEIQRBQk/Q4xmKiwTicXRI36BUsIiZebI8xKnVPdGb4Hn4FYL9ktKB7PClRvdONgJNDD0AowEJHW5yXnhz2s3sPS6FqfCfs17NLYHX11RL9OOOjzdBfHcpJcAeWHN8+fZpB+J4G9plzlvlztH4u+ddYkKp24vHZGMdVrN6Z5RLBtg5xay3CRMh7IH1zCnG5lBW47hx0rhVWhl9lA0cFxiBFwbgIoW7UtmapHxBZH5/wMEtUgCDrrGhwAAAABJRU5ErkJggg==" alt="ios下载" /></a>
          <a target="_blank" href="http://www.we.com/event/download.action?type=apk"><img src="/TP/one/Public/images/.com/financeplan/2745/data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAL4AAAAsCAYAAADb2gLVAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6RTVGMUNCRjQzMUU2MTFFNUE3OEZEOUYyRkJDNUU0N0MiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6RTVGMUNCRjUzMUU2MTFFNUE3OEZEOUYyRkJDNUU0N0MiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpFNUYxQ0JGMjMxRTYxMUU1QTc4RkQ5RjJGQkM1RTQ3QyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpFNUYxQ0JGMzMxRTYxMUU1QTc4RkQ5RjJGQkM1RTQ3QyIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pkk0AaYAABG5SURBVHjapV1Ljx1HFe6Vf0vVDtYoUiIhECsWZBUQIBbZBYkIZ8EKpFg8VjgSEguUSESqkcZKQDJ2IInjJOCASMxDgnGiIMU5N7bjeXjsmYzfdqdP31t9q6vP+c65Q0s9907f7uruqvP4zqNONXFtdqTbj3f7Tlijtvvs99DvVHzPx5fnjM+d/yadG8o90eh4/VlfX/4/vReN7hurc+U2x79F9Rlo0k7dF5P7pGn/hfr9hXdCz4L6KQpjEsRj8vc46md5XALoxwDpZPrb9Dq5P+c0oozliH6K8U/kGZdrYU7rR5ruzy9HHZOo6oxpY9E5SDVB4sEmgWBJJf5oDPyoA9VOoQmDovfzEGCAQoEmTLXsb5loaoLUz5sSviY06ntHt3Agc1xrZpf7klQBYI1LMBhWZrQJbf2MCX8nVsQRRAKc3mzcESQwTTVgFQHWbUZARDJBjTtwPJCkto8llE4smjbQGYQULSYNFCnf5bEopaJHm9VEOyUunRnt9yWg5QgKqRHzJhKJHwsmUhkbCKmdBktoAnCExPOkQRRhTyKRQ6MyODUzIe0zaifJz6JCNoE5JcIt20VMgpnCIZXFdglqiCgQVDAYPTgFgtb/mrTVaCSqcFjQKolUGszjIDG1BHfyb41OnATwF7XRkOB65wgvnUiUuNPnkaWVjnNnhhbRJYkqldaQZpypsCwAewPi+yT3QQQwKygSH8Ej9V1KwkqEx2VCoGTaTbrgIwjHPHQVAaM1kvSIACJ4jJSwgppE0mcKVwDxJDIkEqmMqTG4R2pp7QaLkRIpmtJjhEpwkoBUlR0LQZGGmuErQxGPdtNsABJsMVLpbKrJNe0naPkKvjVhYtCCF3d4ODB3T3/T1ZNuJKncnAga0F4jTocPBnwzPFzBMOrHdhbBvpt6NmQDVLZtkP2jQQSf5tIEqTz2M+XdkVGs3ZOcRn9J+MDFJuFGHZtZL40kmMTNWBN5XJiaizS63Yw0MSh1DE/QkBRxfqJKa5FqK0QgOT22gQ4zCGhn8knvhJ0JQXWU4P5fxdum24dTYdKMiYxUT050qHPEtcglFoHEtNxukpGsSUNJg2lQLgKpGRRp6LExkJdFercIpf3MtFE0z050ebBIYWpSvXKjZ07IM0Wqdg+W8ErY3akxVNlGY0kWZCwFgMGigykCYLKgwJcAoAaWilNtElf2wiAIN8XCE8M04aAYIswg2jOe4JLsDIiq8Txz+MEJQkhLkGgGcASOEpE5EpkxAI0mG+TG1AzO6Ig82ngNB4A0uyOYsIfUAE0E+DUo0iiq53ncqT7MGqDHiWBAyu5vUiQsAY3gCSqRC+9rMYgItDvSSIjAsa0zvl8ToJqT/d+WKvcOsITDNMv/u29stU+8dlUcvK+/cqV96s/bEMfqga2Z6V+20zhkCYQxszcsf9iouRXtxAyvG8bAnnIZwtNgJ4ZBM8O7JxO4HuSiJeFL0bPgjFpq6hH5pLF61zn4V/+50f7inzfa12YH7bubd9o/0s322fd221//d0+2F5Ic5cR+dFIxeTRctJIHrHa16jEJzd0pS8MI/OpWQMmELCBghJmAXMIwOPoxOoxvFPuxtF6DXjbCQA21HqbxQA8tQao898fv7ra37z9spW3/7oP2h+/srODuItvPjgJuIO9F8nVrLjkrloFcjMhQ9mN3HQpYeT/RSM2IMMKMorAzaL+ZmQQA95dtNJOHTAQzBuWoK6mRQASlIvDrl9f85N1rPYG/+MF+L+XL7eylW+0L7+/3358+tzMdEJVIcCBMS7+QQuUW1LNSGsrfH33pUnv0za32se7Tb3DL8DT//o2Tl/s9Gm7lJ//0afvkq1fFvjn+92vt4yevmFL30Zc+6d/BsvlQ2kUEgUwtcmwKpmoMGytvQ8tlCaJ3wSZm0WJXpCWf98jvLg+S/urN++31Ow9GhL9392F75eB+/323++2LJwDkMGwAyxOQCfPExo32+X/tQqPQi7Pr+zHR83b0zU01dmBL0LHwOug0Iu9awC2fe2HrTnth8/ZwzokLN9r1jev9dRvd8aNnN/vf+JN/43546+Jn3XW3+2vzdurDPZeXys4L0iS4jhaQrToifBi1mxil2OsSDqm+EeQ4dv56u8r21Nvb7ixMOyV6+kzHF9qHt1oCBoeGU6Hdoj+ZqHrCXxCZlVEZHNDt9If7/a7Nl8j37wm4I/Dc5vrGnLgzU8yZkfpjzAj59+e6PuHn5X2pWciVQ2WlqyCcH1yuYbl/Gj00bmF7260ZzdRYXSN8Yf2T/vhX/nCl/dbrm/3+zdeuTj7LnY99uSBG5DEIRpqD9l484O9dmsOtTBTRUKu+gN38WZi4lhLfNqgjkPR2Wsj4cy65bw/n8fsxcYeB8Lf64+vF8QjfTfdgaQmOKO/f49a0ovD53s0k2SkRzBOPDsaIhovUCgyd+eRW+6BDNz84t93+9oP9lSQ+n//9v2y397oGTn98E+Z+e2Zrlc/2eMeEvLHUZ+LfPrgnMnuWfAyL+FwmoGPndqbv3D0Dt8mwiQmJ8fVA+Gc3h/szwfF5vDP0KNsq78Ht8Dm1w2LA7pUD49mun/g6vp6xeQ91tm4Pz8i/MaTJDN8zY1pqAkmLBSOWYE1OsgxvnNVppXxTHcDCU/6CaaiR25ALjsho3l7pCPcwhM/X8caWgT8qiJhyNkhAxspMJBnyPNMRZS21eWNowYzBxMSf+VjZ3nOLNrY7G4UhBrf99sWDEcbn83jj4/w7EyDj6nx9xu/z+8xtHTZEy/flazJ2jwsDlHbv9ufydfydrt9rP+4+l1Bn/r71xm1Jx8vtmYVmQH59O7gJsnoTQUbBwpjGhG/lY0QXviJ95pHDXVoT/uuzwxD+XnfdreH/CKf0GZHf6rm2P7vXE+DSaHzY/18PZt5KD8n5S/NneuzlS3PtcXKuPd7++GC4P/9G1+9OMP7QXie587Px9ZlRymfn9vK5+V2YuDcKguZz+NqsBfi8zIR8bj5vfSHx6zGbG703Btyf780MtbR9Zu4AoJU7D20TJSiHbKFQT0SxJi6goIVukEw9N3ry0nigD0f4++2ZivBXNXalvsjelmODy5QGAirdd/n5WSqXbT7bwbZSGq4vpGZmhFhpgUz4WeIztCqfN1/PxFZez88y96zsj7013R4LwXJ68Xs5RllD5edeYvkxUWWGOP2//cG7xTv3DbcRYJIfHo+opNBEIxiK3JvS98aX6onSeMmV3otSXGu7Im+M9Vcl/BcrwvfkFEkxibofmJCZyLP3gvcX/j33ODGxljYDb+sLwze/8+CtWRB+lsI1AUwxPlXtFfClINKyjTGhL/8fuUvPblYR5blXZ6OAREzcfF02crP9kBmCCf385VtDO2912oeZwYvhrdwrz7REa96tFkRsgjrNzRdZDYbkt2ZlSfbBmPD3Vpb4rCkGwjeqRtgSZNYHkxjWaFvGxeXzZ4gwGKiVm7KEHyMGKQmz0CAnKkZaEvP03erfSkYYM9Z4nDIzDcbthaXbkiV5fqYMdUpo89hC0zBzTFIrjLI0npIs3gxarwBvRqm6SjkOzUhBmY6e8hpByZ9/sKCxUxcPB3VOL4xbbkeqauANbtXwgyV8KfGZSFnilbg2CBI/lgS9MFprr1C+Xzaaj/ZGM43aK/srayApyMPtlpI3++ezhyd7pur5DGwclxKfPUgZ6sy9OnNtxe+cDWh+jlOLOAHbMdZk86BFxxMZZUXIyKfyTWQpAlg4rBzh7JZVcvgJcmZ53fPv77UX9++33zmzeSjj9ntnt9pPu0F88YM9I0eFzGBLlqADkVWuuSxBTxR+7bGEnomEn5mJCajULNnbMhi3Cy9R2V6pGV6oIsiMuevIb43xtz6be3BK++B4Ydzm+zJzPrdgkN6QXTxTL/0XcQaW8NmzxM+PUsC1+kYooq3hdVE7JIKzwUKdj4/8oOIEX8NAjcaUvKhMqpDaOozER/ngVv56PWCPn7w8uBM1o40JoZTepYQuffuZIPOx7MFhI5kJO3uNRhg8kdhelra8sQRm+JH/Lw3bnmgHe4BGhjZL+HwduzN53yhSFpg5MrzJfnyOTzDsG/J7Xr3a/39w50HPhHBSuwgrwUQTIxfKCjqiLM0GTVQIMC9drshlT9j24zbef7OxGsZ//sKeWWoPFjmq6rTwwObgkjZATEgnFpg3+79Ld2R2P/LxMs2Bz+/dgh1RMfGysTgPUi0NyQw5Si9P7S1iiMFtMNOUEd8lVNsdaRbe2buUr2OYwtK6P28h4dnb1HudFh6rHLllJmVGyTlLTPSsFY4vYgoMq8axDYLxHzPCDmwvVHrSmsPQBDgBmeAMHFQdwCxV4QpHz9qvdhLmDR6ga8skKNq/1+fjf7R3bzj20d7dzhi+2Z1/xaiYoOTsw3x2fUKGb6IIgQg2wXIZ0enrtiogRDNISZPgGmuA0jOU4RAzWx90646Vtg1/7wNi1+8OLt6AAk6JXCkfnrQZq3zgyrk6lhG7ipEYYGFTreTe/PPbZzYHIv/pP3b7c3/0t53hGH/XZ4qR6T/2VBOz6n7K9WHIKI2hF53VS4LgOb94Ejc50krm3+cBuGXaAxMzE3dOd9AIkOFQMPz2OHuSdI2RyK5yp5ZDXPZhE5W5kBZkWaX2pCo1ExmVGJbHTML/644hZe0CpwEkmNmGOxn3IXdqsbdOpS/zVPac+IUUweirBX9VqCsQpJiCnawK3JbUl2msgepPSj0Gxqiat6NM7kAPWWuUJ15fEv6x83NPxtF3loT/9Llts/KbJ4prVZOzUrjRXFErWxLPZrLhiae6MA4oEs6odBCV2K9JL2QVjCCpVZLQqlitoQw5ZSGRj6AN7l/VX46K1nKa8oXdO+32rfvt107Nc1Ye+f3ldrP7/9ObD9ovvXwZ1HyZ4WS0pM2TRSX7ZkphW3tSj/Qc0n2CE+JEc4INLsw0vGsyKlar87GtJD9y2D04g9dT90ibuigxS2O7HX3FRq0QtF45C+XMk4ENnTO8QIlubYYTmnugE7I9t9SaomgJiv8rqxFUdkN9iqZlRjVjkqAh762qHICdIwqdRMYEoBLqJHKVxxBv5sprJ1ddGJSxaRV8VXF3InNFEG/xJg0KII+Mlvos21Y0KSOoep8SGVmLpEwZJVwfKdkVqC0BGFy2B6mlP8TCsg44arnGy/dvIpjXaNVS8UzVsy16X+qzp2677Tf2SERUjViRwEoZQ+/8Bs9kDFQxGYfx/esJRBD08yYzetK7ReiU7ErTpts4kbuwWWMRja+sG7kjaR4fvlUk1FPwVdJGJtZdc5TtAPUjPQQUQKEtm6HIUXpb8pSQe5UXuSoFifOvo5Pw7Qrbev6Up7gULkws930TjUiaqgYTdm16ktmiUQfTmjCM/dCe4kM4ErhKOUA/E5CxqskMLoqgR5/tGIVWL96yN/Qiu3ZBWs8idEEJhPqKyfpWqKlprfEYYLqPlsyS08hl51nwC0241o0eZ8HUNbRwGrmqHVuFo3SXIZk1J4NRAzICuBMNwvDPX9VLJWoBOm/8wlMn36qJpBnhFsxqvEVIA8ypt4larqO+Wg1LPOHAU4jVE5zRAiMzsOgaqdd4lkwKa/qiEFbBXXl6HRnGJxkFnHz2nV0J2VdYGDlGfPU/yXXfcXZmIr1KMJBMdoDHUcwp+es8RiDldEy62mp5Yc27AgdYBC/ZqQnemkO4qjG5qgl4avxbgSpRsCTnEkFivXyCLsnoNFBVoZ3IzPvhXJ0dbUlPe0E0Wils7oE0ds0VNDGezKK2qq2Q9EKv0agwYde1scvpWZW/4pq0JKbf1x8n9U3JUQ+I1MncwUF81rpmVr0l8ZkSOdb6JVjWhml+WOA5GGWVcW11wjXnk+1qsyWCveYpMrgsmAQ9GclafJrsNIhE5roAUq1Pa+X14GAu1RBOBLWDpvGtFVWsqtS+hcPl8fDk3wdYFKH//nPG+Ee6L7zM+TXfMow439m37hFyX/nXs9KWH7XKRwdHSZRgJFt5F7tTCTiRe7VzrXyGz7idwSxVrdCsxx0ZHMbxKpXRpIUIPc4WT77+4pxrXftM60c+B190z1debCUMAAAAAElFTkSuQmCC" alt="android下载" /></a>
        </div>
      </div>      
    </div>
  </li>
  <li class="fixed-goTop">
    <a class="fixed-icon" href="javascript:"></a>
  </li>
</ul>
<div class="fn-hide">
  <div id="weixin-content" class="p20 text-center">
    <img src="/TP/one/Public/images/weixin_l.jpg" style="width:250px" />
    <p>微信扫一扫，人人贷We理财里动态全知道！</p>
  </div>
</div>
<script type='text/javascript'>
function online_service() {
    
    window.open('http://chat.looyuoms.com/chat/chat/p.do?c=20000293&f=10042100&g=10048378&site=5372&r=%23params%3A姓名%2C游客', '_blank', 'height=544, width=644,toolbar=no,scrollbars=no,menubar=no,status=no');
    
}
</script>
            
<script id="dialog-message" type="text/x-handlebars-template">
<div class="ui-message-content j-result-dialog">
    <div class="h50"></div>
  {{# if info }}
  <div class="j-dialog-result-icon j-dialog-icon-info" title="提示"></div>
  {{/ if }}
  {{# if success }}
    <div class="j-dialog-result-icon j-dialog-icon-success" title="成功"></div>
  {{/ if }}
  {{# if warning }}
    <div class="j-dialog-result-icon j-dialog-icon-warn" title="警告"></div>
  {{/ if }}
  {{# if error }}
    <div class="j-dialog-result-icon j-dialog-icon-error" title="错误"></div>
  {{/ if }}
  <div class="fn-clear">
    
      
      
      
      
      
      
      
      
      
      
      
      
    
    <div class="j-dialog-message ">
      {{# if title }}
      <h3>{{ title }}</h3>
      {{/ if }}
      <p class="text-big j-result-text">{{{ message }}}</p>
      {{# if link }}
      <p class="text-center">{{ linkText }}<a href="{{ link }}">{{ linkTextEnd }}</a>。</p>
      {{/ if }}
      {{# if fund}}
      <p class="text-center">{{fundMsg}}</p>
      {{/ if}}
    </div>
  </div>
  <div class="ui-message-operation text-center">
    {{# if fund}}
    <a class="ui-message-close-button j-btn j-btn-orange  j-dialog-btn-small" style="width: 90px;" {{# if button }}href="{{ button.link }}"{{/ if }}>{{# if button }}{{ button.text }}{{ else }}关 闭{{/ if }}</a>
    <a class="j-btn j-btn-cancel j-dialog-btn-small" style="width: 90px;" id="lookDetailBtn" href="{{fundUrl}}">查看详情</a>
    {{else}}
      <a class="ui-button   ui-message-close-button j-btn j-btn-orange j-dialog-small" {{# if button }}href="{{ button.link }}"{{/ if }}>{{# if button }}{{ button.text }}{{ else }}关 闭{{/ if }}</a>
    {{/if}}
  </div>
</div>
</script>
        
        <!--body里面的js-->
        
        
        
        
        
        
        <!-- we理财百度统计 -->
        <script>
        var _hmt = _hmt || [];
        (function() {
          var hm = document.createElement("script");
          hm.src = "//hm.baidu.com/hm.js?16f9bb97b83369e62ee1386631124bb1";
          var s = document.getElementsByTagName("script")[0];
          s.parentNode.insertBefore(hm, s);
        })();
        </script>
        
    <script type="text/javascript" src="/TP/one/Public/js/require_2f19223.js"></script><script type="text/javascript" src="/TP/one/Public/js/common_widget_4170954.js"></script><script type="text/javascript" src="/TP/one/Public/js/detail_dd586cd.js"></script><script type="text/javascript">;require(["common:widget/second-header/second-header"], function(header){
        header.init();
    });
;require(["invest:page/uplan/detail/detail"], function(detail){
                detail.init();
            });
;require(["common:widget/footer/footer"], function(){});
;require(['common:widget/ui/messageModule/messageModule'], function(shit){
                shit.init();
            });
;require(["common:widget/ui/utmsource/utmsource"], function(){});
;require(['common:widget/ui/service-change-dialog/service-change-dialog'], function( obj ){
                var isShow = '' === 'true';
                if( isShow ){
                    obj.show();
                }
            });
;weLogger.perf.bodyEnd( );
            if( typeof document.addEventListener !== 'function' ){
                weLogger.perf.domReady();
            }
</script></body>
    
    <!-- THX FOR FIS -->
</html>