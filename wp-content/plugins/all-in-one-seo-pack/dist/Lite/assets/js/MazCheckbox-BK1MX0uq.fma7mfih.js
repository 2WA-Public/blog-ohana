import{e as k,D as _,f as o,o as g,c as A,a as i,B,u as t,C,G as m,m as $,x as N,t as S,j as w}from"./runtime-dom.esm-bundler.h3clfjuw.js";import{s as D,b as I}from"./Phone.b9hpu8hq.js";import K from"./check-7UA4j2f2.62vcfrsf.js";import"./index.jlplx4ex.js";import"./default-i18n.hohxoesu.js";import"./helpers.cti0cl6i.js";import"./translations.b896ab1m.js";import"./preload-helper.vvws7ueq.js";import"./_plugin-vue_export-helper.oebm7xum.js";const L=["for","aria-checked"],M=["id","checked","disabled","name"],P=k({inheritAttrs:!1,__name:"MazCheckbox",props:{style:{default:void 0},class:{default:void 0},modelValue:{type:[Boolean,Array],default:void 0},id:{default:void 0},color:{default:"primary"},value:{type:[String,Number,Boolean],default:void 0},name:{default:"m-checkbox"},size:{default:"md"},label:{default:void 0},disabled:{type:Boolean,default:!1}},emits:["update:model-value","change"],setup(p,{emit:f}){_(a=>({"30ad0e00":y.value,"46bd1cbc":v.value,"7c7c6907":x.value,"47a52c6c":h.value}));const e=p,r=f,n=I({componentName:"MazCheckbox",providedId:e.id}),s=o(()=>typeof e.value!="boolean"&&Array.isArray(e.modelValue)?e.modelValue.includes(e.value):typeof e.modelValue=="boolean"?e.modelValue:!1),v=o(()=>{switch(e.size){case"xl":return"2.25rem";case"lg":return"2rem";case"sm":return"1.425rem";case"xs":return"1.325rem";case"mini":return"1.2rem";default:return"1.625rem"}}),b=o(()=>{switch(e.size){case"xl":return"maz-text-2xl";case"lg":return"maz-text-xl";case"sm":return"maz-text-base";case"xs":return"maz-text-sm";case"mini":return"maz-text-xs";default:return"maz-text-lg"}}),y=o(()=>`var(--maz-color-${e.color}-contrast)`),x=o(()=>`var(--maz-color-${e.color})`),h=o(()=>["black","transparent"].includes(e.color)?"var(--maz-color-muted)":`var(--maz-color-${e.color}-alpha)`);function V(a){["Space"].includes(a.code)&&(a.preventDefault(),u(e.value??!e.modelValue))}function z(a){return typeof a=="boolean"&&(typeof e.modelValue=="boolean"||e.modelValue===void 0||e.modelValue===null)?!e.modelValue:Array.isArray(e.modelValue)&&typeof a!="boolean"?e.modelValue.includes(a)?e.modelValue.filter(l=>l!==a):[...e.modelValue,a]:[a]}function u(a){const l=z(a);r("update:model-value",l),r("change",l)}return(a,l)=>(g(),A("label",{for:t(n),class:m(["m-checkbox",[{"--disabled":a.disabled},e.class]]),tabindex:"0",style:w(a.style),role:"checkbox","aria-checked":s.value,onKeydown:V},[i("input",B({id:t(n),checked:s.value},a.$attrs,{tabindex:"-1",disabled:a.disabled,name:a.name,type:"checkbox",onChange:l[0]||(l[0]=c=>{var d;return u(a.value??((d=c==null?void 0:c.target)==null?void 0:d.checked))})}),null,16,M),i("span",null,[C(t(K),{class:m(["check-icon",b.value])},null,8,["class"])]),$(a.$slots,"default",{},()=>[N(S(a.label),1)],!0)],46,L))}}),J=D(P,[["__scopeId","data-v-85c875a9"]]);export{J as default};
