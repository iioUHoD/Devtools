<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <link rel="stylesheet" href="style.css" />
  <link rel="shortcut icon" href="dog-solid.svg" type="image/x-icon">
  <script src="https://kit.fontawesome.com/0af1d80857.js" crossorigin="anonymous"></script>
  <script src="signup.js"></script>
  <link rel="stylesheet" href="../style.css" />
  <title>With Your Pups!</title>
</head>

<body>
  <!--............ Nav Bar ............-->
  <?php include('../component/navigation.php'); ?>

  <div id="signup-container" class="container">
    <center>
      <h1>Sign-Up 🐕‍🦺</h1>
    </center>
    <br>
    <form id="form">
      <div class="form-group">
        <label for="ID">ID</label>
        <input type="text" class="form-control" id="id" name="id" minlength="5" maxlength="13"
          pattern="[A-Za-z0-9]{4,12}" required />
      </div>

      <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
          <input type="password" pattern="[A-Za-z0-9]{4,12}" min="3" max="12" class="form-control" id="inputPassword"
            required>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Confirm Password</label>
        <div class="col-sm-10">
          <input type="password" pattern="[A-Za-z0-9]{4,12}" minlength="3" maxlength="12" class="form-control"
            id="inputPassword" required>
        </div>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required>
      </div>

      <div class="form-group">
        <label for="name">Name</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">First and last name</span>
          </div>
          <input type="text" aria-label="First name" class="form-control" required>
          <input type="text" aria-label="Last name" class="form-control" required>
        </div>
      </div>

      <div class="form-group">
        <label for="inputAddress">Address</label>
        <input type="text" class="form-control" id="inputAddress" placeholder=" Peachtree St" required />
      </div>
      <div class="form-group">
        <label for="inputAddress2">Address 2</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" />
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputCity">City</label>
          <input type="text" class="form-control" id="inputCity" required />
        </div>
        <div class="form-group col-md-4">
          <label for="inputState">State</label>
          <select id="inputState" class="form-control" required>
            <option selected disabled value="">Choose...</option>
            <option>AL</option>
            <option>AK</option>
            <option>AZ</option>
            <option>AR</option>
            <option>CA</option>
            <option>CO</option>
            <option>CT</option>
            <option>DE</option>
            <option>FL</option>
            <option>GA</option>
            <option>HI</option>
            <option>ID</option>
            <option>IL</option>
            <option>IN</option>
            <option>IA</option>
            <option>KS</option>
            <option>KY</option>
            <option>LA</option>
            <option>ME</option>
            <option>MD</option>
            <option>MA</option>
            <option>MI</option>
            <option>MN</option>
            <option>MS</option>
            <option>MO</option>
            <option>MT</option>
            <option>NE</option>
            <option>NV</option>
            <option>NH</option>
            <option>NJ</option>
            <option>NM</option>
            <option>NY</option>
            <option>NC</option>
            <option>ND</option>
            <option>OH</option>
            <option>OK</option>
            <option>OR</option>
            <option>PA</option>
            <option>RI</option>
            <option>SC</option>
            <option>SD</option>
            <option>TN</option>
            <option>TX</option>
            <option>UT</option>
            <option>VT</option>
            <option>VA</option>
            <option>WA</option>
            <option>WV</option>
            <option>WI</option>
            <option>WY</option>
          </select>
        </div>
        <div class="form-group col-md-2">
          <label for="inputZip">Zip</label>
          <input type="text" title="Please enter a valid zip code (23456 or 12345-123)" class="form-control"
            id="inputZip" pattern="^\(?\d{5}\)?([-]\d{3})?$" required />
        </div>
        <div class="form-group">
          <label for="number">Phone Number</label>
          <input type="number" class="form-control" id="phoneNumber" name="phoneNumber" pattern="([0-9]{9})" />
        </div>
      </div>
      <small id="emailHelp" class="form-text text-muted">We'll never share your info with anyone else.</small>
      <button type="submit" id='submit' class="btn btn-success btn-lg btn-block mb-3">Submit</button>
      </fieldset>
  </div>
  </form>

  <!--............ Footer ............-->
  <?php include('../component/footer.php'); ?>
</body>

</html>