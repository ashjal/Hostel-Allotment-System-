/*
	Masked Input plugin for jQuery
	Copyright (c) 2007-2013 Josh Bush (digitalbush.com)
	Licensed under the MIT license (http://digitalbush.com/projects/masked-input-plugin/#license)
	Version: 1.3.1
*/
(function(e){function t(){var e=document.createElement("input"),t="onpaste";return e.setAttribute(t,""),"function"==typeof e[t]?"paste":"input"}var n,a=t()+".mask",r=navigator.userAgent,i=/iphone/i.test(r),o=/android/i.test(r);e.mask={definitions:{9:"[0-9]",a:"[A-Za-z]","*":"[A-Za-z0-9]"},dataName:"rawMaskFn",placeholder:"_"},e.fn.extend({caret:function(e,t){var n;if(0!==this.length&&!this.is(":hidden"))return"number"==typeof e?(t="number"==typeof t?t:e,this.each(function(){this.setSelectionRange?this.setSelectionRange(e,t):this.createTextRange&&(n=this.createTextRange(),n.collapse(!0),n.moveEnd("character",t),n.moveStart("character",e),n.select())})):(this[0].setSelectionRange?(e=this[0].selectionStart,t=this[0].selectionEnd):document.selection&&document.selection.createRange&&(n=document.selection.createRange(),e=0-n.duplicate().moveStart("character",-1e5),t=e+n.text.length),{begin:e,end:t})},unmask:function(){return this.trigger("unmask")},mask:function(t,r){var c,l,s,u,f,h;return!t&&this.length>0?(c=e(this[0]),c.data(e.mask.dataName)()):(r=e.extend({placeholder:e.mask.placeholder,completed:null},r),l=e.mask.definitions,s=[],u=h=t.length,f=null,e.each(t.split(""),function(e,t){"?"==t?(h--,u=e):l[t]?(s.push(RegExp(l[t])),null===f&&(f=s.length-1)):s.push(null)}),this.trigger("unmask").each(function(){function c(e){for(;h>++e&&!s[e];);return e}function d(e){for(;--e>=0&&!s[e];);return e}function m(e,t){var n,a;if(!(0>e)){for(n=e,a=c(t);h>n;n++)if(s[n]){if(!(h>a&&s[n].test(R[a])))break;R[n]=R[a],R[a]=r.placeholder,a=c(a)}b(),x.caret(Math.max(f,e))}}function p(e){var t,n,a,i;for(t=e,n=r.placeholder;h>t;t++)if(s[t]){if(a=c(t),i=R[t],R[t]=n,!(h>a&&s[a].test(i)))break;n=i}}function g(e){var t,n,a,r=e.which;8===r||46===r||i&&127===r?(t=x.caret(),n=t.begin,a=t.end,0===a-n&&(n=46!==r?d(n):a=c(n-1),a=46===r?c(a):a),k(n,a),m(n,a-1),e.preventDefault()):27==r&&(x.val(S),x.caret(0,y()),e.preventDefault())}function v(t){var n,a,i,l=t.which,u=x.caret();t.ctrlKey||t.altKey||t.metaKey||32>l||l&&(0!==u.end-u.begin&&(k(u.begin,u.end),m(u.begin,u.end-1)),n=c(u.begin-1),h>n&&(a=String.fromCharCode(l),s[n].test(a)&&(p(n),R[n]=a,b(),i=c(n),o?setTimeout(e.proxy(e.fn.caret,x,i),0):x.caret(i),r.completed&&i>=h&&r.completed.call(x))),t.preventDefault())}function k(e,t){var n;for(n=e;t>n&&h>n;n++)s[n]&&(R[n]=r.placeholder)}function b(){x.val(R.join(""))}function y(e){var t,n,a=x.val(),i=-1;for(t=0,pos=0;h>t;t++)if(s[t]){for(R[t]=r.placeholder;pos++<a.length;)if(n=a.charAt(pos-1),s[t].test(n)){R[t]=n,i=t;break}if(pos>a.length)break}else R[t]===a.charAt(pos)&&t!==u&&(pos++,i=t);return e?b():u>i+1?(x.val(""),k(0,h)):(b(),x.val(x.val().substring(0,i+1))),u?t:f}var x=e(this),R=e.map(t.split(""),function(e){return"?"!=e?l[e]?r.placeholder:e:void 0}),S=x.val();x.data(e.mask.dataName,function(){return e.map(R,function(e,t){return s[t]&&e!=r.placeholder?e:null}).join("")}),x.attr("readonly")||x.one("unmask",function(){x.unbind(".mask").removeData(e.mask.dataName)}).bind("focus.mask",function(){clearTimeout(n);var e;S=x.val(),e=y(),n=setTimeout(function(){b(),e==t.length?x.caret(0,e):x.caret(e)},10)}).bind("blur.mask",function(){y(),x.val()!=S&&x.change()}).bind("keydown.mask",g).bind("keypress.mask",v).bind(a,function(){setTimeout(function(){var e=y(!0);x.caret(e),r.completed&&e==x.val().length&&r.completed.call(x)},0)}),y()}))}})})(jQuery);

$(document).ready(function(){$('input:submit, button').addClass('submit_button green_grad');$('[title]').tooltip(tooltip_right);$('.datefield').datepicker(datepicker_defaults);});var RecaptchaOptions={theme:'white'};var tooltip_right={position:{my:'left center',at:'right center'},disabled:false,tooltipClass:'haa_tooltip'};var tooltip_left={position:{my:'right center',at:'left center'},disabled:false,tooltipClass:'haa_tooltip'};var datepicker_defaults={defaultDate:new Date(1988,0,1),numberOfMonths:1,showButtonPanel:false,changeMonth:true,changeYear:true,dateFormat:'yy-mm-dd'};var date_format='9999-99-99';var mobile_format='+99-9999999999';var roll_no_format='999999999';var unique_id_format='******';var cluster_format='WC-R';var room_no_format='WC-RRR';$.mask.definitions['W']="[WwEe]";$.mask.definitions['C']="[A-Fa-f]";$.mask.definitions['F']="[1-8]";$.mask.definitions['R']="[0-9]";var branches=['COE','MEE','ECE','CIE','EIC','ELE','BT','CHE'];function HAA_showNotification(message,type)
{var self_closing=true;$('.haa_notification').remove();var uiClass='ui-state-highlight';var uiIcon='ui-icon-info';var uiText='';message=(message!==undefined)?message:'Please wait...';type=(type!==undefined)?type:'load';switch(type){case'load':self_closing=false;break;case'info':uiText='NOTICE: ';break;case'error':uiClass='ui-state-error';uiIcon='ui-icon-alert';uiText='ERROR: ';}
var $notification=$('<div class="ui-widget haa_notification"'+'title="Click to dismiss">'+'<div class="ui-corner-all '+uiClass+'" style="padding: 0.8em; font-size: 0.8em;">'+'<p>'+'<span class="ui-icon '+uiIcon+'" style="float: left; margin-right: .3em;"></span>'+'<strong>'+uiText+'</strong>'+
message+'</p>'+'</div>').hide().appendTo('.body_content').bind('click',function(){if(type!=='load'){$(this).stop(true,true).fadeOut('medium',function(){$(this).tooltip('destroy');$(this).remove();});}else{return false;}}).show();if(self_closing){$notification.delay(3000).fadeOut('medium',function(){if($(this).is(':data(tooltip)')){$(this).tooltip('destroy');}
$(this).remove();});}
if(type!=='load'){$($notification).tooltip({tooltipClass:'haa_tooltip',track:true,show:true});}else{$($notification).attr('title','');}
return $notification;}
function HAA_validateFields()
{var isValid=true;$('.required').each(function(){if($(this).val()===''||$(this).val()==='...'){if(isValid){$(this).focus();}
isValid=false;$(this).tooltip('open');}});return isValid;}
function HAA_togglePasswordFields($target,page)
{
	if(!($target.val()!=='...'&&$target.val()!=='group'))
	{
		$('.password_fields').remove();
	}
}
function HAA_submitForm($form)
{
	var $notification=HAA_showNotification();
	var form_data=new FormData($($form)[0]);
	$.ajax(
	{
		type:'POST',
		url:$form.attr('action'),
		data:form_data,cache:false,
		dataType:'json',
		processData:false,
		contentType:false,
		success:function(response)
		{
			$notification.remove();
			var $response_dialog=null;
			var dialog_title='Hostel-G';
			var buttonOptions={};
			buttonOptions['OK']=function()
			{
				if(response.save&&response.redirect_url.length)
				{
					window.location.replace(response.redirect_url);
				}
				else
				{
					document.body.style.overflow="visible";
					$(this).dialog('close');
				}
				
			};
			if(response.success)
			{
				var dialog_content='<div class="dialog_content">'+response.message+'</div>';
				$response_dialog=$(dialog_content).dialog({minWidth:525,height:300,modal:true,title:dialog_title,resizable:true,draggable:false,buttons:buttonOptions,open:function()
				{
					document.body.style.overflow="hidden";
					$('.ui-dialog-titlebar').addClass('green_grad shadow');
					$('.ui-dialog, .ui-dialog-buttonpane').addClass('gray_grad');
					$(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:first').focus();
				},
				close:function()
				{
					if(response.save&&response.redirect_url.length)
					{
						window.location.replace(response.redirect_url);
					}
					document.body.style.overflow="visible";
					$(this).remove();
				}
			});
			}
		},
		error:function()
		{
			var $error=HAA_showNotification('Could not contact Server ! '+'Please check your Network Settings.','error');
		}
	});
	}

$(document).ready(function()
{
	$("input:file, select").uniform();
	$('#input_size').bind('change',function()
	{
		HAA_togglePasswordFields($(this),'group.lib');
		HAA_generateGroupDetailsForm($(this).val());
	});
	$('.group_form').bind('submit',function(event)
	{
		event.preventDefault();
		if(HAA_validateFields()&&HAA_validatePasswords())
		{
			HAA_submitForm($(this));
		}
		else{return false;
		}
	}
	);
	});var curr_group_size=0;function HAA_generateGroupDetailsForm(group_size)
	{
		if(/^\d+$/.test(group_size))
		{
			if($('#members_table').length===0)
			{
				var $members_table=$('<table id="members_table">'+'<caption>Members Details</caption>'+'<tr>'+'<th>Roll Number</th>'+'<th>Unique ID</th>'+'</tr>'+'<tr>'+'<td colspan="2">'+'<input type="submit" name="submit" value="Create">'+'</tr>'+'</table>');$('#password_table').after($members_table);$('input:submit').addClass('submit_button green_grad');
				HAA_generateMemberFields(group_size);
			}
			else
			{
				HAA_generateMemberFields(group_size);
			}
		}
		else
		{
			$('#members_table').remove();
			curr_group_size=0;
		}
	}
function HAA_generateMemberFields(group_size)
{
	var $members_table=$('#members_table');
	if(curr_group_size<=group_size)
	{
		while(true)
		{
			if(group_size==curr_group_size)
			{
				break;
			}
			var $member_row=$('<tr>'+'<td>'+'<input type="text" name="roll_no[]" class="required tip_left"'+' title="Please provide Roll Number of group member">'+'</td>'+'<td>'+'<input type="text" name="unique_id[]" class="required tip_right"'+' title="Please provide Unique ID of group member.">'+'</td>'+'</tr>');$member_row.find('.tip_left').tooltip(tooltip_left).mask(roll_no_format);
			$member_row.find('.tip_right').tooltip(tooltip_right).mask(unique_id_format);
			$members_table.find('tr:last').before($member_row);
			curr_group_size++;
		}
	}
	else
	{
		if($members_table.length!==0)
		{
			while(true)
			{
				if(group_size==curr_group_size)
				{
					break;
				}
			$members_table.find('tr:last').prev().remove();
			curr_group_size--;
		}
	}
	}
}

jQuery.browser = {};
(
function () 
{
    jQuery.browser.msie = false;
    jQuery.browser.version = 0;
    if (navigator.userAgent.match(/MSIE ([0-9]+)\./)) 
	{
        jQuery.browser.msie = true;
        jQuery.browser.version = RegExp.$1;
    }
})();

(
function(a)
{
	a.uniform=
	{
		options:
		{
			selectClass:"selector",
			radioClass:"radio",
			checkboxClass:"checker",
			fileClass:"uploader",
			filenameClass:"filename",
			fileBtnClass:"action",
			fileDefaultText:"No file selected",
			fileBtnText:"Choose File",
			checkedClass:"checked",
			focusClass:"focus",
			disabledClass:"disabled",
			buttonClass:"button",
			activeClass:"active",
			hoverClass:"hover",
			useID:true,
			idPrefix:"uniform",
			resetSelector:false
		}
		,elements:[]
	};
	if(a.browser.msie&&a.browser.version<7)
	{
		a.support.selectOpacity=false
	}
	else
	{
		a.support.selectOpacity=true
	}
	a.fn.uniform=function(k)
	{
		k=a.extend(a.uniform.options,k);
		var d=this;
		if(k.resetSelector!=false)
		{
			a(k.resetSelector).mouseup(function()
			{
				function l()
				{
					a.uniform.update(d)
				}
				setTimeout(l,10)
				}
			)
		}
		function j(l)
		{
			$el=a(l);
			$el.addClass($el.attr("type"));
			b(l)
		}
		function g(l)
		{
			a(l).addClass("uniform");
			b(l)
		}
			function i(n)
			{
				$el=n;
				var o=a("<div>"),l=a("<span>");
				o.addClass(k.buttonClass);
				if(k.useID&&$el.attr("id")!="")
				{
					o.attr("id",k.idPrefix+"-"+$el.attr("id"))
				}
				var m;
				if($el.is("a"))
				{
					m=$el.text()
				}
				else
				{
					if($el.is("button"))
					{
						m=$el.text()
					}
					else
					{
						if($el.is(":submit")||$el.is("input[type=button]"))
						{
							m=$el.attr("value")
						}
					}
				}
				if(m=="")
				{
					m="Submit"
				}
				l.html(m);
				$el.hide();
				$el.wrap(o);
				$el.wrap(l);
				o=$el.closest("div");
				l=$el.closest("span");
				if($el.is(":disabled"))
				{
					o.addClass(k.disabledClass)
				}
				o.bind(
				{
					"mouseenter.uniform":function()
					{
						o.addClass(k.hoverClass)
					},"mouseleave.uniform":function()
					{
						o.removeClass(k.hoverClass)
					},"mousedown.uniform touchbegin.uniform":function()
					{
						o.addClass(k.activeClass)
					},"mouseup.uniform touchend.uniform":function()
					{
						o.removeClass(k.activeClass)
					},"click.uniform touchend.uniform":function(q)
					{
						if(a(q.target).is("span")||a(q.target).is("div"))
						{
							if(n[0].dispatchEvent)
							{
								var p=document.createEvent("MouseEvents");
								p.initEvent("click",true,true);
								n[0].dispatchEvent(p)
							}
							else{n[0].click()}
						}
					}
				});
				n.bind(
				{
					"focus.uniform":function()
					{
						o.addClass(k.focusClass)
					},"blur.uniform":function()
					{
						o.removeClass(k.focusClass)
					}
				});
				a.uniform.noSelect(o);
				b(n)
				}
				function e(n)
				{
					var o=a("<div />"),l=a("<span />");
					o.addClass(k.selectClass);
					if(k.useID&&n.attr("id")!="")
					{
						o.attr("id",k.idPrefix+"-"+n.attr("id"))
					}
					var m=n.find(":selected:first");
					if(m.length==0)
					{
						m=n.find("option:first")
					}
					l.html(m.text());
					n.css("opacity",0);
					n.wrap(o);
					n.before(l);
					o=n.parent("div");
					l=n.siblings("span");
					n.bind({"change.uniform":
					function()
					{
						l.text(n.find(":selected").text());o.removeClass(k.activeClass)},"focus.uniform":function(){o.addClass(k.focusClass)},"blur.uniform":function(){o.removeClass(k.focusClass);o.removeClass(k.activeClass)},"mousedown.uniform touchbegin.uniform":function(){o.addClass(k.activeClass)},"mouseup.uniform touchend.uniform":function(){o.removeClass(k.activeClass)},"click.uniform touchend.uniform":function(){o.removeClass(k.activeClass)},"mouseenter.uniform":function(){o.addClass(k.hoverClass)},"mouseleave.uniform":function(){o.removeClass(k.hoverClass)},"keyup.uniform":function(){l.text(n.find(":selected").text())}});if(a(n).attr("disabled")){o.addClass(k.disabledClass)}a.uniform.noSelect(l);b(n)}function f(m){var n=a("<div />"),l=a("<span />");n.addClass(k.checkboxClass);if(k.useID&&m.attr("id")!=""){n.attr("id",k.idPrefix+"-"+m.attr("id"))}a(m).wrap(n);a(m).wrap(l);l=m.parent();n=l.parent();a(m).css("opacity",0).bind({"focus.uniform":function(){n.addClass(k.focusClass)},"blur.uniform":function(){n.removeClass(k.focusClass)},"click.uniform touchend.uniform":function(){if(!a(m).attr("checked")){l.removeClass(k.checkedClass)}else{l.addClass(k.checkedClass)}},"mousedown.uniform touchbegin.uniform":function(){n.addClass(k.activeClass)},"mouseup.uniform touchend.uniform":function(){n.removeClass(k.activeClass)},"mouseenter.uniform":function(){n.addClass(k.hoverClass)},"mouseleave.uniform":function(){n.removeClass(k.hoverClass)}});if(a(m).attr("checked")){l.addClass(k.checkedClass)}if(a(m).attr("disabled")){n.addClass(k.disabledClass)}b(m)}function c(m){var n=a("<div />"),l=a("<span />");n.addClass(k.radioClass);if(k.useID&&m.attr("id")!=""){n.attr("id",k.idPrefix+"-"+m.attr("id"))}a(m).wrap(n);a(m).wrap(l);l=m.parent();n=l.parent();a(m).css("opacity",0).bind({"focus.uniform":function(){n.addClass(k.focusClass)},"blur.uniform":function(){n.removeClass(k.focusClass)},"click.uniform touchend.uniform":function(){if(!a(m).attr("checked")){l.removeClass(k.checkedClass)}else{a("."+k.radioClass+" span."+k.checkedClass+":has([name='"+a(m).attr("name")+"'])").removeClass(k.checkedClass);l.addClass(k.checkedClass)}},"mousedown.uniform touchend.uniform":function(){if(!a(m).is(":disabled")){n.addClass(k.activeClass)}},"mouseup.uniform touchbegin.uniform":function(){n.removeClass(k.activeClass)},"mouseenter.uniform touchend.uniform":function(){n.addClass(k.hoverClass)},"mouseleave.uniform":function(){n.removeClass(k.hoverClass)}});if(a(m).attr("checked")){l.addClass(k.checkedClass)}if(a(m).attr("disabled")){n.addClass(k.disabledClass)}b(m)}function h(q){var o=a(q);var r=a("<div />"),p=a("<span>"+k.fileDefaultText+"</span>"),m=a("<span>"+k.fileBtnText+"</span>");r.addClass(k.fileClass);p.addClass(k.filenameClass);m.addClass(k.fileBtnClass);if(k.useID&&o.attr("id")!=""){r.attr("id",k.idPrefix+"-"+o.attr("id"))}o.wrap(r);o.after(m);o.after(p);r=o.closest("div");p=o.siblings("."+k.filenameClass);m=o.siblings("."+k.fileBtnClass);if(!o.attr("size")){var l=r.width();o.attr("size",l/10)}var n=function(){var s=o.val();if(s===""){s=k.fileDefaultText}else{s=s.split(/[\/\\]+/);s=s[(s.length-1)]}p.text(s)};n();o.css("opacity",0).bind({"focus.uniform":function(){r.addClass(k.focusClass)},"blur.uniform":function(){r.removeClass(k.focusClass)},"mousedown.uniform":function(){if(!a(q).is(":disabled")){r.addClass(k.activeClass)}},"mouseup.uniform":function(){r.removeClass(k.activeClass)},"mouseenter.uniform":function(){r.addClass(k.hoverClass)},"mouseleave.uniform":function(){r.removeClass(k.hoverClass)}});if(a.browser.msie){o.bind("click.uniform.ie7",function(){setTimeout(n,0)})}else{o.bind("change.uniform",n)}if(o.attr("disabled")){r.addClass(k.disabledClass)}a.uniform.noSelect(p);a.uniform.noSelect(m);b(q)}a.uniform.restore=function(l){if(l==undefined){l=a(a.uniform.elements)}a(l).each(function(){if(a(this).is(":checkbox")){a(this).unwrap().unwrap()}else{if(a(this).is("select")){a(this).siblings("span").remove();a(this).unwrap()}else{if(a(this).is(":radio")){a(this).unwrap().unwrap()}else{if(a(this).is(":file")){a(this).siblings("span").remove();a(this).unwrap()}else{if(a(this).is("button, :submit, a, input[type='button']")){a(this).unwrap().unwrap()}}}}}a(this).unbind(".uniform");a(this).css("opacity","1");var m=a.inArray(a(l),a.uniform.elements);a.uniform.elements.splice(m,1)})};function b(l){l=a(l).get();if(l.length>1){a.each(l,function(m,n){a.uniform.elements.push(n)})}else{a.uniform.elements.push(l)}}a.uniform.noSelect=function(l){function m(){return false}a(l).each(function(){this.onselectstart=this.ondragstart=m;a(this).mousedown(m).css({MozUserSelect:"none"})})};a.uniform.update=function(l){if(l==undefined){l=a(a.uniform.elements)}l=a(l);l.each(function(){var n=a(this);if(n.is("select")){var m=n.siblings("span");var p=n.parent("div");p.removeClass(k.hoverClass+" "+k.focusClass+" "+k.activeClass);m.html(n.find(":selected").text());if(n.is(":disabled")){p.addClass(k.disabledClass)}else{p.removeClass(k.disabledClass)}}else{if(n.is(":checkbox")){var m=n.closest("span");var p=n.closest("div");p.removeClass(k.hoverClass+" "+k.focusClass+" "+k.activeClass);m.removeClass(k.checkedClass);if(n.is(":checked")){m.addClass(k.checkedClass)}if(n.is(":disabled")){p.addClass(k.disabledClass)}else{p.removeClass(k.disabledClass)}}else{if(n.is(":radio")){var m=n.closest("span");var p=n.closest("div");p.removeClass(k.hoverClass+" "+k.focusClass+" "+k.activeClass);m.removeClass(k.checkedClass);if(n.is(":checked")){m.addClass(k.checkedClass)}if(n.is(":disabled")){p.addClass(k.disabledClass)}else{p.removeClass(k.disabledClass)}}else{if(n.is(":file")){var p=n.parent("div");var o=n.siblings(k.filenameClass);btnTag=n.siblings(k.fileBtnClass);p.removeClass(k.hoverClass+" "+k.focusClass+" "+k.activeClass);o.text(n.val());if(n.is(":disabled")){p.addClass(k.disabledClass)}else{p.removeClass(k.disabledClass)}}else{if(n.is(":submit")||n.is("button")||n.is("a")||l.is("input[type=button]")){var p=n.closest("div");p.removeClass(k.hoverClass+" "+k.focusClass+" "+k.activeClass);if(n.is(":disabled")){p.addClass(k.disabledClass)}else{p.removeClass(k.disabledClass)}}}}}}})};return this.each(function(){if(a.support.selectOpacity){var l=a(this);if(l.is("select")){if(l.attr("multiple")!=true){if(l.attr("size")==undefined||l.attr("size")<=1){e(l)}}}else{if(l.is(":checkbox")){f(l)}else{if(l.is(":radio")){c(l)}else{if(l.is(":file")){h(l)}else{if(l.is(":text, :password, input[type='email']")){j(l)}else{if(l.is("textarea")){g(l)}else{if(l.is("a")||l.is(":submit")||l.is("button")||l.is("input[type=button]")){i(l)}}}}}}}}})}})(jQuery);

