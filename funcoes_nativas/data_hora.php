<?php
date_default_timezone_set('America/Sao_Paulo');
echo "Data atual: " . date('d/m/Y H:i:s') . "<br>";
echo "Hora atual: " . date('H:i:s') . "<br>";
echo "Daqui 7 dias: " . date('d/m/Y H:i:s', strtotime('+7 days'));