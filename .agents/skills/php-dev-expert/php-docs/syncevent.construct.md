# Constrói um novo objeto SyncEvent

> **Fonte / Source:** https://www.php.net/manual/pt_BR/syncevent.construct.php

---

# SyncEvent::\_\_construct

(PECL sync >= 1.0.0)

SyncEvent::\_\_construct — Constrói um novo objeto SyncEvent

### Descrição

public function **SyncEvent::\_\_construct**([string](language.types.string.md) `$name` = ?, [bool](language.types.boolean.md) `$manual` = **`false`**, [bool](language.types.boolean.md) `$prefire` = **`false`**)

Constrói um objeto de evento nomeado ou sem nome.

### Parâmetros

`name`
:   O nome do evento se este for um objeto de evento nomeado.

    > **Nota**:
    >
    > Se o nome já existir, ele deve poder ser aberto pelo usuário atual que
    > o processo está executando, caso contrário uma exceção será lançada com uma
    > mensagem de erro sem sentido.

`manual`
:   Especifica se o objeto de evento deve ser redefinido manualmente ou não.

    > **Nota**:
    >
    > Objetos de evento com redefinição manual permitem que todos os processos em espera passem até que o
    > objeto seja redefinido.

`prefire`
:   Especifica se o objeto de evento deve ser pré-ativado (sinalizado) ou não.

    > **Nota**:
    >
    > Só tem impacto se o processo/thread chamador for o primeiro a criar o objeto.

### Valor Retornado

O novo objeto [SyncEvent](class.syncevent.md).

### Erros/Exceções

Uma exceção é lançada se o objeto de evento não puder ser criado ou aberto.

### Examples

**Exemplo #1 Exemplo de **SyncEvent::\_\_construct()****

```
<?php
// Em uma aplicação web:
$event = new SyncEvent("GetAppReport");
$event->fire();

// Em um cron job:
$event = new SyncEvent("GetAppReport");
$event->wait();
?>
```

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL sync 1.1.0 | Adicionado `prefire`. |

### Veja também

- [SyncEvent::fire()](syncevent.fire.md) - Ativa/configura o evento
- [SyncEvent::reset()](syncevent.reset.md) - Redefine um evento manual
- [SyncEvent::wait()](syncevent.wait.md) - Espera o evento ser ativado/configurado

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
