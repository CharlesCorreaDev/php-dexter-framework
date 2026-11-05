# A classe Yaf_Config_Ini

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.yaf-config-ini.php

---

# A classe Yaf\_Config\_Ini

(Yaf >=1.0.0)

## Introdução

Yaf\_Config\_Ini permite que os desenvolvedores armazenem dados de configuração em um
formato INI familiar e os leiam no aplicativo usando sintaxe de propriedade de
objeto aninhado. O formato INI é especializado para fornecer a capacidade
de ter uma hierarquia de chaves de dados de configuração e herança entre
seções de dados de configuração. As hierarquias de dados de configuração são suportadas
separando as chaves com o caractere ponto ("."). Uma seção
pode estender ou herdar de outra seção seguindo o nome da seção
com dois pontos (":") e o nome da seção da qual os dados
serão herdados.
> **Nota**:
>
> Yaf\_Config\_Ini utiliza a função PHP parse\_ini\_file(). Revise
> esta documentação para estar ciente de seus comportamentos específicos, que se propagam
> para Yaf\_Config\_Ini, e sobre como os valores especiais de "**`true`**", "**`false`**",
> "yes", "no" e "**`null`**" são manipulados.

## Resumo da classe

class **Yaf\_Config\_Ini**

extends
[Yaf\_Config\_Abstract](class.yaf-config-abstract.md)
implements
[Iterator](class.iterator.md), [ArrayAccess](class.arrayaccess.md), [Countable](class.countable.md) {

/\* Propriedades \*/

/\* Métodos \*/

public function [\_\_construct](yaf-config-ini.construct.md)([string](language.types.string.md) `$config_file`, [string](language.types.string.md) `$section` = ?)

public function [count](yaf-config-ini.count.md)(): [void](language.types.void.md)

public function [current](yaf-config-ini.current.md)(): [void](language.types.void.md)

public function [\_\_get](yaf-config-ini.get.md)([string](language.types.string.md) `$name` = ?): [void](language.types.void.md)

public function [\_\_isset](yaf-config-ini.isset.md)([string](language.types.string.md) `$name`): [void](language.types.void.md)

public function [key](yaf-config-ini.key.md)(): [void](language.types.void.md)

public function [next](yaf-config-ini.next.md)(): [void](language.types.void.md)

public function [offsetExists](yaf-config-ini.offsetexists.md)([string](language.types.string.md) `$name`): [void](language.types.void.md)

public function [offsetGet](yaf-config-ini.offsetget.md)([string](language.types.string.md) `$name`): [void](language.types.void.md)

public function [offsetSet](yaf-config-ini.offsetset.md)([string](language.types.string.md) `$name`, [string](language.types.string.md) `$value`): [void](language.types.void.md)

public function [offsetUnset](yaf-config-ini.offsetunset.md)([string](language.types.string.md) `$name`): [void](language.types.void.md)

public function [readonly](yaf-config-ini.readonly.md)(): [void](language.types.void.md)

public function [rewind](yaf-config-ini.rewind.md)(): [void](language.types.void.md)

public function [\_\_set](yaf-config-ini.set.md)([string](language.types.string.md) `$name`, [mixed](language.types.mixed.md) `$value`): [void](language.types.void.md)

public function [toArray](yaf-config-ini.toarray.md)(): [array](language.types.array.md)

public function [valid](yaf-config-ini.valid.md)(): [void](language.types.void.md)

/\* Métodos herdados \*/

abstract public function [Yaf\_Config\_Abstract::get](yaf-config-abstract.get.md)([string](language.types.string.md) `$name`, [mixed](language.types.mixed.md) `$value`): [mixed](language.types.mixed.md)

abstract public function [Yaf\_Config\_Abstract::readonly](yaf-config-abstract.readonly.md)(): [bool](language.types.boolean.md)

abstract public function [Yaf\_Config\_Abstract::set](yaf-config-abstract.set.md)(): [Yaf\_Config\_Abstract](class.yaf-config-abstract.md)

abstract public function [Yaf\_Config\_Abstract::toArray](yaf-config-abstract.toarray.md)(): [array](language.types.array.md)

}

## Propriedades

\_config

\_readonly

## Examples

**Exemplo #1 Exemplo de **Yaf\_Config\_Ini()****

Este exemplo ilustra um uso básico de Yaf\_Config\_Ini para carregar
dados de configuração de um arquivo INI. Neste exemplo, existem
dados de configuração para um sistema de produção e para um sistema de testes.
Como os dados de configuração do sistema de testes são muito semelhantes aos
da produção, a seção de testes herda da seção de produção.
Neste caso, a decisão é arbitrária e poderia ter sido escrita
de forma inversa, com a seção de produção herdando da seção de
testes, embora este possa não ser o caso para situações mais complexas.
Suponha, então, que os seguintes dados de configuração estejam contidos em
/caminho/para/config.ini:

```
; Dados de configuração do site de produção
[producao]
webhost                  = www.example.com
database.adapter         = pdo_mysql
database.params.host     = db.example.com
database.params.username = dbuser
database.params.password = secret
database.params.dbname   = dbname

; Os dados de configuração do site de teste herdam da produção e
; substituem os valores conforme necessário
[testes : producao]
database.params.host     = dev.example.com
database.params.username = devuser
database.params.password = devsecret
```

```
<?php
$config = new Yaf_Config_Ini('/caminho/para/config.ini', 'testes');

var_dump($config->database->params->host);
var_dump($config->database->params->dbname);
var_dump($config->get("database.params.username"));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(15) "dev.example.com"
string(6) "dbname"
string(7) "devuser"
```

## Índice

- [Yaf\_Config\_Ini::\_\_construct](yaf-config-ini.construct.md) — Construtor de Yaf\_Config\_Ini
- [Yaf\_Config\_Ini::count](yaf-config-ini.count.md) — Conta todos os elementos de Yaf\_Config.ini
- [Yaf\_Config\_Ini::current](yaf-config-ini.current.md) — Obtém o valor atual
- [Yaf\_Config\_Ini::\_\_get](yaf-config-ini.get.md) — Obtém um elemento
- [Yaf\_Config\_Ini::\_\_isset](yaf-config-ini.isset.md) — Determina se uma chave existe
- [Yaf\_Config\_Ini::key](yaf-config-ini.key.md) — Busca a chave do elemento atual
- [Yaf\_Config\_Ini::next](yaf-config-ini.next.md) — Avança o ponteiro interno
- [Yaf\_Config\_Ini::offsetExists](yaf-config-ini.offsetexists.md) — offsetExists
- [Yaf\_Config\_Ini::offsetGet](yaf-config-ini.offsetget.md) — offsetGet
- [Yaf\_Config\_Ini::offsetSet](yaf-config-ini.offsetset.md) — offsetSet
- [Yaf\_Config\_Ini::offsetUnset](yaf-config-ini.offsetunset.md) — offsetUnset
- [Yaf\_Config\_Ini::readonly](yaf-config-ini.readonly.md) — readonly
- [Yaf\_Config\_Ini::rewind](yaf-config-ini.rewind.md) — rewind
- [Yaf\_Config\_Ini::\_\_set](yaf-config-ini.set.md) — \_\_set
- [Yaf\_Config\_Ini::toArray](yaf-config-ini.toarray.md) — Retorna a configuração como um array PHP
- [Yaf\_Config\_Ini::valid](yaf-config-ini.valid.md) — valid

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
