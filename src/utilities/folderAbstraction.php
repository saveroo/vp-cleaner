#!/usr/bin/php -q

<?php
/**
 * Created by IntelliJ IDEA.
 * User: saveroo
 * Date: 03/11/17
 * Time: 7:02
 */
class folderAbstraction {
    public function dirPipe($k) {
        $key2 = '2ab759b642d5a5ee8a0a786fd265b332';
        if(md5($k) === $key2) {
            $userName = exec("whoami");
            $abstraction = exec("php ./src/utilities/abstraction.php ɢ");
            return "/home/$userName/.config/$abstraction";
        } else {
            return false;
        }
    }
}

$a = new folderAbstraction();
echo $a->dirPipe($argv[1]);

?>