rem Set Node.js version
set node=12.22.3
set npm=8.19.4
rem Try volta
WHERE /Q volta
IF  %ERRORLEVEL% == 0 (
  volta install node@%node%
  volta install npm@%npm%
) ELSE (
  rem Try nvm
  WHERE /Q nvm
  IF  %ERRORLEVEL% == 0 (
    nvm install %node%
    nvm use %node%
    nvm list
  )
)

rem Go to current directory
cd /d %~dp0
rem Run npm
call npm run restart

timeout 10

@echo off

rem old Node.js
set node=12.22.3
set node=10.24.1
