@echo off
setlocal enableDelayedExpansion
for %%F in (*.png) do (
  set "name=%%F"
  ren "!name!" "!name:-verde=_verde!"
  ren "!name!" "!name:-arancio=_orange!"
ren "!name!" "!name:-fucsia=_fuchsia!"
)