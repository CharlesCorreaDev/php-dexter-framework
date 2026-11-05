# Cancela o registro de um nome de função com os servidores de trabalho

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmanworker.unregister.php

---

# GearmanWorker::unregister

(PECL gearman >= 0.6.0)

GearmanWorker::unregister — Cancela o registro de um nome de função com os servidores de trabalho

### Descrição

public function **GearmanWorker::unregister**([string](language.types.string.md) `$function_name`): [bool](language.types.boolean.md)

Cancela o registro de um nome de função com os servidores de trabalho, garantindo que nenhum outro trabalho (para essa
função) seja enviado a este trabalhador.

### Parâmetros

`function_name`
:   O nome de uma função para registrar no servidor de trabalho

### Valor Retornado

Um valor de retorno padrão do Gearman.

### Veja também

- [GearmanWorker::register()](gearmanworker.register.md) - Registra uma função com o servidor de trabalho
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
