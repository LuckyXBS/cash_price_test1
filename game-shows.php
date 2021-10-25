<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <title>CASH PRICE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/account.css">
	<link rel="stylesheet" href="css/indexcards.css">
	<link rel="icon" href="images/logo.png">
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <meta charset="UTF-8">
    <title><?php echo $fetch_info['name'] ?> | CASH PRICE</title>

</head>
<body>
    <header class="header">
            <a href="#" class="header__logo">Cash Price</a>

            <ion-icon name="menu-outline" class="header__toggle" id="nav-toggle"></ion-icon>

            <nav class="nav" id="nav-menu">
                <div class="nav__content bd-grid">

                    <ion-icon name="close-outline" class="nav__close" id="nav-close"></ion-icon>

                    <div class="nav__perfil" id="open-modal">
                        <div class="nav__img">
                            <img src="images/profile.png" alt="">
                        </div>

                        <div id="open-modal" style="margin-right: 200px;">
                            <a href="#" class="nav__name" id="open-modal"><?php echo $fetch_info['name'] ?></a>  
                        </div>
                    </div>

                    <div class="nav__menu" style=";margin-right: 200px;">
                        <ul class="nav__list">
                            <li class="nav__item"><a href="home.php" class="nav__link">Главная</a></li>
                            <li class="nav__item"><a href="faq.php" class="nav__link">FAQ</a></li>
                            <li class="nav__item"><a href="#" class="nav__link active">Игровые Шоу</a></li>
                            <li class="nav__item"><a href="contact.php" class="nav__link">Контакты</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <!-- ===== IONICONS ===== -->
        <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>

        <!--===== MAIN JS =====-->
        <script src="js/menu.js"></script>
		<div class="app" style="margin-top: 120px;">
		<center>
    <h1>Игровые Шоу</h1>
	<h3>Выберете в каком лобби вы будете учавствовать</h3>
	
	<div class="modal__container" id="modal-container">
                <div class="modal__content">
                    <div class="modal__close close-modal" title="Close">
                        <i class='bx bx-x'></i>
                    </div>

                    <img src="images/logo.png" alt="" class="modal__img">

                    <h1 class="modal__title" style="color:#fff;"><?php echo $fetch_info['name'] ?></h1>
                <a href="logout-user.php" class="nav__link" style="background:#ff3030;">Выйти с аккаунта</a></li>
                </div>
            </div>
        </section>
		<script src="js/account.js"></script>
		
				<div class="cards" style="margin-top: px;">
        <div class="card card1">
            <div class="container">
            </div>
            <div class="details">
			<img src="images/lobbyr.jpg" style="border-radius: 5px;">
                <h3>REGULAR Lobby</h3>
                <p>Стоимость : 100 RUR</p>
				<p>Выигрыш: 750 RUR</p>
				<p>Макс. Участников: 10</p>
            </div>
        </div>
        <div class="card card2">
            <div class="container">
            </div>
            <div class="details">
			<img src="images/lobbyr.jpg" style="border-radius: 5px;">
                <h3>GOLD Lobby</h3>
                <p>Стоимость : 500 RUR</p>
				<p>Выигрыш: 4750 RUR</p>
				<p>Макс. Участников: 10</p>
            </div>
        </div>
        <div class="card card3">
            <div class="container">
            </div>
            <div class="details">
			<img src="images/lobbyp.jpg" style="border-radius: 5px;">
                <h3>PREMIUM Lobby</h3>
                <p>Стоимость : 1000 RUR</p>
				<p>Выигрыш: 7500 RUR</p>
				<p>Макс. Участников: 10</p>
            </div>
        </div>
    </div>
	
			</center>
	</div>
</body>
</html>