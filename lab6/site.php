<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="site.php" method="get" name="registration form">
                        <div>
                            <label for="Firstname">Имя</label>
                            <input tabindex="1" class="name" required type="text" pattern="^[А-Яа-яЁё\s]+$"
                                name="Firstname"  placeholder="Введите имя">
                        </div>
                        <div>
                            <label for="Secondname">Фамилия</label>
                            <input tabindex="2" class="name" required pattern="^[А-Яа-яЁё\s]+$" type="text"
                                name="Secondname" placeholder="Введите фамилию">
                        </div>
                        <div>
                            <label for="Nickname">Отчество</label>
                            <input tabindex="3" class="name" required type="text" pattern="^[А-Яа-яЁё\s]+$"
                                name="Nickname" placeholder="Введите Отчество">
                        </div>
                        <div>
                            <label for="phone">Телефон (опционально)</label>
                            <input tabindex="4" type="tel"
                                pattern="\+7\s?[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}"
                                name="phone" class="phone" placeholder="+7(___)___-__-_">
                        </div>
                        <div>
                            <label for="mail">Почта</label>
                            <input tabindex="5" class="mail" required class="mail"
                                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" type="email" name="mail"
                                placeholder="*@*.">
                        </div>
                        <div>
                            <label for="pass">Пароль <p>Верхний регистр, 8 символов, цифра</p></label>
                            <input tabindex="6" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="pass" required
                                type="password" name="pass" placeholder="Введите пароль">
                        </div>
                        <div>
                            <label for="age">Какую информацию вывести</label>
                            <SELECT name="age">
                                <OPTION selected value="">Выберите одну из опций:</OPTION>
                                <OPTION value="Name">Имя</OPTION>
                                <OPTION value="Mail">Почта</OPTION>
                                <OPTION value="General info">Общая информация</OPTION>
                                <OPTION value="all">Все выше перечисленное</OPTION>
                            </SELECT>
                        </div>
                        <div>
                            <label for="Aboutme">О себе</label>
                            <textarea placeholder="Расскажите немного о себе" name="Aboutme"></textarea>
                        </div>
                        <div class="sex">
                            <p>Пол</p>
                            <p>
                                <input selected type="radio" id="man" name="sex"> <label for="man">Мужской</label>
                                <br>
                                <br>
                                <input type="radio" id="woman" name="sex"> <label for="woman">Женский</label>
                            </p>
                        </div>
                        <br>
                        <input type="submit" class="submit" value="Зарегистрироваться">
                    </form> 
                    <br>  
                    <?php 

                        $fOutput = fopen("output.txt", 'w+');

                        $name = $_GET['Firstname'];
                        $secondName = $_GET['Secondname'];
                        $nickName = $_GET['Nickname'];
                        $mail = $_GET['mail'];
                        $aboutMe = $_GET['Aboutme'];
                        
                        $test = fwrite($fOutput, $name);
                        $test = fwrite($fOutput, "\n");
                        $test = fwrite($fOutput, $secondName);
                        $test = fwrite($fOutput, "\n");
                        $test = fwrite($fOutput, $nickName);
                        $test = fwrite($fOutput, "\n");
                        $test = fwrite($fOutput, $mail);
                        $test = fwrite($fOutput, "\n");
                        $test = fwrite($fOutput, $aboutMe);
                        $test = fwrite($fOutput, "\n");
                        
                        $formOfOutput = $_GET['age'];

                        fclose($fOutput);
                        $fOutput = fopen("output.txt", "r");
                        $lines = file("output.txt");

                        if($formOfOutput == "all"){
                            for($i = 0; $i<sizeof($lines); $i++){
                                echo $lines[$i];
                                echo "<br>";
                            }
                        }
                        else if( $formOfOutput == "Name"){
                            Имя:
                            for($i = 0; $i < 3; $i++){
                                 echo ($lines[$i]);
                                 echo "<br>";
                            }
                            
                        }
                        else if($formOfOutput == "Mail"){
                            echo $lines[3];
                        }
                        else {
                            echo $lines[4];
                        }

                        fclose($fOutput);
                    ?>
                    
</body>
</html>