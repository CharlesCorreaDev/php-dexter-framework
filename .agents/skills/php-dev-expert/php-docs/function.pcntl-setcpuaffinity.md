# Define a afinidade de CPU de um processo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pcntl-setcpuaffinity.php

---

# pcntl\_setcpuaffinity

(PHP 8 >= 8.4.0)

pcntl\_setcpuaffinity — Define a afinidade de CPU de um processo

### Descrição

function **pcntl\_setcpuaffinity**([?](language.types.null.md)[int](language.types.integer.md) `$process_id` = **`null`**, [array](language.types.array.md) `$cpu_ids` = []): [bool](language.types.boolean.md)

Define a afinidade de CPU para `process_id` com a máscara de afinidade informada em
`cpu_ids`.

### Parâmetros

`process_id`
:   Se **`null`**, o ID do processo atual será usado.

`cpu_ids`
:   A máscara de afinidade de CPU consistindo em uma ou mais IDs de CPU para vincular o processo.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Uma exceção [TypeError](class.typeerror.md) é lançada se uma
das IDs de CPU de `cpu_ids` for inválida.
Uma exceção [ValueError](class.valueerror.md) é lançada se
`process_id` for um ID de processo inválido
ou se a houver erro na criação da máscara.

### Veja também

- [pcntl\_getcpuaffinity()](function.pcntl-getcpuaffinity.md) - Obtém a afinidade de CPU de um processo

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
