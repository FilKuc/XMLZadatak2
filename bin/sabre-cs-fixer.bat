@ECHO OFF
setlocal DISABLEDELAYEDEXPANSION
SET BIN_TARGET=%~dp0/../vendor/sabre/cs/bin/sabre-cs-fixer
php "%BIN_TARGET%" %*
