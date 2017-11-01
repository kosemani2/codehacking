<?php
        /**
         * Created by PhpStorm.
         * User: Fiatinnovations
         * Date: 01/11/2017
         * Time: 11:22
         */

        function pr($ar, $bool=false){
            echo "<pre>";
            print_r($ar);
            echo "</pre>";

            if($bool){
                exit;
            }
        }