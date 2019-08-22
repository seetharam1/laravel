
@extends('includes.style')
@if (count($errors)>0)
@foreach ($errors->all() as $item)
    {{$item}}
@endforeach
    
@endif

<form action="{{route('data')}}" method="post">
    {{-- <div>
    <center>
        <br> Loan Amount:<input type="number" name="loan" min="1000" max="50000"/></br>
      <br> Name :<input type="text" name="freeText" pattern="[a-zA-Z]*"/></br>
        <br> Mobile Number :<input type="number" name="mobile" min="6000000000" max="9999999999"/></br>
        <br>Age :<input type="text" name="age"/><br>
        <br>Adhar :<input type="text" id="txtAadhar" onblur="AadharValidate();" />
<script type="text/javascript">
    function AadharValidate() {
        var aadhar = document.getElementById("txtAadhar").value;
        var adharcardTwelveDigit = /^\d{12}$/;
        var adharSixteenDigit = /^\d{16}$/;
        if (aadhar != '') {
            if (aadhar.match(adharcardTwelveDigit)) {
                return true;
            }
            else if (aadhar.match(adharSixteenDigit)) {
                return true;
            }
            else {
                alert("Enter valid Aadhar Number");
                return false;
            }
        }
    }
</script>

<br>
<br>  <button type="submit">Submit</button></br>
    {{ csrf_field() }}
    </center>
    </div> --}}
    <html>
<style>
input[type=text], select {
  width: 100%;
  padding: 10px;
  margin: 5px 0;
  display: inline-block;
  border: 2px solid #ccc;
  border-radius: 40px;
 
}
input[type=date], select {
  width: 100%;
  padding: 10px;
  margin: 5px 0;
  display: inline-block;
  border: 2px solid #ccc;
  border-radius: 40px;
 
}
input[type=number], select {
  width: 100%;
  padding: 10px;
  margin: 5px 0;
  display: inline-block;
  border: 2px solid #ccc;
  border-radius: 40px;
 
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 40px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
    border-radius: 5px;

  padding: 100px;
}

label { width: 405px; float: left; margin: 0 20px 0 0; }
span {  margin: 0 0 3px; font-size: 1.2em;  }
input { width: 200px; border: 1px solid #000; padding: 5px; }
</style>

<body>



<div>
        <h1><center>Loan Application Form</center></h1>
  <form action="/action_page.php">
    <br>
    <label for="fname">Name</label>
    <input type="text" id="fname" name="freeText" placeholder="Your name.." pattern="[a-zA-Z]*" required>  </br>
    <br>
    <label for="age">Date of Birth</label>
    <input type="date" id="age" name="age" required>  </br>
    <br>
    <label for="loan">Loan Amount</label>
    <input type="number" id="loan" name="loan" min="1000" max="50000" placeholder="Lessthan 50000 and graterthan 1000" required>  </br>
    <br>
    <label for="mobile">Mobile Number</label>
    <input type="text" id="mobile" name="mobile" pattern="^[6-9]\d{2}\d{3}\d{4}$" placeholder="10 digits and Starting from 6 Series" required>  </br>
    <br>
    <label for="adhar">Adhar number</label>
    <input type="text" id="adhar" name="adhar" pattern="^\d{4}\d{4}\d{4}\d{4}$" placeholder="16 digits required" required/></br>

<br>
<label for="pan">Pan Number</label>
<input type="text" id="pan" name="pan" pattern="^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}" placeholder="5 alphabets 4 numbers and 1 alphabet required" required>  </br>
  <br>
        {{--
        <label for="mobile">City</label>
        <input type="text" id="mobile" name="mobile" pattern="^[6-9]\d{2}\d{3}\d{4}$" required>  
       
        <label for="mobile">State</label>
        <input type="text" id="mobile" name="mobile" pattern="^[6-9]\d{2}\d{3}\d{4}$" required>  
 
        <label for="mobile">Country</label>
        <input type="text" id="mobile" name="mobile" pattern="^[6-9]\d{2}\d{3}\d{4}$" required>  --}}
        <label for="company">
                <span>City</span>
                <input type="text" name="city" pattern="[a-zA-Z]*" required>
              </label>
              <label for="company">
                <span>State</span>
                <select name="state">
                        <option value="Telangana">Telangana</option>
                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                        <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Karnataka">Karnataka</option>
                      </select>
                {{-- <input type="text" name="state" pattern="[a-zA-Z]*" required> --}}
              </label>
              <label for="company">
                    <span>Country</span>
                    <input type="text" name="country" pattern="[a-zA-Z]*" required>
                  </label>
                  <label for="company">
                        <span>Zip Code</span>
                        <input type="number" name="zip" pattern="[0-9]*" min="100000" max="999999" required>
                      </label>
 
                    </br>
                   &nbsp;
                    <br><input type="submit" value="Submit"></br>
    {{-- <button type="submit">Submit</button></br>--}}
    {{ csrf_field() }}
  </form>
</div>

</body>
</html>

</form>