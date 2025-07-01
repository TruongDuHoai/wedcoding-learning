<?php
  $pageTitle = "Thanh toán đơn hàng";
?>

<link rel="stylesheet" href="assets/css/checkout.css" />

<div class="checkout-container">
  <h2>Thanh toán đơn hàng</h2>

  <!-- FORM -->
  <form id="checkout-form" method="POST" action="php/order/create.php">
    
    <!-- Thông tin người nhận -->
    <div class="section">
      <div class="section-title">Thông tin người nhận</div>
      <div class="input-group">
        <label for="fullname">Họ và tên</label>
        <input type="text" id="fullname" name="fullname" required>
      </div>
      <div class="input-group">
        <label for="phone">Số điện thoại</label>
        <input type="tel" id="phone" name="phone" placeholder="VD: 0987123456" required>
      </div>
      <div class="input-group">
        <label for="address">Địa chỉ giao hàng</label>
        <input type="text" id="address" name="address" required>
      </div>
      <div class="input-group">
        <label for="region">Khu vực giao</label>
        <select id="region" name="region" required>
          <option value="">-- Chọn khu vực --</option>
          <option value="TP Hồ Chí Minh">TP Hồ Chí Minh</option>
        </select>
      </div>
    </div>

    <!-- Ghi chú -->
    <div class="section">
      <div class="section-title">Ghi chú cho tài xế</div>
      <textarea rows="3" name="note" placeholder="VD: Giao trước 12h, gọi trước khi đến..."></textarea>
    </div>

    <!-- Chi tiết đơn hàng -->
    <div class="section">
      <div class="section-title">Chi tiết đơn hàng</div>
      <div class="order-items-container">
        <!-- JS sẽ chèn các .order-item tại đây -->
        <div class="order-item"><span>Phí giao hàng</span><span>15.000₫</span></div>
      </div>
      <div class="checkout-total"><span>Tổng cộng</span><span>15.000₫</span></div>
    </div>

    <!-- Phương thức thanh toán -->
    <div class="section">
      <div class="section-title">Phương thức thanh toán</div>
      <select name="payment_method" required>
        <option value="cod">Tiền mặt</option>
        <option value="bank">Chuyển khoản</option>
      </select>
    </div>

    <!-- Hidden input chứa giỏ hàng -->
    <input type="hidden" name="cart_data" id="cart-data">

    <!-- Nút submit -->
    <button class="btn-submit" type="submit">Đặt hàng</button>
  </form>
</div>

<script src="assets/js/checkout.js"></script>
