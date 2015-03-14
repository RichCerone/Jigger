<!DOCTYPE HTML>
<!--Author: Richard Cerone and Matthew Cieslak-->
<!--Jigger Homepage-->
<header>
  <title>Jigger, It's Party Time</title>
</header>

<!--Various Scripts for JavaScript, Google Maps, and BootStrap.-->
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?libraries=places"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>

<!--Runs google maps script.-->
<script src="google_maps.js"></script>

<html>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <body>
      <center>
        <h1>Jigger</h1>
        <h6>It's Party Time</h6>
        <div class="panel panel-default">
    <div class="panel-body">
    <div class="btn-group btn-group-lg" role="group" aria-label="...">
          <button type="button" class="btn btn-default">Parties Tonight</button>
          <button type="button" class="btn btn-default" id="post">Post a Party</button>
          <button type="button" class="btn btn-default">more stuff</button>
      </div>
        </div>
          </div>
           </center>
              </body>
  <div id="postform">
    <form action="confirmDetails.php" method="post">
    <center>
  <div style="width:600px;height:100px;border:2px dotted red;">
    <table align="center">
              <tr>
                  <td>
    <label class="address"><b>
    <font color="white" size="3">Address:</b></font></label><br>
<div class="input-group input-group-lg">
  <input type="text" class="form-control" placeholder="Location" aria-describedby="sizing-addon1" id="addr" name="addr" maxlength="200">
</div>
    <br>
  </td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
  <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td><td>
    <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td><td>
      <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td><td>
  <div class="btn-group">
   <button type="button" class="btn btn-danger btn-lg" id="addrbttn">Post</button>
  </div>
</form>
</td></tr></table>
</div>
</center>
<br>
  <center><b>
  <p>OR</p>
  <br>
  <p>choose a spot on the map</p>
</b>
<div style="width:600px;height:300px;border:2px dotted red;">
  <table><tr><td>
   <div id="map-canvas"></div>
 </center></td>
      <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td><td>
 <div class="btn-group">
  <button type="button" class="btn btn-danger btn-lg">Post</button>
</div></td></tr></table>
  </div>
</div>
</html>
<!--NOTE: CSS will be replaced by a template.-->
<style type="text/css">
#postform
{
  display :none;
}
#map-canvas
{
  height: 300px;
  width: 400px;
  z-index: 0;
}
</style>
