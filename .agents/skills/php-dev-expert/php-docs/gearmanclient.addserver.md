# Adiciona um servidor de tarefa ao cliente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmanclient.addserver.php

---

# GearmanClient::addServer

(PECL gearman >= 0.5.0)

GearmanClient::addServer — Adiciona um servidor de tarefa ao cliente

### Descrição

public function **GearmanClient::addServer**([string](language.types.string.md) `$host` = **`null`**, [int](language.types.integer.md) `$port` = 0, [bool](language.types.boolean.md) `$setupExceptionHandler` = **`true`**): [bool](language.types.boolean.md)

Adiciona um servidor de tarefa a uma lista de servidores que podem ser usados ​​para executar uma tarefa. Nenhuma E/S de
soquete acontece aqui; o servidor é simplesmente adicionado à lista.

### Parâmetros

`host`
:   O nome do servidor de trabalho.

`port`
:   A porta do servidor de trabalho.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Adicionando dois servidores de tarefa**

```
<?php

# Cria nosso objeto cliente.
$gmclient= new GearmanClient();

# Adiciona dois servidores de tarefa, o primeiro na porta padrão 4730
$gmclient->addServer("10.0.0.1");
$gmclient->addServer("10.0.0.2", 7003);

?>
```

### Veja também

- [GearmanClient::addServers()](gearmanclient.addservers.md) - Adiciona uma lista de servidores de tarefa ao cliente

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
