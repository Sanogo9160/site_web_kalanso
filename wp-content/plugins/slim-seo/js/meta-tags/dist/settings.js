(()=>{var l=()=>{let t,e=i=>{i.preventDefault(),t||(t=wp.media({multiple:!1,title:ss.mediaPopupTitle})),t.open(),t.off("select"),t.on("select",()=>{let a=t.state().get("selection").first().toJSON().url;i.target.previousElementSibling.value=a})};document.querySelectorAll(".ss-select-image").forEach(i=>i.addEventListener("click",e))},c=t=>t?t.replace(/<(script|style)[^>]*?>.*?<\/\1>/gm,"").replace(/<[^>]*?>/gm,"").replace(/\s+/gm," ").trim():"",n=class{constructor(e){this.el=document.querySelector(e)}get value(){return this.el?c(this.el.value):""}onChange(e){this.el&&this.el.addEventListener("input",e)}},r=class{constructor(e,s,i,a,u){this.input=e,this.ref=s,this.min=i,this.max=a,this.truncate=u,this.updateCounter=this.updateCounter.bind(this),this.updatePreview=this.updatePreview.bind(this)}get generated(){if(!this.ref)return"";let e=this.ref.value;return this.truncate?e.substring(0,this.max):e}updatePreview(){this.input.el.placeholder=_.unescape(this.generated)}updateCounter(){let e=this.input.value||this.generated;e=_.unescape(e);let s=this.input.el.nextElementSibling.querySelector(".ss-counter");s&&(s.textContent=e.length),this.updateStatus(e)}updateStatus(e){let s=e&&e.length>=this.min&&e.length<=this.max,i=this.input.el.parentNode.previousElementSibling;i.classList.remove("ss-success","ss-warning"),i.classList.add(s?"ss-success":"ss-warning")}addEventListener(){this.input.onChange(this.updateCounter),this.ref&&(this.ref.onChange(this.updateCounter),this.ref.onChange(this.updatePreview))}init(){!this.input.el||(this.updatePreview(),this.updateCounter(),this.addEventListener())}};l();var o=document.querySelector("#ss-post-type-select");o&&(o.addEventListener("change",t=>{document.querySelectorAll(".ss-post-type-settings").forEach(e=>e.classList.remove("ss-is-active")),document.querySelector(`.ss-post-type-settings--${t.target.value}`).classList.add("ss-is-active")}),document.querySelector(`.ss-post-type-settings--${o.value}`).classList.add("ss-is-active"));ss.items.forEach(t=>{let e=new r(new n(`#ss-title-${t}`),new n(`#ss-title-preview-${t}`),0,60),s=new r(new n(`#ss-description-${t}`),new n(`#ss-description-preview-${t}`),50,160,!0);e.init(),s.init()});})();