<?php
 class Onepage {
//Ma class Onepage
    //ses attribus
        public $uri;
        public $path;
        public $head = "./views/templates/head.html";
        public $foot = "./views/templates/foot.html";

//fonction pour recuperer l'uri
        public function __construct($uri) {
    $this->uri = $uri;
    $this->path = "./views" . $uri . ".html";
    }
 //array_slice($directory, $this->uri)
     public function getOnepage() {
            //parcours mon dossier views
         $directory = array_diff(scandir('./views/'),
             [
                 ".",
                 "..",
             ]);

         $directory = array_diff(scandir('./views/animals/'),
             [
                 ".",
                 "..",
             ]);
         $content = file_get_contents($this->head) . "<main> \n";
         foreach ($directory as $key => $value){
             $content .= file_get_contents("./views/animals/" . $value) . "\n";
         }
         $content .= "</main> \n" . file_get_contents($this->foot);

         $this->display($content);
         //debut d'essaie pour afficher l element que l on souhaite
        // $content = file_get_contents($this->head) . "<main> \n";
       //  foreach ($directory as $key => $value){
        //     if ($this->uri = 1){
       //          (array_slice($directory, 0, 1));
         //        $content .= file_get_contents("./views/" . $value) . "\n";
         //    } elseif ($this->uri = 2) {
          //          (array_slice($directory, 0, 2));
         //            $content .= file_get_contents("./views/" . $value) . "\n";
          //   } else {

        //     $content .= file_get_contents("./views/" . $value) . "\n";
         //}
        // $content .= "</main> \n" . file_get_contents($this->foot);
         //$this->display($content);
     }

        public function display($content)
       {
         echo $content;
       }

        }
    }



?>
