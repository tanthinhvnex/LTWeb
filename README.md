# Ngôn ngữ: HTML/CSS, Sass, Javascript.

-   CSS có cài đặt sẵn Grid System của Bootstrap (chỉ Grid thôi nha)

# Để chạy được project

1.  Project này có sử dụng Sass, do đó bạn cần cài đặt một số cái như sau:

-   Cài đặt node js
-   Cài đặt Sass: trong Bash chạy câu lệnh **npm i sass -g**
-   Nếu cài đặt Sass mà bị lỗi không có quyền, thì mở lại Bash ở Run as admin
-   Đã có cấu hình trong package.json câu lệnh sass như sau: **"sass": "sass scss:assets/css -w"**
-   Nên khi viết code trong các file sass, để tạo ra được code tương ứng trong các file css thì dùng câu lệnh: **npm run sass**
-   Sau khi chạy xong thì mỗi lần lưu lại file Sass sẽ tự động tạo file CSS
