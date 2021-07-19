<?php
 include "databases.php";

$result = mysql_query($induction, "SELECT * FROM `myprodukts`");

$food = mysqli_fetch_assoc($result);
print_r($food);
?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Caramel-house</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style2.css">

</head>
<body>

    <nav class="button">
       <div class="button">
        <a class="home" href="index.html"><h1><i>Caramel-house</i></h1></a>
       </div>
    </nav>

    <div class="container">
       <h2><i>Десерты ручной работы</i></h2>
       <h3 class="catalog">Представляем вашему вниманию <br> <i><u>НАШ КАТАЛОГ</u></i></h3>
    </div>

    <div class="container-xxl">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <div class="row">

                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <img src="images/macaroon.jpg" class="card-img-top" alt="macaroon">
                                <div class="card-body">
                                    <h5 class="card-title">Макарунс</h5>
                                    <p class="card-text">Хрустящие снаружи и мягкие внутри. Собери свой макарунс. Внешний вид, цвет, начинку. Мы выполним все пожелания индивидуально для каждого клиента.</p>
                                    <h6 class="card-title">Цена за набор (12 шт): <br><b>980 р.</b></h6>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <img src="images/kapkieik3.jpg" class="card-img-top" alt="cupcake">
                                <div class="card-body">
                                    <h5 class="card-title">Капкейки</h5>
                                    <p class="card-text">Нежное мягкое тесто в сочетании с ягодной/фруктовой/шоколадной/ванильной начинкой и легким cream-cheese сверху никого не оставят равнодушным.</p>
                                    <h6 class="card-title">Цена за набор (6 шт): <br><b>850 р.</b></h6>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <img src="images/ekler_zavarnoi2.jpg" class="card-img-top" alt="ekler">
                                <div class="card-body">
                                    <h5 class="card-title">Эклеры</h5>
                                    <p class="card-text">Французский десерт. Легкое и воздушное пирожное из заварного теста с кремом внутри. На ваш вкус мы можем добавить различные начинки <br> и украшения.</p>
                                    <h6 class="card-title">Цена за набор (6 шт): <br><b>660 р.</b></h6>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <img src="images/mereng2.jpg" class="card-img-top" alt="merenga">
                                <div class="card-body">
                                    <h5 class="card-title">Меренговый рулет</h5>
                                    <p class="card-text">Нежное безе с хрустящим внешним слоем и мягкое внутри. Начинка из нежного сливочного/шоколадного/cheese-крема с добавлением различных ягод или орехов </p>
                                    <h6 class="card-title">Цена за набор (1 шт): <br><b>710 р.</b></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>


                <div class="carousel-item">
                    <div class="row">

                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <img src="images/konf (2).jpg" class="card-img-top" alt="konf">
                                <div class="card-body">
                                    <h5 class="card-title">Конфеты шоколадные</h5>
                                    <p class="card-text">Набор конфет ручной работы. Прекрасный подарок к любому поводу или просто лакомство к столу. Огромное разнообразие шоколадов и начинок. Выбери свою.</p>
                                    <h6 class="card-title">Цена за набор (25 шт): <br><b>510 р.</b></h6>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <img src="images/myss_obrez.jpg" class="card-img-top" alt="myss">
                                <div class="card-body">
                                    <h5 class="card-title">Пирожное муссовое</h5>
                                    <p class="card-text">Разнообразные муссовые чудеса, с огромным выбором начинки, внешнего вида, а так же цвета и украшений. <br>Собери свой идеальный набор пирожных.</p>
                                    <h6 class="card-title">Цена за набор (4 шт): <br><b>560 р.</b></h6>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <img src="images/kryassan.jpg" class="card-img-top" alt="kryassan">
                                <div class="card-body">
                                    <h5 class="card-title">Круассан</h5>
                                    <p class="card-text">Мягкие аппетитные булочки в форме полумесяца. Что может быть чудеснее, чем утро с чашечкой ароматного кофе и настоящим французским круассаном?</p>
                                    <h6 class="card-title">Цена за набор (2 шт): <br><b>320 р.</b></h6>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <img src="images/pirognoe_obrez.jpg" class="card-img-top" alt="pirognoe">
                                <div class="card-body">
                                    <h5 class="card-title">Пирожное бисквитное</h5>
                                    <p class="card-text">Небольшие, оригинальные, вкусные кондитерские изделия. Найдёте ли вы сегодня человека, который не любит сладкое?<br> Эти нежные угощения придутся по вкусу и взрослым, и детям.</p>
                                    <h6 class="card-title">Цена за набор (2 шт): <br><b>360 р.</b></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

              </div>
    </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>


    <div class="kont">
        <div class="telephone">
            <a><b>Наши контакты:</b></a>
            <a class="spisok" href="tel:+7-988-563-09-41">+7-988-563-09-41</a>
        </div>

        <div class="telephone">
            <a><b>Наше местоположение:</b></a>
            <a class="spisok" href="https://goo.gl/maps/ki1zsFKAb4t4gXLJ7">Rostovskaya obl.Novocherkassk</a>
        </div>
    </div>



    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>