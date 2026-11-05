# Define o fator de limite de erro de passo do Sarprop

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-set-sarprop-step-error-threshold-factor.php

---

# fann\_set\_sarprop\_step\_error\_threshold\_factor

(PECL fann >= 1.0.0)

fann\_set\_sarprop\_step\_error\_threshold\_factor — Define o fator de limite de erro de passo do Sarprop

### Descrição

function **fann\_set\_sarprop\_step\_error\_threshold\_factor**([resource](language.types.resource.md) `$ann`, [float](language.types.float.md) `$sarprop_step_error_threshold_factor`): [bool](language.types.boolean.md)

Define o fator de limite de erro de passo do Sarprop.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

`sarprop_step_error_threshold_factor`
:   O fator de limite de erro de passo do Sarprop.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** caso contrário.

### Notas

> **Nota**:
>
> Esta função só estará disponível se a extensão fann tiver sido compilada usando a biblioteca libfann >= 2.2.

### Veja também

- [fann\_get\_sarprop\_step\_error\_threshold\_factor()](function.fann-get-sarprop-step-error-threshold-factor.md) - Retorna o fator de limite de erro de passo do treinamento Sarprop

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
