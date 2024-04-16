@extends('user.layout')

@section('content')
@isset($item)

<section class="bg-white main"
    style="margin-top: 70px; background-color: #F0F2F5; height: 610px; font-family: 'Gabarito', sans-serif;;">
    <div class="container-detail" style="width: 1340px; height: 100%;">
      <div class="detail-left">
        <img src="/assetUser/{{$item['Image']}}" id="detailpic">
        <div style="height: 130px;">
          <!-- <img class="other-pic" src="/assetUser/{{$item['Image']}}">
          <img class="other-pic" src="/assetUser/{{$item['Image']}}">
          <img class="other-pic" src="/assetUser/{{$item['Image']}}"> -->
        </div>
      </div>
      <div class="detail-right">
        <h2 class="title-h2" id="med-name">{{$item['Product_Name']}}</h2>
        <div id="detail-info" style="width: 475px; height: 435px; float: left;">
          <div id="product-price">
            <p>Mã thuốc: <span class="Product_id">{{$item['Product_Id']}}</span></p>
            <p class="ProductPrice_price">{{ number_format($item['Unit_Price'], 0, ',', '.') }} đ</p>
            <div>
              <div>Giá đã bao gồm Thuế.</div>
              <div>Phí vận chuyển và các chi phí khác (nếu có) sẽ được thể hiện khi đặt hàng.</div>
              <p class="important_info">Mua hàng và tích lũy từ 50 xu vàng.</p>
            </div>
          </div>
          <div id="product-name">Dung Dịch nhỏ mắt ohto Mineral Tear bổ sung
            khoáng chất và nước mắt nhân tạo giúp giữ ẩm, làm dịu mắt khô. Phục hồi và tạo sự thoải mái cho mắt mỏi, mắt
            kích ứng nhẹ, mắt khó chịu do đeo kính áp tròng, mắt mờ (do tiết dịch).</div>
          {{-- <div id="quantity" style="margin-top: 20px;">
            <input class="round-btn" type="button" value="-" onclick="dec('numtxt')">
            <input id="numtxt" type="text" value="1">
            <input class="round-btn" type="button" value="+" onclick="inc('numtxt')">

          </div> --}}
          <div style="height: 45px; margin-top: 40px;">
            <button id="buy-now">Mua ngay</button>
            
            <button id="btn-addToCart"><a href="/cart/add/{{$item['Product_Id']}}" style="color: white">Thêm vào giỏ hàng</a> </button>
          </div>
        </div>
        <div id="deliver-info" style="width: 330px; height: 435px; float: right;">
          <div id="deli-text">
            <h2 class="title-h2-sec">Các hình thức giao hàng</h2>
            <p>Freeship cho đơn hàng từ 300.000đ</p>
          </div>
          <div>
            <div class="service-block">
              <div class="featured-block">
                <a href="donate.html" style="text-decoration: none;">
                  <img src="/assetUser/img/service1.png" class="featured-block-image img-fluid" alt="">

                  <p>Tư vấn chuyên gia</p>
                </a>
              </div>
            </div>

            <div class="service-block">
              <div class="featured-block ">
                <a href="donate.html" style="text-decoration: none;">
                  <img src="/assetUser/img/service2.png" class="featured-block-image img-fluid" alt="">

                  <p>Thuốc tốt giá rẻ</p>
                </a>
              </div>
            </div>

            <div class="service-block">
              <div class="featured-block">
                <a href="donate.html" style="text-decoration: none;">
                  <img src="/assetUser/img/service3.png" class="featured-block-image img-fluid" alt="">

                  <p>Thông tin <br> sức khỏe</p>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-white main">
    <div class="container" style="width: 1340px; padding-left: 10px; ">
      <div style="padding-left: 22px;">
        <div id="nav-info">
          <ul>
            <li class="d-active"> Thông tin sản phẩm </li>
            <li> Thương hiệu </li>

          </ul>
        </div>
        <div id="detail-info">
          <h2 class="title-h2-sec">Tình trạng</h2>
          <p>Còn hàng</p>
          <h2 class="title-h2-sec">Thành phần</h2>
          <p>
            Sodium Chloride 63,7 mg, Sodium Bicarbonate 6,5 mg, Potassium Chloride 3,9 mg,
            Calcium Chloride Hydrate 0,65 mg, Sodium Chondroitin Sulfate 65,0 mg,
            Hypromellose 1,3 mg, Boric Acid, Sodium Borate, Sodium Hyaluronate, Polysorbate 80,
            Polyoxyethylene Polyoxypropylene Glycol, Disodium Edetate Hydrate, Polyhexamethylene
            Biguanide, Nước tinh khiết.
          </p>
          <h2 class="title-h2-sec">Công dụng</h2>
          <p>
            Giảm khô mắt, dưỡng ẩm mắt

            <br>Bổ sung nước mắt nhân tạo và khoáng chất, giúp giữ ẩm, làm dịu mắt khô.

            <br>Phục hồi và tạo sự thoải mái cho mắt mỏi, mắt kích ứng nhẹ, mắt khó chịu do đeo kính áp tròng, mắt mờ
            (do tiết dịch).
          </p>
          <h2 class="title-h2-sec">Cách sử dụng</h2>
          <p>
            Nhỏ vào mắt mỗi lần 1-2 giọt

            <br>Có thể nhỏ nhiều lần trong ngày tùy vào tình trạng khô mắt, mỏi mắt và khó chịu của mắt.

            <br>Có thể sử dụng cho người không đeo kính áp tròng, đang đeo hoặc sau khi tháo kính áp tròng
          </p>
          <h2 class="title-h2-sec">Lưu ý</h2>
          <p>
            Chú ý trước khi dùng:

            <br>- Chỉ dùng để nhỏ mắt.

            <br>- Không để mi mắt chạm vào miệng lọ để tránh nhiễm trùng hoặc làm vẩn đục dung dịch do các chất tiết
            hoặc mầm vi sinh vật. Không sử dụng khi dung dịch bị vẩn đục.

            <br>- Vặn chặt nắp lọ sau khi dùng.

            <br>- Để xa tầm tay trẻ em.

            <br>- Không đựng dung dịch nhỏ mắt vào chai lọ khác để tránh nhầm lẫn hoặc làm giảm chất lượng.

            <br>- Không dùng chung dung dịch nhỏ mắt với người khác để tránh lây nhiễm.

            <br>- Một vài hoạt chất có thể kết tinh ở miệng lọ do điều kiện bảo quản. Hãy lau miệng lọ bằng gạc sạch
            trước khi dùng.

            <br>- Trẻ em sử dụng dưới sự hướng dẫn của người lớn.
          </p>
          <h2 class="title-h2-sec">Thận trọng</h2>
          <p>
            Hỏi ý kiến bác sĩ hoặc dược sĩ trong các trường hợp sau:

            <br>- Có tiền căn dị ứng với dung dịch nhỏ mắt.

            <br>- Tăng nhãn áp.

            <br>- Nếu xuất hiện các triệu chứng như sung huyết, sưng, ngứa mắt, hãy ngưng sử dụng và hỏi ý kiến bác sĩ
            hoặc dược sĩ.

            Bảo quản: Bảo quản nơi khô mát (dưới 30 độ C), tránh ánh nắng trực tiếp
          </p>
          <h2 class="title-h2-sec">Bảo quản</h2>
          <p>Bảo quản nơi khô mát (dưới 30 độ C), tránh ánh nắng trực tiếp</p>
          <h2 class="title-h2-sec">Công ty chịu trách nhiệm về SP</h2>
          <p>Công ty TNHH Rohto - Mentholatum (Việt Nam)</p>
          <h2 class="title-h2-sec">Thương hiệu</h2>
          <p>V.Rohto</p>
          <h2 class="title-h2-sec">Nơi sản xuất</h2>
          <p>Việt Nam</p>
          <h2 class="title-h2-sec">Số Giấy công bố</h2>
          <p>220000038/PCBB-BD</p>
          <p style="font-style: italic;">Sản phẩm này không phải là thuốc, không có tác dụng thay thế thuốc chữa bệnh.
          </p>
          <p style="font-style: italic;">Để xa tầm tay trẻ em. Đọc kỹ hướng dẫn sử dụng trước khi dùng.</p>

        </div>
      </div>
      <div class="menu-row" id="row3" style="width: 100%; margin-top: 100px;">
        <div class="cates">
          <h2 class="title-cate">Sản phẩm liên quan</h2>
        </div>


        <div class="product-card col-2 col-s-4 col-m-6">
          <button class="sale">
            -20%
          </button>

          <div class="card-banner" style="text-align: center;">
            <img src="/assetUser/img/medicine/fam1.jpg" class="med-pic">
          </div>

          <h3 class="card-title"><a href="#">Efferalgan 500mg (Hộp 4 vỉ x 4 viên)</a></h3>

          <div class="price-wrapper">
            <data class="price">36.000đ</data>

            <del class="del">45.000</del>

          </div>
          <button class="btn-addToCart">Xem chi tiết ...</button>

        </div>
        <div class="product-card col-2 col-s-4 col-m-6">


          <div class="card-banner" style="text-align: center;">
            <img src="/assetUser/img/medicine/fam2.jpg" class="med-pic">
          </div>

          <h3 class="card-title"><a href="#">Enterogermina (Hộp 20 ống)</a></h3>

          <div class="price-wrapper">
            <data class="price">49.000đ</data>

          </div>
          <button class="btn-addToCart">Xem chi tiết ...</button>

        </div>
        <div class="product-card col-2 col-s-4 col-m-6">


          <div class="card-banner" style="text-align: center;">
            <img src="/assetUser/img/medicine/fam3.jpg" class="med-pic">
          </div>

          <h3 class="card-title"><a href="#">Fugacar Mebendazole 500mg ( Hộp 1 viên)</a></h3>

          <div class="price-wrapper">
            <data class="price">140.000đ</data>
          </div>
          <button class="btn-addToCart">Xem chi tiết ...</button>

        </div>
        <div class="product-card col-2 col-s-4 col-m-6">


          <div class="card-banner" style="text-align: center;">
            <img src="/assetUser/img/medicine/fam4.jpg" class="med-pic">
          </div>

          <h3 class="card-title"><a href="#">Men vi sinh hỗ trợ giảm tiêu chảy LIVESPO Dia 30 (Hộp 10 ống)</a></h3>

          <div class="price-wrapper">
            <data class="price">70.000đ</data>

          </div>
          <button class="btn-addToCart">Xem chi tiết ...</button>

        </div>

        <div class="product-card col-2 col-s-4 col-m-6">


          <div class="card-banner" style="text-align: center;">
            <img src="/assetUser/img/medicine/fam5.jpg" class="med-pic">
          </div>

          <h3 class="card-title"><a href="#">Phosphalugel (Hộp 26 gói)</a></h3>

          <div class="price-wrapper">
            <data class="price">141.000đ</data>

          </div>
          <button class="btn-addToCart">Xem chi tiết ...</button>

        </div>

      </div>
      <div class="menu-row" id="row4" style="width: 100%;">
        <div class="cates">
          <h2 class="title-cate">Cùng thương hiệu</h2>
        </div>


        <div class="product-card col-2 col-s-4 col-m-6">
          <button class="sale">
            -30%
          </button>

          <div class="card-banner" style="text-align: center;">
            <img src="/assetUser/img/medicine/selfcare1.jpg" class="med-pic">
          </div>

          <h3 class="card-title"><a href="#">Men vi sinh tăng cường đề kháng Life Space Probiotic (Hộp 60 viên)</a></h3>

          <div class="price-wrapper">
            <data class="price">44.000đ</data>

            <del class="del" value="69.00">45.000</del>

          </div>
          <button class="btn-addToCart">Xem chi tiết ...</button>

        </div>
        <div class="product-card col-2 col-s-4 col-m-6">


          <div class="card-banner" style="text-align: center;">
            <img src="/assetUser/img/medicine/selfcare2.jpg" class="med-pic">
          </div>

          <h3 class="card-title"><a href="#">Men vi sinh hỗ trợ trao đổi chất Life Space Shape B420 (Hộp 60 viên)</a>
          </h3>

          <div class="price-wrapper">
            <data class="price">12.000đ</data>

          </div>
          <button class="btn-addToCart">Xem chi tiết ...</button>

        </div>
        <div class="product-card col-2 col-s-4 col-m-6">


          <div class="card-banner" style="text-align: center;">
            <img src="/assetUser/img/medicine/sc3.png" class="med-pic">
          </div>

          <h3 class="card-title"><a href="#">Nước uống hỗ trợ dưỡng trắng và làm sáng da Nucos Super White (Hộp 10
              chai)</a></h3>

          <div class="price-wrapper">
            <data class="price">36.000đ</data>

          </div>
          <button class="btn-addToCart">Xem chi tiết ...</button>

        </div>
        <div class="product-card col-2 col-s-4 col-m-6">


          <div class="card-banner" style="text-align: center;">
            <img src="/assetUser/img/medicine/sc4.jpg" class="med-pic">
          </div>

          <h3 class="card-title"><a href="#">Nước uống làm sáng da Nucos Spa Collagen 10,000mg (Hộp 10 chai)</a></h3>

          <div class="price-wrapper">
            <data class="price">40.000đ</data>

          </div>
          <button class="btn-addToCart">Xem chi tiết ...</button>

        </div>

        <div class="product-card col-2 col-s-4 col-m-6">


          <div class="card-banner" style="text-align: center;">
            <img src="/assetUser/img/medicine/sc5.jpg" class="med-pic">
          </div>

          <h3 class="card-title"><a href="#">Nước uống làm sáng da, giảm lão hóa Nucos Spa Collagen 10,000mg (Hộp 10
              chai)</a></h3>

          <div class="price-wrapper">
            <data class="price">20.000đ</data>

          </div>
          <button class="btn-addToCart">Xem chi tiết ...</button>

        </div>

      </div>
    </div>
  </section>
  <section class="comment">
    <div class="container" style="width: 1340px; margin: 0px auto; padding: 20px; ">
      <div class="title padding_title" id="BinhLuan" style="font-size: 28px; color: #5BC2AE;">BÌNH LUẬN</div>
      <div class="title1 padding_title" id="cont-cmt">Đánh giá cho Dung Dịch nhỏ mắt Vrohto Mineral Tear
        (Chai 13ml)</div>
      <div class="box">
        <!-- <span class="point">5.00 <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
            class="fas fa-star"></i><i class="fas fa-star"></i></span> -->
        <div class="rating">
          <p>Đánh giá của bạn: <span class="star-rating">
              <label for="rate-1" style="--i:1"><i class="fas fa-star"></i></label>
              <input type="radio" name="rating" id="rate-1" value="1">
              <label for="rate-2" style="--i:2"><i class="fas fa-star"></i></label>
              <input type="radio" name="rating" id="rate-2" value="2" checked>
              <label for="rate-3" style="--i:3"><i class="fas fa-star"></i></label>
              <input type="radio" name="rating" id="rate-3" value="3">
              <label for="rate-4" style="--i:4"><i class="fas fa-star"></i></label>
              <input type="radio" name="rating" id="rate-4" value="4">
              <label for="rate-5" style="--i:5"><i class="fas fa-star"></i></label>
              <input type="radio" name="rating" id="rate-5" value="5">
            </span></p>
        </div>
        <span class="count"><a href="#cont-cmt">75 đánh giá của khách hàng</a></span>
        <div class="ratio">
          <div class="level">5<i class="fas fa-star" style="color: #5BC2AE;"></i></div>
          <div class="progressBar">
            <div class="percentage5"></div>
          </div>
          <div class="status"><span class="sp-status">90%</span> | 67 đánh giá</div>
        </div>
        <div class="ratio">
          <div class="level">4<i class="fas fa-star" style="color: #5BC2AE;"></i></div>
          <div class="progressBar">
            <div class="percentage4"></div>

          </div>
          <div class="status"><span class="sp-status">10%</span> | 8 đánh giá</div>
        </div>
        <div class="ratio">
          <div class="level">3<i class="fas fa-star" style="color: #5BC2AE;"></i></div>
          <div class="progressBar"></div>
          <div class="status"><span class="sp-status">0%</span> | 0 đánh giá</div>
        </div>
        <div class="ratio">
          <div class="level">2<i class="fas fa-star" style="color: #5BC2AE;"></i></div>
          <div class="progressBar"></div>
          <div class="status"><span class="sp-status">0%</span> | 0 đánh giá</div>
        </div>
        <div class="ratio">
          <div class="level">1<i class="fas fa-star" style="color: #5BC2AE;"></i></div>
          <div class="progressBar"></div>
          <div class="status"><span class="sp-status">0%</span> | 0 đánh giá</div>
        </div>
        <!-- <button type="button" class="btn-right" id="ri">ĐÁNH GIÁ NGAY</button>
        <button type="button" class="btn-bottom" id="bo">ĐÁNH GIÁ NGAY</button> -->
      </div>
      <div class="cmt">
        <div class="nameUser">Bui Quy Hung</div>
        <div class="content-cmt">
          <span><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
              class="fas fa-star"></i><i class="fas fa-star"></i></span>Mình dùng thử rồi và rất ưng ý
        </div>
        <div class="time">
          <a href="#">Thảo luận</a> <span>• 14/05/2021</span>
        </div>
        <hr>
      </div>
      <!-- <div class="box2">
        <textarea name="mota" rows="4" cols="167"
            placeholder="Mời bạn tham gia thảo luận, vui lòng nhập Tiếng Việt có dấu"></textarea>
        <div class="content">
            <form method="POST">
                <input type="text" name="name" id="name" value="" placeholder="Họ tên (bắt buộc)" class="txtbox">
                <input type="text" name="mail" id="mail" value="" placeholder="Email" class="txtbox">
                <input type="button" name="send" id="send" value="Gửi" class="btn-send">
            </form>
        </div>
    </div> -->
      <div class="content-cmt1">Để lại bình luận của bạn</div>
      <div class="add-comment" style="position: relative;">
        <div class="avatar">
          <i class="fas fa-user" style="margin-top: 10px;"></i>
        </div>
        <div class="content">
          <textarea name="mota" rows="3" cols="156" placeholder="Thêm bình luận..."></textarea>
          <div class="content-bot">
            <input type="checkbox" id="uptofb" name="uptofb">
            <label for="uptofb">Nhận phản hồi qua email</label>
            <input type="button" value="Đăng" class="btn-up">
          </div>
        </div>
      </div>
    </div>
  </section>


@endisset
@endsection
