# Retorna o máximo de épocas da saída

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-get-cascade-max-out-epochs.php

---

# fann\_get\_cascade\_max\_out\_epochs

(PECL fann >= 1.0.0)

fann\_get\_cascade\_max\_out\_epochs — Retorna o máximo de épocas da saída

### Descrição

function **fann\_get\_cascade\_max\_out\_epochs**([resource](language.types.resource.md) `$ann`): [int](language.types.integer.md)

O máximo de épocas da saída determina o número máximo de épocas que as conexões de saída podem ser
treinadas depois de adicionar um novo candidato neurônio.

O máximo padrão de épocas da saída é 150.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

### Valor Retornado

O máximo de épocas da saída, ou **`false`** em caso de erro.

### Veja também

- [fann\_set\_cascade\_max\_out\_epochs()](function.fann-set-cascade-max-out-epochs.md) - Define o máximo de épocas de saída

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
