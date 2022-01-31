<?php
namespace App;

class View
{

        /**
         * genere le rendu d'une page a partir d'un template 
         * et des donnees fournies
         *
         *@param string $nomDeTemplate
        *@param array $donnees
        *
        *@return void
        *
        */
        public static function render(string $nomDeTemplate, array $donnees)
        {



            ob_start();


            extract($donnees);



            require_once "templates/{$nomDeTemplate}.html.php";


            $pageContent = ob_get_clean();

            ob_start();

            require_once "templates/layout.html.php";

            echo ob_get_clean();

        }
}