$(document).ready(function () {
    //========Form đăng ký=================//

    $('#form_dang_ki').validate({
        rules: {
            name: {
                required: true,
                minlength: 6,
            },
            user_id: {
                required: true,
                remote: 'check.php',
                minlength: 5,
            },
            email: {
                required: true,
                email: true,
                remote: 'check.php',
            },
            password: {
                required: true,
                minlength: 3,
            },
            password2: {
                required: true,
                equalTo: '#password',
                minlength: 3,
            },
        },
        messages: {
            mane: {
                required: 'Full name cannot be left blank',
                minlength: 'Minimum 6 characters',
            },
            user_id: {
                required: 'Username cannot be blank',
                remote: 'Username available',
                minlength: 'Minimum 5 characters',
            },
            email: {
                required: 'Email cannot be blank',
                remote: 'Email already exists, please use another email!',
                email: 'Invalid email ',
            },
            password: {
                required: 'Password can not be blank',
                minlength: 'Please enter at least 3 characters',
            },
            password2: {
                required: 'Confirm password cannot be blank',
                equalTo: 'Confirm passwords do not match',
                minlength: 'Please enter at least 3 characters',
            },
        },
    });

    //================Form đăng nhập================//

    $('#form_login').validate({
        rules: {
            user_id: {
                required: true,
            },
            password: {
                required: true,
            },
        },
        messages: {
            user_id: {
                required: 'Please enter your login name',
            },
            password: {
                required: 'Please enter your login password',
            },
        },
    });
    //================Form quên mật khẩu================//

    $('#forgot_password_from').validate({
        rules: {
            user_id: {
                required: true,
            },
            email: {
                required: true,
                email: true,
            },
        },
        messages: {
            user_id: {
                required: 'Enter username',
            },
            email: {
                required: 'Enter email',
                email: 'Email invalidate',
            },
        },
    });

    //================Form đổi mật khẩu================//

    $('#form_doi_mk').validate({
        rules: {
            password: {
                required: true,
                // remote: "check_user.php?id=" + ma_kh,
            },
            password2: {
                required: true,
                minlength: 6,
            },
            password3: {
                required: true,
                equalTo: '#password2',
            },
        },
        messages: {
            passowrd: {
                required: 'Please enter your old password',
            },
            passowrd2: {
                required: 'Please enter a new password',
                minlength: 'Password must be at least 3 characters',
            },
            password3: {
                required: 'Please enter the new password confirmation',
                equalTo: 'Password incorrect',
            },
        },
    });

    //================Form cập nhật tài khoản khách hàng================//

    $('#update_account').validate({
        rules: {
            name: {
                required: true,
                minlength: 6,
            },
            email: {
                required: true,
                email: true,
                // remote: 'check.php',
            },
        },
        messages: {
            name: {
                required: 'Please fill in your full name',
                minlength: 'Please enter at least 6 characters',
            },
            email: {
                required: 'Please fill in your email',
                email: 'Invalid email ',
            },
        },
    });

    //==========================ADMIN=====================//
    //======================================================//
    //============================Form add loại================//
    $('#add_loai').validate({
        rules: {
            name: {
                required: true,
                remote: 'check.php',
            },
            status: {
                required: true,
            },
        },
        messages: {
            name: {
                required: 'Tên danh mục không được trống',
                remote: 'Danh mục đã tồn tại',
            },
            status: {
                required: 'Không để trống trạng thái',
            },
        },
    });

    //============================Form cập nhật loại================//

    var ma_loai = $("input[name='ma_loai']").val();
    $('#edit_loai').validate({
        rules: {
            ten_loai: {
                required: true,
                remote: 'check-loai.php?act=update&ma_loai=' + ma_loai,
            },
        },
        messages: {
            ten_loai: {
                required: 'Vui lòng nhập tên loại hàng ',
                remote: 'Tên loại hàng đã tồn tại',
            },
        },
    });
    //============================Form admin add tài khoản khách hàng================//
    $.validator.addMethod(
        "phoneVN",
        function (value, element) {
            return this.optional(element) || /^(0|84)(3[2-9]|5[6|8|9]|7[0|6-9]|8[1-6]|9\d)\d{7}$/.test(value);
        },
        "Vui lòng nhập số điện thoại hợp lệ của Việt Nam."
    );
    $('#admin_add_kh').validate({
        rules: {
            user_id: {
                required: true,
                minlength: 3,
                remote: 'check.php',
            },
            name: {
                required: true,
                minlength: 6,
            },
            email: {
                required: true,
                email: true,
                remote: 'check.php',
            },
            password: {
                required: true,
                minlength: 3,
            },
            phone: {
                required: true,
                phoneVN: true,
            },
        },
        messages: {
            user_id: {
                required: 'Vui lòng điền tài khoản',
                minlength: 'Hãy nhập tối thiểu 3 ký tự',
                remote: 'Tài khoản đã tồn tại',
            },
            name: {
                required: 'Vui lòng điền họ tên',
                minlength: 'Hãy nhập tối thiểu 6 ký tự',
            },
            email: {
                required: 'Vui lòng điền email',
                email: 'Email không hợp lệ ',
                remote: 'Email đã tồn tại',
            },
            password: {
                required: 'Vui lòng điền mật khẩu',
                minlength: 'Hãy nhập ít nhất 3 ký tự',
            },
            phone: {
                required: "Vui lòng nhập số điện thoại.",
                phoneVN: "Vui lòng nhập số điện thoại hợp lệ của Việt Nam.",
            },
        },
    });
    //============================Form admin cập nhật tài khoản khách hàng================//

    $('#admin_update_kh').validate({
        rules: {
            ho_ten: {
                required: true,
                minlength: 6,
            },
            email: {
                required: true,
                email: true,
                // remote: 'check_user.php?act=update&ma_kh=' + ma_kh,
            },
            mat_khau: {
                required: true,
                minlength: 6,
            },
            mat_khau2: {
                required: true,
                minlength: 6,
                equalTo: '#mat_khau',
            },
        },
        messages: {
            ho_ten: {
                required: 'Vui lòng điền họ tên',
                minlength: 'Hãy nhập tối thiểu 6 ký tự',
            },
            email: {
                required: 'Vui lòng điền email',
                email: 'Email không hợp lệ ',
                // remote: "Email đã tồn tại",
            },
            mat_khau: {
                required: 'Vui lòng điền mật khẩu',
                minlength: 'Hãy nhập ít nhất 3 ký tự',
            },
            mat_khau2: {
                required: 'Vui lòng điền mật khẩu',
                equalTo: 'Mật khẩu không trùng nhau',
                minlength: 'Hãy nhập ít nhất 3 ký tự',
            },
        },
    });
    //============================Form admin add sản phẩm================//

    $.validator.addMethod(
        'lessThanEqual',
        function (value, element, param) {
            if (this.optional(element)) return true;
            var i = parseInt(value);
            var j = parseInt($(param).val());
            return i <= j;
        },
        'The value {0} must be less than {1}'
    );
    $('#add_product').validate({
        rules: {
            category_id:{
                required: true,
            },
            name: {
                required: true,
                // remote: {
                //     url: 'check-product.php',
                //     type: 'post',
                //     data: {
                //         name: function () {
                //             return $('#name').val();
                //         }
                //     }
                // }
            },
            quantity: {
                required: true,
                number: true,
                min: 0,
            },
            price: {
                required: true,
                number: true,
                min: 0,
            },
            discount: {
                required: true,
                min: 0,
                max: 100,
            },
            image: {
                required: true,
            },
            image_url:{
                required: true,
            }
        },
        messages: {
            category_id: {
            required: 'Vui lòng chọn loại sản phẩm!!',
        },
            name: { 
                required: 'Vui lòng điền tên sản phẩm',
                // remote: 'Tên sản phẩm đã tồn tại',
            },
            price: {
                required: 'Vui lòng điền đơn giá $',
                number: 'Vui lòng nhập số',
                min: 'Đơn giá phải lớn hơn 0$',
            },
            discount: {
                required: 'Vui lòng nhập giảm giá',
                min: 'Vui lòng nhập giảm gía từ 0-100(%)',
                max: 'Vui lòng nhập giảm gía từ 0-100(%)',
            },
            quantity: {
                required: 'Vui lòng điền số lượng sản phẩn',
                number: 'Vui lòng nhập số',
                min: 'Đơn giá phải lớn hơn 0$',
            },
        },
    });
    $('#edit_product').validate({
        rules: {
            category_id:{
                required: true,
            },
            name: {
                required: true,
                remote: {
                    url: 'check-product.php',
                    type: 'post',
                    data: {
                        name: function () {
                            return $('#name').val();
                        }
                    }
                }
            },
            quantity: {
                required: true,
                number: true,
                min: 0,
            },
            price: {
                required: true,
                number: true,
                min: 0,
            },
            discount: {
                required: true,
                min: 0,
                max: 100,
            },
            image: {
                required: true,
            },
            image_url:{
                required: true,
            }
        },
        messages: {
            category_id: {
            required: 'Vui lòng chọn loại sản phẩm!!',
        },
            name: { 
                required: 'Vui lòng điền tên sản phẩm',
                remote: 'Tên sản phẩm đã tồn tại',
            },
            price: {
                required: 'Vui lòng điền đơn giá $',
                number: 'Vui lòng nhập số',
                min: 'Đơn giá phải lớn hơn 0$',
            },
            discount: {
                required: 'Vui lòng nhập giảm giá',
                min: 'Vui lòng nhập giảm gía từ 0-100(%)',
                max: 'Vui lòng nhập giảm gía từ 0-100(%)',
            },
            quantity: {
                required: 'Vui lòng điền số lượng sản phẩn',
                number: 'Vui lòng nhập số',
                min: 'Đơn giá phải lớn hơn 0$',
            },
        },
    });
    $('#btn_update').validate({
        rules: {
            category_id:{
                required: true,
            },
            name: {
                required: true,
                // remote: 'check-product.php',
            },
            quantity: {
                required: true,
                number: true,
                min: 0,
            },
            price: {
                required: true,
                number: true,
                min: 0,
            },
            discount: {
                required: true,
                min: 0,
                max: 100,
            },
        },
        messages: {
            category_id: {
            required: 'Vui lòng chọn loại sản phẩm!!',
        },
            name: {
                required: 'Vui lòng điền tên sản phẩm',
                // remote: 'Tên sản phẩm đã tồn tại',
            },
            price: {
                required: 'Vui lòng điền đơn giá $',
                number: 'Vui lòng nhập số',
                min: 'Đơn giá phải lớn hơn 0$',
            },
            discount: {
                required: 'Vui lòng nhập giảm giá',
                min: 'Vui lòng nhập giảm gía từ 0-100(%)',
                max: 'Vui lòng nhập giảm gía từ 0-100(%)',
            },
            quantity: {
                required: 'Vui lòng điền số lượng sản phẩn',
                number: 'Vui lòng nhập số',
                min: 'Đơn giá phải lớn hơn 0$',
            },
        },
    });

    var ma_hh = $("input[name='ma_hh']").val();
    $('#update_hang_hoa').validate({
        rules: {
            ten_hh: {
                required: true,
                remote: 'check-hang-hoa.php?act=update&ma_hh=' + ma_hh,
            },
            don_gia: {
                required: true,
                min: 0,
            },
            giam_gia: {
                required: true,
                min: 0,
                lessThanEqual: '#don_gia',
            },
            mo_ta: {
                required: true,
            },
            ngay_nhap: {
                required: true,
            },
        },
        messages: {
            ten_hh: {
                required: 'Vui lòng điền tên sản phẩm',
                remote: 'Tên sản phẩm đã tồn tại',
            },
            don_gia: {
                required: 'Vui lòng điền đơn giá',
                min: 'Đơn giá phải lớn hơn 0',
            },
            giam_gia: {
                required: 'Vui lòng điền giảm giá vnđ',
                min: 'giảm giá phải lớn hơn 0',
                lessThanEqual: 'Giá đã giảm phải nhỏ hơn đơn giá',
            },
            mo_ta: {
                required: 'Vui lòng điền mô tả',
            },
            ngay_nhap: {
                required: 'Vui lòng chọn ngày nhập',
            },
        },
    });
});
// ========================================================= //

var ma_hh = $("input[name='product_id']").val();
    $('#update_hang_hoa').validate({
        rules: {
        
        },
    });
// =======================update khách hàng admin=======================//
$('#admin_edit_kh').validate({
    rules: {
        user_id: {
            required: true,
            minlength: 3,
            // remote: 'check.php',
        },
        name: {
            required: true,
            minlength: 6,
        },
        email: {
            required: true,
            email: true,
            // remote: 'check.php',
        },
        password: {
            required: true,
            minlength: 3,
        },
        phone: {
            required: true,
            phoneVN: true,
        },
    },
    messages: {
        user_id: {
            required: 'Vui lòng điền tài khoản',
            minlength: 'Hãy nhập tối thiểu 3 ký tự',
            // remote: 'Tài khoản đã tồn tại',
        },
        name: {
            required: 'Vui lòng điền họ tên',
            minlength: 'Hãy nhập tối thiểu 6 ký tự',
        },
        email: {
            required: 'Vui lòng điền email',
            email: 'Email không hợp lệ ',
            // remote: 'Email đã tồn tại',
        },
        password: {
            required: 'Vui lòng điền mật khẩu',
            minlength: 'Hãy nhập ít nhất 3 ký tự',
        },
        phone: {
            required: "Vui lòng nhập số điện thoại.",
            phoneVN: "Vui lòng nhập số điện thoại hợp lệ của Việt Nam.",
        },
    },
});