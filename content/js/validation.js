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
            ten_loai: {
                required: true,
                remote: 'check-loai.php?act=add',
            },
        },
        messages: {
            ten_loai: {
                required: 'Loại hàng không được trống',
                remote: 'Loại hàng đã tồn tại',
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

    $('#admin_add_kh').validate({
        rules: {
            ma_kh: {
                required: true,
                minlength: 6,
                remote: 'check.php',
            },
            ho_ten: {
                required: true,
                minlength: 6,
            },
            email: {
                required: true,
                email: true,
                remote: 'check.php',
            },
            mat_khau: {
                required: true,
                minlength: 3,
            },
            mat_khau2: {
                required: true,
                minlength: 3,
                equalTo: '#mat_khau',
            },
        },
        messages: {
            ma_kh: {
                required: 'Vui lòng điền mã kh',
                minlength: 'Hãy nhập tối thiểu 6 ký tự',
                remote: 'Mã kh đã tồn tại',
            },
            ho_ten: {
                required: 'Vui lòng điền họ tên',
                minlength: 'Hãy nhập tối thiểu 6 ký tự',
            },
            email: {
                required: 'Vui lòng điền email',
                email: 'Email không hợp lệ ',
                remote: 'Email đã tồn tại',
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
    //============================Form admin add hàng hóa================//

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
            name: {
                required: true,
                remote: 'check-hang-hoa.php?act=add',
            },
            price: {
                required: true,
                min: 0,
            },
            input_date: {
                required: true,
            },
            img: {
                required: true,
            },
        },
        messages: {
            name: {
                required: 'Vui lòng điền tên hàng hóa',
                remote: 'Tên hàng hóa đã tồn tại',
            },
            price: {
                required: 'Vui lòng điền đơn giá $',
                min: 'Đơn giá phải lớn hơn 0$',
            },
            input_date: {
                required: 'Vui lòng chọn ngày nhập',
            },
            img: 'Vui lòng chọn ảnh',
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
                required: 'Vui lòng điền tên hàng hóa',
                remote: 'Tên hàng hóa đã tồn tại',
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
