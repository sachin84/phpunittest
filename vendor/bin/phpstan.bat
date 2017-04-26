@ECHO OFF
setlocal DISABLEDELAYEDEXPANSION
SET BIN_TARGET=%~dp0/../phpstan/phpstan/bin/phpstan
c:\xampp\php\php.exe "%BIN_TARGET%" %*
