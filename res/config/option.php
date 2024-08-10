<?php
/**
 * @package Phan Ní (Test)
 * @author  Chu Văn Thắng <www.facebok.com/23451042/>
 */
interface VanThangConfigInterface {
    public function CommonMethod();
}
class VanThangHeader implements VanThangConfigInterface {
    public $title = "Chu Văn Thắng | Resources V5";
    public $description = "Hi my name is Van Thang / A freelance / web developer / vexer";
    public $keywords = "VanThang,web Van Thang,Chu Van Thang,Phan Ní,profile VanThang";
    public $favicon = "./res/v5/img/logo.jpg";
    public $namesite = "VANTHANG | HOME";
    public $avatar = "./res/v5/img/avatar.gif";
    public $userName = ["Hello Everybody", "My name is VanThang.", "I really like website design 🌭"];
    public $trigger = "👉 Tìm hiểu tôi 😶&zwj;🌫️";
    public $bio1 = "🤖️ Người đam mê công nghệ ";
    public $bio2 = "🔍 Chia sẻ và giúp đỡ nhiệt tình";
    public $bio3 = "💻 Kỹ sư phát triển front-end";
    public $bio4 = "Thích làm thần tượng tiktok 🥳";
    public $bio5 = "Ăn, ngủ, làm và chơi game 🎮";
    public $bio6 = "Kẻ khờ dại tin vào tình yêu ✨";
    public $SocialNetworks = [
        "facebook" => "https://facebook.com/23451042/", // Thay link facebook
        "instagram" => "https://www.instagram.com/", // Thay link instagram
        "tiktok" => "https://www.tiktok.com/", // Thay link tiktok
        "telegram" => "https://t.me/trumstkmbbank" // Thay link telegram
    ];
    public function CommonMethod(){date_default_timezone_set('Asia/Binh_Duong');}
}


class VanThangLoveDays implements VanThangConfigInterface {
    public $ConfigLove = [
        "avatar_male" => "https://i.ibb.co/QnC6FRt/Screenshot-2024-08-10-23-18-20-753-com-miui-gallery-edit.jpg", // Thay đường dẫn tới thư mục chứa ảnh của bạn hoặc up ảnh lấy link tại img.thanhdieu.com
        "name_male" => "ChuVanThang", // Thay tên của bạn
        //========================================================//
        "avatar_female" => "https://i.ibb.co/QnC6FRt/Screenshot-2024-08-10-23-18-20-753-com-miui-gallery-edit.jpg", // Thay đường dẫn tới thư mục chứa ảnh bạn gái hoặc up ảnh lấy link tại img.thanhdieu.com
        "name_female" => "Chu Lý Triệu Anh", // Thay tên đối phương
        //========================================================//
        "time_relashiption" => "10/12/2007" // Định dạng ngày tháng năm: DD-MM-YYYY or / or :
        //========================================================//
    ];
    public function CommonMethod() {}
}
class ThanhDieuMusicList implements VanThangConfigInterface {
    public $songs = [
        [
            "url" => "https://files.catbox.moe/4bjjfg.mp3",
            "avatar" => "https://i.ibb.co/Pt4ZJJd/that-girl-1545280005.jpg",
            "title" => "That Girl",
            "author" => "Olly Murs"
        ],
        [
            "url" => "https://files.catbox.moe/m8b4hr.mp3",
            "avatar" => "https://i.imgur.com/e28b0dD.png",
            "title" => "Thiên Lý Ơi",
            "author" => "Jack ( 5 Triệu )"
        ],
        [
            "url" => "https://files.catbox.moe/yrpft2.mp3",
            "avatar" => "https://i.imgur.com/DAaTklq.png",
            "title" => "Thuỷ Triều",
            "author" => "Quang Hùng MasterD"
        ],
        [
            "url" => "https://files.catbox.moe/jlat9a.mp3",
            "avatar" => "https://i.imgur.com/vp5Vsx5.png",
            "title" => "風立ちぬ ( Gió Nổi )",
            "author" => "周深"
        ],
        [
            "url" => "https://files.catbox.moe/hkqk6x.mp3",
            "avatar" => "https://i.imgur.com/GEOKT8b.png",
            "title" => "Chúng Ta Của Tương Lai",
            "author" => "Sơn Tùng M-TP"
        ],
        [
            "url" => "https://files.catbox.moe/acg0vl.mp3",
            "avatar" => "https://i.ibb.co/MDVY07s/619964de31327dbf8491d14d2c25533f.jpg",
            "title" => "Hoa Cỏ Lau",
            "author" => "Phong Max"
        ],
        [
            "url" => "https://files.catbox.moe/s8opab.mp3",
            "avatar" => "https://i.ibb.co/6R8V7S7/ed0741228ad36870e13624120474e50a.jpg",
            "title" => "Sau Lời Từ Khước",
            "author" => "Phan Mạnh Quỳnh"
        ],
        [
            "url" => "https://files.catbox.moe/gvqgma.mp3",
            "avatar" => "https://i.ibb.co/gvXHBqv/ab67616d0000b273ae85dfd27beee97a3a009f68.jpg",
            "title" => "Em Đã Xa Anh Remix",
            "author" => "Như Việt"
        ],
        [
            "url" => "https://files.catbox.moe/dvjckq.mp3",
            "avatar" => "https://i.ibb.co/VpFyXhS/ab44498b5b432879428719390baf1180-1490064587.jpg",
            "title" => "Anh Đã Quen Với Cô Đơn",
            "author" => "Soobin Hoàng Sơn"
        ],
        // Thêm nhạc tại đây
    ];
    public function CommonMethod() {}
}
