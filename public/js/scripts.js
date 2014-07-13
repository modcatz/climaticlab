$(document).ready(function(){
  var input = document.getElementsByClassName('contact-form_input')[0];
  var input1 = document.getElementsByClassName('contact-form_input')[1];
  var input2 = document.getElementsByClassName('contact-form_msg')[0];



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



$(".product_order").click(function() {
$(".order-popup").show();
});

$(".order-popup").click(function() {
$(this).hide();
});

});