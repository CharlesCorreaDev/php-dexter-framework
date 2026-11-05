# Obtém o nome da função

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmanjob.functionname.php

---

# GearmanJob::functionName

(PECL gearman >= 0.5.0)

GearmanJob::functionName — Obtém o nome da função

### Descrição

public function **GearmanJob::functionName**(): [false](language.types.singleton.md)|[string](language.types.string.md)

Retorna o nome da função para este trabalho. Esta é a função que o trabalhador usará para executar
este trabalho.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O nome de uma função, ou **`false`** se o trabalho ainda não foi inicializado.

### Veja também

- [GearmanTask::function()](gearmantask.function.md) - Obtém o nome da função associada (descontinuado)

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
