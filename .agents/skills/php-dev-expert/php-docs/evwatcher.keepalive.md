# Configura opção de impedir que o laço retorne

> **Fonte / Source:** https://www.php.net/manual/pt_BR/evwatcher.keepalive.php

---

# EvWatcher::keepalive

(PECL ev >= 0.2.0)

EvWatcher::keepalive — Configura opção de impedir que o laço retorne

### Descrição

public
function **EvWatcher::keepalive**(
[bool](language.types.boolean.md) `$value`
 = ?): [bool](language.types.boolean.md)

Configura opção de impedir que o laço retorne. Com o valor
de `value`
definido para **`false`**, o observador não impedirá que
[Ev::run()](ev.run.md)
/
[EvLoop::run()](evloop.run.md)
retorne mesmo que o observador esteja ativo.

Observadores têm o valor de
`value`
como **`true`** por padrão.

Limpar o status deste valor ao retornar de
[Ev::run()](ev.run.md)
/
[EvLoop::run()](evloop.run.md)
só por causa do observador não é desejável. Pode ser devido a um
observador de soquete UDP de longa execução ou algo similar.

### Parâmetros

`value`
:   Com
    `value`
    definido para **`false`**, o observador não impedirá que
    [Ev::run()](ev.run.md)
    /
    [EvLoop::run()](evloop.run.md)
    retorne mesmo que o observador esteja ativo.

### Valor Retornado

Retorna o estado anterior.

### Examples

**Exemplo #1 Registra um observador de E/S para algum soquete UDP, mas não impede que o laço
de eventos seja executado apenas por causa desse observador.**

```
<?php
$udp_socket = ...
$udp_watcher = new EvIo($udp_socket, Ev::READ, function () { /* ... */ });
$udp_watcher->keepalive(FALSE);
?>
```

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
