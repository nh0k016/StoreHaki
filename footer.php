<!-- Start footer -->
<div class="footer container ">
 <div class="row d-flex text-center mt-5">
  <div class="col-md-3  ">
   <h3>SẢN PHẨM</h3>
   <p>Giày nữ</p>
   <p>Giày nam</p>
   <p>Thời trang</p>
   <p>Sale-off</p>
  </div>
  <div class="col-md-3 ">
   <h3>CÔNG TY</h3>
  </div>
  <div class="col-md-3 ">
   <h3>HỖ TRỢ</h3>
  </div>
  <div class="col-md-3 ">
   <h3>LIÊN HỆ</h3>
  </div>
 </div>
</div>

<!-- end footer -->

<?php include 'cartFixed.php'; ?>
 
<script>
function loadFile(event) {
 var imgInput = document.getElementById("img-preview");
 imgInput.src = URL.createObjectURL(event.target.files[0]);
}
// In your Javascript (external .js resource or <script> tag)
$(document).ready(function() {
 $('.js-example-basic-single').select2();
});


</script>

<!-- Slick -->
<script type="text/javascript" src='./assets/js/slick.js'></script>



<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/web-animations/2.3.1/web-animations.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.3/js/plugins/piexif.min.js" type="text/javascript"></script>
<script src="./assets/js/main.js"></script>

</body>

</htm>
