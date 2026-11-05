# Obtém o nome da função associada (descontinuado)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmantask.function.php

---

# GearmanTask::function

(PECL gearman <= 0.5.0)

GearmanTask::function — Obtém o nome da função associada (descontinuado)

### Descrição

public function **GearmanTask::function**(): [string](language.types.string.md)

Retorna o nome da função à qual esta tarefa está associada, ou seja, a função
que o trabalhador Gearman chama.

> **Nota**:
>
> Este método foi substituído por [GearmanTask::functionName()](gearmantask.functionname.md) na
> versão 0.6.0 da extensão Gearman.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um nome de função.

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
