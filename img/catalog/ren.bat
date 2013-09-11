@echo off
setlocal enableDelayedExpansion
for %%F in (*.png) do (
  set "name=%%F"
  ren "!name!" "!name:restaurant_red=restaurant-red!"
  ren "!name!" "!name:restaurant_white=restaurant-white!"
)