# Adiciona um monitoramento a uma instância Inotify inicializada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.inotify-add-watch.php

---

# inotify\_add\_watch

(PECL inotify >= 0.1.2)

inotify\_add\_watch — Adiciona um monitoramento a uma instância Inotify inicializada

### Descrição

function **inotify\_add\_watch**([resource](language.types.resource.md) `$inotify_instance`, [string](language.types.string.md) `$pathname`, [int](language.types.integer.md) `$mask`): [int](language.types.integer.md)|[false](language.types.singleton.md)

**inotify\_add\_watch()** adiciona um novo monitoramento ou modifica um
monitoramento existente para o arquivo ou diretório especificado em
`pathname`.

Usar **inotify\_add\_watch()** em um objeto monitorado substitui
o monitoramento existente. Usar a constante **`IN_MASK_ADD`**
adiciona eventos (com o operador OR) ao monitoramento existente.

### Parâmetros

`inotify_instance`
:   Um resource retornado por
    [inotify\_init()](function.inotify-init.md)

`pathname`
:   Arquivo ou diretório a ser monitorado.

`mask`
:   Eventos a serem monitorados. Consulte [Constantes Predefinidas](inotify.constants.md).

### Valor Retornado

O valor de retorno é um descritor de monitoramento exclusivo (em toda a instância do Inotify),
ou **`false`** em caso de falha.

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
