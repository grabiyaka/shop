<footer id="footer"><!--Footer-->
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <p class="pull-left">Copyright © 2015</p>
                        <p class="pull-right">Курс PHP Start</p>
                    </div>
                </div>
            </div>
        </footer><!--/Footer-->

        <script src="template/js/jquery.js"></script>
        <script src="template/js/bootstrap.min.js"></script>
        <script src="template/js/jquery.scrollUp.min.js"></script>
        <script src="template/js/price-range.js"></script>
        <script src="template/js/jquery.prettyPhoto.js"></script>
        <script src="template/js/main.js"></script>
        <script>
             $(document).ready(function(){
                $(".add-to-cart").click(function () {
                    var id = $(this).attr("data-id");
                    $.post("/learning/php/practice/test2/cart/addAjax/"+id, {}, function (data) {
                        $("#cart-count").html(data);
                    });
                    return false;
                });
            });
        </script>
        <!-- <script>
            document.onload = function(){
                document.getElementsByClassName("add-to-cart").prevent.click(function() {
                    var id = document.getElementById('electriccars').dataset.id
                    console.log(id)
                    
                })
            }
        </script> -->
                
    </body>
</html>