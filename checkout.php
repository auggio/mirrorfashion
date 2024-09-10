<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Checkout Mirror Fashion</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/css-bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/css-bootstrap/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/css-bootstrap/bootstrap-utilities.min.css">
    <link rel="stylesheet" href="css/css-bootstrap/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/checkout.css">
</head>
<body>
    <div class="container py-5 my-5 bg-light rounded-3">
        <h1 class="display-4">Ótima escolha!</h1>
        <p class="lead">Obrigado por comprar na Mirror Fashion! Preencha seus dados para efetivar a compra.</p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">
                        <h2>Sua compra</h2>
                    </div>
                    <div class="card-body">
                        <img src="img/produtos/foto<?= $_POST['numprod'] ?>-<?= $_POST['cor'] ?>.png" class="img-thumbnail img-responsive" alt="Imagem do produto">
                        <dl class="row">
                            <dt class="col-sm-3">Produto</dt>
                            <dd class="col-sm-9"><?= $_POST['nome'] ?></dd>
                            <dt class="col-sm-3">Preço</dt>
                            <dd id="preco-unitario" class="col-sm-9">R$ <?= $_POST['preco'] ?></dd>
                            <dt class="col-sm-3">Cor</dt>
                            <dd class="col-sm-9"><?= $_POST['cor'] ?></dd>
                            <dt class="col-sm-3">Tamanho</dt>
                            <dd class="col-sm-9"><?= $_POST['tamanho'] ?></dd>
                        </dl>

                        <div class="form-group">
                            <label for="qt">Quantidade</label>
                            <input id="qt" class="form-control" type="number" min="1" max="99" value="1">
                            <output for="qt preco" id="total" class="form-control">
                                R$ <?= $_POST["preco"] ?>
                            </output>
                        </div>
                    </div>
                </div>
            </div>

            <form class="col-sm-8">
                <div class="row">
                    <fieldset class="mt-4 col-md-6">
                        <legend>Dados pessoais</legend>
                        <div class="form-group">
                            <label for="nome">Nome completo</label>
                            <input type="text" class="form-control" id="nome" name="nome" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com">
                        </div>
                        <div class="form-group">
                            <label for="cpf">CPF</label>
                            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00">
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="spam" value="sim" name="spam" checked>
                            <label class="form-check-label" for="spam">Quero receber spam da Mirror Fashion</label>
                        </div>
                    </fieldset>

                    <fieldset class="mt-4 col-md-6">
                        <legend>Cartão de crédito</legend>
                        <div class="form-group">
                            <label for="numero-cartao">Número - CVV</label>
                            <input type="text" class="form-control" id="numero-cartao" name="numero-cartao">
                        </div>
                        <div class="form-group">
                            <label for="bandeira-cartao">Bandeira</label>
                            <select name="bandeira-cartao" id="bandeira-cartao" class="form-control">
                                <option value="master">MasterCard</option>
                                <option value="visa">VISA</option>
                                <option value="amex">American Express</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="validade-cartao">Validade</label>
                            <input type="month" class="form-control" id="validade-cartao" name="validade-cartao">
                        </div>
                    </fieldset>
                </div>

                <button type="submit" class="btn btn-primary btn-lg float-end">
                    <span class="bi bi-hand-thumbs-up"></span> Confirmar pedido
                </button>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('qt').addEventListener('input', function() {
            let precoUnitario = parseFloat(<?= $_POST['preco'] ?>);
            let quantidade = parseInt(this.value);
            let total = precoUnitario * quantidade;
            document.getElementById('total').value = 'R$ ' + total.toFixed(2);
        });
    </script>
</body>
</html>
