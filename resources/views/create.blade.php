<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="{{asset('assets/css/create.css')}}">

  </head>
  <body>
    <section class="container">
      <header>Registration Form</header>
      <form action="#" class="form">
        <div class="input-box">
          <label>Full Name</label>
          <input type="text" placeholder="Enter full name" required />
        </div>

        <div class="input-box">
          <label>Email Address</label>
          <input type="text" placeholder="Enter email address" required />
        </div>

        <div class="column">
          <div class="input-box">
            <label>Phone Number</label>
            <input type="number" placeholder="Enter phone number" required />
          </div>
          <div class="input-box">
            <label>Birth Date</label>
            <input type="date" placeholder="Enter birth date" required />
          </div>
        </div>
        <div class="column">
          <div class="input-box">
            <label>Phone Number</label>
            <input type="number" placeholder="Enter phone number" required />
          </div>
          <div class="input-box">
            <label>Birth Date</label>
            <input type="text" placeholder="Enter birth date" required />
          </div>
        </div>
        <div class="input-box">
          <label>Email Address</label>
          <input type="text" placeholder="Enter email address" required />
        </div>
        <button>Submit</button>
      </form>
    </section>
  </body>
</html>