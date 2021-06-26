var result_div = document.getElementById("flight-result");
var flight_cost = document.getElementById("flight-cost");
var class_increasing = document.getElementById("class-increasing");
var services_cost = document.getElementById("services-cost");
var age_discount = document.getElementById("age-discount");
var total_flight = document.getElementById("total-flight");

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

function postResult(value, value1, value2, value3, value4) {
    flight_cost.innerHTML = value;
    class_increasing.innerHTML = value1;
    services_cost.innerHTML = value2;
    age_discount.innerHTML = value3;
    total_flight.innerHTML = value4;
    result_div.style.display = 'block';
}

function clearResult() {
    flight_cost.inneHTML = '';
    class_increasing.inneHTML = '';
    services_cost.innerHTML = '';
    age_discount.innerHTML = '';
    total_flight.innerHTML = '';
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

// omits textareas, inputs, checkboxes, radio buttons
function gatherFormData(form) {
    var selects = form.getElementsByTagName('select');
    var array = [];
    for(i=0; i < selects.length; i++ ){
        var selectNameValue = selects[i].name + '=' + selects[i].value;
        array.push(selectNameValue);
    }

    return array.join('&');
}

// omits textareas, select-options, checkboxes, inputs
function gatherFormData(form) {
    var radios = form.getElementsByTagName('radio');
    var array = [];
    for(i=0; i < radios.length; i++ ){
        var radioNameValue = radios[i].name + '=' + radios[i].value;
        array.push(radioNameValue);
    }

    return array.join('&');
}

// omits textareas, select-options, radio buttons, inputs
function gatherFormData(form) {
    var checkboxes = form.getElementsByTagName('checkbox');
    var array = [];
    for(i=0; i < checkboxes.length; i++ ){
        var checkboxesNameValue = checkboxes[i].name + '=' + checkboxes[i].value;
        array.push(checkboxesNameValue);
    }

    return array.join('&');
}

function calculateFlights() {
    clearResult();
    clearErrors();

    var form = document.getElementById("flight-form");
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
                postResult(json.flightValue, json.increasingCost, json.servicesValue, json.discounts, json.totalFlight);
            }
            // Line if you're not using errors' array
            //postResult(result);
        }
    };
    xhr.send(form_data);
}

var button = document.getElementById("ajax-submit");
button.addEventListener("click", calculateFlights);