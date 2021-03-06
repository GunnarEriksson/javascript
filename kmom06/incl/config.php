<?php
/**
 * Checks if web page is active
 *
 * Checks the file name against the file which was given in order
 * to access this page. If it is, the function returns the string
 * selected. If not, the function returns an emtpy string.
 *
 * @param string $fileName - the file name to compare.
 * @return string - the string 'selected' if the file name is equal
 *                  to the file which was given in order to access
 *                  this page. If not, an empty string is returned.
 */
 function selectedPage($fileName)
 {
     $class = '';
     if (strpos($_SERVER['REQUEST_URI'], $fileName)) {
         $class = 'selected';
     } else {
         if ($fileName === "me/playground.php" && strpos($_SERVER['REQUEST_URI'], "playground")) {
             $class = 'selected';
         } else if ($fileName === "me/websocket.php" && strpos($_SERVER['REQUEST_URI'], "websocket")) {
             $class = 'selected';
         }
     }

     return $class;
 }
