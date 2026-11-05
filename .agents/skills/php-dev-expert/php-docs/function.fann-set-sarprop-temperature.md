# Define a temperatura do Sarprop

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-set-sarprop-temperature.php

---

# fann\_set\_sarprop\_temperature

(PECL fann >= 1.0.0)

fann\_set\_sarprop\_temperature — Define a temperatura do Sarprop

### Descrição

function **fann\_set\_sarprop\_temperature**([resource](language.types.resource.md) `$ann`, [float](language.types.float.md) `$sarprop_temperature`): [bool](language.types.boolean.md)

Define a temperatura do Sarprop.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

`sarprop_temperature`
:   A temperatura do Sarprop.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** caso contrário.

### Notas

> **Nota**:
>
> Esta função só estará disponível se a extensão fann tiver sido compilada usando a biblioteca libfann >= 2.2.

### Veja também

- [fann\_get\_sarprop\_temperature()](function.fann-get-sarprop-temperature.md) - Retorna a temperatura do treinamento Sarprop

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
