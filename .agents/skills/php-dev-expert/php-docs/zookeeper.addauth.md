# Especifica credenciais da aplicação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/zookeeper.addauth.php

---

# Zookeeper::addAuth

(PECL zookeeper >= 0.1.0)

Zookeeper::addAuth — Especifica credenciais da aplicação

### Descrição

public
function **Zookeeper::addAuth**([string](language.types.string.md) `$scheme`, [string](language.types.string.md) `$cert`, [callable](language.types.callable.md) `$completion_cb` = **`null`**): [bool](language.types.boolean.md)

A aplicação chama esta função para especificar suas credenciais para fins de autenticação. O servidor usará o provedor de segurança especificado pelo parâmetro "schema" para autenticar a conexão do cliente. Se a solicitação de autenticação falhar:
a conexão com o servidor será interrompida e
o observador será chamado com o valor ZOO\_AUTH\_FAILED\_STATE como parâmetro de estado.

### Parâmetros

`scheme`
:   O ID do esquema de autenticação. Suporte nativo: autenticação baseada em senha "digest".

`cert`
:   Credenciais da aplicação. O valor real depende do esquema.

`completion_cb`
:   A rotina a ser invocada quando a solicitação for concluída. Um dos seguintes códigos de resultado pode ser passado para o retorno de chamada de conclusão:
    ZOK - operação concluída com sucesso -
    ou ZAUTHFAILED - falha na autenticação.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Este método emite erro/aviso PHP quando a contagem ou os tipos de parâmetros estão errados ou a operação falha.

**Cuidado**

Desde a versão 0.3.0, este método emite [ZookeeperException](class.zookeeperexception.md) e seus derivados.

### Examples

**Exemplo #1 Exemplo de **Zookeeper::addAuth()****

Adicionando autenticação antes de solicitar valor do nó.

```
<?php
$zookeeper = new Zookeeper('localhost:2181');
$path = '/path/to/node';
$value = 'nodevalue';
$zookeeper->set($path, $value);

$zookeeper->addAuth('digest', 'user0:passwd0');
$r = $zookeeper->get($path);
if ($r)
  echo $r;
else
  echo 'ERR';
?>
```

O exemplo acima produzirá:

```
nodevalue
```

### Veja também

- [Zookeeper::create()](zookeeper.create.md) - Cria um nó de forma síncrona
- [Zookeeper::setAcl()](zookeeper.setacl.md) - Define a ACL associada a um nó de forma síncrona
- [Zookeeper::getAcl()](zookeeper.getacl.md) - Obtém a ACL associada a um nó de forma síncrona
- [Estados ZooKeeper](class.zookeeper.md#zookeeper.constants.states)
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
