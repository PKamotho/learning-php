const btn = document.getElementById('button');
const form = document.getElementById('form');
const inputs = document.querySelectorAll(".field input");

// console.log("Length of inputs", inputs.length);

 form.addEventListener('submit',
  function(event) {
   event.preventDefault();

   btn.value = 'Sending...';

   const serviceID = 'service_qaddd6d';
   const templateID = "template_w0vn05p";

   emailjs.sendForm(serviceID, templateID, this)
     .then(() => {
      btn.value = 'Send Email';
     alert('Sent!');
     }, (err) => {
       btn.value = 'Send Email';
      alert(JSON.stringify(err));
    });
    
    inputs.forEach(input => console.log(input.value));
});