
<?php
function moneda_cop ($valor){
    if($valor < 0) return '-'.moneda_cop(-$valor);
    return '$'.number_format($valor);
}