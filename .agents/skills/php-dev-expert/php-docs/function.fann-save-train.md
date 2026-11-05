# Grava a estrutura de treinamento em um arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-save-train.php

---

# fann\_save\_train

(PECL fann >= 1.0.0)

fann\_save\_train — Grava a estrutura de treinamento em um arquivo

### Descrição

function **fann\_save\_train**([resource](language.types.resource.md) `$data`, [string](language.types.string.md) `$file_name`): [bool](language.types.boolean.md)

Grava os dados de treinamento em um arquivo, com o formato especificado na documentação da função [fann\_read\_train\_from\_file()](function.fann-read-train-from-file.md).

### Parâmetros

`data`
:   [resource](language.types.resource.md) dos dados de treinamento da rede neural.

`file_name`
:   O nome do arquivo onde os dados de treinamento serão gravados.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** caso contrário.

### Veja também

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
