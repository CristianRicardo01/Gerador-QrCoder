<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Gerador de QR Code</title>
    <link rel="icon" type="image/png" href="/assets/icon/qrcode.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container py-5">
        <div class="card shadow-sm p-4">
            <h2 class="mb-4">Gerador de QR Code</h2>
            <form action="gerar.php" method="post">
                <div class="mb-3">
                    <label for="link" class="form-label">Digite o link ou texto:</label>
                    <input type="text" class="form-control" id="link" name="link" required>
                </div>
                <button type="submit" class="btn btn-primary">Gerar QR Code</button>
            </form>
        </div>
    </div>

</body>

</html>