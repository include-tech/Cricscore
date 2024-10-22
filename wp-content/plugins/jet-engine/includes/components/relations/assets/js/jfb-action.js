/*! For license information please see jfb-action.js.LICENSE.txt */
(()=>{"use strict";var e={192:(e,t,o)=>{var n=o(609),r=Symbol.for("react.element"),i=(Symbol.for("react.fragment"),Object.prototype.hasOwnProperty),s=n.__SECRET_INTERNALS_DO_NOT_USE_OR_YOU_WILL_BE_FIRED.ReactCurrentOwner,l={key:!0,ref:!0,__self:!0,__source:!0};function a(e,t,o){var n,a={},c=null,_=null;for(n in void 0!==o&&(c=""+o),void 0!==t.key&&(c=""+t.key),void 0!==t.ref&&(_=t.ref),t)i.call(t,n)&&!l.hasOwnProperty(n)&&(a[n]=t[n]);if(e&&e.defaultProps)for(n in t=e.defaultProps)void 0===a[n]&&(a[n]=t[n]);return{$$typeof:r,type:e,key:c,ref:_,props:a,_owner:s.current}}t.jsx=a,t.jsxs=a},540:(e,t,o)=>{e.exports=o(192)},609:e=>{e.exports=window.React}},t={},o=function o(n){var r=t[n];if(void 0!==r)return r.exports;var i=t[n]={exports:{}};return e[n](i,i.exports,o),i.exports}(540);const{TextControl:n,SelectControl:r}=wp.components,{useState:i,useEffect:s,Fragment:l}=wp.element,{withRequestFields:a,withLoadingSelect:c}=JetFBHooks,{withSelect:_,withDispatch:p}=wp.data,{compose:d}=wp.compose,{addAction:u,getFormFieldsBlocks:f,Tools:{withPlaceholder:h}}=JetFBActions;u("connect_relation_items",d(_(a))((function({settings:e,label:t,help:n,source:a,onChangeSettingObj:c,requestFields:_}){const[p,d]=i([]);return s((()=>{d([...f([],"--"),..._])}),[]),(0,o.jsxs)(l,{children:[(0,o.jsx)(r,{label:t("relation"),labelPosition:"side",value:e.relation,onChange:e=>c({relation:e}),options:h(a.relations)}),(0,o.jsx)(r,{label:t("parent_id"),labelPosition:"side",value:e.parent_id,onChange:e=>c({parent_id:e}),options:p}),(0,o.jsx)(r,{label:t("child_id"),labelPosition:"side",value:e.child_id,onChange:e=>c({child_id:e}),options:p}),(0,o.jsx)(r,{label:t("context"),labelPosition:"side",value:e.context,onChange:e=>c({context:e}),options:h(a.context_options)}),(0,o.jsx)(r,{label:t("store_items_type"),labelPosition:"side",value:e.store_items_type,onChange:e=>c({store_items_type:e}),options:h(a.store_items_type_options)})]})})));const{addFilter:m}=wp.hooks;m("jet.fb.preset.editor.custom.condition","jet-form-builder",(function(e,t,o){return"relation_query_var"===t?"connect_relation_items"===o.from&&["query_var","object_var"].includes(o.rel_object_from):e}))})();
//# sourceMappingURL=jfb-action.js.map