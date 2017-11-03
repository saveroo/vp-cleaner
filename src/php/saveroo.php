#!usr/bin/php -q

<?php

/**
 * not dissected into smaller function yet
 * https://github.com/saveroo/
 *
 *###################################################################################################
 *###################################################################################################
 *###################################################################################################
 *##########################################,           ,(###########################################
 *####################################.    ......... ......   #######################################
 *################################(   ..................   ...  /####################################
 *##############################,  ......................  .. .     .################################
 *############################,  .......................... .. .  ...  /#############################
 *##########################(  ................     .................    ,###########################
 *#########################* ........ ...   .... ..  . . ................  ##########################
 *########################. ........ .     ...... ..  .. ... .......  ..... #########################
 *#######################  ........   ..  .  ..... .  ..... ..  .......  ... ########################
 *######################  . ......  ...            .          ..........  ..  #######################
 *#####################, . ......  ..  #########################.  ...... ...  ######################
 *##################### .  ......    #############################/ .......... /#####################
 *####################. .  ......   ###############################/ .........  #####################
 *#################### ..  .....   #################################  ........  #####################
 *###################  . . .....   #################################  ........  .####################
 *################### .. . .....  (##################################  . ..... . ####################
 *##################  .... .....  ###################################/    .... . *###################
 *##################  ..........  ##       .*############/.       #### .  .... .  ###################
 *#################,  ........... ######((,    ########    .((######## . ..... .  ###################
 *#################   ...........    .       ##*      ,##.      *    # . .......  ,##################
 *################, . ........... .#/# (   # //# .##* /#/ #.  # **#( ( . .......   ##################
 *###############/ .............. *############# *### (############( *  ........ . ##################
 *############### .. ............  ############ #####  (###########./.  .......... .#################
 *##############( . .............            *####### ##/          (#   ...... ...  #################
 *##############.   .............. ##################,.############## . ...... .... (################
 *##############.   ..... ........ ###################. ############# . ......  ...  ################
 *##############/ # ... . ........ ############.# (#   /############# . ......  .... ################
 *############### /  .. . ........ #################################* ........ ..... ,###############
 *###############/  ...  ......... #################################  .... .... ....  ###############
 *################ ..   ........ . ##########/ ####################*  .... .... ..... ###############
 *##############. ..   .........   (########.######################   .... ........ . ###############
 *###########*  ...   ....... ..    /######## ######(, .##########     .. ..........  ###############
 *########/  ... ....  ......     .   ########,  ###############*  .   ..   ... . ..  ###############
 *#######          ........      ...   *######################(   ...   . .  ... . .   ##############
 *######  .#  .  ........   ..  .... .    ##################     ......    .  ...   . .  ,###########
 *######  ##  .# . .... .....  ....... #(   /############(   /## ........  ... ....    ##############
 *######  ##  ## . ......... ...... .. ####*   *######/    #####    ................. ,  ,###########
 *#######. *  #,  ............... .  . #######.         ########    .................. *###. ########
 *#########(     .... ...........    . #########################* *  ............  .. .   .   #######
 *##########(   ........   ......  *  (########################## #   .  ......... ((,.  ./##########
 *########### (#/     .  .. ...   ,# ,###########################( #  .    .....  .  (###/(##########
 *#############,        ..       ##,###############################/#.    (   ......    #############
 *##########################. ##########################################/        ./##################
 **/

class PhpVpCleaner
{
    private static $dirExist = false;
    private static $removed = false;    private static $instance = null;
    private static $isCalled = false;
    private static $isVerbose = false;
    private static $redColoredEcho = '\033[0;31m';
    private static $greenColoredEcho = '\033[0;32m';
    private static $cyanColoredEcho = '\033[0;36m';
    private static $endColoredEcho = '\033[0m';


    private function __construct()
    {

    }

    /**
     * @return bool
     */
    public static function isVerbose()
    {
        return self::$isVerbose;
    }

    /**
     * @param bool $isVerbose
     */
    public static function setIsVerbose($isVerbose)
    {
        self::$isVerbose = $isVerbose;
    }

    protected function instance() {
        if( false == self::isDirExist() ) {
            if(self::instance() == null) {
                self::$instance = new PhpVpCleaner();
            }
            self::$isCalled = true;
            return self::$instance;
        } return null;
    }

    /**
     * @return bool
     */
    public static function isDirExist()
    {
        return self::$dirExist;
    }

    /**
     * @param bool $dirExist
     */
    public static function setDirExist($dirExist)
    {
        self::$dirExist = $dirExist;
    }

    /**
     * @return bool
     */
    public static function isRemoved()
    {
        return self::$removed;
    }

    /**
     * @param bool $removed
     */
    public static function setRemoved($removed)
    {
        self::$removed = $removed;
    }


//    public static function operate($path, $userInput) {
//        if (self::checkPath($path)) {
//            self::setDirExist(true);
//            if(self::isDirExist()) {
//                Operation::ask($userInput);
//            }
//            if(self::removeDir($path)) {
//                return true;
//            }
//        }
//        return false;
//    }

    /**
     * @return boolean
     */
    public static function checkCertainPath()
    {
        return exec("php src/utilities/abstraction.php ɢ");
    }

    public static function checkPath(&$path)
    {
        $certainPath = self::checkCertainPath();
        if(preg_match("(\/$certainPath)",$path[2])) {
            if (!is_array($path)) {
                if (is_dir($path)) {
                    return true;
                }
            } else {
                foreach ($path as $k => $v) {
                    if (is_dir($v) || is_dir(getcwd() . '/' . $v) || is_dir(getcwd() . '\\' . $v)) {
                        $path = $v;
                        return true;
                    }
                }
            }
        }
        return false;
    }

    public static function recursiveRemoval($path) {
        $echoFile = exec("echo \"".self::$redColoredEcho."[D]".self::$endColoredEcho." ".self::$greenColoredEcho."[File]".self::$endColoredEcho."\"");
        $echoFolder = exec("echo \"".self::$redColoredEcho."[D]".self::$endColoredEcho." ".self::$cyanColoredEcho."[Folder]".self::$endColoredEcho."\"");

        $openDir = opendir($path);
        while(false !== ( $file = readdir($openDir)) ) {
            if (( $file != '.' ) && ( $file != '..' )) {
                $full = $path . '/' . $file;
                if ( is_dir($full) ) {
                    if(self::isVerbose() === true) {
                        echo "$echoFolder $full \n";
                    }
                    self::recursiveRemoval($full);
                }
                else {
                    if(self::isVerbose() === true) {
                        echo "$echoFile $full \n";
                    }
                    unlink($full);
                }
            }
        }
        closedir($openDir);
        rmdir($path);
    }

    public static function removeDir($path)
    {
        try {
            self::recursiveRemoval($path);
            return true;
        } catch (Exception $e) {
            print $e;
            return false;
        }
    }
}

//class Alias {
//    public static
//}


class Operation {

    public static $answerOutput = null;
    public static $answerState = false;

    /**
     * @return null
     */
    public static function getAnswerOutput()
    {
        return self::$answerOutput;
    }

    /**
     * @param null $answerOutput
     */
    public static function setAnswerOutput($answerOutput)
    {
        self::$answerOutput = $answerOutput;
    }

    /**
     * @return bool
     */
    public static function isAnswerState()
    {
        return self::$answerState;
    }

    /**
     * @param bool $answerState
     */
    public static function setAnswerState($answerState)
    {
        self::$answerState = $answerState;
    }

    public static function expectedAnswer($answer) {
        $array = array('Y', 'Yes', 'YES');
        foreach($array as $k => $v) {
            if($answer == $v){
                return true;
            }
        }
        return false;
    }

    public static function ask($what, &$confirm) {
        echo $what;
        $confirm = fopen('php://stdin', 'r');
        $response = fgetc($confirm);
            if (strtoupper($response) == self::expectedAnswer($response)) {
                self::setAnswerState($response);
                $confirm = self::isAnswerState();
                return true;
            }
            return false;
    }

}

$os = substr(PHP_OS, 0, 3);
$input = '';
if (strtoupper($os) === 'LIN') {
    unset($argv[0]);
    if (in_array('-d', $argv)) {
        $input = Operation::ask('Enable Verbose Mode [Y|N] ? ', $input);
        if($input){
            PhpVpCleaner::setIsVerbose(true);
        }
        unset($input);
        if (PhpVpCleaner::checkPath($argv)) {
            $input = Operation::ask('Above directories is exist, are you sure to remove [Y|N] ? ', $input);
            if ($input) {
                if (PhpVpCleaner::removeDir($argv)) {
                    echo 'Success';
                }
            }
        } else {
            echo 'Something went Wrong';
        }
    }
}

if (strtoupper($os) === 'WIN') {
    echo "Not supported yet";
}

?>