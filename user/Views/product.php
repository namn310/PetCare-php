<?php
$this->layoutPath = ("LayoutTrangChu.php");
?>


<!-- main images -->
<div class="main_img mt-2">

</div>


<!-- Danh mục sản phẩm-->
<div class=" container-fluid pdt">
  <div class="row">
    <div class="col-3 sm">
      <h3 class="text-center mb-2">Danh mục sản phẩm</h3>
      <ul class="category list-group">
        <li class="list-group-item"><button class="btn btn-white" style="width:100%"><a href="product-pate.html">Pate</a></button></li>
        <li class="list-group-item"><button class="btn btn-white" style="width:100%"><a href="product-thucanhat.html">Thức ăn hạt</a></button></li>
        <li class="list-group-item"><button class="btn btn-white" style="width:100%"><a href="product-tpcn.html">Thực
              phẩm chức năng</a></button></li>
        <li class="list-group-item"><button class="btn btn-white" style="width:100%"><a href="product-dochoi.html">Đồ
              chơi</a></button></li>
        <li class="list-group-item"><button class="btn btn-white" style="width:100%"><a href="product-dungcu.html">Dụng cụ</a></button></li>
        <li class="list-group-item"><button class="btn btn-white" style="width:100%"><a href="product-phukien.html">Phụ kiện </a></button></li>
      </ul>
    </div>
    <div class="col-9 lg">
      <nav class="navbar mb-3 navbar-light bg-light justify-content-between">
        <h3 style="color:black">Sản phẩm hot</h3>
        <form class="form-inline d-flex">
          <input class="form-control mr-sm-2" type="text" id="nameProductSearch" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0 ml-3" id="buttonSearch" type="button">Search</button>
        </form>
      </nav>
      <div class="product-list container d-flex align-items-start flex-wrap" number="">
        <div id="product-infor" class="card" style="width: 15rem;height:27rem">
          <a href="product-detail.html"> <img class="card-img-top" src="../images/product/dochoi/dc8.webp" alt="Card image cap"></a>
          <div class="card-body">
            <h5 id="name-product" class="card-title">Dép bông cho chó mèo</h5>
            <span class="rating secondary-font">
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              5.0</span>
            <p class="card-text text-danger">250.000đ</p>
            <!-- Button trigger modal -->
            <button type="button" style="width:30% ;margin-left:10px;margin-bottom:20px" id="buy" class="btn btn-danger " data-bs-toggle="modal" data-bs-target="#modalbuyproduct">
              Mua
            </button>
          </div>
        </div>
        <div id="product-infor" class="card" style="width: 15rem;height:27rem;">
          <a href="product-detail.html"> <img class="card-img-top" src="../images/product/dochoi/dc4.webp" alt="Card image cap"></a>
          <div class="card-body">
            <h5 id="name-product" class="card-title">Đồ chơi hình xương cá</h5>
            <span class="rating secondary-font">
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              5.0</span>
            <p class="card-text text-danger">150.000đ</p>
            <!-- Button trigger modal -->
            <button type="button" style="width:30% ;margin-left:10px;margin-bottom:20px" id="buy" class="btn btn-danger " data-bs-toggle="modal" data-bs-target="#modalbuyproduct">
              Mua
            </button>
          </div>
        </div>
        <div id="product-infor" class="card" style="width: 15rem;height:27rem;">
          <a href="product-detail.html"> <img class="card-img-top" src="../images/product/pate/pate4.png" alt="Card image cap"></a>
          <div class="card-body">
            <h5 id="name-product" class="card-title">Pate Snappy Tom</h5>
            <span class="rating secondary-font">
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              5.0</span>
            <p class="card-text text-danger">250.000đ</p>
            <!-- Button trigger modal -->
            <button type="button" style="width:30% ;margin-left:10px;margin-bottom:20px" id="buy" class="btn btn-danger " data-bs-toggle="modal" data-bs-target="#modalbuyproduct">
              Mua
            </button>
          </div>
        </div>
        <div id="product-infor" class="card" style="width: 15rem;height:27rem;">
          <a href="product-detail.html"> <img class="card-img-top" src="../images/product/dungcu/dc3.png" alt="Card image cap"></a>
          <div class="card-body">
            <h5 id="name-product" class="card-title">Dụng cụ gắp phân</h5>
            <span class="rating secondary-font">
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              5.0</span>
            <p class="card-text text-danger">250.000đ</p>
            <!-- Button trigger modal -->
            <button type="button" style="width:30% ;margin-left:10px;margin-bottom:20px" id="buy" class="btn btn-danger " data-bs-toggle="modal" data-bs-target="#modalbuyproduct">
              Mua
            </button>
          </div>
        </div>
        <div id="product-infor" class="card" style="width: 15rem;height:27rem;">
          <a href="product-detail.html"> <img class="card-img-top" src="../images/product/TPCN/tpcn4.jpg" alt="Card image cap"></a>
          <div class="card-body">
            <h5 id="name-product" class="card-title">Tẩy giun dạng lỏng </h5>
            <span class="rating secondary-font">
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              5.0</span>
            <p class="card-text text-danger">245.000đ</p>
            <!-- Button trigger modal -->
            <button type="button" style="width:30% ;margin-left:10px;margin-bottom:20px" id="buy" class="btn btn-danger " data-bs-toggle="modal" data-bs-target="#modalbuyproduct">
              Mua
            </button>
          </div>
        </div>
        <div id="product-infor" class="card" style="width: 15rem;height:27rem;">
          <a href="product-detail.html"> <img class="card-img-top" src="../images/product/pate/pate7.png" alt="Card image cap"></a>
          <div class="card-body">
            <h5 id="name-product" class="card-title">Pate reflex</h5>
            <span class="rating secondary-font">
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              5.0</span>
            <p class="card-text text-danger">220.000đ</p>
            <!-- Button trigger modal -->
            <button type="button" style="width:30% ;margin-left:10px;margin-bottom:20px" id="buy" class="btn btn-danger " data-bs-toggle="modal" data-bs-target="#modalbuyproduct">
              Mua
            </button>
          </div>
        </div>
        <div id="product-infor" class="card" style="width: 15rem;height:27rem;">
          <a href="product-detail.html"> <img class="card-img-top" src="../images/product/thucanhat/hat6.jpg" alt="Card image cap"></a>
          <div class="card-body">
            <h5 id="name-product" class="card-title">Nabirang</h5>
            <span class="rating secondary-font">
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              5.0</span>
            <p class="card-text text-danger">190.000đ</p>
            <!-- Button trigger modal -->
            <button type="button" style="width:30% ;margin-left:10px;margin-bottom:20px" id="buy" class="btn btn-danger " data-bs-toggle="modal" data-bs-target="#modalbuyproduct">
              Mua
            </button>
          </div>
        </div>
        <div id="product-infor" class="card" style="width: 15rem;height:27rem;">
          <a href="product-detail.html"> <img class="card-img-top" src="../images/product/dochoi/dc5.jpg" alt="Card image cap"></a>
          <div class="card-body">
            <h5 id="name-product" class="card-title">Cần câu mồi giả</h5>
            <span class="rating secondary-font">
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              5.0</span>
            <p class="card-text text-danger">250.000đ</p>
            <!-- Button trigger modal -->
            <button type="button" style="width:30% ;margin-left:10px;margin-bottom:20px" id="buy" class="btn btn-danger " data-bs-toggle="modal" data-bs-target="#modalbuyproduct">
              Mua
            </button>
          </div>
        </div>

      </div>
      <div class="mt-3 d-flex ">
        <nav aria-label="Page navigation example">
          <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">...</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalbuyproduct" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Thông báo</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Đã thêm sản phẩm vào giỏ hàng !
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Xác nhận</button>
      </div>
    </div>
  </div>
</div>
<!-- End mục sản phẩm-->


<!--footer-->
<div class="container-fluid d-flex justify-content-around bg-dark">
  <div class="footer1 d-flex align-items-center flex-column p-3">
    <h1 class="mb-3 mt-4  text-capitalize" style="color:#F7A98F">PetCare</h1>
    <p class="text-white">Giờ hoạt động: 8AM-10PM</p>
  </div>
  <div class="footer2 mt-3 text-white d-flex flex-column justify-content-between p-3">
    <h3>Get in touch</h3>
    <span>
      <h6><i class="fa-solid fa-envelope-circle-check fa-lg me-3" style="color: #ffffff;"></i>petcare@gmail.com</h6>
    </span>
    <span>
      <h6><i class="fa-solid fa-phone fa-lg me-4" style="color: #ffffff;"></i>0912345678</h6>
    </span>
    <span>
      <h6><i class="fa-solid fa-location-dot fa-lg me-4" style="color: #ffffff;"></i>Láng Thượng, Đống Đa, Hà Nội</h6>
    </span>
  </div>
  <div class="footer3 d-flex text-white flex-column mt-3 justify-content-between p-3 text-center">
    <h3>Popular links</h3>
    <a href="#"><i class="fa-brands fa-facebook fa-lg me-3" style="color: #ffffff;"></i></a>
    <a href="#"><i class="fa-brands fa-instagram fa-lg me-3" style="color: #ffffff;"></i></a>
    <a href="#"><i class="fa-brands fa-youtube fa-lg me-3" style="color: #ffffff;"></i></a>
  </div>

</div>

<!--footer end-->
<script src="js/script.js"></script>