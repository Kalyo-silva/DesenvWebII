<?php
require_once __DIR__ . '/vendor/autoload.php';

$nome = $_REQUEST['Name']; 
$telefone = $_REQUEST['Phone']; 
$email = $_REQUEST['Mail'];
$msg = $_REQUEST['Message'];

$html = '
<table>
    <tr>
        <th colspan="1"><img src="logo.png" height = "50px"></th>
        <th colspan="3">Resultado - Exercício 3</th>
    </tr>
    
    <tr>
        <td><strong>Nome</strong></td>
        <td>'.$nome.'</td>
        <td><strong>Telefone</strong></td>
        <td>'.$telefone.'</td>
    </tr>
    <tr>
        <td colspan="1"><strong>Email</strong></td>
        <td colspan="3">'.$email.'</td>       
    </tr>
    <tr>
        <th colspan="4">Mensagem</th>
    </tr>
    <tr>
        <td colspan="4">'.$msg.'</th>
    </tr>
</table>

<style>
    th, td {
        border: 1px solid black;
        padding: 0.25rem;
        font-family: sans-serif;
    }

    th{
        padding: 0.5rem;
    }

    table{
        Width: 100%;
    }
</style>
';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output();