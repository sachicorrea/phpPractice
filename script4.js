// Script 4th activity

var body_div = document.getElementById("body-index");
var bodyMassIndex = document.getElementById("bodyMassIndex");
var category = document.getElementById("category");

// function to display errors
function displayErrors(errors) {
    var inputs = document.getElementsByTagName('input');
    for(i=0; i < inputs.length; i++) {
        var input = inputs[i];

        if(errors.indexOf(input.name) >= 0) {
            input.classList.add('error');
        }
    }
}

function clearErrors() {
    var inputs = document.getElementsByTagName('input');
    for(i=0; i < inputs.length; i++) {
        inputs[i].classList.remove('error');
    }
}

function postResult(value, value1) {
    bodyMassIndex.innerHTML = value;
    category.innerHTML = value1;
    body_div.style.display = 'block';
}

function clearResult() {
    category.inneHTML = '';
    body_div.style.display = 'none';
}

// omits textareas, select-options, checkboxes, radio buttons
function gatherFormData(form) {
    var inputs = form.getElementsByTagName('input');
    var array = [];
    for(i=0; i < inputs.length; i++ ){
        var inputNameValue = inputs[i].name + '=' + inputs[i].value;
        array.push(inputNameValue);
    }

    return array.join('&');
}

function calculateBodyIndex() {
    clearResult();
    clearErrors();

    var form = document.getElementById("bodyMass-form");
    var action = form.getAttribute("action");

    // gather form data - If you use Content-type. Do not use with FormData class
    //var form_data = gatherFormData(form);

    // Code for FormData class only - do not use with Content-type
    var form_data = new FormData(form);
    for ([key, value] of form_data.entries()) {
        console.log(key + ': ' + value);
    }

    var xhr = new XMLHttpRequest();
    xhr.open('POST', action, true);
    // do not set Content-type with FormData
    //xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');

    xhr.onreadystatechange = function () {
        if(xhr.readyState == 4 && xhr.status == 200) {
            var result = xhr.responseText;
            console.log('Body Mass Category: ' + result);
            
            // Considering errors array
            var json = JSON.parse(result);
            
            if(json.hasOwnProperty('errors') && json.errors.length > 0) {
                displayErrors(json.errors);
            } else {
                postResult(json.massIndex, json.categoryIndex);
            }
            // Line if you're not using errors' array
            //postResult(result);
        }
    };
    xhr.send(form_data);
}

var button = document.getElementById("body-submit");
button.addEventListener("click", calculateBodyIndex);