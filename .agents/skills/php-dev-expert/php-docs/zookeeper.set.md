# Define os dados associados a um nó

> **Fonte / Source:** https://www.php.net/manual/pt_BR/zookeeper.set.php

---

# Zookeeper::set

(PECL zookeeper >= 0.1.0)

Zookeeper::set — Define os dados associados a um nó

### Descrição

public
function **Zookeeper::set**(  
    [string](language.types.string.md) `$path`,  
    [string](language.types.string.md) `$value`,  
    [int](language.types.integer.md) `$version` = -1,  
    [array](language.types.array.md) `&$stat` = **`null`**  
): [bool](language.types.boolean.md)

### Parâmetros

`path`
:   O nome do nó. Expresso como um nome de arquivo com barras separando os ancestrais do nó.

`value`
:   Os dados a serem armazenados no nó.

`version`
:   A versão esperada do nó. A função falhará se a versão real do nó não corresponder à versão esperada. Se -1 for usado, a verificação de versão não ocorrerá.

`stat`
:   Se não for NULL, manterá o valor de stat para o caminho no retorno.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Este método emite erro/aviso PHP quando a contagem ou os tipos de parâmetros estão errados ou falham ao salvar o valor no nó.

**Cuidado**

Desde a versão 0.3.0, este método emite [ZookeeperException](class.zookeeperexception.md) e seus derivados.

### Examples

**Exemplo #1 Exemplo de **Zookeeper::set()****

Definindo o valor em um nó.

```
<?php
$zookeeper = new Zookeeper('localhost:2181');
$path = '/path/to/node';
$value = 'nodevalue';
$r = $zookeeper->set($path, $value);
if ($r)
  echo 'SUCESSO';
else
  echo 'ERRO';
?>
```

O exemplo acima produzirá:

```
SUCESSO
```

### Veja também

- [Zookeeper::create()](zookeeper.create.md) - Cria um nó de forma síncrona
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
