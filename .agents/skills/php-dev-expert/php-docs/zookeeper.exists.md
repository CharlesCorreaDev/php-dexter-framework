# Verifica a existência de um nó no zookeeper de forma síncrona

> **Fonte / Source:** https://www.php.net/manual/pt_BR/zookeeper.exists.php

---

# Zookeeper::exists

(PECL zookeeper >= 0.1.0)

Zookeeper::exists — Verifica a existência de um nó no zookeeper de forma síncrona

### Descrição

public
function **Zookeeper::exists**([string](language.types.string.md) `$path`, [callable](language.types.callable.md) `$watcher_cb` = **`null`**): [array](language.types.array.md)

### Parâmetros

`path`
:   O nome do nó. Expresso como um nome de arquivo com barras separando os ancestrais do nó.

`watcher_cb`
:   Se diferente de zero, um alerta será definido no servidor para notificar o cliente se o nó mudar. O alerta será definido mesmo que o nó não mude.

### Valor Retornado

Retorna o valor de stat para o caminho se o nó fornecido existir, caso contrário, false.

### Erros/Exceções

Este método emite erro/aviso PHP quando a contagem ou os tipos de parâmetros estão errados ou falham em verificar a existência de um nó.

**Cuidado**

Desde a versão 0.3.0, este método emite [ZookeeperException](class.zookeeperexception.md) e seus derivados.

### Examples

**Exemplo #1 Exemplo de **Zookeeper::exists()****

Verificando a existência de um nó.

```
<?php
$zookeeper = new Zookeeper('localhost:2181');
$path = '/path/to/node';
$r = $zookeeper->exists($path);
if ($r)
  echo 'EXISTE';
else
  echo 'N/A ou ERRO';
?>
```

O exemplo acima produzirá:

```
EXISTE
```

### Veja também

- [Zookeeper::get()](zookeeper.get.md) - Obtém os dados associados a um nó de forma síncrona
- [ZookeeperException](class.zookeeperexception.md)

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
