// Script first activity

var result_div = document.getElementById("contractor-result");
var retention_fee = document.getElementById("retention-fee");
var base_salary = document.getElementById("base-salary"); 
var health = document.getElementById("health");
var pension= document.getElementById("pension");

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

function postResult(value, value1, value2, value3) {
    retention_fee.innerHTML = value;
    base_salary.innerHTML = value1;
    health.innerHTML = value2;
    pension.innerHTML = value3;
    result_div.style.display = 'block';
}

function clearResult() {
    retention_fee.innerHTML = '';
    base_salary.innerHTML = '';
    health.innerHTML = '';
    pension.innerHTML = '';
    result_div.style.display = 'none';
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

function salaryForContractor() {
    clearResult();
    clearErrors();

    var form = document.getElementById("contractor-form");
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
            console.log('Result: ' + result);
            
            // Considering errors array
            var json = JSON.parse(result);
            if(json.hasOwnProperty('errors') && json.errors.length > 0) {
                displayErrors(json.errors);
            } else {
                postResult(json.retention_fee, json.base_salary, json.health, json.pension);
            }
            // Line if you're not using errors' array
            //postResult(result);
        }
    };
    xhr.send(form_data);
}

var button = document.getElementById("contractor-submit");
button.addEventListener("click", salaryForContractor);