# Obtém o numerador da porcentagem de conclusão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmantask.tasknumerator.php

---

# GearmanTask::taskNumerator

(PECL gearman >= 0.5.0)

GearmanTask::taskNumerator — Obtém o numerador da porcentagem de conclusão

### Descrição

public function **GearmanTask::taskNumerator**(): [false](language.types.singleton.md)|[int](language.types.integer.md)

Retorna o numerador da porcentagem da tarefa concluída, expressa como uma fração.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um número entre 0 e 100, ou **`false`** se não puder ser determinado.

### Veja também

- [GearmanTask::taskDenominator()](gearmantask.taskdenominator.md) - Obtém o denominador percentual de conclusão

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
