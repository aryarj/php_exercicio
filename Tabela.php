<?php
    include("conecta.php");
    echo '<table class="table table-hover">';
    echo '<tr>';
    echo '<th>Código</th>';
    echo '<th>Nome</th>';
    echo '<th>CPF</th>';
    echo '<th>Estado Civil</th>';
    echo '<th>Ações</th>';
    echo '</tr>';
    $pesquisa_query = "SELECT * FROM cliente_ary";
    $result = $conn->query($pesquisa_query);
        if ($result->num_rows > 0) {
            while($registro = $result->fetch_array()){
                $id = $registro['id'];
                echo '<tr>';
                echo '<td>'.$registro['id'].'</td>';
                echo '<td>'.$registro['nome'].'</td>';
                echo '<td>'.$registro['cpf'].'</td>';
                echo '<td>'.$registro['estado_civil'].'</td>';
                echo '<td><a href="#?id='.$id.'"><input type="submit" value="Visualizar" class="btn btn-primary" /></a>  <a href="#?id='.$id.'"><input type="submit" value="Editar" class="btn btn-danger" /></td>';
                echo '</tr>'; 
            }
                                
        } else {
                    echo "<b>Sem registro...</b>";
                }                               
?> 