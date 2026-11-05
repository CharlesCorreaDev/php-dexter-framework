# Retorna o mínimo de épocas de candidatos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-get-cascade-min-cand-epochs.php

---

# fann\_get\_cascade\_min\_cand\_epochs

(PECL fann >= 1.0.0)

fann\_get\_cascade\_min\_cand\_epochs — Retorna o mínimo de épocas de candidatos

### Descrição

function **fann\_get\_cascade\_min\_cand\_epochs**([resource](language.types.resource.md) `$ann`): [int](language.types.integer.md)

O mínimo de épocas de candidatos determina o número mínimo de épocas que as conexões de entrada
aos candidatos podem ser treinadas antes de adicionar um novo neurônio candidato.

O mínimo padrão de épocas de candidatos é 50.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

### Valor Retornado

O mínimo de épocas de candidatos, ou **`false`** em caso de erro.

### Notas

> **Nota**:
>
> Esta função só estará disponível se a extensão fann tiver sido compilada usando a biblioteca libfann >= 2.2.

### Veja também

- [fann\_set\_cascade\_min\_cand\_epochs()](function.fann-set-cascade-min-cand-epochs.md) - Define o mínimo de épocas de candidatos

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
