# Lê um arquivo que armazena dados de treinamento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-read-train-from-file.php

---

# fann\_read\_train\_from\_file

(PECL fann >= 1.0.0)

fann\_read\_train\_from\_file — Lê um arquivo que armazena dados de treinamento

### Descrição

function **fann\_read\_train\_from\_file**([string](language.types.string.md) `$filename`): [resource](language.types.resource.md)

Lê um arquivo que armazena dados de treinamento.

### Parâmetros

`filename`
:   O arquivo de entrada no seguinte formato:

    ```
    número_de_dados_de_treinamento número_de_entradas número_de_saídas
    dados de entrada separados por espaço
    dados de saída separados por espaço

    .
    .
    .

    dados de entrada separados por espaço
    dados de saída separados por espaço
    ```

### Valor Retornado

Retorna um [resource](language.types.resource.md) de dados de treinamento em caso de sucesso ou **`false`** em caso de erro.

### Examples

**Exemplo #1 Exemplo de **fann\_read\_train\_from\_file()****

```
<?php
$train_data = fann_read_train_from_file("xor.data");
if ($train_data) {
    // Faz algo com $train_data para a função XOR
}
?>
```

Conteúdo de xor.data

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

### Veja também

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
