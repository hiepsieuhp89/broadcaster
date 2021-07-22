<!-- Plugins css-->
<link href="assets\libs\sweetalert2\sweetalert2.min.css" rel="stylesheet" type="text/css">

<!-- App css -->
<link href="assets\css\bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet">
<link href="assets\css\icons.min.css" rel="stylesheet" type="text/css">
<link href="assets\css\app.min.css" rel="stylesheet" type="text/css" id="app-stylesheet">

<!-- Video js -->
<link rel="stylesheet" href="css/video-js.min.css">
<style>
  .outborder{
    position: relative;
    margin: auto;
    border-radius: 120px;
    width: 216px;
    height: 216px;
    padding: 20px;
  }
  
  .inborder{
    display: flex;
    border-radius: 120px;
    background-color: aliceblue;
    height: -webkit-fill-available;
  }
  .inborder img{
    height: 70%;
    margin: auto;
  }
  .outborder.active{
    background-color: green;
  }
  .outborder.inactive{
    background-color: grey;
  }
  .outborder.inactive .inborder,.outborder.noconnect .inborder{
    background-color: #ffffffb5;
  }
  /* .outborder.inactive::before{
    background-color: black;
    content: "";
    font-size: 3em;
    font-weight: 400;
    text-transform: uppercase;
    position: absolute;
    left: 50%;right: 0;top:50%;bottom:0;
    transform: translate(-50%,-50%);
  } */
  .outborder.noconnect{
    background-color: red;
  }
</style>