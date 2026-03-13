<?php
//1lç
require_once 'config/db.php';

try{
    //2
    $db = $conexao; 
    
    //3
    $query = $db->query("show TABLES");
    $tabelasEncontradas = $query->fetchALL(PDO::FETCH_COLUMN);
    
    $total = count($tabelasencontradas);
    $meta = 14;

    echo "<h1> verificação do sistema</h1>";
    
    //4

    if ($total == $meta){
        echo "<p style= 'color: green; '>Sucesso! o banco de dados esta completo com as 14 tabelas.</p>";
    } else {
    $faltando = $meta = $total;
    echo "<p style='color:red;'>atenção: o banco possui $total tabelas. Estão <strong> faltando $faltando</strong> para chegar às 14.</p>" ;
    }

    //5

echo "<h3>tabelas encontradas no banco:</h3>";
echo "<ul>";
foreach ($tabelasEncontradas as $table){
    echo "<li>$tabela</li>";
}
echo "</ul>";

} catch (exception $e){
    echo "erro ao carregar o teste:" . $e->getMessage();
}


?>