# Obtém o denominador percentual de conclusão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmantask.taskdenominator.php

---

# GearmanTask::taskDenominator

(PECL gearman >= 0.5.0)

GearmanTask::taskDenominator — Obtém o denominador percentual de conclusão

### Descrição

public function **GearmanTask::taskDenominator**(): [false](language.types.singleton.md)|[int](language.types.integer.md)

Retorna o denominador da porcentagem da tarefa concluída, expressa como uma fração.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um número entre 0 e 100, ou **`false`** se não puder ser determinado.

### Veja também

- [GearmanTask::taskNumerator()](gearmantask.tasknumerator.md) - Obtém o numerador da porcentagem de conclusão

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
