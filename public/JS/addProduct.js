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

 // document.getElementById('save').onclick = function(e){
 //     let form = document.forms.product_form;
 //     let formData = new FormData(form);
 //
 //     let errorForm = [];
 //     for(let el of formData.entries()){
 //
 //         if(el[1].length === 0){
 //             errorForm[el[0]] = "data in the line "+el[0]+" is not entered or entered incorrectly";
 //         }
 //     }
 //     console.log(errorForm);
 //     // for(let el of form.elements){
 //     //     let errorForm = [];
 //     //     if(el.value == 0){
 //     //         errorForm[el.name] = "data in the line "+el.name+" is not entered or entered incorrectly";
 //     //         console.log(errorForm[el.name]);
 //     //     }
 //     //       console.log(el.value);
 //     //   }
 //     // let formData = new FormData(form);
 //     // let xhr = new XMLHttpRequest();
 //     // let method = form.method;
 //     // let url = form.action;
 //     // xhr.open(method,url);
 //     // xhr.send(formData);
 //     // xhr.onreadystatechange = function(){
 //     //     if(xhr.readyState === 4){
 //     //         if(xhr.status === 200){
 //     //             document.getElementById('response').innerHTML = this.responseText;
 //     //         }
 //     //     }
 //     // };
 //     e.preventDefault();
 // };

