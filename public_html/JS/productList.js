/**
 * redirect to add product page
 * @param e
 */
document.getElementById('add').onclick = function(e){
    redirect('addproduct');
    e.preventDefault();
}

/**
 * sends an array of products and reloads the page
 * @param e
 */
document.getElementById('delete-product-btn').onclick = function(e){
    let form = document.forms.delete_form;
    let formData = new FormData(form);
    let xhr = new XMLHttpRequest();
    let method = form.method;
    let url = form.action;
    xhr.open(method,url);
    xhr.send(formData);
    xhr.onreadystatechange = function(){
        if(xhr.readyState === 4){
            if(xhr.status === 200){
                formReset(form);
                redirect();
            }
        }
    }
    e.preventDefault();
}