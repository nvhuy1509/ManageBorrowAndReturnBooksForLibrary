$(document).ready(function (e){
    // thêm sửa tác giả
    $('.sua_tac_gia').click(function (){
        $.ajax({
            url : "admin/controller/c_tac_gia.php?method=Hien_sua_tac_gia",
            type : "post",
            dateType:"text",
            data : {
                 id : $(this).data('id_sua'),
                 page : $(this).data('page')
            },
            success : function (result){
                $('.hien_sua_tac_gia').html(result);
                $('#loginForm').formValidation({
                    framework: 'bootstrap',
                    icon: {
                        valid: 'glyphicon glyphicon-ok',
                        invalid: 'glyphicon glyphicon-remove',
                        validating: 'glyphicon glyphicon-refresh'
                    },
                    fields: {
                        txtTenTG: {
                            validators: {
                                notEmpty: {
                                    message: 'Chưa nhập tên tác giả'
                                }
                            }
                        },
                        txtSDT: {
                            validators: {
                                notEmpty: {
                                    message: 'Chưa nhập Số điện thoại'
                                },
                                regexp: {
                                    message: 'Các số điện thoại chỉ có thể chứa các chữ số ',
                                    regexp: /^[0-9]+$/
                                },
                                stringLength: {
                                    min: 3,
                                    max: 11,
                                    message: 'số điện thoại phải dài từ 3->11 kí tự'
                                }
                            }
                        },
                        txtDiaChi: {
                            validators: {
                                notEmpty: {
                                    message: 'Chưa nhập địa chỉ'
                                }
                            }
                        }
                    }
                });
            }
        });
    });
    // xóa tác giả
    $('.xoa_tac_gia').click(function (){
       var check = confirm('bạn có chắc chắn muốn xóa không');
        if(check === false){
            return false;
        }
        $.ajax({
            url : 'admin/controller/c_tac_gia.php?method=Xoa_tac_gia',
            data: {
                id : $(this).data('id_xoa')                
            },
            dataType: 'text',
            type: 'POST',
            success: function (result) {
                $('#right1').html(result);
                location.reload();
            }
            
        });        
    });
    // thêm, sửa loại sách
    $('.sua_loai').click(function (){
        $.ajax({
            url : 'admin/controller/c_loai_sach.php?method=Hien_sua_loai',
            data:{
                id : $(this).data('id_sua'),
                page : $(this).data('page1')
            },
            type: 'POST',
            dataType: 'text',
            success: function (result) {
                $('#hien_sua_loai').html(result);
                //check from
                $('#loginForm').formValidation({
                    framework: 'bootstrap',
                    icon: {
                        valid: 'glyphicon glyphicon-ok',
                        invalid: 'glyphicon glyphicon-remove',
                        validating: 'glyphicon glyphicon-refresh'
                    },
                    fields: {
                        txtTenLoai: {
                            validators: {
                                notEmpty: {
                                    message: 'The username is required'
                                }
                            }
                        }
                    }
                });
            }
        });
    });
    // Xóa loại sách
    $('.xoa_loai').click(function (){
        var check = confirm('bạn có chắc chắn muốn xóa không');
        if(check === false){
            return false;
        }
        $.ajax({
            url : 'admin/admin.php?sk=loaisach&method=Xoa_loai',
            data: {
                id : $(this).data('id_xoa')                
            },
            dataType: 'text',
            type: 'POST',
            success: function (result) {
                var html = '';
                html = $(result).find('#loaisach1').html();
                $('#right1').find('#loaisach1').html(html);
                location.reload();
            }
            
        });        
    });
    // thêm , sửa nhà xuất bản
    $('.sua_nha_xuat_ban').click(function (){
        
        $.ajax({
            url : 'admin/controller/c_nha_xuat_ban.php?method=Hien_sua_nha_xuat_ban',
            data:{
                id : $(this).data('id_sua'),
                page : $(this).data('page')
            },
            type: 'POST',
            dataType: 'text',
            success: function (result) {
                $('#hien_sua_nha_xuat_ban').html(result);
                $('#loginForm').formValidation({
                    framework: 'bootstrap',
                    icon: {
                        valid: 'glyphicon glyphicon-ok',
                        invalid: 'glyphicon glyphicon-remove',
                        validating: 'glyphicon glyphicon-refresh'
                    },
                    fields: {
                        txtTenNXB: {
                            validators: {
                                notEmpty: {
                                    message: 'Chưa nhập tên nhà xuất bản'
                                }
                            }
                        },
                        txtSDT: {
                            validators: {
                                notEmpty: {
                                    message: 'Chưa nhập Số điện thoại'
                                },
                                regexp: {
                                    message: 'Các số điện thoại chỉ có thể chứa các chữ số ',
                                    regexp: /^[0-9]+$/
                                },
                                stringLength: {
                                    min: 3,
                                    max: 11,
                                    message: 'số điện thoại phải dài từ 3->11 kí tự'
                                }
                            }
                        },
                        txtDiaChi: {
                            validators: {
                                notEmpty: {
                                    message: 'Chưa nhập địa chỉ'
                                }
                            }
                        }
                    }
                });
            }
        });
    });
    // Xóa nhà xuất bản
    $('.xoa_nha_xuat_ban').click(function (){
        var check = confirm('bạn có chắc chắn muốn xóa không');
        if(check === false){
            return false;
        }
        $.ajax({
            url : 'admin/controller/c_nha_xuat_ban.php?method=Xoa_nha_xuat_ban',
            data: {
                id : $(this).data('id_xoa')                
            },
            dataType: 'text',
            type: 'POST',
            success: function (result) {
                $('#right1').html(result);
                location.reload();
            }
        });        
    });
    //sửa sách
    $('.sua_sach').click(function (){
        $.ajax({
            url : 'admin/controller/c_sach.php?method=Hien_sua_sach',
            data:{
                id : $(this).data('id_sua'),
                page : $(this).data('page')
            },
            type: 'POST',
            dataType: 'text',
            success: function (result) {
                $('#hien_sua_sach').html(result);
                $('#loginForm').formValidation({
                    framework: 'bootstrap',
                    icon: {
                        valid: 'glyphicon glyphicon-ok',
                        invalid: 'glyphicon glyphicon-remove',
                        validating: 'glyphicon glyphicon-refresh'
                    },
                    fields: {
                        txtTenSach: {
                            validators: {
                                notEmpty: {
                                    message: 'Chưa nhập tên sách'
                                }
                            }
                        },
                        txtNXB: {
                            validators: {
                                notEmpty: {
                                    message: 'Chưa nhập nhà xuất bản'
                                }
                            }
                        },
                        txtTG: {
                            validators: {
                                notEmpty: {
                                    message: 'Chưa nhập tác giả'
                                }
                            }
                        },
                        txtLoaiSach: {
                            validators: {
                                notEmpty: {
                                    message: 'Chưa nhập loại sách'
                                }
                            }
                        },
                        file: {
                            validators: {
                                notEmpty: {
                                    message: 'Chưa chọn ảnh'
                                },
                                file: {
                                    maxSize: 10 * 1024 * 1024,
                                    message: 'Kích thước ảnh không được lớn hơn 10MB'
                                }
                            }
                        },
                        txtGiaCu: {
                            validators: {
                                notEmpty: {
                                    message: 'Chưa nhập giá bìa'
                                },
                                regexp: {
                                    message: 'giá chỉ có thể chứa các chữ số ',
                                    regexp: /^[0-9]+$/
                                },
                                stringLength: {
                                    min: 4,
                                    max: 11,
                                    message: 'giá phải dài từ 4->11 kí tự'
                                }
                            }
                        },
                        txtGia: {
                            validators: {
                                notEmpty: {
                                    message: 'Chưa nhập giá bán'
                                },
                                regexp: {
                                    message: 'giá chỉ có thể chứa các chữ số ',
                                    regexp: /^[0-9]+$/
                                },
                                stringLength: {
                                    min: 4,
                                    max: 11,
                                    message: 'giá phải dài từ 4->11 kí tự'
                                }
                            }
                        },
                        txtSoLuong: {
                            validators: {
                                notEmpty: {
                                    message: 'Chưa nhập Số lượng'
                                },
                                regexp: {
                                    message: 'Số lượng chỉ có thể chứa các chữ số ',
                                    regexp: /^[0-9]+$/
                                },
                                stringLength: {
                                    min: 1,
                                    max: 4,
                                    message: 'giá phải dài từ 1->4 kí tự'
                                }
                            }
                        },
                        txtSoTrang: {
                            validators: {
                                notEmpty: {
                                    message: 'Chưa nhập Số trang'
                                },
                                regexp: {
                                    message: 'số trang chỉ có thể chứa các chữ số ',
                                    regexp: /^[0-9]+$/
                                },
                                stringLength: {
                                    min: 1,
                                    max: 5,
                                    message: 'số trang phải dài từ 1->5 kí tự'
                                }
                            }
                        }
                    }
                });
            }
        });
    });
    // xoas sach
    $('.xoa_sach').click(function (){
        var check = confirm('bạn có chắc chắn muốn xóa không');
        if(check === false){
            return false;
        }
        $.ajax({
            url : 'admin/controller/c_sach.php?method=Xoa_sach',
            data: {
                id : $(this).data('id_xoa')                
            },
            dataType: 'text',
            type: 'POST',
            success: function (result) {
                $('#right1').html(result);
                location.reload();
            }
            
        });        
    });
    // thêm , sửa thanh viên
    $('.sua_thanh_vien').click(function (){
        
        $.ajax({
            url : 'admin/controller/c_thanh_vien.php?method=Hien_sua_thanh_vien',
            data:{
                id : $(this).data('id_sua'),
                page : $(this).data('page')
            },
            type: 'POST',
            dataType: 'text',
            success: function (result) {
                $('#hien_sua_thanh_vien').html(result);
                $('#loginForm').formValidation({
                    framework: 'bootstrap',
                    icon: {
                        valid: 'glyphicon glyphicon-ok',
                        invalid: 'glyphicon glyphicon-remove',
                        validating: 'glyphicon glyphicon-refresh'
                    },
                    fields: {
                        txtTenDN: {
                            validators: {
                                notEmpty: {
                                    message: 'Chưa nhập tên nhà xuất bản'
                                }
                            }
                        },
                        txtTenHienThi: {
                            validators: {
                                notEmpty: {
                                    message: 'Chưa nhập tên nhà xuất bản'
                                }
                            }
                        },
                        txtEmail: {
                            validators: {
                                notEmpty: {
                                    message: 'Email không được để trống'
                                },
                                emailAddress: {
                                    message: 'Địa chỉ email không hợp lệ'
                                },
                                blank: {}
                            }
                        },
                        txtSDT: {
                            validators: {
                                notEmpty: {
                                    message: 'Chưa nhập Số điện thoại'
                                },
                                regexp: {
                                    message: 'Các số điện thoại chỉ có thể chứa các chữ số ',
                                    regexp: /^[0-9]+$/
                                },
                                stringLength: {
                                    min: 3,
                                    max: 11,
                                    message: 'số điện thoại phải dài từ 3->11 kí tự'
                                }
                            }
                        },
                        txtDiaChi: {
                            validators: {
                                notEmpty: {
                                    message: 'Chưa nhập địa chỉ'
                                }
                            }
                        }
                    }
                });
            }
        });
    });
    // Xóa thành viên
    $('.xoa_thanh_vien').click(function (){
        if($(this).data('id_xoa') == 1){
            alert('Bạn không được xóa tài khoản này');
            return false;
        }
        var check = confirm('bạn có chắc chắn muốn xóa không');
        if(check === false){
            return false;
        }
        $.ajax({
            url : 'admin/controller/c_thanh_vien.php?method=Xoa_thanh_vien',
            data: {
                id : $(this).data('id_xoa')                
            },
            dataType: 'text',
            type: 'POST',
            success: function (result) {
                $('#right1').html(result);
               location.reload();
            }
            
        });        
    });
    // thêm , sửa đơn hàng
    $('.sua_don_hang').click(function (){
        $.ajax({
            url : 'admin/controller/c_don_hang.php?method=Hien_sua_don_hang',
            data:{
                id : $(this).data('id_sua'),
                page : $(this).data('page')
            },
            type: 'POST',
            dataType: 'text',
            success: function (result) {
                $('#hien_sua_don_hang').html(result);
                $('#loginForm').formValidation({
                    framework: 'bootstrap',
                    icon: {
                        valid: 'glyphicon glyphicon-ok',
                        invalid: 'glyphicon glyphicon-remove',
                        validating: 'glyphicon glyphicon-refresh'
                    },
                    fields: {
                        txtTenDN: {
                            validators: {
                                notEmpty: {
                                    message: 'Chưa nhập tên nhà xuất bản'
                                }
                            }
                        },
                        txtTenHienThi: {
                            validators: {
                                notEmpty: {
                                    message: 'Chưa nhập tên nhà xuất bản'
                                }
                            }
                        },
                        txtEmail: {
                            validators: {
                                notEmpty: {
                                    message: 'Email không được để trống'
                                },
                                emailAddress: {
                                    message: 'Địa chỉ email không hợp lệ'
                                },
                                blank: {}
                            }
                        },
                        txtSDT: {
                            validators: {
                                notEmpty: {
                                    message: 'Chưa nhập Số điện thoại'
                                },
                                regexp: {
                                    message: 'Các số điện thoại chỉ có thể chứa các chữ số ',
                                    regexp: /^[0-9]+$/
                                },
                                stringLength: {
                                    min: 3,
                                    max: 11,
                                    message: 'số điện thoại phải dài từ 3->11 kí tự'
                                }
                            }
                        },
                        txtDiaChi: {
                            validators: {
                                notEmpty: {
                                    message: 'Chưa nhập địa chỉ'
                                }
                            }
                        }
                    }
                });
            }
        });
    });
    // Xóa đơn hàng
    $('.xoa_don_hang').click(function (){
        var check = confirm('bạn có chắc chắn muốn xóa không');
        if(check === false){
            return false;
        }
        $.ajax({
            url : 'admin/controller/c_don_hang.php?method=Xoa_don_hang',
            data: {
                id : $(this).data('id_xoa')                
            },
            dataType: 'text',
            type: 'POST',
            success: function (result) {
                $('#right1').html(result);
               location.reload();
            }
            
        });        
    });
});