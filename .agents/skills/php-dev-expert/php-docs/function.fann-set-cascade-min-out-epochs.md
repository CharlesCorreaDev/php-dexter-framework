# Define o mínimo de épocas de saída

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-set-cascade-min-out-epochs.php

---

# fann\_set\_cascade\_min\_out\_epochs

(PECL fann >= 1.0.0)

fann\_set\_cascade\_min\_out\_epochs — Define o mínimo de épocas de saída

### Descrição

function **fann\_set\_cascade\_min\_out\_epochs**([resource](language.types.resource.md) `$ann`, [int](language.types.integer.md) `$cascade_min_out_epochs`): [bool](language.types.boolean.md)

Define o mínimo de épocas de saída.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

`cascade_min_out_epochs`
:   O mínimo de épocas de saída.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** caso contrário.

### Notas

> **Nota**:
>
> Esta função só estará disponível se a extensão fann tiver sido compilada usando a biblioteca libfann >= 2.2.

### Veja também

- [fann\_get\_cascade\_min\_out\_epochs()](function.fann-get-cascade-min-out-epochs.md) - Retorna o mínimo de épocas de saída

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
