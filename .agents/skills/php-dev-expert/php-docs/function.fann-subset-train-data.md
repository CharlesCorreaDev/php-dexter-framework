# Retorna uma cópia de um subconjunto dos dados de treinamento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-subset-train-data.php

---

# fann\_subset\_train\_data

(PECL fann >= 1.0.0)

fann\_subset\_train\_data — Retorna uma cópia de um subconjunto dos dados de treinamento

### Descrição

function **fann\_subset\_train\_data**([resource](language.types.resource.md) `$data`, [int](language.types.integer.md) `$pos`, [int](language.types.integer.md) `$length`): [resource](language.types.resource.md)

Retorna uma cópia de um subconjunto do [resource](language.types.resource.md) de dados de treinamento, iniciando na posição
`pos` e com o número `length` de elementos para a frente.

The `fann_subset_train_data(train_data, 0, fann_length_train_data(train_data))` faz o mesmo que
[fann\_duplicate\_train\_data()](function.fann-duplicate-train-data.md)

### Parâmetros

`data`
:   [resource](language.types.resource.md) dos dados de treinamento da rede neural.

`pos`
:   Posição inicial.

`length`
:   O número de elementos copiados.

### Valor Retornado

Retorna um [resource](language.types.resource.md) de dados de treinamento em caso de sucesso ou **`false`** em caso de erro.

### Veja também

- [fann\_duplicate\_train\_data()](function.fann-duplicate-train-data.md) - Retorna uma cópia exata de dados de treinamento de rede neural

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
