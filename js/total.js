var $input_quantidade = document.querySelector("#qt");
var $output_total = document.querySelector("#total");

$input_quantidade.oninput = function() {
    var precoElement = document.querySelector("#preco");
    var precoText = precoElement.textContent.trim();
    var preco = precoText.replace("R$ ", "").replace(",", ".");
    preco = parseFloat(preco);
    var quantidade = $input_quantidade.value;
    var total = quantidade * preco;
    total = "R$ " + total.toFixed(2);
    total = total.replace(".", ",");
    $output_total.value = total;
};
