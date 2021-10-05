# Mã máy nâng cấp

200 điểm

Em hãy nhập vào đoạn mã máy để thực thi hàm print_flag. Được biết địa chỉ của hàm ở 0x8048814 và chương trình chạy trên bộ xử lý INTEL i386 trên máy tính 32 bit.

Ví dụ:<br>
Em muốn thực thi lệnh mov eax,0x41414141.<br>
Kết quả mã máy của nó sẽ là: \xB8\x41\x41\x41\x41.<br>
Sau đó em đưa về dạng hex như sau: B841414141 và gửi đến máy chủ.

Lưu ý:<br>
Tuy nhiên em không được phép sử dụng lệnh call, push, mov hoặc các loại jump. Một hạn chế cuối cùng là không còn được truyền giá trị 0x8048814 vào trong lệnh.

Ví dụ:<br>
sub eax,0x8048814 sẽ bị phạm luật vì có giá trị 0x8048814.

#
Thông tin truy cập: nc 178.128.19.56 4792
