# Define o tamanho mínimo do passo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-set-rprop-delta-min.php

---

# fann\_set\_rprop\_delta\_min

(PECL fann >= 1.0.0)

fann\_set\_rprop\_delta\_min — Define o tamanho mínimo do passo

### Descrição

function **fann\_set\_rprop\_delta\_min**([resource](language.types.resource.md) `$ann`, [float](language.types.float.md) `$rprop_delta_min`): [bool](language.types.boolean.md)

O tamanho mínimo do passo é um número positivo pequeno.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

`rprop_delta_min`
:   O tamanho mínimo do passo.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** caso contrário.

### Veja também

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
