const form=document.querySelector("form"),
fileInput=form.querySelector(".file-input"),
 progressarea=document.querySelector(".progress-area"),
 uploadarea=document.querySelector(".uploader-area");

 form.addEventListener("click",()=>{
 	fileInput.click();
 });