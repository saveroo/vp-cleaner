#!usr/bin/bash

who="whoami"
ab='src/utilities/folderAbstraction.php'
execPath="php $ab ɢ"
pulled=$($execPath)
#pipePath="/home/$($who)/.config/$(php $ab ɢ)"
#echo $pipePath
usePHP='src/php/saveroo.php'
checkPHP='which php'
commandPHP="php $usePHP -d $pulled"

case $1 in
    "help" )
        echo "example:bash ./run.sh [php|go|ruby|perl]"
    ;;
    "-h" )
        echo "example:bash ./run.sh [php|go|ruby|perl]"
    ;;
    "php" )
        if [ $($checkPHP) == '/usr/bin/php' ]; then
            php -v
            echo "================"
            echo "[Check] Passed"
            echo "[Run] $commandPHP"
            $commandPHP
        fi
    ;;
     "go" )
        "using Golang"
    ;;
    "ruby" )

    ;;
    "perl" )

    ;;
    "python" ) ;;
    "" )
    echo "Execute: ./run.sh [-h|help]";;
esac