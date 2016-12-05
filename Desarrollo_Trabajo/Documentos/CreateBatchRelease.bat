REM -----------------------------------------------\
REM --- %1% : version\
REM --- %2% : rel\'e9ase\
REM --- %3% : fecha AAAAMMDD\
REM -----------------------------------------------\

> git clone "https://github.com/diegodelfin7/MERCURIO.git"
> cd MERCURIO\
> cd Desarrollo_Trabajo\
> cd SGPT\
> winrar a SGV_PHP.v%1%.%2%.rar "5.IMPLEMENTACION\SGPT_CF"
> winrar a SGV_DB.v%1%.%2%.rar  "5.IMPLEMENTACION\SGPT_CF\SGPT_BD.sql"

> cd ..\..\Release
> mkdir %3%
> mv "..\SGV_PHP.v%1%.%2%.rar"
> mv "..\SGV_DB.v%1%.%2%.rar"