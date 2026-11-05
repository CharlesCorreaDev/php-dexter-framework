# Retorna o deslocamento de erro de passo do treinamento Sarprop

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-get-sarprop-step-error-shift.php

---

# fann\_get\_sarprop\_step\_error\_shift

(PECL fann >= 1.0.0)

fann\_get\_sarprop\_step\_error\_shift — Retorna o deslocamento de erro de passo do treinamento Sarprop

### Descrição

function **fann\_get\_sarprop\_step\_error\_shift**([resource](language.types.resource.md) `$ann`): [float](language.types.float.md)

Retorna o deslocamento de erro de passo do treinamento Sarprop.

O deslocamento padrão de erro de passo é 1.385.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

### Valor Retornado

O deslocamento de erro de passo, ou **`false`** em caso de erro.

### Notas

> **Nota**:
>
> Esta função só estará disponível se a extensão fann tiver sido compilada usando a biblioteca libfann >= 2.2.

### Veja também

- [fann\_set\_sarprop\_step\_error\_shift()](function.fann-set-sarprop-step-error-shift.md) - Define o deslocamento de erro de passo do Sarprop

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
