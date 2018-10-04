<?php require 'header.php';?> 
<?php 
        use PHPMailer\PHPMailer\PHPMailer;
        // use PHPMailer\PHPMailer\SMTP;
        use PHPMailer\PHPMailer\Exception;
        require 'vendor/autoload.php';
        // require_once('vendor/autoload.php');
        $mail = new PHPMailer(true);
    if(isset($_POST["btnsubmit"])){
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $phone = $_REQUEST['phone'];
        $subject = $_REQUEST['subject'];
        $message = $_REQUEST['message'];
        try {
            //$mail->SMTPDebug = 2; 
            $mail->isSMTP();                                   
            $mail->SMTPAuth = true;          
            $mail->SMTPSecure = 'tls';
            $mail->Host = 'smtp.gmail.com';  
            $mail->Port = 587; 
            $mail->isHTML();
            $mail->Username = 'productionred9@gmail.com';
            $mail->Password = '7AccessG';
            $mail->setFrom('productionred9@gmail.com', 'Mailer');
            $mail->addAddress('info@red9production.com');
            $mail->addCC('patelbhavik187@gmail.com');
            $mail->Subject = 'Inquiry';
            $mail->Body    = '  <span style="font-size:15px;">Here is the mail form '.$email.'</span>
                                <h2>Full Details As Below</h2>
                                <table border="1">
                                    <tr>
                                        <th>Name</th>
                                        <td>'.$name.'</td>
                                    </tr>
                                    <tr>
                                        <th>Subject</th>
                                        <td>'.$subject.'</td>
                                    </tr>                                    
                                    <tr>
                                        <th>Phone</th>
                                        <td>'.$phone.'</td>
                                    </tr>
                                    <tr>
                                        <th>Message</th>
                                        <td>'.$message.'</td>
                                    </tr>  
                                   
                                </table>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            $mail->send();
            echo 'Message has been sent';
            echo json_encode(array('success'=>'success'));
        } catch (Exception $e) {
            echo  $mail->ErrorInfo;
        }
    }
?>
  <!-- /.navbar -->
  <div class="google-map h450" data-lat="51.211215" data-lng="3.226287"></div>
  <div class="wrapper light-wrapper">
    <div class="container inner">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <h2 class="section-title text-center">Get in Touch</h2>
          <p class="text-center">Nullam quis risus eget urna mollis ornare vel eu leo. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Integer posuere erat.</p>
          <div class="space20"></div>
          <div class="row text-center">
            <div class="col-md-4"> <span class="icon icon-color color-default fs-48 mb-10"><i class="si-camping_map"></i></span>
              <p> 3, Pratishtha elegance,<br>
                  opp podar international school,<br> 
                  por kudasan road, off airport road<br> 
                  Gandhinagar, Gujarat 382421 </p>
            </div>
            <!--/column -->
            <div class="col-md-4"> <span class="icon icon-color color-default fs-48 mb-10"><i class="si-phone_phone-ringing"></i></span>
              <p>+91 99259 77734,<br>+91 93777 78910 </p>
            </div>
            <!--/column -->
            <div class="col-md-4"> <span class="icon icon-color color-default fs-48 mb-10"><i class="si-mail_mail-2"></i></span>
              <p><a class="nocolor" href="mailto:#">info@red9production.com</a></p>
            </div>
            <!--/column --> 
          </div>
          <!--/.row -->
          <div class="space30"></div>
          <div class="form-container">
            <form action="" method="post">
              <div class="row text-center">
                <div class="col-md-6 pr-10">
                  <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Your name" required="required">
                  </div>
                  <!--/.form-group --> 
                </div>
                <!--/column -->
                <div class="col-md-6 pl-10">
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Your e-mail" required="required">
                  </div>
                  <!--/.form-group --> 
                </div>
                <!--/column -->
                <div class="col-md-6 pr-10">
                  <div class="form-group">
                    <input type="tel" class="form-control" name="tel" placeholder="Phone">
                  </div>
                  <!--/.form-group --> 
                </div>
                <!--/column -->
                <div class="col-md-6 pl-10">
                  <div class="form-group">
                    <input type="text" class="form-control" name="subject" placeholder="Subject">
                  </div>
                  <!--/.form-group --> 
                </div>
                <!--/column -->
                <div class="col-12">
                  <textarea name="message" class="form-control" rows="3" placeholder="Type your message here..." required></textarea>
                  <div class="space20"></div>
                  <button type="submit" name="btnsubmit" class="btn btn-full-rounded" data-error="Fix errors" data-processing="Sending..." data-success="Thank you!">Submit</button>
                  <footer class="notification-box"></footer>
                </div>
                <!--/column --> 
              </div>
              <!--/.row -->
            </form>
            <!--/.vanilla-form --> 
          </div>
          <!--/.form-container --> 
        </div>
        <!-- /column --> 
      </div>
      <!-- /.row --> 
    </div>
    <!-- /.container --> 
  </div>
  <?php require 'footer.php';?>

