<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Contact Form To Email Using JavaScript</title>
          <link rel="stylesheet" href="style.css">
</head>
<body>
          <div class="container">
                    <form onsubmit="sendEmail(); reset(); return false;">
               <h3>Email System </h3>
                              <input type="text" id="name" placeholder="Your Name" required>
                              <input type="email" id="email" placeholder="Email id" required>
                              <input type="text" id="phone" placeholder="Phone no" required>
                              <textarea id="message" rows="4" placeholder="How can we help you?"></textarea>
                              <button type="submit">send</button>
                    </form>
          </div>
          <script src=" https://smtpjs.com/v3/smtp.js"></script>
          <script>
                    function sendEmail(){
                              Email.send({
                                   // Host : "smtp.gmail.com",
                                   // Username : "mdkaleem65885@gmail.com",
                                   // Password : "",
                                   To : 'kmd457511@gmail.com',
                                   From : document.getElementById("email").value,
                                   Subject : "New Contact Form Enquiry",
                                   Body : "Name: "+ document.getElementById("name").value
                                   +"<br> Email: "+document.getElementById("email").value
                                   +"<br> Phone no: "+document.getElementById("phone").value
                                   +"<br> Message: "+document.getElementById("message").value
                     }).then(
                   message => alert("Message Sent Successfully")
);
     
                    }
          </script>
</body>
</html>