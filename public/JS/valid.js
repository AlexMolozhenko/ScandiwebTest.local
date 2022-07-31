// let productSku = document.getElementById('productSku');
// let productName = document.getElementById('productName');
// let form = document.getElementById('product_form');


// document.getElementById('save').onclick = function(e){
//     if (productSku.validity.valueMissing){
//         document.getElementById("errorMassage").innerHTML = "line is required";
//     }
//     e.preventDefault();
// };

// document.getElementById('save').onclick = function(e){
//     let form = document.forms.product_form;
//     let formData = new FormData(form);
//
//     let errorForm;
//     // for(let el of formData.entries()){
//     //
//     //     if(el[1].length === 0){
//     //         errorForm[el[0]] = "data in the line "+el[0]+" is not entered or entered incorrectly";
//     //     }
//     // }
//     // console.log(errorForm);
//     for(let el of form.elements){
//         if(el.validity.valueMissing){
//             errorForm = "<p>data in the line "+el.name+" is not entered.</p></br>";
//         }
//         if(el.validity.patternMismatch){
//             errorForm = "<p>data in the line "+el.name+" is entered incorrectly.</p></br>";
//         }
//       }
//
//     document.getElementById("errorMassage").innerHTML = errorForm;
//     e.preventDefault();
// };