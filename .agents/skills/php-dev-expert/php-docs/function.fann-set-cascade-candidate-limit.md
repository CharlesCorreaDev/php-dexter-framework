# Define o limite de candidatos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-set-cascade-candidate-limit.php

---

# fann\_set\_cascade\_candidate\_limit

(PECL fann >= 1.0.0)

fann\_set\_cascade\_candidate\_limit — Define o limite de candidatos

### Descrição

function **fann\_set\_cascade\_candidate\_limit**([resource](language.types.resource.md) `$ann`, [float](language.types.float.md) `$cascade_candidate_limit`): [bool](language.types.boolean.md)

Define o limite de candidatos.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

`cascade_candidate_limit`
:   O limite de candidatos.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** caso contrário.

### Veja também

- [fann\_get\_cascade\_candidate\_limit()](function.fann-get-cascade-candidate-limit.md) - Retorna o limite de candidato

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
