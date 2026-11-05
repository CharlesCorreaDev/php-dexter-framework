# Remove um monitoramento existente de uma instância do Inotify

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.inotify-rm-watch.php

---

# inotify\_rm\_watch

(PECL inotify >= 0.1.2)

inotify\_rm\_watch — Remove um monitoramento existente de uma instância do Inotify

### Descrição

function **inotify\_rm\_watch**([resource](language.types.resource.md) `$inotify_instance`, [int](language.types.integer.md) `$watch_descriptor`): [bool](language.types.boolean.md)

**inotify\_rm\_watch()** remove o monitoramento
`watch_descriptor` da instância
`inotify_instance` no Inotify.

### Parâmetros

`inotify_instance`
:   Um resource retornado por
    [inotify\_init()](function.inotify-init.md)

`watch_descriptor`
:   Monitoramento a ser removido da instância.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [inotify\_init()](function.inotify-init.md) - Inicializa uma instância do Inotify

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
