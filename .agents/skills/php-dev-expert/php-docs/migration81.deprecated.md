# Funcionalidades descontinuadas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration81.deprecated.php

---

## Funcionalidades descontinuadas

### Núcleo do PHP

#### Implementar [Serializable](class.serializable.md) sem **\_\_serialize()** e **\_\_unserialize()**

Apenas os novos métodos devem ser implementados, se nenhum suporte para PHP
anterior à versão 7.4 for fornecido, ou ambos devem ser implementados.

#### Passar **`null`** para parâmetros não não-anuláveis de funções embutidas

Tipos escalares para funções embutidas são anuláveis por padrão.
Esse comportamento está descontinuado para alinhar com o comportamento de funções definidas
pelo usuário, onde tipos escalares precisam ser explicitamente marcados como anuláveis.

```
<?php
var_dump(str_contains("foobar", null));
// Deprecated: Passing null to parameter #2 ($needle) of type string
//             is deprecated
?>
```

#### Conversões [float](language.types.float.md) para [int](language.types.integer.md) incompatíveis implícitas

A conversão implícita de [float](language.types.float.md) para [int](language.types.integer.md) que
leva a uma perda de precisão agora está descontinuada.
Isso afeta chaves de [array](language.types.array.md), Declarações do tipo [int](language.types.integer.md) no modo coercitivo,
e operadores trabalhando em [int](language.types.integer.md)s.

```
<?php
$a = [];
$a[15.5]; // descontinuado, pois o valor da chave perde o componente de 0.5
$a[15.0]; // ok, pois 15.0 == 15
?>
```

#### Chamar o elemento static em um trait

Chamar um método static ou acessar uma
propriedade static diretamente em um trait foi descontinuado.
Métodos estáticos e propriedades estáticas somente devem ser acessados em uma classe usando o trait.

#### Retornar um não-[array](language.types.array.md) da **\_\_sleep()**

Retornar um valor que não é um [array](language.types.array.md) da
[\_\_sleep()](language.oop5.magic.md#object.sleep) agora gera um diagnóstico.

#### Retornar por referência de uma função [void](language.types.void.md)

```
<?php
function &test(): void {}
?>
```

Essa função é contraditória, e já emite o seguinte
**`E_NOTICE`** quando chamada:
`Only variable references should be returned by reference`.

#### Autovivificação a partir de **`false`**

Autovivificação é o processo de criar um novo [array](language.types.array.md) ao
acrescentar um valor.
Autovivificação é proibida a partir de valores escalares, **`false`**, no entanto
era uma exceção. Isso está descontinuado agora.

```
<?php
$arr = false;
$arr[] = 2;   // descontinuado
?>
```

> **Nota**:
>
> Autovivificação a partir de **`null`** e valores não indefinidos ainda é permitida:
>
> ```
> <?php
> // A partir de indefinido
> $arr[] = 'some value';
> $arr['doesNotExist'][] = 2;
> // A partir de null
> $arr = null;
> $arr[] = 2;
> ?>
> ```

### ctype

#### Verificar argumentos não-string

Passar um argumento não-string está descontinuado.
No futuro, o argumento será interpretado como uma string em vez
de um codepoint ASCII.
Dependendo do comportamento pretendido, o argumento deve ser
convertido para [string](language.types.string.md) ou uma chamada explícita para
[chr()](function.chr.md) deve ser feita.
Todas as funções `ctype_*()` são afetadas.

### Data

[date\_sunrise()](function.date-sunrise.md) e [date\_sunset()](function.date-sunset.md)
foram descontinuadas em favor de [date\_sun\_info()](function.date-sun-info.md).

[strptime()](function.strptime.md) foi descontinuada.
Use [date\_parse\_from\_format()](function.date-parse-from-format.md) em vez dela (para análise independente de localidade),
ou [IntlDateFormatter::parse()](intldateformatter.parse.md) (para análise dependente de localidade).

[strftime()](function.strftime.md) e [gmstrftime()](function.gmstrftime.md) foram descontinuadas.
Em vez delas, use [date()](function.date.md) (para formatação independente de localidade),
ou [IntlDateFormatter::format()](intldateformatter.format.md) (para formatação dependente de localidade).

### Filtros

Os filtros **`FILTER_SANITIZE_STRING`** e
**`FILTER_SANITIZE_STRIPPED`** estão descontinuados.

A diretiva INI [filter.default](filter.configuration.md#ini.filter.default)
está descontinuada.

### GD

O `num_points` da [imagepolygon()](function.imagepolygon.md),
[imageopenpolygon()](function.imageopenpolygon.md) e [imagefilledpolygon()](function.imagefilledpolygon.md)
foi descontinuado.

### Hash

As funções [mhash()](function.mhash.md),
[mhash\_keygen\_s2k()](function.mhash-keygen-s2k.md),
[mhash\_count()](function.mhash-count.md),
[mhash\_get\_block\_size()](function.mhash-get-block-size.md)
e [mhash\_get\_hash\_name()](function.mhash-get-hash-name.md) foram descontinuadas.
Use as funções `hash_*()` no lugar delas.

### IMAP

A constante **`NIL`** foi descontinuada.
Use `0` em vez dela.

### Intl

Chamar [IntlCalendar::roll()](intlcalendar.roll.md) com um
argumento [bool](language.types.boolean.md) está descontinuado.
Use `1` e `-1` em vez de
**`true`** e **`false`** respectivamente.

### Multibyte String

Chamar [mb\_check\_encoding()](function.mb-check-encoding.md) sem argumentos
está descontinuado.

### MySQLi

A propriedade [mysqli\_driver::$driver\_version](class.mysqli-driver.md#mysqli-driver.props.driver-version)
foi descontinuada.
Ela era sem sentido e desatualizada, use **`PHP_VERSION_ID`**
em vez dela.

Chamar [mysqli::get\_client\_info()](mysqli.get-client-info.md) ou
[mysqli\_get\_client\_info()](mysqli.get-client-info.md) com o
argumento `mysqli` foi descontinuado.
Chame [mysqli\_get\_client\_info()](mysqli.get-client-info.md) sem argumentos
para obter a informação de versão da biblioteca cliente.

O método [mysqli::init()](mysqli.init.md) foi descontinuado.
Substitua chamadas para **parent::init()** por
**parent::\_\_construct()**.

### OCI8

A diretiva INI [oci8.old\_oci\_close\_semantics](oci8.configuration.md#ini.oci8.old-oci-close-semantics)
está descontinuada.

### ODBC

[odbc\_result\_all()](function.odbc-result-all.md) foi descontinuada.

### PDO

O modo de busca **`PDO::FETCH_SERIALIZE`** foi descontinuado.

### PgSQL

Não passar o argumento de conexão para todas as funções `pgsql_*()`
foi descontinuado.

### SOAP

A opção `ssl_method` do
[SoapClient::\_\_construct()](soapclient.construct.md) foi descontinuada
em favor das opções de contexto de fluxo SSL.

### Biblioteca Padrão

Chamar [key()](function.key.md), [current()](function.current.md),
[next()](function.next.md), [prev()](function.prev.md),
[reset()](function.reset.md), ou [end()](function.end.md)
em [object](language.types.object.md)s está descontinuado.
Primeiro converta o [object](language.types.object.md) para um [array](language.types.array.md) utilizando [get\_mangled\_object\_vars()](function.get-mangled-object-vars.md),
ou utilize os métodos fornecidos por uma classe que implemente
[Iterator](class.iterator.md), como por exemplo [ArrayIterator](class.arrayiterator.md).

A diretiva INI [auto\_detect\_line\_endings](filesystem.configuration.md#ini.auto-detect-line-endings)
está descontinuada.
Se necessário, em vez dela, lide com quebras de linha `"\r"` manualmente.

As constantes **`FILE_BINARY`** e
**`FILE_TEXT`** foram descontinuadas.
Elas nunca tiveram nenhum efeito.

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
