# Adiciona servidores de trabalho

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmanworker.addservers.php

---

# GearmanWorker::addServers

(PECL gearman >= 0.5.0)

GearmanWorker::addServers — Adiciona servidores de trabalho

### Descrição

public function **GearmanWorker::addServers**([string](language.types.string.md) `$servers` = **`null`**, [bool](language.types.boolean.md) `$setupExceptionHandler` = **`true`**): [bool](language.types.boolean.md)

Adiciona um ou mais servidores de trabalho a este trabalhador. Eles vão para uma lista de servidores que podem ser usados
para executar trabalhos. Nenhuma E/S de soquete acontece aqui.

### Parâmetros

`servers`
:   Uma lista separada por vírgulas de servidores de trabalho no formato host:porta. Se nenhuma porta for
    especificada, o padrão é 4730.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Adicionando dois servidores de trabalho**

```
<?php

$worker= new GearmanWorker();
$worker->addServers("10.0.0.1,10.0.0.2:7003");

?>
```

### Veja também

- [GearmanWorker::addServer()](gearmanworker.addserver.md) - Adiciona um servidor de trabalho

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
