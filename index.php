<?php

if (isset($_POST('submit'))) {

  $from = $_POST['email'];
  $to = 'grdonlai@gmail.com';
  $subject = "Email signup";
  $body = 'Please sign me up to the mailing list';

  if (!$_POST['email']) {
      $emailError = '<div class="text-danger"><i class="fas fa-exclamation-triangle"></i> &nbsp; Please enter a valid email address</div>';
  }

  if (!$emailError) {
    if (mail ($to, $subject, $body, $from)) {
      $result = '<div class="text-success"><i class="fas fa-check"></i> &nbsp; thank you we\'ll keep you updated</div>';
    } else {
      $result = '<div class="text-danger"><i class="fas fa-exclamation-triangle"></i> &nbsp; sorry there has been an error, please try again</div>';
    }
  }


}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>haveCLOUT</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script
      src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
      crossorigin="anonymous"
    ></script>
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Tinos:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap"
      rel="stylesheet"
    />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
  </head>
  <body>
    <!-- Masthead-->
    <div class="masthead">
      <div class="masthead-content text-white">
        <div class="container-fluid px-4 px-lg-0">
          <h1 class="fst-italic lh-1 mb-4">Coming Soon</h1>
          <br />
          <p class="mb-5">
            We're working hard to bring you CLOUT. Sign up below to receive
            updates and to be notified when we launch!
          </p>
          <!-- * * * * * * * * * * * * * * *-->
          <!-- * * SB Forms Contact Form * *-->
          <!-- * * * * * * * * * * * * * * *-->
          <!-- This form is pre-integrated with SB Forms.-->
          <!-- To make this form functional, sign up at-->
          <!-- https://startbootstrap.com/solution/contact-forms-->
          <!-- to get an API token!-->
          <form id="contactForm" data-sb-form-api-token="API_TOKEN">
            <!-- Email address input-->
            <div class="row input-group-newsletter">
              <div class="col">
                <input
                  class="form-control"
                  id="email"
                  type="email"
                  placeholder="Enter email address..."
                  aria-label="Enter email address..."
                  data-sb-validations="required,email"
                />
              </div>
              <div class="col-auto">
                <button
                  class="btn btn-primary disabled"
                  id="submitButton"
                  type="submit"
                >
                  Notify Me!
                </button>
              </div>
            </div>
            <div
              class="invalid-feedback mt-2"
              data-sb-feedback="email:required"
            >
              An email is required.
            </div>
            <div class="invalid-feedback mt-2" data-sb-feedback="email:email">
              Email is not valid.
            </div>
            <!-- Submit success message-->
            <!---->
            <!-- This is what your users will see when the form-->
            <!-- has successfully submitted-->
            <div class="d-none" id="submitSuccessMessage">
              <div class="text-center mb-3 mt-2">
                <div class="fw-bolder">Email submission successful!</div>
              </div>
            </div>
            <!-- Submit error message-->
            <!---->
            <!-- This is what your users will see when there is-->
            <!-- an error submitting the form-->
            <div class="d-none" id="submitErrorMessage">
              <div class="text-center text-danger mb-3 mt-2">
                Error sending message!
              </div>
            </div>
          </form>

        <?php echo $emailError;?>
        <?php echo $result;?>

        </div>
      </div>
    </div>

    <!-- Social Icons-->
    <!-- For more icon options, visit https://fontawesome.com/icons?d=gallery&p=2&s=brands-->
    <div class="social-icons">
      <div
        class="
          d-flex
          flex-row flex-lg-column
          justify-content-center
          align-items-center
          h-100
          mt-3 mt-lg-0
        "
      >
        <a class="btn btn-dark m-3" href="#!"><i class="fab fa-twitter"></i></a>
        <br/>
        <img src="/assets/HClogo.png" alt="haveCLOUT" width="100" height="100">
        <br/>
        <a class="btn btn-dark m-3" href="#!"
          ><i class="fab fa-instagram"></i
        ></a>
      </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
  </body>
</html>
