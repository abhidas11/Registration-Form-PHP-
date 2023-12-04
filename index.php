<!DOCTYPE html>
<html>
  <head>
    <title>Registration Page</title>
    <link rel="stylesheet" type="text/css" href="ish_style.css" />
  </head>
  <body style="background-color:yellow;">
    <div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>Registration Form</h1>
          </div>
          <div class="panel-body">
            <form action="connect.php" method="post">
              <div class="form-group">
                <label for="Name">Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="Name"
                  name="Name" required
                />
              </div>
              <div class="form-group">
                <label for="Company">Company</label>
                <input
                  type="text"
                  class="form-control"
                  id="Company"
                  name="Company" required
                />
              </div>
              <div class="form-group">
                <label for="Merchant">Merchant</label>
                <div>
                  <label for="E-Commerce" class="radio-inline"
                    ><input
                      type="radio"
                      name="Merchant"
                      value="E-Commerce"
                      id="E-Commerce" required
                    />E-Commerce</label
                  >
                  <label for="B2B" class="radio-inline"
                    ><input
                      type="radio"
                      name="Merchant"
                      value="B2B"
                      id="B2B" required
                    />B2B</label
                  >
                  <label for="Gaming" class="radio-inline"
                    ><input
                      type="radio"
                      name="Merchant"
                      value="Gaming"
                      id="Gaming" required
                    />Gaming</label
                  >
                </div>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input
                  type="text"
                  class="form-control"
                  id="email"
                  name="email" required
                />
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input
                  type="password"
                  class="form-control"
                  id="password"
                  name="password" 
                  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" 
                  required
                />
              </div>
              <div class="form-group">
                <label for="number">Phone Number</label>
                <input
                  type="number"
                  class="form-control"
                  id="number"
                  name="number" required
                />
              </div>
              <input type="submit" class="btn btn-primary" />
            </form>
          </div>
          
</div>
  </body>
</html>
