# Define o fator de aumento usado durante o treinamento RPROP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-set-rprop-increase-factor.php

---

# fann\_set\_rprop\_increase\_factor

(PECL fann >= 1.0.0)

fann\_set\_rprop\_increase\_factor — Define o fator de aumento usado durante o treinamento RPROP

### Descrição

function **fann\_set\_rprop\_increase\_factor**([resource](language.types.resource.md) `$ann`, [float](language.types.float.md) `$rprop_increase_factor`): [bool](language.types.boolean.md)

Define o fator de aumento usado durante o treinamento RPROP.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

`rprop_increase_factor`
:   O fator de aumento.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** caso contrário.

### Veja também

- [fann\_get\_rprop\_increase\_factor()](function.fann-get-rprop-increase-factor.md) - Retorna o fator de aumento usado durante o treinamento RPROP

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
