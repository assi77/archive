const form=document.querySelector("form"),
fileInput=form.querySelector(".file-input"),
 progressarea=document.querySelector(".progress-area"),
 uploadarea=document.querySelector(".uploader-area");

 form.addEventListener("click",()=>{
 	fileInput.click();
 });

 fileInput.onchange = ({target})=>{
    let file = target.files[0];
    if(file){
        let fileName = file.name;
        uploadFile(fileName);
    }
 }
 function uploadFile(name){
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/upload.php");
    
    xhr.upload.addEventListener("progress", e =>{
        console.log(e);
        let fileloaded = math.floor((loaded / total )*100);
        let filetotal =math.floor(total /1000);
        let progressHTML=;


        progressarea.innerHTML=progressHTML

    });
    let formData = new formData(form);

    xhr.send(formData);
 }