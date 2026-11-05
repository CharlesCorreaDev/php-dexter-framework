# Retorna o fator de redução usado durante treinamento RPROP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-get-rprop-decrease-factor.php

---

# fann\_get\_rprop\_decrease\_factor

(PECL fann >= 1.0.0)

fann\_get\_rprop\_decrease\_factor — Retorna o fator de redução usado durante treinamento RPROP

### Descrição

function **fann\_get\_rprop\_decrease\_factor**([resource](language.types.resource.md) `$ann`): [float](language.types.float.md)

O fator de redução é um valor menor que 1, que é usado para reduzir o tamanho do passo durante o treinamento RPROP.

O fator de redução padrão é 0.5.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

### Valor Retornado

O fator de redução, ou **`false`** em caso de erro.

### Veja também

- [fann\_set\_rprop\_decrease\_factor()](function.fann-set-rprop-decrease-factor.md) - Define o fator de redução usado durante o treinamento RPROP

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
