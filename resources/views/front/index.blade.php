<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>PNJ Store</title>
    <link rel="icon" type="images/x-icon" href="./front/HinhAnh/logoxyz1.png" />
    <link rel="stylesheet" type="text/css" href="./front/CSS/index.css" />
    <script type="text/javascript" src="index.js"></script>
    <script type="text/javascript" src="jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {

            $('.sub-menu').parent('li').addClass('has-child')
        });
    </script>

</head>

<body>
    <div id="Dau_Trang_Web">
        <div id="container">
            <a style="width: 108px;height: 14px; text-align: left;"><img src="./front/HinhAnh/cargo-truck.png">Miễn phí giao
                hàng</a>
            <span style="text-align: left;">|</span>
            <a style="width: 79px;height: 14px; text-align: left; margin-left: 10px;"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZbRP46o1JoKPVokHkyERmOdV7uLrS8E73Tg&s">
               Trang sức đa dạng </a>
            <span style="text-align: left;">|</span>
            <a style="width: 82px;height: 14px; text-align: left; margin-left: 10px;"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQoAAAC+CAMAAAD6ObEsAAAAqFBMVEX///8AAAD+/v75+fn7+/sDBQTe3t6+vr77/fz19fXY2NjU1NTu7u4FBwbr6+vy8vKvr6/l5eX6+v/FxcUcHBy7u7tEREQrKyszMzNkZGSFhYVNTU3MzMwVFRU9PT1XV1fAw/53d3eVlZXv8P8jIyNcXFyoqKjm5/+MjIwQEhGcnJx0dHTExv/P0v/U1v4oKCjp6v7f4P8VGxm6vf7Cxf/Lzf/a2/9pa2pJkag1AAASBUlEQVR4nO1diXraPNPVhsE2tjHGhH0LEJbQNH+b5P7v7J8ZyQKSdHnqx+ZtP52mDdgyWMezaUZSmS8dCD6TzIEgHRUFHBUWjgoLR4WFo8LCUWHhqLBwVFg4KiwcFRaOCgtHhYWjwsJRYeGosHBUWDgqLBwVFo4KC0eFhaPCwlFh4aiwcFRYOCosHBUWjgoLR4WFo8LCUWHhqLBwVFg4KiwcFRaOCgtHhYWjwsJRYeGosKiHClH8Evb1fw8VUyEEdl4o+IO/FPxSQhSnPgUTypyD34ouqQdVSwUyAb0Ruv/Eye91TcEfuuQ325dHHQpCBHiIBJ60agferxCjaLA2va6Ni+qpQPXwWYcD9h5ISNLnv0TPg8uYR687rCYuKlcQgGyx3PQKFH/3ayY4nytsuqXXzZq4qNxstgBsMuVRgy+ZkiyMeKPRMD1ufAI6zA8MLcwRXvNpyPAzKkfFVGAfFAueeCPiAx8N6BheNs5kfASegp8QuGDJHecRX6dM/f1UMAlcpDPqY4hCscWu/oQIQERczCR60wnRMovZP0AFMNEe46MFkZeKeWvoaYP/lApD1gjEQoFlQQmaJzWEZhVSQZGSbMkN9CbiQ4yW2Js2D3yYNX+Ezp3RkRykSKg5ycUQDEerYrdapVRgrMhaS3rMoO/QkZyeOYiI95PLwictHE+eACVJpyQXS205q+SiQiqg6xAn7Ug7wCOCyUwG+IShYyvW+izk1gE3C2Z3A0BvBCqlRK6txw5uVFQqF5XaCh0aoGEYUQC90+6Tz3zZ+mGfwP367QTRxgGIYkvtfbdVW4sqpQKEAh4p+E7e95U0IQUykzP1gwcMB1vK0iQV6hiEp8RFju+rullWrdkU6AtRKhrgR0HX0ZOgpXgjTVAizN6jCaEHNAwCGqYEYDaR0ZCu4/uJ+FupECrpabe5pVBrq4MrPk3NWHX+wY2OFQZTK/NuJIgKBVdGKFvrpNIQvFIFibWhAEuBVAwNFWNUD3Qum/dMPJGbmZh38wQ9iNDWIorA+CKHVd1txVIhliZiOgAXwrsju8HBf0iUiysqyIY0kSRvoG3r1MPQG8VghQdwDPPXehDolhybOKKJYWc41Z0EhUENATHRvrVhrOmK4su5NihkW9GB4PgeDkQwWq02o1VpiCUZSAKp+X7C/BZrctPpjJ2lApUm4hHGowJC8xWFEREMY3WcwSaRJnCQsr+WCnqmE247IlvsYN5FHnqQuRlxoCGgFtA+My3GfkunOdMnI0oTzBL/rVTQjW91Z7FvoCMjrkfoM3jELGw2szzb6fPQVdAOkCJuDAVRwZJCxTqVp9uqpUJBlLA0Ru+ISRw5JIWBsWbxxTCCJ2OKuRop0VCgBnXQzuJnHLXc8FH12ZtKbYVA2yl1sgZHEdAdn3oOT/kohA+2M+5r+R9ibIlDcvImSwgvYCjK9Bgd2Jmj/63sRjWqz22ydA2di+hRS1KByLhU8AgkJWhKYnQxeWEoEqwRABUdo11gR/7qfAWCIiQyheAUwI1gntMEEZj0heApotfgYJTmDH8C8hWiVTgPbTKrvE9E5VRgANExT3udspZ/6VIPaBIpBJOSNMmOu/CydH8Wp4q9B6JyKoiNkUlejZOWpDEGcTE4RNo9kEVloyKopHGrEu2+MTIjTIj99VKBAD8CD1xHUseWgE4vbf6fhu2D9tlQRLyPhgIuEW9kVNDZVDsiLVBHoRAdxYDMRYPciEBjyY0MUJ4fmAim2mtGHkXlAoWEDsxi9rt11nKop2aqo06SdtB72UoGthykh/DCHyMpFEqhRKB90acx11G5HyXUIxXgRDt6tIHGsgUu9cmYTjQNEm5haWRgutlsxoGwATiWTFU9XNRiK1D1Tcwd8aeAtSRKiS6I9LFmZn1MROkNxYKeYWJH0zL+FSpoUJUICKrRWkR8lmBQ3dGZjChEmry9rn1Q9+ctlmBMiqZlo1jerjRhc0Y9CpIu4cmC6dRjsSFWDykho02DoESuHqZGGHj6c1MhmyXA2SxhtXBRi4Kw5ZhM556yMuBGqNSFKa4lKg/TVSMtJuBPtLNtUA1diIwf65lVUMu0NM8MwTtF+o7SWGrMZ1JdHtanMKuhkTOqmuLF1d9kLVKBfVs3sYi649E+mu4jnqEwxPMARSbcR4g9IAIzCc7DvMYBG4bpZDurvsuapILG3kuMnYIwCMIwmKQ0yvApxI4ngUUIJjUNqVEYQIwpD1NORfV/hYqONgWbTlE1hiEHaoiv1HvvABb1XEP0DjOypPm/QgWF3ZqM6XyXeQl1nupeVBlSunhMhXIwpy0yDKIdbDc9yuPwN1XLLL16PMgk4ryYXxLN5stVHqaJ/NwWyqQ92e42A1Me4XyYVFv/sF9cS1zBgjGl+aPLqUdP4+FxtDtsO3kzm2TNvLM9rHbH+ez/ripmgy1N7638JuuhAk2k7PSLVP9PJ6Vx24pe9LdtvPyfoQIHIS0ms+PaFgUbOs5+NymrcUXUtH8IFA3xa8jbsBonNmOsnUwOm0H0Wc8b/EpY9nfDVZYqkxv9d6jQM/lbZjKV7+Wrt/ms9wPVWM82o0MzSJjOi2ou6kFtS2NaGvqN8lMvzA+70XG4Gfdng0F/DiZ0Owm82LcX1OM3zqhxlZChQWd+z4eVTJJE2tJXq1UvAWfUvWBKl8el3HbC+ONZP8gPsm5pKFD/2jGcwyhUBrZxNn/bUVSRUVSxG87WGGTXkej/DLeggmLu7HOzeSAa/keoKEAZvXeRFR/VU/L4FDejQn7kIuLziifW/OKObkSFUrpgaFfJcKr+1JTS/QTiZlSgQ9X1AF4EnL1Qh1U3uqHbUQF/1dIsGYowQYOT1W65HveWC7FBBDYXo7Mto4nMN8NNqVA460yLBSZ466kS/xA3XZ4P+hD3aSJagx/rqhL/EDelAqMtLCTDn7FU9WQwf4wbb9qAa4J6vMZJFD/Bf2D/igktvL6tciBuTgXOKokyKhD/LysIdV1JBtqh/Jtv8XFzqTBbndzaULD/AhX/GdRARbcr4C88+S7+MHptX8IphS+7XXOKfuiNbiS6+kj1UlM9FQ+LR3b/ffHAuov7hxNjr4uFEouvXx/h1Pdv9+zl+X6huo+LFzj17Qs7wc9iAe1Y99vXhxd2v1g8i+94fdWonIou9AT69/AIr74AFV8X9yAgi5f7F+gr9k9T8f1B4SlsyrqnE0qFWJyg/f03EIj7xXO32ttkNVDxdQGdeHyAHnUfH59P7PV0/9wV8PKFfX28fwapeDk9dtXjyzN7BcFAKugv8fWMUnH6ytj36oWiRipACb68nNiX01fQisXrywt7eLwHuX85nR7h3Os9+/KeimdoD026/wgVXZRtoyD3iy9gH7pIRXeBD/z+8cEqSBesilYQUpJXIb6BRKCC/CtUsGfqNJlNcToxcfq+QCpQBF7RGr48g+Cox+/w/rR4LahAE/EN28Olr38PFaaGQ2UvYebTiPM7cp7kTMExtoT2oEJ1hbDOVJC7pKZd3FAND2B7Rc5UYfsiBhP2S4upBnbKgdDLtv8UZakQZn25UFIvr6a1HPof9S5RSQewFGo3r6Apzy0akwr8TQVm2lFNtZSZnQSHFa1Wps9S9E0K94pS9G3KV+fPEmVW5Zajoui27exllU98yNnSFnrqYjROi+PMBntFc5qcpS4S39RLVvBK88X1rdN3K7vnHi3bLjHULy8V8NVp8zAajQ65p7C3stj+rf3uvqA3cYx3H6deqqH8lOYtMjpaPPh27EuVFmhD/2LPN3lPIZlKvDAMUy0ZqZeYy5ifen6JOQilpYL5+YbzwXg8wBlnK9Db9I7vpzhP9f2Wb0IE67tYCL/f05j2VDBde5jYE8wbRLlu5vd5zsK9aRQdGa4yypkxSKK9We855715B0j0N7hkG4UBa0xYSPnjzpSiAmU1nHM+8hLG/HDJeR93RPSauBHWiuaLXFHBAs5jaDlArgD7nkzWuD8BdjPDRWLQpiU8zlPcvwMaQCOcq6j6yKv5kPaaP/XHOLXrTeLeFtwj8RDJDOf/3kpBaH722NNFDVx0PcAJurgRGO7K8fGuLBW5b3azYRvcBweFegREtnCGCX4MbmXS86hRDB95TcUdz+Dr0h2tVZUzmuxLU8XXcZk1AmWoEDQDe9DWayFRRN6mMZk5ODz8bJqEpSIz3RJsxcd6slW/N5i2WzghZYnsABWxoP1ysJ/vqJgQezv+1MaFJb2YTCgKhbyNVGC6em1qWkJ79QkIKz4gEPbhZ1MDLqgojH7G1238hDSaD4khrQ0oFWmxUyv7SAVt4YkrJoQc0DJVluMGMKzEvMZyVBxBX5nesokecTLz6HjzN6kApHu9c2CTj1a0Xxbz+N67ooKJT6QCDidPZGdAnxIgdYxzM0SJdPEfU4FeK+WcOmWPqdSnm9RUfMQlFTooQbne4keseJ7DRRBlZbwviYpYxx1XUiEMFWAkVLtHy0ySAUpRBppaLmv+51JBOxNd70oklInCf4MKaq/39MHCGBvzIOBPaCtGaCo0Fdpdf0YFbo4EuhVjLHbgfSU3WHMtleoqoyCoH3126Sj0wOM3qGhK8iC45xdEA8BIez+QyR3HHTzGuO9q4UHgR36kAmcfsGSOK68gwAVFyQI+KGMyESUUBDUYt/uyRkEUE/B+TcWgj8Cp7HAsSlG+4ZM2KOnpFKIKpKIx6/dn/dks+EhFJpO42efjBM2UBOU67vi2zFAMUYYK6BIucdMLOy5P/JoKgxWGyzOQAuhNB70jBFlNEHeGtqJAyD54EIi8IojIfFqOy0S8hkC39Mr1EraCqHjDQABuQqargwYYjzMVZtBurjBUgPvberg8yov1nlDAyIYHKBpjRXwIMpuZF3heEPofnelgNnuiPWHIb6HNtedvQIWgcBjiI5ysDD0Kxnf0DDfxJRXvaj3vzKaOSA7AZ3v9BIPtmEOIRsMNVphNxtgncUUmknhLmy3qvIgHF5YuKv25VCgym+BBkAoafuPGorRp4qWC/IgKu1QK4rKBCoEOHKfxidw3aISqnSmFseKzuAJntQ1842E8CkLK8MBKO9MGp01bhL7nnh4aXUnFVS7lKq4o9jyJpxweMQUXS94JwSnhuSLEonUxn4VYDCxEdkVFSS5KhVgxLXxstfT9CHWHQ8ors4nTuWlVnN7vK+T7mGyMpkL/DwDgPbMlDzS3o45ZSqkVRAmdKOsbZaBv1VKhjYy2laggt5QKHXhPPTNXH7waUWFGaUP9lCQ70sBCZzpz8P4X0abZgXTED/07H1+FfDNCHWOFgpDRVUYqDHS0KdDrDC0VvVtTkYIP2YCxIEch3lGhJSeg+zYPdASt1VlBjLQ0+Xz6Rm3k/mkcpUK8M5viKq6INRUoewOTwQKpuKWtKDQBpJS2ZFESqfAo5ZYjQzpDeYyIHUrHBT10gOJiOEYjuZTjHkj0eXPwSVIYWxGbiE1pBVHmAi0VmC7DbaMMFTc1m3iXMHYCU7mkx0dRA9czicDP36V0sMPHOiW/Gx2WPT5LMEc94P3NHDHGET5mXzCU1oMyyuSQVDSgATbbpCgVA2iNyMxwTNB1HR3h3VoqyD2w4I3zp9Ukjb0tpvEgUEo6O5yoPBvtdqM5ZenwvinCnKFxFP6TjSS3JOlvvJdoKnI71D1HmzwQcnZxRdzTtgL1bVhIBU9LElE2oScx7A9HJpAevB0y8Bdhv09PE58h/EvCLERzdBzleh2xyPI8p53c85QOePlEmOVDzY7UUZOf2/3eIXqYFO/ylMksb+vILc4zPe7w86x8Zat0xhvvKUnDLAs9WgaIAaTSyyHxLs0+NdrHsI/DBMxFnhvYf68WCl1HrOaTWFEpKI6VRjkFEVf1m6JApEtVulKDpSw6p6tnJsA0S/IZlXqKXJVuVrBR/N9K2mza14IVH88uik72+jIoWRIyT9D0UI8pLm7Z9NX08XznxYMu+i2KnKSl5FIs3r05Lz4tPlBctfhTuGlpFo4KC0eFhaPCwlFh4aiwcFRYOCosHBUWjgoLR4WFo8LCUWHhqLBwVFg4KiwcFRaOCgtHhYWjwsJRYeGosHBUWDgqLBwVFo4KC0eFhaPCwlFh4aiwcFRYOCosHBUWjgoLR4WFo8LCUWHhqLBwVFg4KiwcFRaOCgtHhYWjwkIyXzoQ/P8H9bkK8pNEP2cAAAAASUVORK5CYII=">PNJ Store</a>
        </div>
    </div>
    <div id="top_panel">
        <div id="row1">
            <div id="logo">
                <img onclick="TroVeTrangChu()" src="./front/HinhAnh/logoxyz1.png" style="width: 252px; height: 60px;">
            </div>
            <form id="TimKiemForm"   action="{{ url('shop/timkiemtrangsuc') }}" method="GET">
            <div id="Tim_Kiem">
                <img src="./front/HinhAnh/search.png">

                
                <!-- <form id="TimKiemForm"   action="{{ url('shop/timkiemtrangsuc') }}" method="GET"> -->
                
                <input name="search" type="text" style="margin-top: 10px;" id="txtsearch"  placeholder="Tìm kiếm">
                <input type="submit" style="border: none;" id="btnsearch" name="fname" value="Tìm kiếm">
             
                
                <!-- </form> -->
                <a id="cart123" href="/cart" style="text-decoration: none;">
                Giỏ Hàng ({{ Cart::count() }})
                </a>
               
                <div id="Dang_Nhap_Va_Dang_Ky">
                    <a href="/account/login/" style="width: 83px;height:13px;">Đăng nhập</a>
                    <span style="text-align: right;padding-top: 17px;">|</span>
                    <a href="/account/register/" style="width: 65px;height:13px;">Đăng ký</a>
                </div>
            </div>
 </form>
        </div>
    </div>
    <div id="header1">
        <div id="header">
            <nav class="container">
                <ul id="main-menu">
                    <li>
                        <img src="./front/HinhAnh/icons8-list-50.png" style="width: 30px; height: 30px;margin-top: 7px;float: left;">
                        <a href="#" style="color: #f3f3f3;width: 150px; margin-left: 60px;">Trang Sức</a>
                        <ul class="sub-menu" style="display: block;border: 0;">
                            @foreach($menu as $theloaitrangsuc)
                            <li><a href="shop/danhmuctrangsuc/{{$theloaitrangsuc->MaTheLoaiTrangSuc}}">{{$theloaitrangsuc->TheLoaiTrangSuc}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </nav>
            <div id="Ho_Tro">
                <b><a><img src="./front/HinhAnh/phone-68-24.png" style="margin-right: 5px;">Hotline: 1900 6401</a></b>
                <span style="color: white;">|</span>
                <b><a href="#" id="Ho_Tro_Truc_Tuyen"><img src="./front/HinhAnh/speech-bubble-24.png" style="margin-right: 5px;">Hỗ trợ trực tuyến</a></b>
            </div>
        </div>
        <div id="header1_content">
            <a href="#"><img src="./front/HinhAnh/banner3.jpg" style="width: 903px; height: 373px; float: left;"></a>
            <a href="#"><img src="./front/HinhAnh/banner1.jpg" style="width: 300px; height: 186px;"></a>
            <a href="#"><img src="./front/HinhAnh/banner2.png" style="width: 300px; height: 186px;"></a>
            <a href="#"><img src="./front/HinhAnh/banner.jpg" style="width: 288px; height: 186px;"></a>
           
        </div>
    </div>
    <div id="wrapper">
        <div id="wrapper_content">
            <div class="mainbox-title" style="float: left;">
                <span>Trang Sức Mới</span>
            </div>
            <div class="mainbox_container">
                <div class="mainbox-title" style="width: 256px;height: 102px;">
                    <span>Trang Sức Bán Chạy</span>
                </div>
                <div class="TrangSucBanChay">
                    <div class="pic_thumb">
                        <img src="./front/HinhAnh/ts1.png">
                    </div>
                    <div class="info_book_r">
                        <div class="title_book_r">
                            <a href="#">
                            Lắc tay Vàng trắng 18K PNJ 0000W000866</a>
                        </div>
                        <div class="nhasanxuat">
                            <span>NCC1</span>
                        </div>
                        <div class="box_price_r">
                            <span style="color:#767676;display:inline;font-size:13px;float: left;padding-top: 20px;padding-left: 40px;"><strike>170.000đ</strike>
                            </span>
                            <b>
                                <span style="color:#c02026; margin-right: 5px;font-size: 15px;float:right;padding-top:20px;">145.000đ
                                </span>
                            </b>
                        </div>
                    </div>
                </div>
                <div class="TrangSucBanChay">
                    <div class="pic_thumb">
                        <img src="./front/HinhAnh/spmini3.png">
                    </div>
                    <div class="info_book_r">
                        <div class="title_book_r">
                            <a href="#">Nhẫn Vàng Đính Đá</a>
                        </div>
                        <div class="nhasanxuat">
                            <span>NSX C</span>
                        </div>
                        <div class="box_price_r">
                            <span style="color:#767676;display:inline;font-size:13px;float: left;padding-top: 20px;padding-left: 40px;"><strike>56.000đ</strike>
                            </span>
                            <b>
                                <span style="color:#c02026; margin-right: 5px;font-size: 15px;float:right;padding-top:20px;">45.000đ
                                </span>
                            </b>
                        </div>
                    </div>
                </div>
                <div class="TrangSucBanChay">
                    <div class="pic_thumb">
                        <img src="./front/HinhAnh/spmini2.png">
                    </div>
                    <div class="info_book_r">
                        <div class="title_book_r">
                            <a href="#">Bông Tai Giọt Nước</a>
                        </div>
                        <div class="nhasanxuat">
                            <span>NSX X</span>
                        </div>
                        <div class="box_price_r">
                            <span style="color:#767676;display:inline;font-size:13px;float: left;padding-top: 20px;padding-left: 40px;"><strike>45.000đ</strike>
                            </span>
                            <b>
                                <span style="color:#c02026; margin-right: 5px;font-size: 15px;float:right;padding-top:20px;">36.000đ
                                </span>
                            </b>
                        </div>
                    </div>
                </div>
                <div class="TrangSucBanChay">
                    <div class="pic_thumb">
                        <img src="./front/HinhAnh/spmini1.png">
                    </div>
                    <div class="info_book_r">
                        <div class="title_book_r">
                            <a href="#">Nhẫn mặt vương miện</a>
                        </div>
                        <div class="nhasanxuat">
                            <span>NSX A</span>
                        </div>
                        <div class="box_price_r">
                            <span style="color:#767676;display:inline;font-size:13px;float: left;padding-top: 20px;padding-left: 40px;"><strike>45.000đ</strike>
                            </span>
                            <b>
                                <span style="color:#c02026; margin-right: 5px;font-size: 15px;float:right;padding-top:20px;">36.000đ
                                </span>
                            </b>
                        </div>
                    </div>
                </div>
            
               
            </div>

            <div class="book_best_sale" style="background-color: #FFEBEE;">
                <div class="img_thumb">
                    <img class="item-photo" id="item-photo" src="./front/HinhAnh/tst.png">
                </div>
                <div class="text_content_best_sale">
                    <div class="title_best_sale">
                        <div class="oject_best_sale">
                            <a href="#" class="product-name" id="product-name">Lắc tay Vàng trắng Ý 18K PNJ 0000W000866</a>
                        </div>
                        <span>Mã: GL0000W000866</span>
                    </div>
                    <div class="text_info_best_sale">
                        <span>Vàng trắng, với vẻ đẹp mềm mại và sáng bóng, tạo ra một dấu ấn đặc biệt và thu hút ánh nhìn. Chiếc lắc tay vàng trắng không chỉ là một món đồ trang sức, mà còn là biểu tượng của sự tinh tế và quý phái, thể hiện phong cách và cá tính của người đeo.

Với sự kết hợp tinh tế giữa vàng và các đá quý quý hiếm, lắc tay vàng trắng là một biểu tượng của sự sang trọng và lịch lãm. Được chế tác tỉ mỉ bởi những nghệ nhân tài ba, mỗi chiếc lắc tay là một tác phẩm nghệ thuật độc đáo, mang lại vẻ đẹp lôi cuốn và quyến rũ cho người đeo..</span>
                        <br>
                        <span>...........................................................................................................................................</span>
                    </div>
                    <div class="book_buy_best_sale">
                        <div class="box_sale_off">
                            <b>-10%</b>
                        </div>
                        <div class="box_old_price">
                            <span style="width: 69px; height: 17px;color: black; font-size: 15px;"><strike>1.200.000đ</strike></span>
                        </div>
                        <div class="box_price">
                            <span class="new-price" style="width: 89px; height: 18px; color: black; font-size: 17px;margin-top: -30px;">1.080.000đ</span>
                            <span id="product_price" style="opacity: 0;">1080000</span>
                        </div>
                        <div class="add_to_cart">

                            <input type="button" class="button_cart" name="fname" onclick="themvaogiohangCH1('item-photo','product-name','product_price','soSP1'); tuCongSoLuong(); tuCongSoTien('product_price');" value="Mua ngay">
                        </div>
                        <a href="" style="opacity: 0;width: 1px;height: 1px;" id="soSP1">1</a>
                    </div>
                </div>
            </div>

            <div class="mainbox-title">
                <span>Nhẫn</span>
                <a href="#" class="read_more">Xem thêm ></a>
            </div>
            <div class="box_info_wrapper">

            @foreach($Nhan->take(6) as $trangsuc)
                <div class="box_info_book" style="float: left;margin-left: 10px;">
                    <img src="{{$trangsuc->AnhTrangSuc->first()->Anh}}">
                    <div class="text_info_book">
                        <div class="box_title_book">
                            <a href="shop/trangsuc/{{$trangsuc->MaTrangSuc}}" class="product_title">{{$trangsuc->TenTrangSuc}}</a>
                            <span style="width: 151px; height: 19px;font-size: 12px; text-align:left;">{{$trangsuc->NhaCungCap->TenNhaCungCap}}</span>
                            <span>_____________________</span>
                        </div>
                        <div class="text_content_book">
                            <a href="shop/trangsuc/{{$trangsuc->MaTrangSuc}}">Giá sản phẩm thay đổi tuỳ trọng lượng vàng và đá.

Đổi sản phẩm trong 48h tại hệ thống cửa hàng PNJ</a>
                    
                        </div>
                        <div class="box_info_price">
                            <div class="box_price">

                            </div>
                            <div class="price">

                                <b>
                                    <span style="color:#c02026; margin-right: 10px;font-size: 15px;float:right;padding-top:20px; padding-left: 20px;">{{$trangsuc->GiaTrangSuc}}đ
                                    </span>
                                </b>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>  

        </div>
        <div id="wrapper_content">
            <div class="mainbox_container">
                <div class="mainbox-title" style="width: 256px;height: 102px;">
                    <span>Trang Sức Liên Quan</span>
                </div>
                <div class="TrangSucBanChay">
                    <div class="pic_thumb">
                        <img src="./front/HinhAnh/spmini4.png">
                    </div>
                    <div class="info_book_r">
                        <div class="title_book_r">
                            <a href="#">Nhẫn Ngọc Đen</a>
                        </div>
                        <div class="nhasanxuat">
                            <span>NSX A</span>
                        </div>
                        <div class="box_price_r">
                            <span style="color:#767676;display:inline;font-size:13px;float: left;padding-top: 20px;padding-left: 40px;"><strike>360.000đ</strike>
                            </span>
                            <b>
                                <span style="color:#c02026; margin-right: 5px;font-size: 15px;float:right;padding-top:20px;">306.000đ
                                </span>
                            </b>
                        </div>
                    </div>
                </div>
                <div class="TrangSucBanChay">
                    <div class="pic_thumb">
                        <img src="./front/HinhAnh/spmini5.png">
                    </div>
                    <div class="info_book_r">
                        <div class="title_book_r">
                            <a href="#">Nhẫn Ngọc Trắng</a>
                        </div>
                        <div class="nhasanxuat">
                            <span>NSX B</span>
                        </div>
                        <div class="box_price_r">
                            <span style="color:#767676;display:inline;font-size:13px;float: left;padding-top: 20px;padding-left: 40px;"><strike>270.000đ</strike>
                            </span>
                            <b>
                                <span style="color:#c02026; margin-right: 5px;font-size: 15px;float:right;padding-top:20px;">202.000đ
                                </span>
                            </b>
                        </div>
                    </div>
                </div>
                <div class="TrangSucBanChay">
                    <div class="pic_thumb">
                        <img src="./front/HinhAnh/spmini6.png">
                    </div>
                    <div class="info_book_r">
                        <div class="title_book_r" style="height: 18px;">
                            <a href="#">Nhẫn Ngọc Trai</a>
                        </div>
                        <div class="nhasanxuat">
                            <span>NSX C</span>
                        </div>
                        <div class="box_price_r">
                            <span style="color:#767676;display:inline;font-size:13px;float: left;padding-top: 20px;padding-left: 40px;"><strike>95.000đ</strike>
                            </span>
                            <b>
                                <span style="color:#c02026; margin-right: 5px;font-size: 15px;float:right;padding-top:20px;">72.000đ
                                </span>
                            </b>
                        </div>
                    </div>
                </div>
                <div class="TrangSucBanChay">
                    <div class="pic_thumb">
                        <img src="./front/HinhAnh/spmini7.png">
                    </div>
                    <div class="info_book_r">
                        <div class="title_book_r">
                            <a href="#">Nhẫn Vàng 24k</a>
                        </div>
                        <div class="nhasanxuat">
                            <span>NSX D</span>
                        </div>
                        <div class="box_price_r">
                            <span style="color:#767676;display:inline;font-size:13px;float: left;padding-top: 20px;padding-left: 40px;"><strike>168.000đ</strike>
                            </span>
                            <b>
                                <span style="color:#c02026; margin-right: 5px;font-size: 15px;float:right;padding-top:20px;">143.000đ
                                </span>
                            </b>
                        </div>
                    </div>
                </div>

            </div>
       
            <div class="book_best_sale" style="background-color: #FFF9C4;">
                <div class="img_thumb">
                    <img id="item-photo1" src="./front/HinhAnh/sp1.png" class="item-photo" style="width: 210px; height: 210px;">
                </div>
                <div class="text_content_best_sale">
                    <div class="title_best_sale">
                        <div class="oject_best_sale">
                            <a id="product-name1" href="#" class="product-name">Nhẫn Đính đá hình bướm</a>
                        </div>
                        <span>Mã: GL0000W000123</span>
                    </div>
                    <div class="text_info_best_sale">
                        <span>Trang sức kim cương hình bướm là biểu tượng của sự tinh tế và thanh lịch. Với thiết kế độc đáo, những viên kim cương lấp lánh được xếp thành hình cánh bướm, trang sức này mang đến vẻ đẹp rạng ngời và thuần khiết. Đây là món quà hoàn hảo để tôn vinh vẻ đẹp nữ tính và quý phái của người phụ nữ, biến mỗi khoảnh khắc trở nên đặc biệt và đáng nhớ.</span>
                        <br>
                       
                    </div>
                    <div class="book_buy_best_sale">
                        <div class="box_sale_off">
                        <b>-30%</b>
                        </div>
                        <div class="box_old_price">
                            <span style="width: 69px; height: 17px;color: black; font-size: 15px;"><strike>1.200.000đ</strike></span>
                        </div>
                    
                  
                        <div class="box_price">
                        <span class="new-price" style="width: 69px; height: 17px;color: black; font-size: 20px;">950.000đ</span>
                            <span id="product_price1" style="opacity: 0;">950.000</span>
                        </div>
                        <div class="add_to_cart">
                            <input type="button" class="button_cart" name="fname" onclick="themvaogiohangCH1('item-photo1','product-name1','product_price1','soSP2'); tuCongSoLuong(); tuCongSoTien('product_price1');" value="Mua ngay">
                        </div>
                        <a href="" style="opacity: 0;width: 1px;height: 1px;" id="soSP2">1</a>
                    </div>
                </div>
            </div>
            <div class="mainbox-title">
                <span>Vòng Tay</span>
                <a href="#" class="read_more">Xem thêm ></a>
            </div>
            <div class="box_info_wrapper">
                @foreach($VongTay as $trangsuc)
                <div class="box_info_book" style="float: left;margin-left: 10px;">
                    <img src="{{$trangsuc->AnhTrangSuc->first()->Anh}}">
                    <div class="text_info_book">
                        <div class="box_title_book">
                            <a href="shop/trangsuc/{{$trangsuc->MaTrangSuc}}" class="product_title">{{$trangsuc->TenTrangSuc}}</a>
                            <span style="width: 151px; height: 19px;font-size: 12px; text-align:left;">{{$trangsuc->NhaCungCap->TenNhaCungCap}}</span>
                            <span>_____________________</span>
                        </div>
                        <div class="text_content_book">
                            <a href="shop/trangsuc/{{$trangsuc->MaTrangSuc}}">Giá sản phẩm thay đổi tuỳ trọng lượng vàng và đá.

Đổi sản phẩm trong 48h tại hệ thống cửa hàng PNJ</a>
                         
                        </div>
                        <div class="box_info_price">
                            <div class="box_price">

                            </div>
                            <div class="price">

                                <b>
                                    <span style="color:#c02026; margin-right: 10px;font-size: 15px;float:right;padding-top:20px; padding-left: 20px;">{{$trangsuc->GiaTrangSuc}}đ
                                    </span>
                                </b>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div id="wrapper_content">
            <div class="mainbox_container">
                <div class="mainbox-title" style="width: 256px;height: 102px;">
                    <span>Trang Sức Mới</span>
                </div>
                <div class="TrangSucBanChay">
                    <div class="pic_thumb">
                        <img src="./front/HinhAnh/spmini9.png">
                    </div>
                    <div class="info_book_r">
                        <div class="title_book_r">
                            <a href="#">Nhẫn Đính RuBy</a>
                        </div>
                        <div class="nhasanxuat">
                            <span>NSX A</span>
                        </div>
                        <div class="box_price_r">
                            <span style="color:#767676;display:inline;font-size:13px;float: left;padding-top: 20px;padding-left: 40px;"><strike>128.000đ</strike>
                            </span>
                            <b>
                                <span style="color:#c02026; margin-right: 5px;font-size: 15px;float:right;padding-top:20px;">109.000đ
                                </span>
                            </b>
                        </div>
                    </div>
                </div>
                <div class="TrangSucBanChay">
                    <div class="pic_thumb">
                        <img src="./front/HinhAnh/spmini11.png">
                    </div>
                    <div class="info_book_r">
                        <div class="title_book_r" style="height: 18px;">
                            <a href="#">Nhẫn Nam Vàng</a>
                        </div>
                        <div class="nhasanxuat">
                            <span>NSX ABC</span>
                        </div>
                        <div class="box_price_r">
                            <span style="color:#767676;display:inline;font-size:13px;float: left;padding-top: 20px;padding-left: 40px;"><strike>218.000đ</strike>
                            </span>
                            <b>
                                <span style="color:#c02026; margin-right: 5px;font-size: 15px;float:right;padding-top:20px;">174.000đ
                                </span>
                            </b>
                        </div>
                    </div>
                </div>
                <div class="TrangSucBanChay">
                    <div class="pic_thumb">
                        <img src="./front/HinhAnh/spmini12.png">
                    </div>
                    <div class="info_book_r">
                        <div class="title_book_r" style="height: 18px;">
                            <a href="#">Nhẫn Đôi Bạc</a>
                        </div>
                        <div class="nhasanxuat">
                            <span>NSX 8</span>
                        </div>
                        <div class="box_price_r">
                            <span style="color:#767676;display:inline;font-size:13px;float: left;padding-top: 20px;padding-left: 40px;"><strike>148.000đ</strike>
                            </span>
                            <b>
                                <span style="color:#c02026; margin-right: 5px;font-size: 15px;float:right;padding-top:20px;">118.000đ
                                </span>
                            </b>
                        </div>
                    </div>
                </div>
                <div class="TrangSucBanChay">
                    <div class="pic_thumb">
                        <img src="./front/HinhAnh/spmini13.png">
                    </div>
                    <div class="info_book_r">
                        <div class="title_book_r">
                            <a href="#">Nhẫn Bạc Trắng</a>
                        </div>
                        <div class="nhasanxuat">
                            <span>NSX 7</span>
                        </div>
                        <div class="box_price_r">
                            <span style="color:#767676;display:inline;font-size:13px;float: left;padding-top: 20px;padding-left: 40px;"><strike>90.000đ</strike>
                            </span>
                            <b>
                                <span style="color:#c02026; margin-right: 5px;font-size: 15px;float:right;padding-top:20px;">77.000đ
                                </span>
                            </b>
                        </div>
                    </div>
                </div>
               
       
             
             
            </div>
            <div class="mainbox-title">
    <span>Trang Sức Nổi Bật</span>
</div>
<div class="book_best_sale" style="background-color: #E0F7FA;">
    <div class="img_thumb">
        <img id="item-photo2" class="item-photo" src="./front/HinhAnh/tsnb2.png">
    </div>
    <div class="text_content_best_sale">
        <div class="title_best_sale">
            <div class="oject_best_sale">
                <a id="product-name2" href="#" class="product-name">Dây Chuyền Vàng Đính Đá</a>
            </div>
            <span>Mã: GL0000W000281</span>
        </div>
        <div class="text_info_best_sale">
            <span>Trang sức mặt dây chuyền vàng là biểu tượng của sự sang trọng và quý phái. Với chất liệu vàng lấp lánh, mặt dây chuyền này không chỉ tôn lên vẻ đẹp tinh tế mà còn thể hiện đẳng cấp của người đeo. Được chế tác tỉ mỉ, từng chi tiết nhỏ đều toát lên sự hoàn mỹ và thanh lịch. Đây là món trang sức hoàn hảo để làm quà tặng, mang lại may mắn và thể hiện tình cảm chân thành đối với người nhận.</span>
            <br>
            
        </div>
        <div class="book_buy_best_sale">
            <div class="box_sale_off">
                <b>-30%</b>
            </div>
            <div class="box_old_price">
                <span style="width: 69px; height: 17px;color: black; font-size: 15px;"><strike>106.800đ</strike></span>
            </div>
            <div class="box_price">
                <span class="new-price" style="width: 89px; height: 18px; color: black; font-size: 17px;">74.760đ</span>
                <span id="product_price2" style="opacity: 0;">74760</span>
            </div>
            <div class="add_to_cart">
                <input type="button" class="button_cart" name="fname" onclick="themvaogiohangCH1('item-photo2','product-name2','product_price2','soSP3'); tuCongSoLuong(); tuCongSoTien('product_price2');" value="Mua ngay">
            </div>
            <a href="" style="opacity: 0;width: 1px;height: 1px;" id="soSP3">1</a>
        </div>
    </div>
</div>

            <div class="mainbox-title">
                <span>Lắc tay</span>
                <a href="#" class="read_more">Xem thêm ></a>
            </div>
            <div class="box_info_wrapper">
                @foreach($LacTay as $trangsuc)
                <div class="box_info_book" style="float: left;margin-left: 10px;">
                    <img src="{{$trangsuc->AnhTrangSuc->first()->Anh}}">
                    <div class="text_info_book">
                        <div class="box_title_book">
                            <a href="shop/trangsuc/{{$trangsuc->MaTrangSuc}}" class="product_title">{{$trangsuc->TenTrangSuc}}</a>
                            <span style="width: 151px; height: 19px;font-size: 12px; text-align:left;">{{$trangsuc->NhaCungCap->TenNhaCungCap}}</span>
                            <span>_____________________</span>
                        </div>
                        <div class="text_content_book">
                            <a href="shop/trangsuc/{{$trangsuc->MaTrangSuc}}">Giá sản phẩm thay đổi tuỳ trọng lượng vàng và đá.

Đổi sản phẩm trong 48h tại hệ thống cửa hàng PNJ</a>
                        
                        </div>
                        <div class="box_info_price">
                            <div class="box_price">

                            </div>
                            <div class="price">

                                <b>
                                    <span style="color:#c02026; margin-right: 10px;font-size: 15px;float:right;padding-top:20px; padding-left: 20px;">{{$trangsuc->GiaTrangSuc}}đ
                                    </span>
                                </b>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="mainbox_container">
                <div class="mainbox-title" style="width: 256px;height: 102px;">
                    <span>Trang Sức Trẻ Em</span>
                </div>
                <div class="TrangSucBanChay">
                    <div class="pic_thumb">
                        <img src="./front/HinhAnh/spmini15.png">
                    </div>
                    <div class="info_book_r">
                        <div class="title_book_r">
                            <a href="#">Bông tai con ong</a>
                        </div>
                        <div class="nhasanxuat">
                            <span>NSX N</span>
                        </div>
                        <div class="box_price_r">
                            <span style="color:#767676;display:inline;font-size:13px;float: left;padding-top: 20px;padding-left: 40px;"><strike>48.000đ</strike>
                            </span>
                            <b>
                                <span style="color:#c02026; margin-right: 5px;font-size: 15px;float:right;padding-top:20px;">43.000đ
                                </span>
                            </b>
                        </div>
                    </div>
                </div>
                <div class="TrangSucBanChay">
                    <div class="pic_thumb">
                        <img src="./front/HinhAnh/spmini16.png">
                    </div>
                    <div class="info_book_r">
                        <div class="title_book_r">
                            <a href="#">Vòng tay con ong</a>
                        </div>
                        <div class="nhasanxuat">
                            <span>NSX N</span>
                        </div>
                        <div class="box_price_r">
                            <span style="color:#767676;display:inline;font-size:13px;float: left;padding-top: 20px;padding-left: 40px;"><strike>48.000đ</strike>
                            </span>
                            <b>
                                <span style="color:#c02026; margin-right: 5px;font-size: 15px;float:right;padding-top:20px;">43.000đ
                                </span>
                            </b>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mainbox-title">
                <span>Trang Sức Nổi Bật</span>
            </div>
            <div class="book_nhasanxuat">
                <div class="flex_wrapper">
                    <div class="img_thumb" style="width: 242px; height: 212px;">
                        <img src="./front/HinhAnh/tsnb.png" style="width: 210px; height: 210px;">
                    </div>
                    <div class="text_content_nhasanxuat">
                        <div class="title_nhasanxuat">
                            <u><a href="#">Nguyên Phong</a></u>
                        </div>
                        <div class="text_info_nhasanxuat">
                            <span>Nguyên Phong tên thật là Vũ Văn Du, sinh năm 1950 tại Hà Nội. Năm 1968, ông rời khỏi
                                Việt Nam,
                                sang Hoa Kỳ du học hai nghành Sinh vật học và Điện toán, sau đó ông sống và làm việc tại
                                Hoa Kỳ
                                cho đến nay.Bên cạnh vai trò là một nhà khoa học, Nguyên Phong còn là dịch giả của hàng
                                loạt sách
                                về văn hóa và tâm linh phương Đông rất nổi tiếng. Trong số đó, có thể kể đến: Hành Trình
                                Về Phương
                                Đông, Ngọc Sáng Trong Hoa Sen, Bên Rặng Tuyết Sơn, Hoa Sen Trên Tuyết, Hoa Trôi Trên
                                Sóng Nước,
                                Trở Về Từ Xứ Tuyết, Minh Triết Trong Đời Sống Ăn Uống, Đường Mây Qua Xứ Tuyết…</span>
                            <a href="#">Xem thêm</a>
                        </div>
                    </div>
                </div>
                <div class="more_nhasanxuat">
                    <div class="span_4">
                        <img src="./front/HinhAnh/tsnbmini1.png">
                        <a href="#">Nhỏ gọn, xinh xắn</a>
                    </div>
                    <div class="span_4">
                        <img src="./front/HinhAnh/tsnbmini.png" style="width: 64px; height: 64px;">
                        <a href="#">Nhẫn Kim Cương mặt đá.</a>
                    </div>
                    <div class="span_4">
                        <img src="./front/HinhAnh/tsnbmini2.png" style="width: 64px; height: 27px;">
                        <a href="#">Thiết Kế Sang Trọng</a>
                    </div>
                </div>
            </div>

            <div class="mainbox-title">
                <span>Vòng cổ</span>
                <a href="#" class="read_more">Xem thêm ></a>
            </div>
            <div class="box_info_wrapper">
                @foreach($VongCo as $trangsuc)
                <div class="box_info_book" style="float: left;margin-left: 10px;">
                    <img src="{{$trangsuc->AnhTrangSuc->first()->Anh}}">
                    <div class="text_info_book">
                        <div class="box_title_book">
                            <a href="shop/trangsuc/{{$trangsuc->MaTrangSuc}}" class="product_title">{{$trangsuc->TenTrangSuc}}</a>
                            <span style="width: 151px; height: 19px;font-size: 12px; text-align:left;">{{$trangsuc->NhaCungCap->TenNhaCungCap}}</span>
                            <span>_____________________</span>
                        </div>
                        <div class="text_content_book">
                        <a href="shop/trangsuc/{{$trangsuc->MaTrangSuc}}">Giá sản phẩm thay đổi tuỳ trọng lượng vàng và đá. Đổi sản phẩm trong 48h tại hệ thống cửa hàng PNJ</a>
                          
                        </div>
                        <div class="box_info_price">
                            <div class="box_price">

                            </div>
                            <div class="price">

                                <b>
                                    <span style="color:#c02026; margin-right: 10px;font-size: 15px;float:right;padding-top:20px; padding-left: 20px;">{{$trangsuc->GiaTrangSuc}}đ
                                    </span>
                                </b>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="mainbox_container">
                <div class="mainbox-title" style="width: 256px;height: 102px;">
                    <a href="https://www.facebook.com/minh.tnm" id="fb_vinabook">PNJ Store</a>
                </div>
                <div class="TrangSucBanChay" style="width: 276px;height: 292px;">
                    <img src="./front/HinhAnh/banner5.jpg" style="width: 276px;height: 292px;">
                </div>
                <div class="TrangSucBanChay" style="width: 276px;height: 292px;">
                    <img src="./front/HinhAnh/banner6.jpg" style="width: 276px;height: 292px;">
                </div>
            </div>
            <div class="mainbox-title">
                <span>Nhẫn Cưới</span>
                <a href="#" class="read_more">Xem thêm ></a>
            </div>
            <div class="box_info_wrapper">
                @foreach($NhanCuoi as $trangsuc)
                <div class="box_info_book" style="float: left;margin-left: 10px;">
                    <img src="{{$trangsuc->AnhTrangSuc->first()->Anh}}">
                    <div class="text_info_book">
                        <div class="box_title_book">
                            <a href="shop/trangsuc/{{$trangsuc->MaTrangSuc}}" class="product_title">{{$trangsuc->TenTrangSuc}}</a>
                            <span style="width: 151px; height: 19px;font-size: 12px; text-align:left;">{{$trangsuc->NhaCungCap->TenNhaCungCap}}</span>
                            <span>_____________________</span>
                        </div>
                        <div class="text_content_book">
                            <a href="shop/trangsuc/{{$trangsuc->MaTrangSuc}}">Giá sản phẩm thay đổi tuỳ trọng lượng vàng và đá. Đổi sản phẩm trong 48h tại hệ thống cửa hàng PNJ</a>
                      
                        </div>
                        <div class="box_info_price">
                            <div class="box_price">

                            </div>
                            <div class="price">

                                <b>
                                    <span style="color:#c02026; margin-right: 10px;font-size: 15px;float:right;padding-top:20px; padding-left: 20px;">{{$trangsuc->GiaTrangSuc}}đ
                                    </span>
                                </b>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
         
            <div class="mainbox-title">
                <span>Dây chuyền</span>
                <a href="#" class="read_more">Xem thêm ></a>
            </div>
            <div class="box_info_wrapper">
                @foreach($DayChuyen as $trangsuc)
                <div class="box_info_book" style="float: left;margin-left: 10px;">
                    <img src="{{$trangsuc->AnhTrangSuc->first()->Anh}}">
                    <div class="text_info_book">
                        <div class="box_title_book">
                            <a href="shop/trangsuc/{{$trangsuc->MaTrangSuc}}" class="product_title">{{$trangsuc->TenTrangSuc}}</a>
                            <span style="width: 151px; height: 19px;font-size: 12px; text-align:left;">{{$trangsuc->NhaCungCap->TenNhaCungCap}}</span>
                            <span>_____________________</span>
                        </div>
                        <div class="text_content_book">
                            <a href="shop/trangsuc/{{$trangsuc->MaTrangSuc}}">Giá sản phẩm thay đổi tuỳ trọng lượng vàng và đá. Đổi sản phẩm trong 48h tại hệ thống cửa hàng PNJ</a>
       
                        </div>
                        <div class="box_info_price">
                            <div class="box_price">

                            </div>
                            <div class="price">

                                <b>
                                    <span style="color:#c02026; margin-right: 10px;font-size: 15px;float:right;padding-top:20px; padding-left: 20px;">{{$trangsuc->GiaTrangSuc}}đ
                                    </span>
                                </b>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="mainbox-title">
                <span>Bông Tai</span>
                <a href="#" class="read_more">Xem thêm ></a>
            </div>
            <div class="box_info_wrapper">
                @foreach($BongTai as $trangsuc)
                <div class="box_info_book" style="float: left;margin-left: 10px;">
                    <img src="{{$trangsuc->AnhTrangSuc->first()->Anh}}">
                    <div class="text_info_book">
                        <div class="box_title_book">
                            <a href="shop/trangsuc/{{$trangsuc->MaTrangSuc}}" class="product_title">{{$trangsuc->TenTrangSuc}}</a>
                            <span style="width: 151px; height: 19px;font-size: 12px; text-align:left;">{{$trangsuc->NhaCungCap->TenNhaCungCap}}</span>
                            <span>_____________________</span>
                        </div>
                        <div class="text_content_book">
                            <a href="shop/trangsuc/{{$trangsuc->MaTrangSuc}}">Giá sản phẩm thay đổi tuỳ trọng lượng vàng và đá.

Đổi sản phẩm trong 48h tại hệ thống cửa hàng PNJ</a>
                  
                        </div>
                        <div class="box_info_price">
                            <div class="box_price">

                            </div>
                            <div class="price">

                                <b>
                                    <span style="color:#c02026; margin-right: 10px;font-size: 15px;float:right;padding-top:20px; padding-left: 20px;">{{$trangsuc->GiaTrangSuc}}đ
                                    </span>
                                </b>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>
    <div id="footer">
        <div id="tygh_footer">
            <div id="news_letter">
                <label>ĐĂNG KÝ NHẬN EMAIL
                    <span>Đăng ký nhận thông tin mới nhất về trang sức bạn thích!</span></label>
                <div id="input_group">
                    <input type="text" id="Ten_Cua_Ban" name="Ten_Cua_Ban" placeholder="Tên của bạn">
                    <input type="text" id="Email_Cua_Ban" name="Email_Cua_Ban" placeholder="Nhập email của bạn">
                    <select id="Chon_The_Loai_Sach">
                        <option value="0">Thể loại yêu thích</option>
                        <option value="1">Tất cả</option>
                        <option value="2">Nhẫn</option>
                        <option value="3">Vòng Tay</option>
                        <option value="4">Vòng Cổ</option>
                        <option value="5">Bông Tai</option>
                        <option value="6">Dây Chuyền</option>
                        <option value="7">Lắc Tay</option>
                        <option value="8">Mặt Đá</option>
                        <option value="9">Trang Sức Cho Bé</option>
              
                    </select>
                    <input type="button" id="Dang_Ky_Ngay" name="fname" value="ĐĂNG KÝ NGAY">
                </div>
            </div>
            <div id="row_foot">
                <div id="span5_footer">
                    <div id="span4">
                        <span>VỀ CÔNG TY</span><br>
                        <a href="#">Giới thiệu công ty</a>
                        <a href="#">Tuyển dụng</a>
                        <a href="#">Góc báo chí</a>
                        <a href="#">Chương trình đại lý</a>
                        <a href="#">Chính sách bảo mật</a>
                        <a href="#">Chính sách đổi trả</a>
                    </div>
                    <div id="span4">
                        <span>TRỢ GIÚP</span><br>
                        <a href="#">Quy định sử dụng</a>
                        <a href="#">Hướng dẫn mua hàng</a>
                        <a href="#">Phương thức thanh toán</a>
                        <a href="#">Phương thức vận chuyển</a>
                        <a href="#">Các câu hỏi thường gặp</a>
                        <a href="#">Ứng dụng đọc ebook</a>
                    </div>
                    <div id="span4">
                        <span style="width: 105px;">TIN TỨC SÁCH</span><br>
                        <a href="#">Tin tức</a>
                        <a href="#">Chân dung</a>
                        <a href="#">Điểm sách</a>
                        <a href="#">Phê bình</a>
                    </div>
                    <div id="Tai_Ung_Dung">
                        <span>TẢI ỨNG DỤNG TRÊN ĐIỆN THOẠI</span>
                        <img src="./front/HinhAnh/icon-appstore.png">
                        <img src="./front/HinhAnh/icon-googleplay.png" style="margin-left: 10px;">
                    </div>
                </div>
                <div id="span7_footer">
                    <div class="span8">
                        <span>CHẤP NHẬN THANH TOÁN</span>
                        <img src="./front/HinhAnh/visa.jpg">
                        <img src="./front/HinhAnh/master_card.jpg">
                        <img src="./front/HinhAnh/jcb.jpg">
                        <img src="./front/HinhAnh/atm.jpg">
                        <img src="./front/HinhAnh/cod.jpg">
                        <img src="./front/HinhAnh/payoo.jpg">
                        <span style="margin-top: 10px;">THANH TOÁN AN TOÀN</span>
                        <img src="./front/HinhAnh/verify_visa.jpg">
                        <img src="./front/HinhAnh/mastercard_securecode.jpg">
                        <img src="./front/HinhAnh/onepay.jpg">
                    </div>
                    <div class="span8">
                        <span>ĐỐI TÁC VẬN CHUYỂN</span>
                        <img src="./front/HinhAnh/logovnb.png">
                        <img src="./front/HinhAnh/vn-post.jpg">
                        <img src="./front/HinhAnh/dhl.jpg" style="width: 184px;height: 52px;">
                    </div>
                    <div class="span8">
                        <span>ĐỐI TÁC BÁN HÀNG</span>
                        <img src="./front/HinhAnh/lazada.jpg">
                        <img src="./front/HinhAnh/shopee.jpg">
                        <img src="./front/HinhAnh/amazon.jpg">
                    </div>
                </div>
            </div>
       
            <div id="copyright">
                <div id="row_fuild">
                    <img src="./front/HinhAnh/logo_so_cong_thuong.png" style="float: left;">
                    <div id="span13">
                        <p>CÔNG TY CỔ PHẦN THƯƠNG MẠI DỊCH VỤ TRANG SỨC QUỐC TẾ</p>
                        <span>Địa chỉ: 147 PHẠM NGŨ LÃO, thành phố Hải Dương</span><br>
                        <span>MST: 0123123123 do Sở Kế Hoạch Và Đầu Tư Tp.HCM cấp ngày 10/03/2011</span><br>
                        <span>Tel: 0288161281 - Fax: 0333222111 - Email: <a href="#">hotro@pnj.com</a></span>
                    </div>
                    <div id="span20">
                        <p>WEBSITE CÙNG HỆ THỐNG</p>
                        <img src="./front/HinhAnh/logo_hotdeal_2x.png" style="width: 152px;height: 22px;">
                        <img src="./front/HinhAnh/logo_yesgo_2x.png" style="width: 146px;height: 40px;">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="TrangChiTietSanPham.js">
    </script>
    <script src="index.js"></script>
    <script>
        gg = sessionStorage.getItem("tongSL123");
        tienmoi = sessionStorage.getItem("tongTienMoi");
        gg2 = sessionStorage.getItem("HTML123");
        if (gg == null) {} else {
            document.getElementById('soGioHang3').innerHTML = gg;
            sessionStorage.setItem("HTMLMoi", gg2);
            sessionStorage.setItem("TienMoiThayDoi", tienmoi);
        }
    </script>
</body>

</html>