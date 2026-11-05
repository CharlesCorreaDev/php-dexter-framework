# Inicializa os pesos usando o algoritmo de Widrow + Nguyen

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-init-weights.php

---

# fann\_init\_weights

(PECL fann >= 1.0.0)

fann\_init\_weights — Inicializa os pesos usando o algoritmo de Widrow + Nguyen

### Descrição

function **fann\_init\_weights**([resource](language.types.resource.md) `$ann`, [resource](language.types.resource.md) `$train_data`): [bool](language.types.boolean.md)

Inicializa os pesos usando o algoritmo de Widrow + Nguyen.

Esta função se comporta de forma semelhante a [fann\_randomize\_weights()](function.fann-randomize-weights.md). Utilizará o algoritmo desenvolvido por
Derrick Nguyen e Bernard Widrow para definir os pesos de forma a agilizar o treinamento. Esta técnica nem sempre é
bem-sucedida e, em alguns casos, pode ser menos eficiente do que uma inicialização puramente aleatória.

O algoritmo requer acesso ao intervalo dos dados de entrada (por exemplo, maior e menor entrada) e, portanto,
aceita um segundo argumento, train\_data, que são os dados de treinamento que serão usados ​​para treinar a rede.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

`train_data`
:   [resource](language.types.resource.md) dos dados de treinamento da rede neural.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** caso contrário.

### Veja também

- [fann\_randomize\_weights()](function.fann-randomize-weights.md) - Fornece a cada conexão um peso aleatório entre um mínimo e um máximo
- [fann\_read\_train\_from\_file()](function.fann-read-train-from-file.md) - Lê um arquivo que armazena dados de treinamento

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
