<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml"xml:lang="en"lang="en">
    <head>
      <meta http-equiv="content-type" content="text/html";
            charset="utf-8"/>
            <title>Simple HTML Form</title>
            <style type = "text/css" title="text/css" media = "all">
            label{
              font-weight: bold;
              color: #300ACC;
            }
            </style>
    </head>
    <body>
      <!---Script 2.1 - form.html -->
      <form action="handle_form.php" method="post">
        <fieldset> <legend> Enter your information in the form below:</legend>
          <p> <label> Name: <input type="text" name="name" size="20" maxlength="40"/></label></p>
          <p> <label> Email:<input type="text" name="email" size="40" maxlength="60"/></lable></p>
          <p> <label for= "gender">Gender:</label><input type ="radio" name="gender" value = "M"/>Male
              <input type ="radio" name="gender" value = "F"/>Female</p>
              <p><label>Age:
                <select name= "age">
                  <option value = "0-29">Under 30 </option>
                  <option value = "30-60">Between 30-60 </option>
                  <option value = "60+"> Over 60 </option>
                </select>
              </label>
            </p>
            <p> <label> Comments: <textarea name="comments" row="3" cols="40"></textarea></label></p>
          </fieldset>
          <p align = "center"><input type="submit" name="submit" value="Submit My Information"/> </p>
        </form>
    </body>
  </html>
