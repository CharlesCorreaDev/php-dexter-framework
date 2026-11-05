# Observadores

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ev.watchers.php

---

# Observadores

Um observador é um objeto criado para registrar o interesse em algum evento.
Por exemplo, o código a seguir espera que
**`STDIN`**
se torne legível:

```
<?php
// Espera até que STDIN esteja disponível para leitura
$w = new EvIo(STDIN, Ev::READ, function ($watcher, $revents) {
 echo "STDIN pode ser lida\n";
});
Ev::run(Ev::RUN_ONCE);
?>
```

Todos os construtores de observadores iniciam automaticamente os observadores.
Os métodos `createStopped`
criam observadores parados (por exemplo,
[EvIo::createStopped()](evio.createstopped.md)).

Observe que um observador será interrompido automaticamente quando o objeto watcher for
destruído. Portanto, os objetos watcher retornados pelos construtores
ou métodos de fábrica devem ser mantidos.

Observe também que todos os métodos que alteram alguma propriedade do observador (
*set*,
priority
etc.) param automaticamente e iniciam-no novamente se estiver ativo, o que significa que
os eventos pendentes são perdidos.

Veja também:
[Retornos de chamada do observador](ev.watcher-callbacks.md).

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
