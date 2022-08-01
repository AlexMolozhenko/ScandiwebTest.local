
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

/**
 * function to check form element for validity
 * @param e
 * @returns {*}
 */
function elementValid(e){
        if(e.validity.valueMissing){
            e.setCustomValidity("Please, provide "+e.name);
        }else if (e.validity.patternMismatch){
            e.setCustomValidity("Element value "+e.name+" does not match attribute");
        }else {
            e.setCustomValidity('');
        }
    return   e.reportValidity();

}

/**
 * form validation function
 * @param form
 * @returns {boolean}
 */
function validForm(form){
    let lenForm= form.elements.length;
    let lenVal = 0;
    for(let el of form.elements){
        if(elementValid(el)==true){
            lenVal++;
        }
    }
    if(lenForm === lenVal){
        return true;
    }else{
        return false;
    }
}

/**
 * form submit function to server
 * @param e
 */
 document.getElementById('save').onclick = function(e){

     let form = document.forms.product_form;
     if(validForm(form)==true){
         let formData = new FormData(form);
         let xhr = new XMLHttpRequest();
         let method = form.method;
         let url = form.action;
         xhr.open(method,url);
         xhr.send(formData);
         xhr.onreadystatechange = function(){
             if(xhr.readyState === 4){
                 if(xhr.status === 200){
                     document.getElementById('response').innerHTML = this.responseText;
                 }
             }
         };
     }
     e.preventDefault();
 };

