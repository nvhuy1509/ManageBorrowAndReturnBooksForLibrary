# ManageBorrowAndReturnBooksForLibrary
## Mng nho pull code ve roi moi push len tranh bi conflict code nhe
## Requirements
Login/Logout: 

- Login/Logout
- Home(Phân quyền)
- Cấp lại password

Sách:
- Thêm, sửa, xóa thông tin sách

- Category(Thể loại) :  
 _Đặt chung theo format:_   1 => 'Khoa học', 2 => 'Tiểu thuyết',  3 => 'Manga',   4 => 'Sách giáo khoa'

- Tìm kiếm, xem chi tiết

Người dùng (Giáo viên, Sinh viên):
- Thêm, sửa, xóa người dùng
- Tìm kiếm, xem chi tiết

Mượn trả sách:
- Thống kê danh sách mượn trả
- Tìm kiếm thông thường và tìm kiếm nâng cao
- Log mượn trả của sách, Log mượn trả của người dùng


## Admin account
Mã hóa md5 trước khi insert admin account, ví dụ:
`
INSERT INTO admins (login_id, password, actived_flag) VALUES ('admin00', MD5('012345'), 1);
`


## Rules
- Pull code mới nhất từ main, tách branch trước khi code, tên branch thể hiện tính năng mình làm
- Code xong push branch đó lên, tạo pull request.
