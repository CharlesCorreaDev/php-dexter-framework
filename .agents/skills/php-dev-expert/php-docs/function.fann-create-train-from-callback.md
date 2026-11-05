# Cria a estrutura de dados de treinamento a partir de uma função fornecida pelo usuário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-create-train-from-callback.php

---

# fann\_create\_train\_from\_callback

(PECL fann >= 1.0.0)

fann\_create\_train\_from\_callback — Cria a estrutura de dados de treinamento a partir de uma função fornecida pelo usuário

### Descrição

function **fann\_create\_train\_from\_callback**(  
    [int](language.types.integer.md) `$num_data`,  
    [int](language.types.integer.md) `$num_input`,  
    [int](language.types.integer.md) `$num_output`,  
    [callable](language.types.callable.md) `$user_function`  
): [resource](language.types.resource.md)

Cria a estrutura de dados de treinamento a partir de uma função fornecida pelo usuário. Como os dados de treinamento são numeráveis ​​(dados 1, dados 2...),
o usuário deve escrever uma função que receba o número do conjunto de dados de treinamento (entrada, saída) e retorne o conjunto.

### Parâmetros

`num_data`
:   O número de dados de treinamento.

`num_input`
:   O número de entradas por dados de treinamento.

`num_output`
:   O número de saídas por dados de treinamento.

`user_function`
:   A função fornecida pelo usuário com os seguintes parâmetros:

    - `num` - O número do conjunto de dados de treinamento
    - `num_input` - O número de entradas por dados de treinamento
    - `num_output` - O número de saídas por dados de treinamento

    A função deve retornar um array associativo com chaves `input` e `output`; e
    dois valores de entrada e saída.

### Valor Retornado

Retorna um [resource](language.types.resource.md) de dados de treinamento em caso de sucesso ou **`false`** em caso de erro.

### Examples

**Exemplo #1 Exemplo de **fann\_create\_train\_from\_callback()****

```
<?php
function create_train_callback($num_data, $num_input, $num_output) {
    return array(
        "input" => array_fill(0, $num_input, 1),
        "output" => array_fill(0, $num_output, 1),
    );
}

$num_data = 3;
$num_input = 2;
$num_output = 1;
$train_data = fann_create_train_from_callback($num_data, $num_input, $num_output, "create_train_callback");
if ($train_data) {
    // Faz algo com $train_data
}
?>
```

### Notas

> **Nota**:
>
> Esta função só estará disponível se a extensão fann tiver sido compilada usando a biblioteca libfann >= 2.2.

### Veja também

- [fann\_read\_train\_from\_file()](function.fann-read-train-from-file.md) - Lê um arquivo que armazena dados de treinamento
- [fann\_train\_on\_data()](function.fann-train-on-data.md) - Treina em um conjunto de dados inteiro por um período de tempo
- [fann\_destroy\_train()](function.fann-destroy-train.md) - Destrói os dados de treinamento
- [fann\_save\_train()](function.fann-save-train.md) - Grava a estrutura de treinamento em um arquivo

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
