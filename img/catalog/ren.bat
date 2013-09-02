@echo off
setlocal enableDelayedExpansion
for %%F in (*.png) do (
  set "name=%%F"
  ren "!name!" "!name: =-!"
)