# Obtém o nome da função associada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmantask.functionname.php

---

# GearmanTask::functionName

(PECL gearman >= 0.6.0)

GearmanTask::functionName — Obtém o nome da função associada

### Descrição

public function **GearmanTask::functionName**(): [false](language.types.singleton.md)|[string](language.types.string.md)

Retorna o nome da função à qual esta tarefa está associada, ou seja, a função
que o trabalhador Gearman chama.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um nome de função ou **`false`** se a tarefa ainda não foi criada.

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
