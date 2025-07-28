<?php
require __DIR__ . '/vendor/autoload.php';

use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Writer\PngWriter;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $link = trim($_POST['link'] ?? '');

    if ($link === '') {
        die('Você precisa digitar um link ou texto!');
    }

    $nomeArquivo = 'qrcode_' . time() . '.png';
    $caminhoArquivo = __DIR__ . '/qrcodes/' . $nomeArquivo;

    if (!is_dir(__DIR__ . '/qrcodes')) {
        mkdir(__DIR__ . '/qrcodes', 0755, true);
    }

    $result = Builder::create()
        ->writer(new PngWriter())
        ->data($link)
        ->size(400)
        ->margin(20)
        ->build();

    $result->saveToFile($caminhoArquivo);
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>QR Code Gerado</title>
    <link rel="icon" type="image/png" href="/assets/icon/qrcode.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container py-5 text-center">
        <div class="card p-4 shadow-sm">
            <h2 class="mb-4">QR Code Gerado com Sucesso!</h2>
            <img src="qrcodes/<?php echo $nomeArquivo; ?>" alt="QR Code" class="img-fluid mb-4 mx-auto d-block" style="max-width: 300px;">
            <div class="d-grid gap-2 d-sm-block">
                <a href="qrcodes/<?php echo $nomeArquivo; ?>" download class="btn btn-success me-2">⬇️ Baixar QR Code</a>
                <a href="index.php" class="btn btn-secondary">← Gerar Outro</a>
            </div>
        </div>
    </div>

</body>

</html>