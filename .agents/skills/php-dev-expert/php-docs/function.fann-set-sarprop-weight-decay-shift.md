# Define o deslocamento de decaimento do peso do Sarprop

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-set-sarprop-weight-decay-shift.php

---

# fann\_set\_sarprop\_weight\_decay\_shift

(PECL fann >= 1.0.0)

fann\_set\_sarprop\_weight\_decay\_shift — Define o deslocamento de decaimento do peso do Sarprop

### Descrição

function **fann\_set\_sarprop\_weight\_decay\_shift**([resource](language.types.resource.md) `$ann`, [float](language.types.float.md) `$sarprop_weight_decay_shift`): [bool](language.types.boolean.md)

Define o deslocamento de decaimento do peso do Sarprop.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

`sarprop_weight_decay_shift`
:   O deslocamento de decaimento do peso do Sarprop.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** caso contrário.

### Notas

> **Nota**:
>
> Esta função só estará disponível se a extensão fann tiver sido compilada usando a biblioteca libfann >= 2.2.

### Veja também

- [fann\_get\_sarprop\_weight\_decay\_shift()](function.fann-get-sarprop-weight-decay-shift.md) - Retorna o deslocamento de decaimento de peso do treinamento Sarprop

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
