# phpunittest
Hi,

This is a sample phpunit projct integratable with Jenkins for Continious delivery.
download the project and run the following steps 
Install Java and setup Ant 
install xdebug and check it in phpinfo.
Goto project root 
Run->php composer.phar update
Run> php phpunit.phar
post that run-> ant  (your build should be passed and html report should be generated )

Now Setup Jnkins
Add Required Jenkins Plugins 1. HTML Publisher 
Integrate the project in Jenkins 

