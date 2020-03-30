var devowlWp_utils=function(e){function t(t){for(var n,c,a=t[0],i=t[1],s=t[2],p=0,f=[];p<a.length;p++)c=a[p],Object.prototype.hasOwnProperty.call(o,c)&&o[c]&&f.push(o[c][0]),o[c]=0;for(n in i)Object.prototype.hasOwnProperty.call(i,n)&&(e[n]=i[n]);for(l&&l(t);f.length;)f.shift()();return u.push.apply(u,s||[]),r()}function r(){for(var e,t=0;t<u.length;t++){for(var r=u[t],n=!0,a=1;a<r.length;a++){var i=r[a];0!==o[i]&&(n=!1)}n&&(u.splice(t--,1),e=c(c.s=r[0]))}return e}var n={},o={0:0},u=[];function c(t){if(n[t])return n[t].exports;var r=n[t]={i:t,l:!1,exports:{}};return e[t].call(r.exports,r,r.exports,c),r.l=!0,r.exports}c.m=e,c.c=n,c.d=function(e,t,r){c.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},c.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},c.t=function(e,t){if(1&t&&(e=c(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(c.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var n in e)c.d(r,n,function(t){return e[t]}.bind(null,n));return r},c.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return c.d(t,"a",t),t},c.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},c.p="";var a=window.webpackJsonpdevowlWp_utils=window.webpackJsonpdevowlWp_utils||[],i=a.push.bind(a);a.push=t,a=a.slice();for(var s=0;s<a.length;s++)t(a[s]);var l=i;return u.push([51,1]),r()}({0:function(e,t){e.exports=React},1:function(e,t){e.exports=wp.i18n},14:function(e,t){e.exports=moment},3:function(e,t){e.exports=jQuery},51:function(e,t,r){"use strict";r.r(t),r.d(t,"BaseOptions",(function(){return a})),r.d(t,"untrailingslashit",(function(){return i})),r.d(t,"trailingslashit",(function(){return s})),r.d(t,"createContextFactory",(function(){return f})),r.d(t,"WP_REST_API_USE_GLOBAL_METHOD",(function(){return b})),r.d(t,"RouteHttpVerb",(function(){return d})),r.d(t,"commonUrlBuilder",(function(){return g})),r.d(t,"Url",(function(){return v.a})),r.d(t,"commonRequest",(function(){return x})),r.d(t,"createRequestFactory",(function(){return R})),r.d(t,"createLocalizationFactory",(function(){return A})),r.d(t,"locationRestPluginGet",(function(){return L})),r.d(t,"Button",(function(){return F})),r.d(t,"ButtonType",(function(){return G})),r.d(t,"Notice",(function(){return H})),r.d(t,"NoticeType",(function(){return z}));r(33);var n=r(4),o=r.n(n),u=r(5),c=r.n(u),a=function(){function e(){o()(this,e),this.slug=void 0,this.textDomain=void 0,this.version=void 0,this.restUrl=void 0,this.restNamespace=void 0,this.restRoot=void 0,this.restQuery=void 0,this.restNonce=void 0,this.publicUrl=void 0}return c()(e,null,[{key:"slugCamelCase",value:function(e){return e.replace(/-([a-z])/g,(function(e){return e[1].toUpperCase()}))}},{key:"getPureSlug",value:function(t){var r=arguments.length>1&&void 0!==arguments[1]&&arguments[1];return r?e.slugCamelCase(t.slug):t.slug}}]),e}(),i=function e(t){return t.endsWith("/")||t.endsWith("\\")?e(t.slice(0,-1)):t},s=function(e){return"".concat(i(e),"/")},l=r(0),p=r.n(l);function f(e){var t=Object(l.createContext)(e);return{StoreContext:t,StoreProvider:function(r){var n=r.children;return React.createElement(t.Provider,{value:e},n)},useStores:function(){return Object(l.useContext)(t)}}}var d,y=r(6),v=r.n(y),h=r(3),m=r.n(h),b=!0;function g(e){for(var t=e.location,r=e.params,n=void 0===r?{}:r,o=e.nonce,u=void 0===o||o,c=e.options,a=new v.a(c.restRoot,!0),l=a.query,p=l.rest_route||a.pathname,f=[],y=t.path.replace(/:([A-Za-z0-9-_]+)/g,(function(e,t){return f.push(t),n[t]})),h={},g=0,O=Object.keys(n);g<O.length;g++){var w=O[g];-1===f.indexOf(w)&&(h[w]=encodeURIComponent(n[w]))}var _=s(p)+i(t.namespace||c.restNamespace)+y,P=new v.a(window.location.href).protocol.slice(0,-1);return a.set("protocol",P),l.rest_route?l.rest_route=_:a.set("pathname",_),u&&c.restNonce&&(l._wpnonce=c.restNonce),b&&t.method&&t.method!==d.GET&&(l._method=t.method),a.set("query",m.a.extend(!0,{},c.restQuery,h,l)).toString()}!function(e){e.GET="GET",e.POST="POST",e.PUT="PUT",e.DELETE="DELETE"}(d||(d={}));var O=r(13),w=r.n(O),_=r(20),P=r.n(_);function x(e){return j.apply(this,arguments)}function j(){return(j=P()(w.a.mark((function e(t){var r,n,o,u,c,a,i,s;return w.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return r=t.location,n=t.options,o=t.request,u=t.params,c=t.settings,a=void 0===c?{}:c,i=g({location:r,params:u,nonce:!1,options:n}),b&&r.method&&r.method!==d.GET&&(a.method="POST"),e.next=5,m.a.ajax(m.a.extend(!0,a,{url:i,headers:{"X-WP-Nonce":n.restNonce},data:o}));case 5:return s=e.sent,e.abrupt("return",s);case 7:case"end":return e.stop()}}),e)})))).apply(this,arguments)}var S=r(2),E=r.n(S);function N(e,t){var r=Object.keys(e);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(e);t&&(n=n.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),r.push.apply(r,n)}return r}function T(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?N(Object(r),!0).forEach((function(t){E()(e,t,r[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):N(Object(r)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))}))}return e}function R(e){return{urlBuilder:function(t){return g(T({},t,{options:{restNamespace:e.restNamespace,restNonce:e.restNonce,restQuery:e.restQuery,restRoot:e.restRoot}}))},request:function(t){return x(T({},t,{options:{restNamespace:e.restNamespace,restNonce:e.restNonce,restQuery:e.restQuery,restRoot:e.restRoot}}))}}}var C=r(32),D=r(1),U=r(9),k=r.n(U);function A(e){var t=window.wpi18nLazy;if(t&&t[e]&&k.a&&k.a.i18n){var r=!0,n=!1,o=void 0;try{for(var u,c=t[e][Symbol.iterator]();!(r=(u=c.next()).done);r=!0){var a=u.value;k.a.i18n.setLocaleData(a,e)}}catch(e){n=!0,o=e}finally{try{r||null==c.return||c.return()}finally{if(n)throw o}}}return{_n:function(t,r,n){for(var o=arguments.length,u=new Array(o>3?o-3:0),c=3;c<o;c++)u[c-3]=arguments[c];return D.sprintf.apply(D,[D._n(t,r,n,e)].concat(u))},_nx:function(t,r,n,o){for(var u=arguments.length,c=new Array(u>4?u-4:0),a=4;a<u;a++)c[a-4]=arguments[a];return D.sprintf.apply(D,[D._nx(t,r,n,o,e)].concat(c))},_x:function(t,r){for(var n=arguments.length,o=new Array(n>2?n-2:0),u=2;u<n;u++)o[u-2]=arguments[u];return D.sprintf.apply(D,[D._x(t,r,e)].concat(o))},__:function(t){for(var r=arguments.length,n=new Array(r>1?r-1:0),o=1;o<r;o++)n[o-1]=arguments[o];return D.sprintf.apply(D,[D.__(t,e)].concat(n))},_i:function(e,t){return C.a(e,{components:t})}}}var G,L={path:"/plugin",method:d.GET},Q=r(30),W=r.n(Q),q=r(31),B=r.n(q),I=r(8),M=r.n(I);!function(e){e[e.Primary=0]="Primary",e[e.Secondary=1]="Secondary"}(G||(G={}));var z,F=function(e){var t=e.className,r=e.type,n=e.children,o=B()(e,["className","type","children"]),u=M()(t,{"button-primary":r===G.Primary,"button-secondary":r===G.Secondary||!r});return p.a.createElement("button",W()({className:u},o),n)};!function(e){e.Error="Error",e.Info="Info",e.Success="Success"}(z||(z={}));var H=function(e){var t=e.type,r=e.children,n=M()({notice:!0,"notice-error":t===z.Error,"notice-info":t===z.Info,"notice-success":t===z.Success});return p.a.createElement("div",{className:n},p.a.createElement("p",null,r))}},9:function(e,t){e.exports=wp}});
//# sourceMappingURL=index.js.map