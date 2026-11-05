# Retorna o fator de aumento usado durante o treinamento RPROP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-get-rprop-increase-factor.php

---

# fann\_get\_rprop\_increase\_factor

(PECL fann >= 1.0.0)

fann\_get\_rprop\_increase\_factor — Retorna o fator de aumento usado durante o treinamento RPROP

### Descrição

function **fann\_get\_rprop\_increase\_factor**([resource](language.types.resource.md) `$ann`): [float](language.types.float.md)

O fator de aumento é um valor maior que 1, usado para aumentar o tamanho do passo durante o treinamento RPROP.

O fator de aumento padrão é 1.2.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

### Valor Retornado

O fator de aumento, ou **`false`** em caso de erro.

### Veja também

- [fann\_set\_rprop\_increase\_factor()](function.fann-set-rprop-increase-factor.md) - Define o fator de aumento usado durante o treinamento RPROP

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
