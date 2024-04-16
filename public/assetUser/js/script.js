function cart_direct() {
    window.location.href = "cart.html";
}
function login_direct() {
    window.location.href = "login.html";
}



var i = 1;
var n = 3;
var price = 40000;
function next() {
    if (i < n) i += 1;
    else i = 1;

    document.getElementById("slide").setAttribute("src", "img/slide" + i + ".jpg");
}
function back() {
    if (i > 1) i -= 1;
    else i = n;

    document.getElementById("slide").setAttribute("src", "img/slide" + i + ".jpg");
}
function autoplay() {
    setInterval(next, 3000);
}


function inc(x) {
    a = parseInt(document.getElementById(x).value);

    document.getElementById(x).value = a + 1;

}
function dec(x) {
    a = parseInt(document.getElementById(x).value);
    if (a > 1) {
        a -= 1;

    }
    document.getElementById(x).value = a;
}

function removeCart(rowId) {
    alert("delete");
    $.ajax({
        
        type: "GET",
        url: "http://127.0.0.1:8000/cart/delete",
        data: { rowId: rowId },
        success: function (response) {
            alert("ajax");
            var cart_tbody = $(".product-table tbody");
            var cart_existItem = cart_tbody.find(
                "tr" + "[data-rowId='" + rowId + "']"
            );
            if (cart_existItem.length > 0) {
                alert("found");
            }
            else alert("not found");
            cart_existItem.remove();
            alert("Delete succesfull");
            console.log;
            response;
        },
        error: function (response) {
            alert("delete failed");
            console.log;
            response;
        },
    });
}


// Tăng số lượng sản phẩm
function increaseQuantity(rowId) {
    var inputQuantity = $('#quantity_' + rowId);
    var newQuantity = parseInt(inputQuantity.val()) + 1;
    updateCartQuantity(rowId, newQuantity);
}

// Giảm số lượng sản phẩm
function decreaseQuantity(rowId) {
    var inputQuantity = $('#quantity_' + rowId);
    var newQuantity = parseInt(inputQuantity.val()) - 1;
    if (newQuantity >= 1) {
        updateCartQuantity(rowId, newQuantity);
    }
}

// Cập nhật số lượng sản phẩm trong giỏ hàng
function updateCartQuantity(rowId, newQuantity) {
    $.ajax({
        type: "POST",
        url: "/cart/update",
        data: {
            rowId: rowId,
            quantity: newQuantity
        },
        success: function (response) {
            // Cập nhật giao diện hoặc thông tin khác sau khi cập nhật số lượng thành công
            console.log(response);
        },
        error: function (xhr, status, error) {
            console.error(error);
        }
    });
}





