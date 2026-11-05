# Obtém o identificador do trabalho

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmanjob.handle.php

---

# GearmanJob::handle

(PECL gearman >= 0.5.0)

GearmanJob::handle — Obtém o identificador do trabalho

### Descrição

public function **GearmanJob::handle**(): [false](language.types.singleton.md)|[string](language.types.string.md)

Retorna o identificador opaco de trabalho atribuído pelo servidor.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um identificador de trabalho opaco ou **`false`** se o trabalho ainda não foi inicializado.

### Veja também

- [GearmanTask::jobHandle()](gearmantask.jobhandle.md) - Obtém o identificador do trabalho

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
