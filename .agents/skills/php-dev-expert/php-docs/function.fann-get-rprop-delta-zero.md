# Retorna o tamanho inicial do passo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-get-rprop-delta-zero.php

---

# fann\_get\_rprop\_delta\_zero

(PECL fann >= 1.0.0)

fann\_get\_rprop\_delta\_zero — Retorna o tamanho inicial do passo

### Descrição

function **fann\_get\_rprop\_delta\_zero**([resource](language.types.resource.md) `$ann`): [int](language.types.integer.md)

O tamanho inicial do passo é um número positivo.

O tamanho inicial padrão é 0.1.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

### Valor Retornado

O tamanho inicial do passo, ou **`false`** em caso de erro.

### Veja também

- [fann\_set\_rprop\_delta\_zero()](function.fann-set-rprop-delta-zero.md) - Define o tamanho inicial do passo
- [fann\_get\_rprop\_delta\_min()](function.fann-get-rprop-delta-min.md) - Retorna o tamanho mínimo do passo
- [fann\_get\_rprop\_delta\_max()](function.fann-get-rprop-delta-max.md) - Retorna o tamanho máximo do passo

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
