 <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?libraries=places"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
 <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
<script src="google_maps.js"></script>
<!--Author: Richard Cerone and Matthew Cieslak-->
<html>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="myModal">
  <div class="modal-dialog modal-sm" id="modal">
    <div class="modal-content">
      <div class="input-group input-group-lg">
        <form action="confirmDetails.php" method="POST" id="partySubmit">
          <span class="input-group-addon" id="sizing-addon1"></span>
           <input type="text" class="form-control" placeholder="Name the Party" aria-describedby="sizing-addon1" id="name" name="name">
            </div>
            <div id="addrss"></div>
                   <br><br>
           <input type="submit" class="btn btn-success btn-lg btn-block" value="Post"></a>
        </form>
           <a href="" class="btn btn-danger btn-lg btn-block" id="cancel">Cancel</a>
    </div>
  </div>
</div>
    <header>
         <title>Jigger, It's Party Time</title>
    </header>
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
  OR
  <br>
  choose a spot on the map
</b>
<!-- <div style="width:600px;height:300px;border:2px dotted red;"> -->
  <table><tr><td>
   <div id="map-canvas"></div>
 </center></td>
      <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td><td>
 <div class="btn-group">
 </td></tr><tr><td>
  <br>
  <center>
    <button type="button" class="btn btn-danger btn-lg">Post</button>
<!--</div>--></td></tr></table>
  </div>
</div>
</html>
<style type="text/css">
#postform {
  display :none;
}
#map-canvas {
  height: 500px;
  width: 1200px;
  z-index: 0;
}
#modal {
  height: 300px;
  width: 400px;
}
</style>
