# Obtem informação sobre um processo aberto por proc_open

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.proc-get-status.php

---

# proc\_get\_status

(PHP 5, PHP 7, PHP 8)

proc\_get\_status — Obtem informação sobre um processo aberto por [proc\_open()](function.proc-open.md)

### Descrição

function **proc\_get\_status**([resource](language.types.resource.md) `$process`): [array](language.types.array.md)

**proc\_get\_status()** obtém dados sobre um
processo aberto usando [proc\_open()](function.proc-open.md).

### Parâmetros

`process`
:   O recurso to tipo [resource](language.types.resource.md) gerado por [proc\_open()](function.proc-open.md) que será
    avaliado.

### Valor Retornado

Um [array](language.types.array.md) com a informação coletada.
O array retornado contém os seguintes elementos:

| elemento | type | descrição |
| --- | --- | --- |
| command | [string](language.types.string.md) | A string de comando que foi passada para [proc\_open()](function.proc-open.md). |
| pid | [int](language.types.integer.md) | Id do processo |
| running | [bool](language.types.boolean.md) | **`true`** se o processo ainda está sendo executado, **`false`** se ele terminou. |
| signaled | [bool](language.types.boolean.md) | **`true`** se o processo filho terminou por um sinal não capturado. Sempre definido como **`false`** no Windows. |
| stopped | [bool](language.types.boolean.md) | **`true`** se o processo filho foi parado por um sinal. Sempre definido como **`false`** no Windows. |
| exitcode | [int](language.types.integer.md) | O código de saída retornado pelo processo (que é significativo somente se `running` for **`false`**). Antes do PHP 8.3.0, apenas a primeira chamada a esta função retornava o valor real, a chamada seguinte retornava `-1`. |
| cached | [bool](language.types.boolean.md) | A partir do PHP 8.3.0, isto é **`true`** quando o código de saída está em cache. O cache é necessário para garantir que o código de saída não é perdido por chamadas subsequentes a APIs de processos. |
| termsig | [int](language.types.integer.md) | O número do sinal que fez o processo filho terminar a sua execução (somente significativo se `signaled` for **`true`**) |
| stopsig | [int](language.types.integer.md) | O número do sinal que fez o processo filho terminar a sua execução (somente significativo se `stopped` for **`true`**) |

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0 | A entrada `"cached"` foi adicionada ao array retornado. Antes do PHP 8.3.0, apenas a primeira chamada retornava o código de saída real. A entrada `"cached"` indica que o código de saída foi armazenado em cache. |

### Veja também

- [proc\_open()](function.proc-open.md) - Executa um comando e abre ponteiros de arquivo para entrada/saída

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
