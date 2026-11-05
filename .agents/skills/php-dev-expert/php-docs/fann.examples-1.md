# Treinamento XOR

> **Fonte / Source:** https://www.php.net/manual/pt_BR/fann.examples-1.php

---

## Treinamento XOR

Este exemplo mostra como treinar dados para a função XOR

**Exemplo #1 arquivo xor.data**

```
4 2 1
-1 -1
-1
-1 1
1
1 -1
1
1 1
-1
```

**Exemplo #2 Treinamento simples**

```
<?php
$num_input = 2;
$num_output = 1;
$num_layers = 3;
$num_neurons_hidden = 3;
$desired_error = 0.001;
$max_epochs = 500000;
$epochs_between_reports = 1000;

$ann = fann_create_standard($num_layers, $num_input, $num_neurons_hidden, $num_output);

if ($ann) {
    fann_set_activation_function_hidden($ann, FANN_SIGMOID_SYMMETRIC);
    fann_set_activation_function_output($ann, FANN_SIGMOID_SYMMETRIC);

    $filename = dirname(__FILE__) . "/xor.data";
    if (fann_train_on_file($ann, $filename, $max_epochs, $epochs_between_reports, $desired_error))
        fann_save($ann, dirname(__FILE__) . "/xor_float.net");

    fann_destroy($ann);
}
?>
```

Este exemplo mostra como ler e executar dados para a função XOR

**Exemplo #3 Teste simples**

```
<?php
$train_file = (dirname(__FILE__) . "/xor_float.net");
if (!is_file($train_file))
    die("O arquivo xor_float.net não foi criado! Por favor execute simple_train.php para gerá-lo.");

$ann = fann_create_from_file($train_file);
if (!$ann)
    die("RNA não pôde ser criada.");

$input = array(-1, 1);
$calc_out = fann_run($ann, $input);
printf("teste xor (%f,%f) -> %f\n", $input[0], $input[1], $calc_out[0]);
fann_destroy($ann);
?>
```

`↑` and `↓` to navigate •
`Enter` to select •
`Esc` to close • `/` to open

document.addEventListener("DOMContentLoaded", function() {
/\*{{{Search Modal\*/
const language = 'local';
initSearchModal();
initPHPSearch(language).then((searchCallback) => {
initSearchUI({language, searchCallback, limit: 30});
});
/\*}}}\*/
});
