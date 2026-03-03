<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>สั่งเบเกอรี่</title>

<link rel="manifest" href="manifest.json">
<script>
const API_URL = "ใส่ URL Apps Script ตรงนี้";

function sendOrder(){
  fetch(API_URL,{
    method:"POST",
    body:JSON.stringify({
      customer_name:document.getElementById("name").value,
      phone:document.getElementById("phone").value,
      product:document.getElementById("product").value,
      qty:document.getElementById("qty").value,
      note:document.getElementById("note").value
    })
  }).then(r=>r.json())
    .then(d=>{
      alert("สั่งสำเร็จ!");
    });
}
</script>
</head>
<body>

<h2>สั่งเบเกอรี่</h2>

<input id="name" placeholder="ชื่อ"><br>
<input id="phone" placeholder="เบอร์โทร"><br>
<input id="product" placeholder="สินค้า"><br>
<input id="qty" type="number" placeholder="จำนวน"><br>
<input id="note" placeholder="หมายเหตุ"><br>
<button onclick="sendOrder()">สั่งสินค้า</button>

<script>
if ('serviceWorker' in navigator) {
  navigator.serviceWorker.register('service-worker.js');
}
</script>

</body>
</html>