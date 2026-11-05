# Envia um evento CTRL a outro processo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sapi-windows-generate-ctrl-event.php

---

# sapi\_windows\_generate\_ctrl\_event

(PHP 7 >= 7.4.0, PHP 8)

sapi\_windows\_generate\_ctrl\_event — Envia um evento CTRL a outro processo

### Descrição

function **sapi\_windows\_generate\_ctrl\_event**([int](language.types.integer.md) `$event`, [int](language.types.integer.md) `$pid` = 0): [bool](language.types.boolean.md)

Envia um evento CTRL a outro processo no mesmo grupo de processos.

### Parâmetros

`event`
:   O evento `CTRL` a enviar;
    pode ser **`PHP_WINDOWS_EVENT_CTRL_C`**
    ou **`PHP_WINDOWS_EVENT_CTRL_BREAK`**.

`pid`
:   O ID do processo ao qual deve-se enviar o evento. Se `0`
    for informado, o evento é enviado a todos os processos do mesmo grupo.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Uso Básico de **sapi\_windows\_generate\_ctrl\_event()****

Este exemplo mostra como passar eventos `CTRL+BREAK` para um processo
filho. Neste caso, o processo filho mostra `Ainda estou vivo`
a cada segundo, até que o usuário pressione `CTRL+BREAK`, o que faz com
que apenas o processo filho seja terminado.

```
<?php
// envia eventos CTRL+BREAK para o processo filho
sapi_windows_set_ctrl_handler('sapi_windows_generate_ctrl_event');

// cria um processo filho que mostra uma mensagem a cada segundo
$cmd = ['php', '-r', 'while (true) { echo "Ainda estou vivo\n"; sleep(1); }'];
$descspec = array(['pipe', 'r'], ['pipe', 'w'], ['pipe', 'w']);
$options = ['create_process_group' => true];
$proc = proc_open($cmd, $descspec, $pipes, null, null, $options);
while (true) {
    echo fgets($pipes[1]);
}
?>
```

### Veja também

- [proc\_open()](function.proc-open.md) - Executa um comando e abre ponteiros de arquivo para entrada/saída
- [sapi\_windows\_set\_ctrl\_handler()](function.sapi-windows-set-ctrl-handler.md) - Define ou remove um manipulador de evento CTRL

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
