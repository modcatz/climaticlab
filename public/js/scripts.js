$(document).ready(function(){
  var input = document.getElementsByClassName('contact-form_input')[0];
  var input1 = document.getElementsByClassName('contact-form_input')[1];
  var input2 = document.getElementsByClassName('contact-form_msg')[0];
  var orderinput = document.getElementsByClassName('order-form_input')[0];
  var orderinput1 = document.getElementsByClassName('order-form_input')[1];
  var orderinput2 = document.getElementsByClassName('order-form_msg')[0];


 function prepareInput(input) {
    input.classList.remove('placeholder');
    input.oldValue = input.value;
    input.value = '';
  }

  function resetInput(input) {
    input.classList.add('placeholder');
    input.value = input.oldValue;
  }

  // name
  
  if (input) { 
input.onfocus = function() {
    if (input.classList.contains('placeholder')) {
      prepareInput(this);
  };
 
  }
  input.onblur = function() {
    if (this.value == '') {
      resetInput(this);
    }
  }

// mail

   input1.onfocus = function() {
    if (input1.classList.contains('placeholder')) {
      prepareInput(this);
  };
  
  }
  input1.onblur = function() {
    if (this.value == '') {
      resetInput(this);
    }
  }

input2.onfocus = function() {
    if (input2.classList.contains('placeholder')) {
      prepareInput(this);
  };
  
  }
  input2.onblur = function() {
    if (this.value == '') {
      resetInput(this);
    }
  }
 };

 //order form
 if (orderinput) { 
orderinput.onfocus = function() {
    if (orderinput.classList.contains('placeholder')) {
      prepareInput(this);
  };
 
  }
  orderinput.onblur = function() {
    if (this.value == '') {
      resetInput(this);
    }
  }

// mail

   orderinput1.onfocus = function() {
    if (orderinput1.classList.contains('placeholder')) {
      prepareInput(this);
  };
  
  }
  orderinput1.onblur = function() {
    if (this.value == '') {
      resetInput(this);
    }
  }

orderinput2.onfocus = function() {
    if (orderinput2.classList.contains('placeholder')) {
      prepareInput(this);
  };
  
  }
  orderinput2.onblur = function() {
    if (this.value == '') {
      resetInput(this);
    }
  }
 };





$("#contact-form").validate({
       rules:{

            name:{
                required: false,
                minlength: 1,
                 },
            email:{
              required: true,
              email: true
            },
        message:{
                required: false,
                minlength: 0
                 }         
       }
       
    });
$("#order-form").validate({
       rules:{

            name:{
                required: false,
                minlength: 1,
                 },
            email:{
              required: true,
              email: true
            },
        message:{
                required: false,
                minlength: 0
                 }         
       }
       
    });


$(".product_order").click(function() {
$(".js-order").show();
});

$(".js-close-popup").click(function() {
$(".js-order").hide();
});

});