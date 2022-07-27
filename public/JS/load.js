 document.getElementById('load').onclick = function(e){
    // let xhr = new XMLHttpRequest();
    // xhr.onreadystatechange = function(){
    //     if(xhr.readyState === 4){
    //         if(xhr.status === 200){
    //             document.getElementById('attribute').innerHTML = this.responseText;
    //         }
    //     }
    // };
    //     xhr.open('GET','/lol.php');
    //     xhr.send();
     alert('ok');
     e.preventDefault();
};


 document.getElementById('getAttribute').onchange = function(e){
     let typeId = this.value;
     alert(typeId);
     let xhr = new XMLHttpRequest();
     xhr.onreadystatechange = function(){
         if(xhr.readyState === 4){
             if(xhr.status === 200){
                 document.getElementById('attribute').innerHTML = this.responseText;
             }
         }
     };
     let url = "AddProduct/getAtr/?typeId="+typeId;
         xhr.open('GET',url);
         xhr.send();
     e.preventDefault();
 };
