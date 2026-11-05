# Treina em um conjunto de dados inteiro lido do arquivo, por um período de tempo usando o algoritmo de treinamento Cascade2

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-cascadetrain-on-file.php

---

# fann\_cascadetrain\_on\_file

(PECL fann >= 1.0.0)

fann\_cascadetrain\_on\_file — Treina em um conjunto de dados inteiro lido do arquivo, por um período de tempo usando o algoritmo de treinamento Cascade2

### Descrição

function **fann\_cascadetrain\_on\_file**(  
    [resource](language.types.resource.md) `$ann`,  
    [string](language.types.string.md) `$filename`,  
    [int](language.types.integer.md) `$max_neurons`,  
    [int](language.types.integer.md) `$neurons_between_reports`,  
    [float](language.types.float.md) `$desired_error`  
): [bool](language.types.boolean.md)

Faz o mesmo que [fann\_cascadetrain\_on\_data()](function.fann-cascadetrain-on-data.md), mas lê os dados de treinamento diretamente de um arquivo.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

`filename`
:   Um arquivo contendo os dados para treinamento.

`max_neurons`
:   O número máximo de neurônios a serem adicionados à rede neural.

`neurons_between_reports`
:   O número de neurônios entre apresentações de um relatório de status. Um valor zero significa que nenhum relatório deve ser apresentado.

`desired_error`
:   A função [fann\_get\_MSE()](function.fann-get-mse.md) ou [fann\_get\_bit\_fail()](function.fann-get-bit-fail.md),
    dependendo de qual função de parada é escolhida por [fann\_set\_train\_stop\_function()](function.fann-set-train-stop-function.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** caso contrário.

### Veja também

- [fann\_train\_on\_data()](function.fann-train-on-data.md) - Treina em um conjunto de dados inteiro por um período de tempo
- [fann\_cascadetrain\_on\_data()](function.fann-cascadetrain-on-data.md) - Treina um conjunto de dados inteiro, por um período de tempo, usando o algoritmo de treinamento Cascade2

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
