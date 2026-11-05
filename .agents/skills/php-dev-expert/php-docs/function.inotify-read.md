# Lê eventos de uma instância do Inotify

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.inotify-read.php

---

# inotify\_read

(PECL inotify >= 0.1.2)

inotify\_read — Lê eventos de uma instância do Inotify

### Descrição

function **inotify\_read**([resource](language.types.resource.md) `$inotify_instance`): [array](language.types.array.md)

Lê eventos do Inotify de uma instância do Inotify.

### Parâmetros

`inotify_instance`
:   Um resource retornado por
    [inotify\_init()](function.inotify-init.md)

### Valor Retornado

Um array de eventos Inotify ou **`false`** se nenhum evento estiver pendente e
`inotify_instance` for não-bloqueante. Cada evento é um array com as seguintes chaves:

- "wd" é um descritor de monitoramento retornado por
  [inotify\_add\_watch()](function.inotify-add-watch.md)
- "mask" é uma máscara de bits de [eventos](inotify.constants.md)
- "cookie" é um ID exclusivo para conectar eventos relacionados (ex.: **`IN_MOVE_FROM`**
  e **`IN_MOVE_TO`**)
- "name" é o nome de um arquivo (ex.: se um arquivo foi modificado em um
  diretório monitorado)

### Veja também

- [inotify\_init()](function.inotify-init.md) - Inicializa uma instância do Inotify
- [stream\_select()](function.stream-select.md) - Executa o equivalente à chamada de sistema select() nos arrays de fluxos
  informados com um limite de tempo especificado por segundos e microssegundos
- [stream\_set\_blocking()](function.stream-set-blocking.md) - Definir modo de bloqueio/não-bloqueio em um fluxo
- [inotify\_queue\_len()](function.inotify-queue-len.md) - Retorna um número maior que zero se houver eventos pendentes

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
