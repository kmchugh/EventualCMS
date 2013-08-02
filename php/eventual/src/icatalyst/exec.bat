@echo off

rem ===============
rem CLI for Windows
rem ===============


rem Get the path of this .bat file
set EXEC_PATH=%~dp0

rem Make sure we don't do anything bad to the environment
@setlocal

rem Make sure we know what command to run
if "%PHP_COMMAND%" == "" set PHP_COMMAND=php.exe

rem And off we go
"%PHP_COMMAND%" "%EXEC_PATH%exec" %*

@endlocal