# Retorna a temperatura do treinamento Sarprop

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-get-sarprop-temperature.php

---

# fann\_get\_sarprop\_temperature

(PECL fann >= 1.0.0)

fann\_get\_sarprop\_temperature — Retorna a temperatura do treinamento Sarprop

### Descrição

function **fann\_get\_sarprop\_temperature**([resource](language.types.resource.md) `$ann`): [float](language.types.float.md)

Retorna a temperatura do treinamento Sarprop.

A temperatura padrão é 0.015.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

### Valor Retornado

A temperatura do treinamento Sarprop, ou **`false`** em caso de erro.

### Notas

> **Nota**:
>
> Esta função só estará disponível se a extensão fann tiver sido compilada usando a biblioteca libfann >= 2.2.

### Veja também

- [fann\_set\_sarprop\_temperature()](function.fann-set-sarprop-temperature.md) - Define a temperatura do Sarprop

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
