# Adiciona um servidor de trabalho

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmanworker.addserver.php

---

# GearmanWorker::addServer

(PECL gearman >= 0.5.0)

GearmanWorker::addServer — Adiciona um servidor de trabalho

### Descrição

public function **GearmanWorker::addServer**([string](language.types.string.md) `$host` = **`null`**, [int](language.types.integer.md) `$port` = 0, [bool](language.types.boolean.md) `$setupExceptionHandler` = **`true`**): [bool](language.types.boolean.md)

Adiciona um servidor de trabalho a este trabalhador. Isso vai para uma lista de servidores que podem ser usados ​​para executar trabalhos.
Nenhuma E/S de soquete acontece aqui.

### Parâmetros

`host`
:   O nome do servidor de trabalho.

`port`
:   A porta do servidor de trabalho.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Adicionando servidores Gearman alternativos**

```
<?php
$worker= new GearmanWorker();
$worker->addServer("10.0.0.1");
$worker->addServer("10.0.0.2", 7003);
?>
```

### Veja também

- [GearmanWorker::addServers()](gearmanworker.addservers.md) - Adiciona servidores de trabalho

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
