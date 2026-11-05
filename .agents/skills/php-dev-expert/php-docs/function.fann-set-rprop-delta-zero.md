# Define o tamanho inicial do passo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-set-rprop-delta-zero.php

---

# fann\_set\_rprop\_delta\_zero

(PECL fann >= 1.0.0)

fann\_set\_rprop\_delta\_zero — Define o tamanho inicial do passo

### Descrição

function **fann\_set\_rprop\_delta\_zero**([resource](language.types.resource.md) `$ann`, [float](language.types.float.md) `$rprop_delta_zero`): [bool](language.types.boolean.md)

O tamanho inicial do passo é um número positivo.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

`rprop_delta_zero`
:   O tamanho inicial do passo.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** caso contrário.

### Veja também

- [fann\_get\_rprop\_delta\_zero()](function.fann-get-rprop-delta-zero.md) - Retorna o tamanho inicial do passo
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
