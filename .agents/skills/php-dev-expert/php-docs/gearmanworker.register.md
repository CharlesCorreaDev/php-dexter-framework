# Registra uma função com o servidor de trabalho

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmanworker.register.php

---

# GearmanWorker::register

(PECL gearman >= 0.6.0)

GearmanWorker::register — Registra uma função com o servidor de trabalho

### Descrição

public function **GearmanWorker::register**([string](language.types.string.md) `$function_name`, [int](language.types.integer.md) `$timeout` = 0): [bool](language.types.boolean.md)

Registra um nome de função com o servidor de trabalho com um tempo limite opcional. O tempo limite
especifica quantos segundos o servidor esperará antes de marcar um trabalho como falhado.
Se o tempo limite for definido como zero, não há tempo limite.

### Parâmetros

`function_name`
:   O nome de uma função para registrar no servidor de trabalho

`timeout`
:   Um intervalo de tempo em segundos

### Valor Retornado

Um valor de retorno padrão do Gearman.

### Veja também

- [GearmanWorker::unregister()](gearmanworker.unregister.md) - Cancela o registro de um nome de função com os servidores de trabalho
- [GearmanWorker::unregisterAll()](gearmanworker.unregisterall.md) - Cancela o registro de todos os nomes de funções com os servidores de trabalho

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
