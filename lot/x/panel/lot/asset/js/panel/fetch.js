/*!
 * ==============================================================
 *  F3H 1.0.11
 * ==============================================================
 * Author: Taufik Nurrohman <https://github.com/taufik-nurrohman>
 * License: MIT
 * --------------------------------------------------------------
 */
!function(e,t,n){var r,o,u,i="GET",s="POST",c="document",f="text",a="replace",l="test",p=e.history,h=e.location,d="//"+h.hostname,v=t.documentElement,m=t.currentScript;function g(e,t){return e.getAttribute(t)}function y(e,t){return e.hasAttribute(t)}function b(e,t,n){return e.setAttribute(t,n)}function L(e){return e.innerHTML}function k(e){return"false"!==e&&(""===e||"null"===e?null:"true"===e||(/^-?(\d*\.)?\d+$/[l](e)?+e:e))}function w(e){return A(e)?"submit":"click"}function S(e,t,n){e.removeEventListener(t,n)}function E(e,t,n){e.addEventListener(t,n,!1)}function T(e){return e.split("#")[1]||""}function C(e){return e.split("#")[0]}function j(e){var t,n=0,r=e.length;if(0===r)return n;for(t=0;t<r;++t)n=(n<<5)-n+e.charCodeAt(t),n&=n;return n<1?-1*n:n}function x(e){return"function"==typeof e}function A(e){return"form"===I(e.nodeName)}function H(e){return void 0!==e}function N(e){if(e.src&&m.src===e.src)return 1;var t=I(n);return y(e,"data-"+t)||y(e,t)?1:new RegExp("\\b"+n+"\\b").test(L(e)||"")?1:0}function O(e){for(var t,r,o,u,i={},s=q("link[rel=dns-prefetch],link[rel=preconnect],link[rel=prefetch],link[rel=preload],link[rel=prerender]",e),c=0,f=s.length;c<f;++c)o=r=s[c],void 0,u=I(n),y(o,"data-"+u)||y(o,u)||(r.id=t=r.id||n+":"+j(g(r,"href")||L(r)),i[t]=F(r),i[t][2].href=r.href);return i}function R(e,n){return(n||t).querySelector(e)}function q(e,n){return(n||t).querySelectorAll(e)}function D(e,t,n){n.insertBefore(e,t&&n===t.parentNode?t:null)}function M(e){if(e){var t=e.parentNode;t&&t.removeChild(e)}}function B(e){var n=t.createElement(e[0]);for(var r in n.innerHTML=e[1],e[2])b(n,r,K(e[2][r]));return n}function F(e){for(var t=e.attributes,n=[I(e.nodeName),L(e),{}],r=0,o=t.length;r<o;++r)n[2][t[r].name]=k(t[r].value);return n}function P(e){return e[a](/\/+$/,"")}function U(e){e.preventDefault()}function $(){return h.href}function J(e){for(var t,r,o={},u=q("script",e),i=0,s=u.length;i<s;++i)N(r=u[i])||(r.id=t=r.id||n+":"+j(g(r,"src")||L(r)),o[t]=F(r));return o}function _(e){for(var t,r,o,u,i={},s=q("link[rel=stylesheet],style",e),c=0,f=s.length;c<f;++c)o=r=s[c],void 0,u=I(n),y(o,"data-"+u)||y(o,u)||(r.id=t=r.id||n+":"+j(g(r,"href")||L(r)),i[t]=F(r));return i}function G(e,n){return e?t.getElementById(e)||(n?t.getElementsByName(e)[0]:null):null}function I(e){return e.toLowerCase()}function X(e){return e.toUpperCase()}function z(e){var t,n,r,o,u={},i=e.getAllResponseHeaders().trim().split(/[\r\n]+/);for(t in i)r=I((n=i[t].split(": ")).shift()),I(o=n.join(": ")),u[r]=k(o);return new Proxy(u,{get:function(e,t){return e[I(t)]||null},set:function(e,t,n){e[I(t)]=n}})}function K(e){return!1===e?"false":null===e?"null":!0===e?"true":e+""}(u=e[n]=function(u){var l,h,d,m,g=this,y=e[n],b={},L={},k=$(),j={},N=Object.assign({},y.state,!0===u?{cache:u}:u||{}),F=I(N.sources);if(N.turbo&&(N.cache=!0),!(g instanceof y))return new y(u);function I(e,t){var n=q(e,t),r=$();if(x(N.is)){for(var o=[],u=0,i=n.length;u<i;++u)N.is.call(g,n[u],r)&&o.push(n[u]);return o}return n}function K(e){var n=t.createElement("input"),r=q("[name][type=submit][value]",e);n.type="hidden",D(n,0,e);for(var o=0,u=r.length;o<u;++o)E(r[o],"click",function(){n.name=this.name,n.value=this.value})}function Q(n,r,o){var u=n===e,s=N.history;if(i!==r||n!==m||u){if(m=n,k=g.ref=o,ie("exit",[t,n]),N.cache){var f=b[P(C(o))];if(f)return g.lot=f[2],g.status=f[0],f[3]&&!u&&s&&te(v),ee(o),a=[f[1],n],f[3]&&(l=re(a[0])),f[3]&&(d=ue(a[0])),ie("success",a),ie(f[0],a),F=I(N.sources),f[3]&&(h=oe(a[0])),pe(a),void ie("enter",a)}var a,p,y,L,w,S=Y(n,r,o,N.lot),T=c===S.responseType,j=S.upload;return E(S,"abort",function(){x(),ie("abort",[S.response,n])}),E(S,"error",p=function(){x(),T&&!u&&s&&te(v),a=[S.response,n],T&&(l=re(a[0])),T&&(d=ue(a[0])),ie("error",a),F=I(N.sources),T&&(h=oe(a[0])),pe(a),ie("enter",a)}),E(j,"error",p),E(S,"load",p=function(){if(x(),a=[S.response,n],L=S.responseURL,w>=300&&w<400){var t=P(L);return b[t]&&delete b[t],ie("success",a),ie(w,a),void Q(m=e,i,L||o)}ee(L||o),T&&(d=ue(a[0])),ie("success",a),ie(w,a),T&&s&&te(v),F=I(N.sources),T&&(h=oe(a[0])),pe(a),ie("enter",a)}),E(j,"load",p),E(S,"progress",function(e){x(),ie("pull",e.lengthComputable?[e.loaded,e.total]:[0,-1])}),E(j,"progress",function(e){x(),ie("push",e.lengthComputable?[e.loaded,e.total]:[0,-1])}),S}function x(){y=z(S),w=S.status,i===r&&N.cache&&w&&(b[P(C(o))]=[w,S.response,y,T]),g.lot=y,g.status=w}}function V(e){j[e]&&j[e][0]&&(j[e][0].abort(),delete j[e])}function W(){for(var e in j)V(e)}function Y(e,t,n,r){n=x(N.ref)?N.ref.call(g,e,n):n;var o,u=new XMLHttpRequest,i=X(n.split(/[?&#]/)[0].split("/").pop().split(".")[1]||""),c=N.types[i]||N.type||f;if(x(c)&&(c=c.call(g,n)),u.responseType=c,u.open(t,n,!0),function(e){return"object"==typeof e}(r))for(o in r)u.setRequestHeader(o,r[o]);return u.send(s===t?new FormData(e):null),u}function Z(e,t){var n,r=Y(e,i,t);E(r,"load",function(){200===(n=r.status)&&(b[P(C(t))]=[n,r.response,z(r),c===r.responseType])})}function ee(e){e!==$()&&N.history&&p.pushState({},"",e)}function te(e){e&&(v.scrollLeft=o.scrollLeft=e.offsetLeft,v.scrollTop=o.scrollTop=e.offsetTop)}function ne(e,t,n,r){var o,u,i,s=n(e),c={};for(o in t)(u=R("#"+o[a](/[:.]/g,"\\$&")))&&(c[o]=u.nextElementSibling),s[o]||(delete t[o],M(G(o)));for(o in s)t[o]||(t[o]=i=s[o],D(B(i),c[o],r));return t}function re(e){return ne(e,l,O,r)}function oe(e){return ne(e,h,J,o)}function ue(e){return ne(e,d,_,r)}function ie(e,t){if(!H(L[e]))return g;for(var n=0,r=L[e].length;n<r;++n)L[e][n].apply(g,t);return g}function se(){o=t.body,r=t.head,g.links=l=O(),g.scripts=h=J(),g.styles=d=_(),pe([t,e]),N.cache&&Z(e,$())}function ce(e){W();var t,n=this,r=n.href,o=n.action,u=r||o,s=X(n.method||i);i===s&&(ee(u),A(n)&&(t=new URLSearchParams(new FormData(n))+"",u=P(u.split(/[?&#]/)[0])+(t?"?"+t:""))),j[u]=[Q(n,s,u),n],U(e)}function fe(e){te(G(T($()),1)),U(e)}function ae(){var e=this,t=e.href;b[P(C(t))]||Z(e,t),S(e,"mousemove",ae)}function le(t){W();var n=$();T(n)&&C(k)===C(n)||(j[n]=[Q(e,i,n),e])}function pe(e){for(var t=N.turbo,n=0,r=F.length;n<r;++n)E(F[n],w(F[n]),ce),A(F[n])?K(F[n]):t&&E(F[n],"mousemove",ae);!function(e){if(L.focus)ie("focus",e);else{var t=R("[autofocus]");t&&t.focus()}}(e),function(e){L.scroll?ie("scroll",e):te(G(T($()),1))}(e)}return y.instances[Object.keys(y.instances).length]=g,g.abort=function(e){return e?j[e]&&V(e):W(),g},g.pop=function(){return function(){for(var e=0,t=F.length;e<t;++e)S(F[e],w(F[e]),ce)}(),S(e,"DOMContentLoaded",se),S(e,"hashchange",fe),S(e,"popstate",le),ie("pop",[t,e]),g.abort()},g.caches=b,g.fetch=function(e,t,n){return Y(n,t,e)},g.fire=ie,g.hooks=L,g.links={},g.lot={},g.off=function(e,t){if(!H(e))return L={},g;if(H(L[e]))if(H(t)){for(var n=0,r=L[e].length;n<r;++n)t===L[e][n]&&L[e].splice(n,1);0===r&&delete L[e]}else delete L[e];return g},g.on=function(e,t){return H(L[e])||(L[e]=[]),H(t)&&L[e].push(t),g},g.ref=null,g.scripts={},g.state=N,g.status=null,g.styles={},E(e,"DOMContentLoaded",se),E(e,"hashchange",fe),E(e,"popstate",le),g}).version="1.0.11",u.state={cache:!1,history:!0,is:function(e,t){var n=e.target,r=g(e,"href")||g(e,"action")||"",o=e.href||e.action||"";return!(n&&"_self"!==n||"#"===r[0]||/^(data|javascript|mailto):/[l](r)||T(o)&&C(t)===C(o)||""!==r&&0!==r.search(/[.\/?]/)&&0!==r.search(d)&&0!==r.search(h.protocol+d)&&0===r.search("://"))},lot:{"x-requested-with":n},ref:function(e,t){return t},sources:"a[href],form",turbo:!1,type:c,types:{"":c,CSS:f,JS:f,JSON:"json"}},u.instances={},u._=u.prototype}(window,document,"F3H");


(function(win, doc, _) {
    function $$(query, context) {
        return (context || doc).querySelectorAll(query);
    }
    let root = doc.documentElement,
        selectors = 'body>div>main,body>div>nav,body>svg',
        elements = $$(selectors),
        f3h = new F3H(false);
    _.on('error', function() {
        win.location.reload();
    });
    // Force response type as `document`
    delete F3H.state.types.CSS;
    delete F3H.state.types.JS;
    delete F3H.state.types.JSON;
    f3h.on('error', function() {
        _.fire('error');
    });
    f3h.on('exit', function(response, target) {
        let title = doc.querySelector('title');
        if (title) {
            if (target && target.nodeName && 'form' === target.nodeName.toLowerCase()) {
                title.setAttribute('data-is', 'search' === target.name ? 'search' : 'push');
            } else {
                title.removeAttribute('data-is');
            }
        }
        _.fire('let');
    });
    f3h.on('success', function(response, target) {
        let status = this.status;
        if (200 === status || 404 === status) {
            let responseElements = $$(selectors, response),
                responseRoot = response.documentElement;
            doc.title = response.title;
            responseRoot && (root.className = responseRoot.className + ' can:fetch');
            elements.forEach(function(element, index) {
                if (responseElements[index]) {
                    element.className = responseElements[index].className;
                    element.innerHTML = responseElements[index].innerHTML;
                }
            });
            _.fire('change');
        }
    });
    _.f3h = f3h;
})(window, document, _);
