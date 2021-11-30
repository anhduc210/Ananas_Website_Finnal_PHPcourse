function load_ajax(){
    var aname = document.getElementById("inputname").value;
    var aemail = document.getElementById("inputemail").value;
    var aphone = document.getElementById("inputphone").value;
    var aaddress = document.getElementById("inputaddress").value;

    if(aname != "" && aaddress != "" && aphone!= "" && aemail!= ""){

        $.ajax({
        url : "index.php?controller=cart&action=checkout", // gửi ajax đến file result.php
        type : "post", // chọn phương thức gửi là post
        dataType:"text", // dữ liệu trả về dạng text
        data : { // Danh sách các thuộc tính sẽ gửi đi
             name : $('#inputname').val(),
             email : $('#inputemail').val(),
             phone : $('#inputphone').val(),
             address : $('#inputaddress').val()
        },
        success : function (result){
            // Sau khi gửi và kết quả trả về thành công thì gán nội dung trả về
            // đó vào thẻ div có id = result
            $('#orderForm')[0].reset();

        }
    });
      window.location.href = 'index.php?controller=cart&action=submit';

    }
}

function discount_code() {
    var code = document.getElementById("code").value;
    var discount_code =0;
    if(code == "ananas"){
        alert(code);
       discount_code =50;
    }
    $.ajax({
        url : "index.php?controller=cart&action=discount", // gửi ajax đến file result.php
        type : "post", // chọn phương thức gửi là post
        dataType:"number", // dữ liệu trả về dạng số
        data : discount_code,
        success : function (result){
            // Sau khi gửi và kết quả trả về thành công thì gán nội dung trả về
            // đó vào thẻ div có id = result
            $('#orderForm')[0].reset();

        }
    });
}











//  function SubmitFormData() {
//     var name = document.getElementById("inputname").value
//     var email = document.getElementById("inputemail").value
//     var phone = document.getElementById("inputphone").value
//     var address = document.getElementById("inputaddress").value

// alert(name);

//     $.ajax({
//         url : "index.php?controller=cart&action=checkout", // gửi ajax đến file result.php
//         type : "post", // chọn phương thức gửi là post
//         dataType:"text", // dữ liệu trả về dạng text
//         data : { // Danh sách các thuộc tính sẽ gửi đi
//              functionname : 'checkout',
//              arguments : [name,phone,address,email],
//         },
//         success : function (result){
//             // Sau khi gửi và kết quả trả về thành công thì gán nội dung trả về
//             // đó vào thẻ div có id = result
//             //$('#orderForm')[0].reset();
//         }
//     });
// }