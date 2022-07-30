/**
 * the function sends the element id and receives in response html with form attribute parameters
 * @param e
 */
 document.getElementById('productType').onchange = function(e){
     let typeId = this.value;
     let xhr = new XMLHttpRequest();
     let url = "AddProduct/getAttribute/?typeId="+typeId;
     xhr.open('GET',url);
     xhr.send();
     xhr.onreadystatechange = function(){
         if(xhr.readyState === 4){
             if(xhr.status === 200){
                 document.getElementById('attribute').innerHTML = this.responseText;
             }
         }
     };
     e.preventDefault();
 };

 document.getElementById('save').onclick = function(e){
     let form = document.forms.product_form;
     let formData = new FormData(form);
     let url = "AddProduct/add";
     let xhr = new XMLHttpRequest();
     xhr.open('POST',url);
     xhr.send(formData);
     xhr.onreadystatechange = function(){
         if(xhr.readyState === 4){
             if(xhr.status === 200){
                 alert('ok');
                 document.getElementById('response').innerHTML = this.responseText;
             }
         }
     };
     // console.log(form);
     e.preventDefault();
 };

