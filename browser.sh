#!/bin/bash
set URL=http://localhost:8080/src/domains.php
::set BROWSER=chrome
set BROWSER=firefox
start %BROWSER% %URL%
::explorer %URL%
