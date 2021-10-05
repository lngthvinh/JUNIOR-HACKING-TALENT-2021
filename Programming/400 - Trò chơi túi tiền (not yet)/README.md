# Trò chơi túi tiền

400 điểm

"Haha! giỏi lắm người chơi Z! Quả là ta không nhìn nhầm người" - Robot MASTER có vẻ rất khoái chí khi tìm thấy được đối thủ của mình.

"Đây sẽ là thử thách cuối cùng! Đừng làm ta thất vọng. Luật của trò chơi tiếp theo là:"

Bạn và người máy MASTER được đưa ra N bọc tiền, biết số lượng bọc tiền N là số chẵn. Trò chơi được thực hiện theo từng lượt như sau:

* Tại mỗi lượt chơi, người chơi phải lấy đi bọc tiền ở đầu dãy (gửi lên server 0) hoặc bọc tiền ở cuối dãy (gửi lên server 1).
* Bạn là người đi trước.
* Sau khi lấy tất cả bọc tiền, người chiến thắng là người lấy được nhiều tiền nhất.

Tuy nhiên, người máy này rất xấu tính, bạn phải chiến thắng người máy 10 ván như trên để cứu lấy bạn của mình.

Ví dụ:

* Có 4 bọc tiền = [25 20 100 30]
* Lượt 1, người chơi lấy bọc tiền ở cuối → còn [25 20 100]
* Lượt 2, người máy lấy bọc tiền ở cuối → còn [25 20]
* Lượt 3, người chơi lấy bọc tiền ở đầu → còn [20]
* Lượt 4, người máy lấy bọc tiền ở đầu (hoặc cuối, đều như nhau) → còn []
* → Người chơi đã thua, vì tổng số tiền chỉ lấy được 55, còn người máy lấy được 120

#
Thông tin truy cập: nc 178.128.19.56 20002
