<!DOCTYPE HTML>
<html>
<head>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
   
    </head>
<body>

<div id="radio-player" style="display:none">
<!-- Thanks for using this radio style for Nitro by P! -->
<div class="radio-player" style="float:left;margin-top: 2px; ">
<audio id="player" src="http://stream.zeno.fm/ha1xaksx0p8uv"></audio><span class="player-play paused"></span> <input class="player-slider" type="hidden" value=".35"> <span class="player-fav"></span>
</div>
<div style="float:right;margin-top: 6px;margin-right: 6px;">
<a title="close radio" href="javascript:void(0);" onclick="closeretroradio()">
<img src="https://i.imgur.com/8dV7ruH.png">
</a>
</div>
</div>
</div>

</body>
</html>


<style>
	.vertical-center {
		min-height: 100%;
		min-height: 100vh;
		display: flex;
		align-items: center;
	}
	#game-frame {
		position:fixed;
		top:0;
		left:0;
		bottom:0;
		right:0;
		width:100%;
		height:100%;
		border:none;
		margin:0;
		padding:0;
		overflow:hidden;
		z-index: 999;
	}
	#radio-player {
cursor: pointer;
    width: 200px;
    height: 33px;
    margin: 0;
    font-size: 14px;
    float: left;
    font-weight: 700;
    color: #fff;
    display: block;
    white-space: nowrap;
    position: fixed;
    font-family: Verdana,Arial,Helvetica,sans-serif;
    top: -2px;
    right: 203px;
    border-radius: 6px;
    z-index: 9999;
    margin-right: -194px;
    background-color: #2b2b2b;
    border-color: #000;
    box-shadow: 0 2px 0 rgb(0 0 0 / 45%), inset 0 0 0 2px hsl(0deg 0% 100% / 10%);
    margin-top: 124px;
	}
	#button-top {
		position: fixed;
		z-index: 9999;
		top: -2px;
		left: 30px;
		padding: 4px 9px;
		color: #363636;
		box-shadow: 0 0 26px 0 rgb(0 0 0 / 10%);
		background-color: #fff;
		font-size: 13px;
		border-bottom-left-radius: 9px;
		border-bottom-right-radius: 9px;
		cursor: pointer;
	}
	.player-play {
		width: 29px;
		height: 29px;
		background: url(//i.imgur.com/18xgpOP.png);
		float: left;
		opacity: .75
	}
	.player-play.paused {
		background: url(//i.imgur.com/RItepYJ.png)
	}
	.slider {
		width: 130px;
		height: 29px;
		float: left;
		position: relative
	}
	.slider>.dragger {
		height: 13px;
		width: 13px;
		-webkit-border-radius: 13px;
		-moz-border-radius: 13px;
		border-radius: 13px;
		position: absolute;
		top: 8px;
		left: 57px;
		background: #fff;
		cursor: hand;
		cursor: pointer;
		-webkit-box-shadow: 1px 1px rgba(0, 0, 0, .25);
		-moz-box-shadow: 1px 1px rgba(0, 0, 0, .25);
		box-shadow: 1px 1px rgba(0, 0, 0, .25);
		opacity: 1
	}
	.slider>.track,
	.slider>.highlight-track {
		height: 29px;
		background: #fff;
		float: left;
		width: 100%;
		opacity: .5;
		background: url(//i.imgur.com/Hi7jUTv.png)
	}
	.slider>.highlight-track {
		height: 1px;
		margin-top: 14px;
		background: #fff;
		-webkit-box-shadow: 1px 1px rgba(0, 0, 0, .25);
		-moz-box-shadow: 1px 1px rgba(0, 0, 0, .25);
		box-shadow: 1px 1px rgba(0, 0, 0, .25);
		float: left;
		width: 100%;
		opacity: .5
	}
	.player-play:hover {
		opacity: 1;
		cursor: hand;
		cursor: pointer
	}
	</style>
<script>
	function closeretroradio() {
		var elem = document.getElementById('radio-player');
		elem.parentNode.removeChild(elem);
		return false;
	}
	var radioPlayed=false;$(document).ready(function(){var player=document.getElementById('player');$('.player-slider').simpleSlider();$('.player-play').click(function(){$(this).toggleClass('paused');if($('.paused')[0]){player.src=player.src;player.load();player.play();}else{player.pause();player.currentTime=0;}});$('.player-slider').change(function(){var radioVolume=$('.player-slider').val();document.getElementById('player').volume=radioVolume;});function iniciarRadio(){$('#radio-player').fadeIn();setTimeout(function(){player.play();player.volume=0.35;},1500);}
$(window).mousedown(function(){if(!radioPlayed){radioPlayed=true;iniciarRadio();}});});var __slice=[].slice,__indexOf=[].indexOf||function(e){for(var t=0,n=this.length;t<n;t++)
if(t in this&&this[t]===e)return t;return-1};(function(e,t){var n;return n=function(){function t(t,n){var r,i=this;this.input=t,this.defaultOptions={animate:!0,snapMid:!1,classPrefix:null,classSuffix:null,theme:null,highlight:!1},this.settings=e.extend({},this.defaultOptions,n),this.settings.theme&&(this.settings.classSuffix="-"+this.settings.theme),this.input.hide(),this.slider=e("<div>").addClass("slider"+(this.settings.classSuffix||"")).css({position:"relative",userSelect:"none",boxSizing:"border-box"}).insertBefore(this.input),this.input.attr("id")&&this.slider.attr("id",this.input.attr("id")+"-slider"),this.track=this.createDivElement("track").css({width:"100%"}),this.settings.highlight&&(this.highlightTrack=this.createDivElement("highlight-track").css({width:"0"})),this.dragger=this.createDivElement("dragger"),this.slider.css({minHeight:this.dragger.outerHeight(),marginLeft:this.dragger.outerWidth()/2,marginRight:this.dragger.outerWidth()/2}),this.track.css({marginTop:this.track.outerHeight()/-2}),this.settings.highlight&&this.highlightTrack.css({marginTop:this.track.outerHeight()/-2}),this.dragger.css({marginTop:this.dragger.outerHeight()/-2,marginLeft:this.dragger.outerWidth()/-2}),this.track.mousedown(function(e){return i.trackEvent(e)}),this.settings.highlight&&this.highlightTrack.mousedown(function(e){return i.trackEvent(e)}),this.dragger.mousedown(function(e){if(e.which!==1)return;return i.dragging=!0,i.dragger.addClass("dragging"),i.domDrag(e.pageX,e.pageY),!1}),e("body").mousemove(function(t){if(i.dragging)return i.domDrag(t.pageX,t.pageY),e("body").css({cursor:"pointer"})}).mouseup(function(t){if(i.dragging)return i.dragging=!1,i.dragger.removeClass("dragging"),e("body").css({cursor:"auto"})}),this.pagePos=0,this.input.val()===""?(this.value=this.getRange().min,this.input.val(this.value)):this.value=this.nearestValidValue(this.input.val()),this.setSliderPositionFromValue(this.value),r=this.valueToRatio(this.value),this.input.trigger("slider:ready",{value:this.value,ratio:r,position:r*this.slider.outerWidth(),el:this.slider})}
return t.prototype.createDivElement=function(t){var n;return n=e("<div>").addClass(t).css({position:"absolute",top:"50%",userSelect:"none",cursor:"pointer"}).appendTo(this.slider),n},t.prototype.setRatio=function(e){var t;return e=Math.min(1,e),e=Math.max(0,e),t=this.ratioToValue(e),this.setSliderPositionFromValue(t),this.valueChanged(t,e,"setRatio")},t.prototype.setValue=function(e){var t;return e=this.nearestValidValue(e),t=this.valueToRatio(e),this.setSliderPositionFromValue(e),this.valueChanged(e,t,"setValue")},t.prototype.trackEvent=function(e){if(e.which!==1)return;return this.domDrag(e.pageX,e.pageY,!0),this.dragging=!0,!1},t.prototype.domDrag=function(e,t,n){var r,i,s;n==null&&(n=!1),r=e-this.slider.offset().left,r=Math.min(this.slider.outerWidth(),r),r=Math.max(0,r);if(this.pagePos!==r)return this.pagePos=r,i=r/this.slider.outerWidth(),s=this.ratioToValue(i),this.valueChanged(s,i,"domDrag"),this.settings.snap?this.setSliderPositionFromValue(s,n):this.setSliderPosition(r,n)},t.prototype.setSliderPosition=function(e,t){t==null&&(t=!1);if(t&&this.settings.animate){this.dragger.animate({left:e},200);if(this.settings.highlight)return this.highlightTrack.animate({width:e},200)}else{this.dragger.css({left:e});if(this.settings.highlight)return this.highlightTrack.css({width:e})}},t.prototype.setSliderPositionFromValue=function(e,t){var n;return t==null&&(t=!1),n=this.valueToRatio(e),this.setSliderPosition(n*this.slider.outerWidth(),t)},t.prototype.getRange=function(){return this.settings.allowedValues?{min:Math.min.apply(Math,this.settings.allowedValues),max:Math.max.apply(Math,this.settings.allowedValues)}:this.settings.range?{min:parseFloat(this.settings.range[0]),max:parseFloat(this.settings.range[1])}:{min:0,max:1}},t.prototype.nearestValidValue=function(t){var n,r,i,s;return i=this.getRange(),t=Math.min(i.max,t),t=Math.max(i.min,t),this.settings.allowedValues?(n=null,e.each(this.settings.allowedValues,function(){if(n===null||Math.abs(this-t)<Math.abs(n-t))return n=this}),n):this.settings.step?(r=(i.max-i.min)/this.settings.step,s=Math.floor((t-i.min)/this.settings.step),(t-i.min)%this.settings.step>this.settings.step/2&&s<r&&(s+=1),s*this.settings.step+i.min):t},t.prototype.valueToRatio=function(e){var t,n,r,i,s,o,u,a;if(this.settings.equalSteps){a=this.settings.allowedValues;for(i=o=0,u=a.length;o<u;i=++o){t=a[i];if(typeof n=="undefined"||n===null||Math.abs(t-e)<Math.abs(n-e))n=t,r=i}
return this.settings.snapMid?(r+.5)/this.settings.allowedValues.length:r/(this.settings.allowedValues.length-1)}
return s=this.getRange(),(e-s.min)/(s.max-s.min)},t.prototype.ratioToValue=function(e){var t,n,r,i,s;return this.settings.equalSteps?(s=this.settings.allowedValues.length,i=Math.round(e*s-.5),t=Math.min(i,this.settings.allowedValues.length-1),this.settings.allowedValues[t]):(n=this.getRange(),r=e*(n.max-n.min)+n.min,this.nearestValidValue(r))},t.prototype.valueChanged=function(t,n,r){var i;if(t.toString()===this.value.toString())return;return this.value=t,i={value:t,ratio:n,position:n*this.slider.outerWidth(),trigger:r,el:this.slider},this.input.val(t).trigger(e.Event("change",i)).trigger("slider:changed",i)},t}(),e.extend(e.fn,{simpleSlider:function(){var t,r,i;return i=arguments[0],t=2<=arguments.length?__slice.call(arguments,1):[],r=["setRatio","setValue"],e(this).each(function(){var s,o;return i&&__indexOf.call(r,i)>=0?(s=e(this).data("slider-object"),s[i].apply(s,t)):(o=i,e(this).data("slider-object",new n(e(this),o)))})}}),e(function(){return e("[data-slider]").each(function(){var t,n,r,i;return t=e(this),r={},n=t.data("slider-values"),n&&(r.allowedValues=function(){var e,t,r,s;r=n.split(","),s=[];for(e=0,t=r.length;e<t;e++)i=r[e],s.push(parseFloat(i));return s}()),t.data("slider-range")&&(r.range=t.data("slider-range").split(",")),t.data("slider-step")&&(r.step=t.data("slider-step")),r.snap=t.data("slider-snap"),r.equalSteps=t.data("slider-equal-steps"),t.data("slider-theme")&&(r.theme=t.data("slider-theme")),t.attr("data-slider-highlight")&&(r.highlight=t.data("slider-highlight")),t.data("slider-animate")!=null&&(r.animate=t.data("slider-animate")),t.simpleSlider(r)})})})(this.jQuery||this.Zepto,this);
	</script>

	