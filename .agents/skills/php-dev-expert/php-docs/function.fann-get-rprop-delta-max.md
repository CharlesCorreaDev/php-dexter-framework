# Retorna o tamanho máximo do passo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-get-rprop-delta-max.php

---

# fann\_get\_rprop\_delta\_max

(PECL fann >= 1.0.0)

fann\_get\_rprop\_delta\_max — Retorna o tamanho máximo do passo

### Descrição

function **fann\_get\_rprop\_delta\_max**([resource](language.types.resource.md) `$ann`): [float](language.types.float.md)

O tamanho máximo do passo é um número positivo que determina o quão alto o tamanho máxido do passo pode ser.

O máximo padrão é 50.0.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

### Valor Retornado

O tamanho máximo do passo, ou **`false`** em caso de erro.

### Veja também

- [fann\_set\_rprop\_delta\_max()](function.fann-set-rprop-delta-max.md) - Define o tamanho máximo do passo
- [fann\_get\_rprop\_delta\_min()](function.fann-get-rprop-delta-min.md) - Retorna o tamanho mínimo do passo

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
