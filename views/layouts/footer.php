      </div>
    </div>

</section>
<div class="page-buffer"></div>
</div>

<footer id="footer" class="page-footer"><!--Footer-->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 footer-top ">
                     <div class="logo">
                         <img src="/template/images/home/logo.png" alt="">
                     </div>
                </div>
                <div class="col-sm-12 footer-middle">
                    <div class="col-sm-3  f-contacts">
                        <div class="f-title col-md-12"><h3>Наши контакты</h3></div>

                                <ul class="f-phone">
                                    <li>050 524 44 12</li>
                                    <li>050 194 84 20</li>
                                    <li><a href="/contacts/">Обратная связь</a></li>
                                    <li></li>
                                </ul>

                        <div class="f-city col-md-12">
                            <h3>г.Киев</h3>
                            <p>ул. Такая Сякая</p>
                        </div>

                    </div>
                    <div class="col-sm-3 f-work">
                             <div class="f-title"><h3>График работы</h3></div>
                        <div class="f-text">
                            <span class="f-red">Пн - Пт:</span><br><strong>10</strong>:00 - <strong>19</strong>:00
                        </div>
                        <div class="f-text">
                            <span class="f-red">Сб:</span><br><strong>10</strong>:00 - <strong>16</strong>:00
                        </div>
                        <div class="f-text"><span class="f-red">Вс:</span><br>Выходной
                        </div>
                    </div>
                    <div class="col-sm-3 f-socials">
                        <div class="f-title"><h3>Наши представительства:</h3>
                        </div>
                        <div class="f-icons">
                            <a href="" class="f-google">Google+</a>
                            <a href="" class="f-facebook">FACEBOOK</a>
                            <a href="" class="f-vk">VK</a>
                            <a href="" class="f-instagram">Instagram</a>
                        </div>
                    </div>
                    <div class="col-sm-3 f-community">
                        <div class="f-title">
                            <h3>Коммуникации</h3>
                        </div>
                        <div class="f-text-links">
                            <a href="/blog">Блог</a>
                            <br>
                            <a href="/feedback">Отзывы</a>
                            <br>
                            <a href="#">Пресса о нас</a>
                            <br>
                            <a href="https://www.youtube.com/" target="_blank">YouTube</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 footer-bottom">
                    <div class="col-sm-6 map">

                    </div>
                    <div class="col-sm-6 f-logo">

                    </div>
                </div>


            </div>
        </div>
    </div>
</footer><!--/Footer-->



<script src="/template/js/jquery.js"></script>
<script src="/template/js/jquery.cycle2.min.js"></script>
<script src="/template/js/jquery.cycle2.carousel.min.js"></script>
<script src="/template/js/bootstrap.min.js"></script>
<script src="/template/js/jquery.scrollUp.min.js"></script>
<script src="/template/js/price-range.js"></script>
<script src="/template/js/jquery.prettyPhoto.js"></script>
<script src="/template/js/main.js"></script>
<script>
    $(document).ready(function(){
        $(".add-to-cart").click(function () {
            var id = $(this).attr("data-id");
            $.post("/cart/addAjax/"+id, {}, function (data) {
                $("#cart-count").html(data);
            });
            return false;
        });
    });
</script>

</body>
</html>