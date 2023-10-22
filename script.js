const form=document.querySelector(".wrapper form"),
fullURL=form.querySelector("input"),
shortenBtn=form.querySelector("button"),
blueEffect=document.querySelector(".blur-effect"),
popupBox=document.querySelector(".popup-box"),
shortenURL=popupBox.querySelector("input");

form.onsubmit=(e)=>{
    e.preventDefault();
}

shortenBtn.onclick = () =>{ //ajax
    let xhr=new XMLHttpRequest();
    xhr.open("POST","php/url-control.php", true);
    xhr.onload=()=>{
        if(xhr.readyState ==4 && xhr.status== 200){
            let data= xhr.response;
            if(data.length <=5){
                blueEffect.style.display="block";
                popupBox.classList.add("show");

                let domain="localhost/url?u=";
                shortenURL.value = domain + data;
            }else{
                alert(data);
            }
        }
    }

    let formData= new FormData(form);
    xhr.send(formData);
}