# Adiciona uma lista de servidores de tarefa ao cliente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmanclient.addservers.php

---

# GearmanClient::addServers

(PECL gearman >= 0.5.0)

GearmanClient::addServers — Adiciona uma lista de servidores de tarefa ao cliente

### Descrição

public function **GearmanClient::addServers**([string](language.types.string.md) `$servers` = **`null`**, [bool](language.types.boolean.md) `$setupExceptionHandler` = **`true`**): [bool](language.types.boolean.md)

Adiciona uma lista de servidores de tarefa que podem ser usados ​​para executar uma tarefa. Nenhuma E/S de soquete acontece aqui;
os servidores são simplesmente adicionados à lista completa de servidores.

### Parâmetros

`servers`
:   Uma lista de servidores separados por vírgulas, cada servidor especificado no formato '`host:porta`'.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Adiciona dois servidores de tarefa**

```
<?php

# Cria nosso objeto cliente.
$gmclient= new GearmanClient();

# Adiciona vários servidores de tarefa, o primeiro na porta padrão 4730
$gmclient->addServers("10.0.0.1,10.0.0.2:7003");

?>
```

### Veja também

- [GearmanClient::addServer()](gearmanclient.addserver.md) - Adiciona um servidor de tarefa ao cliente

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
