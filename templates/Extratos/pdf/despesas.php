<!DOCTYPE html>
<html>

<head>
    <title>Despesas</title>
    <style>
        @page {
            margin: 0px 0px 0px 0px !important;
            padding: 0px 0px 0px 0px !important;
        }
        table {
    width: 100%;
        }

        th, td {
    border-bottom: 1px solid #ddd;
}

        th {
    background-color: #4CAF50;
    color: white;
}
    </style>

</head>

<body>


    
        <table class="table table-hover text-nowrap">
            
            <tr>
                <th ><?= __('Conta') ?></th>
                <th ><?= __('Data') ?></th>
                <th ><?= __('Descricao') ?></th>
                <th ><?= __('Valor') ?></th>
            </tr>
            <?php foreach ($extrato as $extrato) : ?>
            <tr>
                <td><?= $extrato->has('conta') ? $this->Html->find($extrato->conta->nconta, ['controller' => 'Contas', 'action' => 'view', $extrato->conta->id_conta]) : '' ?></td>
                <td><?= h($extrato->created) ?></td>
                <td><?= h($extrato->descricao) ?></td>
                <td style="color: red;">-<?= $this->Number->format($extrato->valor) ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    
</body>

</html>