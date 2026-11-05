# Define o deslocamento de erro de passo do Sarprop

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-set-sarprop-step-error-shift.php

---

# fann\_set\_sarprop\_step\_error\_shift

(PECL fann >= 1.0.0)

fann\_set\_sarprop\_step\_error\_shift — Define o deslocamento de erro de passo do Sarprop

### Descrição

function **fann\_set\_sarprop\_step\_error\_shift**([resource](language.types.resource.md) `$ann`, [float](language.types.float.md) `$sarprop_step_error_shift`): [bool](language.types.boolean.md)

Define o deslocamento de erro de passo do Sarprop.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

`sarprop_step_error_shift`
:   O deslocamento de erro de passo do Sarprop.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** caso contrário.

### Notas

> **Nota**:
>
> Esta função só estará disponível se a extensão fann tiver sido compilada usando a biblioteca libfann >= 2.2.

### Veja também

- [fann\_get\_sarprop\_step\_error\_shift()](function.fann-get-sarprop-step-error-shift.md) - Retorna o deslocamento de erro de passo do treinamento Sarprop

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
