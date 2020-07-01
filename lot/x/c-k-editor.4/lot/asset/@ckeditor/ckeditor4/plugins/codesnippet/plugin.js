/**
 * @license Copyright (c) 2003-2018, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */
"use strict";!function(){function e(e){CKEDITOR.tools.extend(this,e),this.queue=[],this.init?this.init(CKEDITOR.tools.bind(function(){for(var e;e=this.queue.pop();)e.call(this);this.ready=!0},this)):this.ready=!0}function t(e){function t(e){for(var t,n=[],i=e.children,o=i.length-1;o>=0;o--)t=i[o],t.type==CKEDITOR.NODE_TEXT&&t.value.match(a)||n.push(t);return n}var n=e.config.codeSnippet_codeClass,i=new CKEDITOR.dom.element("textarea"),o=e.lang.codesnippet;e.widgets.add("codeSnippet",{allowedContent:"pre; code(language-*)",requiredContent:"pre",styleableElements:"pre",template:'<pre><code class="'+n+'"></code></pre>',dialog:"codeSnippet",pathName:o.pathName,mask:!0,parts:{pre:"pre",code:"code"},highlight:function(){var t=this,n=this.data,i=function(e){t.parts.code.setHtml(e)};i(CKEDITOR.tools.htmlEncode(n.code)),e._.codesnippet.highlighter.highlight(n.code,n.lang,function(t){e.fire("lockSnapshot"),i(t),e.fire("unlockSnapshot")})},data:function(){var e=this.data,t=this.oldData;e.code&&this.parts.code.setHtml(CKEDITOR.tools.htmlEncode(e.code)),t&&e.lang!=t.lang&&this.parts.code.removeClass("language-"+t.lang),e.lang&&(this.parts.code.addClass("language-"+e.lang),this.highlight()),this.oldData=CKEDITOR.tools.copy(e)},upcast:function(o,a){if("pre"==o.name){var s,p=t(o);if(1==p.length&&"code"==(s=p[0]).name&&1==s.children.length&&s.children[0].type==CKEDITOR.NODE_TEXT){var d=e._.codesnippet.langsRegex.exec(s.attributes["class"]);return d&&(a.lang=d[1]),i.setHtml(s.getHtml()),a.code=i.getValue(),s.addClass(n),o}}},downcast:function(e){var t=e.getFirst("code");return t.children.length=0,t.removeClass(n),t.add(new CKEDITOR.htmlParser.text(CKEDITOR.tools.htmlEncode(this.data.code))),e}});var a=/^[\s\n\r]*$/}CKEDITOR.plugins.add("codesnippet",{requires:"widget,dialog",lang:"en,id",icons:"codesnippet",hidpi:!0,beforeInit:function(e){e._.codesnippet={},this.setHighlighter=function(t){e._.codesnippet.highlighter=t;var n=e._.codesnippet.langs=e.config.codeSnippet_languages||t.languages;e._.codesnippet.langsRegex=RegExp("(?:^|\\s)language-("+CKEDITOR.tools.objectKeys(n).join("|")+")(?:\\s|$)")}},onLoad:function(){CKEDITOR.dialog.add("codeSnippet",this.path+"dialogs/codesnippet.js")},init:function(e){e.ui.addButton&&e.ui.addButton("CodeSnippet",{label:e.lang.codesnippet.button,command:"codeSnippet",toolbar:"insert,10"})},afterInit:function(e){if(t(e),!e._.codesnippet.highlighter){var n=new CKEDITOR.plugins.codesnippet.highlighter({languages:{},highlighter:function(){}});this.setHighlighter(n)}}}),CKEDITOR.plugins.codesnippet={highlighter:e},e.prototype.highlight=function(){var e=arguments;this.ready?this.highlighter.apply(this,e):this.queue.push(function(){this.highlighter.apply(this,e)})}}();