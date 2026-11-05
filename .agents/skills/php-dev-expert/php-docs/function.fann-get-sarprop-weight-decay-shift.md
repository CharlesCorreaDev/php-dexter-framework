# Retorna o deslocamento de decaimento de peso do treinamento Sarprop

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-get-sarprop-weight-decay-shift.php

---

# fann\_get\_sarprop\_weight\_decay\_shift

(PECL fann >= 1.0.0)

fann\_get\_sarprop\_weight\_decay\_shift — Retorna o deslocamento de decaimento de peso do treinamento Sarprop

### Descrição

function **fann\_get\_sarprop\_weight\_decay\_shift**([resource](language.types.resource.md) `$ann`): [float](language.types.float.md)

Obtém o deslocamento de decaimento de peso do treinamento Sarprop.

O deslocamento padrão é -6.644.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

### Valor Retornado

O deslocamento de decaimento de peso do treinamento Sarprop, ou **`false`** em caso de erro.

### Notas

> **Nota**:
>
> Esta função só estará disponível se a extensão fann tiver sido compilada usando a biblioteca libfann >= 2.2.

### Veja também

- [fann\_set\_sarprop\_weight\_decay\_shift()](function.fann-set-sarprop-weight-decay-shift.md) - Define o deslocamento de decaimento do peso do Sarprop

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
