# Retorna o tamanho mínimo do passo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-get-rprop-delta-min.php

---

# fann\_get\_rprop\_delta\_min

(PECL fann >= 1.0.0)

fann\_get\_rprop\_delta\_min — Retorna o tamanho mínimo do passo

### Descrição

function **fann\_get\_rprop\_delta\_min**([resource](language.types.resource.md) `$ann`): [float](language.types.float.md)

O tamanho mínimo do passo é um número pequeno positivo que determina o quão baixo o tamanho mínimo do passo pode ser.

O valor padrão para o mínimo é 0.0.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

### Valor Retornado

O tamanho mínimo do passo, ou **`false`** em caso de erro.

### Veja também

- [fann\_set\_rprop\_delta\_min()](function.fann-set-rprop-delta-min.md) - Define o tamanho mínimo do passo

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
