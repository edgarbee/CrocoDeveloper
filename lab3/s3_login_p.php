<?php
            $a = ["Эдгар", "Разяпов", "ПИ", "web-admin"];

            $passed = false;
            $user_name = $_POST["userName"];

                for ($c = 0; $c < count($a); $c++){
                    if ($user_name == $a[$c]){
                        echo "Привет, $a[$c]!";
                        $passed = true;
                        break;
                    }
                }

                if (!$passed){
                    echo "Я тебя не знаю";
                }

        ?>
