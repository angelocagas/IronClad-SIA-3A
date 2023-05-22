<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?
    family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
    <title>Feedback!</title>
  </head>
  <style>
    *{
        margin:0;
        padding:0;
    }
    body{
        background: #eeeee4;
        font-size: 14px;
        font-family: 'Poppins', sans-serif;
    }
    .container{
        width: 80%;
        margin: 50px auto;
    }
    .contact-box{
        background: #fff;
        display: flex;
    }
    .contact-left{
        flex-basis: 60%;
        padding: 40px 60px;
        color: blue;
        font-weight: bold;
    }
    .contact-right{
        flex-basis: 60%;
        padding: 40px 60px;
        background: blue;
        color: #fff;
        font-size: 17px;
        
    }
    .h1{
        margin-bottom: 10px;
    }
    .container p{
        margin-bottom: 10px;
    }
    .input-row{
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
        
    }
    .input-row .input-group{
        flex-basis: 45%;
        font-weight: bold;
        
    }
    input{
        width: 100%;
        border: none;
        border-bottom: 1px solid #ccc;
        outline: none;
        padding-bottom: 5px;
    }
    textarea{
        width: 100%;
        border: 1px solid #ccc;
        outline: none;
        padding: 10px;
        box-sizing: border-box;
    }
    label{
        margin-bottom: 6px;
        display: block;
        color: black;
    }
    button{
        background: blue;
        width: 100px;
        border: none;
        color: #fff;
        font-weight: bold;
        height: 35px;
        border-radius: 30px;
        margin-top: 20px;
        box-shadow: 0px 5px 15px 0px rgba(28,0,181,0.3);
    }
    .contact-left h3{
       
        font-weight: 600;
        margin-bottom: 30px;
    }
    tr td:first-child{
        padding-right: 20px;
    }
    tr td{
        padding-top:20px;
    }
    .form-check{
        width: 5%;
        font-size: 17px;
        margin-bottom: 7px;
        flex-basis: 60%;
        text-indent: 3px;
    }
    .form-check-label{
        text-indent: 10px;
        padding-right: 10px;
    }
  </style>
  <body>
        <div class="container">
            <h1>Connect With Us</h1>
            <p>We would love to respond to your queries and help you succeed.<br>Feel
                Free to get in touch with us. </p>
                <div class="contact-box">
                    <div class="contact-left">
                        <h3>Send your request</h3>
                        <form>
                            <div class="input-row">
                                <div class="input-group">
                                    <label>Name</label>
                                    <input type="text" placeholder="Enter Your Name">
                                </div>
                                <div class="input-group">
                                    <label>Phone</label>
                                    <input type="text" placeholder="Enter Your Phone Number">
                                </div>
                        
                            </div>
                            <div class="input-row">
                                <div class="input-group">
                                    <label>Email</label>
                                    <input type="text" placeholder="Enter Your Email">
                                </div>
                                <div class="input-group">
                                    <label>Subject</label>
                                    <input type="text" placeholder="Enter Subject">
                                </div>

                            </div>
                            <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">Excellent</label>
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">Good</label>
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">Neutral</label>
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">Poor</label>
</div>

                            

                            <label>Message</label>
                            <textarea rows="5" placeholder="Your Message:"></textarea>
                            <button type="submit">SEND</button>
                        </form>
                    </div>
                    <div class="contact-right">
                        <h3>Reach Us</h3>

                        <table>
                            <tr>
                                <td>Email:</td>
                                <td>Contactus@example.com</td>
                            </tr>
                            <tr>
                                <td>Phone:</td>
                                <td>+1 012 345 6789</td>
                            </tr>
                            <tr>
                                <td>Address:</td>
                                <td>#212, Ground Floor, 7th Cross<br>
                                some layout, some road, Koromangla<br>
                                bengluru 560001
                                </td>
                            </tr>
                        </table>
                        
                    </div>

                
                </div>
        </div>


  </body>
</html>