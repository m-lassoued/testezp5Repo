/*
YUI 3.12.0 (build 8655935)
Copyright 2013 Yahoo! Inc. All rights reserved.
Licensed under the BSD License.
http://yuilibrary.com/license/
*/

YUI.add("swf",function(e,t){function d(t,n,d){this._id=e.guid("yuiswf");var v=this._id,m=o.one(t),d=d||{},g=d.version||l,y=(g+"").split("."),b=r.isFlashVersionAtLeast(parseInt(y[0],10),parseInt(y[1],10),parseInt(y[2],10)),w=r.isFlashVersionAtLeast(8,0,0),E=w&&!b&&d.useExpressInstall,S=E?c:n,x="<object ",T,N,C="yId="+e.id+"&YUISwfId="+v+"&YUIBridgeCallback="+h+"&allowedDomain="+document.location.hostname;e.SWF._instances[v]=this;if(m&&(b||E)&&S){x+='id="'+v+'" ',s.ie?x+='classid="'+a+'" ':x+='type="'+f+'" data="'+u.html(S)+'" ',T="100%",N="100%",x+='width="'+T+'" height="'+N+'">',s.ie&&(x+='<param name="movie" value="'+u.html(S)+'"/>');for(var k in d.fixedAttributes)p.hasOwnProperty(k)&&(x+='<param name="'+u.html(k)+'" value="'+u.html(d.fixedAttributes[k])+'"/>');for(var L in d.flashVars){var A=d.flashVars[L];i.isString(A)&&(C+="&"+u.html(L)+"="+u.html(encodeURIComponent(A)))}C&&(x+='<param name="flashVars" value="'+C+'"/>'),x+="</object>",m.set("innerHTML",x),this._swf=o.one("#"+v)}else{var O={};O.type="wrongflashversion",this.publish("wrongflashversion",{fireOnce:!0}),this.fire("wrongflashversion",O)}}var n=e.Event,r=e.SWFDetect,i=e.Lang,s=e.UA,o=e.Node,u=e.Escape,a="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000",f="application/x-shockwave-flash",l="10.0.22",c="http://fpdownload.macromedia.com/pub/flashplayer/update/current/swf/autoUpdater.swf?"+Math.random(),h="SWF.eventHandler",p={align:"",allowFullScreen:"",allowNetworking:"",allowScriptAccess:"",base:"",bgcolor:"",loop:"",menu:"",name:"",play:"",quality:"",salign:"",scale:"",tabindex:"",wmode:""};d._instances=d._instances||{},d.eventHandler=function(e,t){d._instances[e]._eventHandler(t)},d.prototype={_eventHandler:function(e){e.type==="swfReady"?(this.publish("swfReady",{fireOnce:!0}),this.fire("swfReady",e)):e.type!=="log"&&this.fire(e.type,e)},callSWF:function(e,t){return t||(t=[]),this._swf._node[e]?this._swf._node[e].apply(this._swf._node,t):null},toString:function(){return"SWF "+this._id}},e.augment(d,e.EventTarget),e.SWF=d},"3.12.0",{requires:["event-custom","node","swfdetect","escape"]});
