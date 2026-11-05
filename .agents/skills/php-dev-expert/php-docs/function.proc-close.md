# Fecha pipes a um processo aberto por proc_open, aguarda seu encerramento e retorna seu código de saída

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.proc-close.php

---

# proc\_close

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

proc\_close — Fecha pipes a um processo aberto por [proc\_open()](function.proc-open.md), aguarda seu encerramento e retorna seu código de saída

### Descrição

function **proc\_close**([resource](language.types.resource.md) `$process`): [int](language.types.integer.md)

**proc\_close()** é similar a [pclose()](function.pclose.md)
exceto por funcionar somente em processos abertos por
[proc\_open()](function.proc-open.md).
**proc\_close()** espera o processo terminar e retorna
seu código de saída. Tubos abertos a esse processo são fechados
quando esta função é chamada para evitar
um beco sem saída - o processo filho pode não ser capaz de sair
enquanto os tubos estão abertos.

### Parâmetros

`process`
:   O recurso do tipo [resource](language.types.resource.md) gerado por [proc\_open()](function.proc-open.md) que será
    fechado.

### Valor Retornado

Retorna o estado de término do processo que estava em execução. Em caso de
um erro, `-1` é retornado.

> **Nota**:
>
> Se o PHP foi compilado com --enable-sigchild, o valor retornado por esta função é indefinido.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0 | **proc\_close()** agora retorna o código de saída correto mesmo depois que [proc\_get\_status()](function.proc-get-status.md) tenha sido chamada previamente. Anteriormente, `-1` era retornado nesse caso. |

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
