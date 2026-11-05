# Retorna um número maior que zero se houver eventos pendentes

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.inotify-queue-len.php

---

# inotify\_queue\_len

(PECL inotify >= 0.1.2)

inotify\_queue\_len — Retorna um número maior que zero se houver eventos pendentes

### Descrição

function **inotify\_queue\_len**([resource](language.types.resource.md) `$inotify_instance`): [int](language.types.integer.md)

Esta função permite saber se [inotify\_read()](function.inotify-read.md) irá bloquear ou não.
Se um número maior que zero for retornado, há eventos pendentes e
[inotify\_read()](function.inotify-read.md) não irá bloquear.

### Parâmetros

`inotify_instance`
:   Um resource retornado por
    [inotify\_init()](function.inotify-init.md)

### Valor Retornado

Retorna um número maior que zero se houver eventos pendentes.

### Veja também

- [inotify\_init()](function.inotify-init.md) - Inicializa uma instância do Inotify
- [stream\_select()](function.stream-select.md) - Executa o equivalente à chamada de sistema select() nos arrays de fluxos
  informados com um limite de tempo especificado por segundos e microssegundos
- [stream\_set\_blocking()](function.stream-set-blocking.md) - Definir modo de bloqueio/não-bloqueio em um fluxo

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
