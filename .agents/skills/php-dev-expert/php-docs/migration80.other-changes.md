# Outras mudanças

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration80.other-changes.php

---

## Outras mudanças

### Alterações nos Módulos SAPI

#### Apache2Handler

O módulo PHP foi renomeado de `php7_module` para
`php_module`.

### Funções alteradas

#### Reflection

Os resultados de [ReflectionClass::getConstants()](reflectionclass.getconstants.md) e
[ReflectionClass::getReflectionConstants()](reflectionclass.getreflectionconstants.md) agora podem ser filtrados por meio
de um novo `filter` de parâmetro. Três novas constantes foram adicionadas para serem usadas com ele:

- **`ReflectionClassConstant::IS_PUBLIC`**
- **`ReflectionClassConstant::IS_PROTECTED`**
- **`ReflectionClassConstant::IS_PRIVATE`**

#### Padrão

As funções matemáticas [abs()](function.abs.md), [ceil()](function.ceil.md),
[floor()](function.floor.md) e [round()](function.round.md) agora atendem adequadamente à
diretiva [`strict_types`](language.types.declarations.md#language.types.declarations.strict).
Anteriormente, eles coagiam o primeiro argumento mesmo no modo de tipo estrito.

#### Zip

- Os métodos [ZipArchive::addGlob()](ziparchive.addglob.md) e
  [ZipArchive::addPattern()](ziparchive.addpattern.md) aceitam mais valores no argumento do
  array de `options`:

  - `flags`
  - `comp_method`
  - `comp_flags`
  - `env_method`
  - `enc_password`
- Os métodos [ZipArchive::addEmptyDir()](ziparchive.addemptydir.md), [ZipArchive::addFile()](ziparchive.addfile.md)
  e [ZipArchive::addFromString()](ziparchive.addfromstring.md)
  possuem um novo argumento `flags`. Isso permite gerenciar a codificação de nomes
  (**`ZipArchive::FL_ENC_*`**) e a substituição de entradas
  (**`ZipArchive::FL_OVERWRITE`**).
- [ZipArchive::extractTo()](ziparchive.extractto.md) agora restaura o tempo de modificação do arquivo.

### Outras alterações nas extensões

#### CURL

- A extensão CURL agora requer pelo menos libcurl 7.29.0.
- O parâmetro descontinuado `version` de [curl\_version()](function.curl-version.md)
  foi removido.

#### Data e Horário

[DatePeriod](class.dateperiod.md) agora implementa [IteratorAggregate](class.iteratoraggregate.md)
(em vez de [Traversable](class.traversable.md)).

#### DOM

[DOMNamedNodeMap](class.domnamednodemap.md) e [DOMNodeList](class.domnodelist.md) agora implementam
[IteratorAggregate](class.iteratoraggregate.md) (em vez de
[Traversable](class.traversable.md)).

#### Intl

[IntlBreakIterator](class.intlbreakiterator.md) e [ResourceBundle](class.resourcebundle.md) agora implementam
[IteratorAggregate](class.iteratoraggregate.md) (em vez de [Traversable](class.traversable.md)).

#### Enchant

A extensão enchant agora usa libenchant-2 por padrão quando disponível. libenchant versão 1 ainda é
suportada, mas foi descontinuada e pode ser removida no futuro.

#### GD

- O parâmetro `num_points` de [imagepolygon()](function.imagepolygon.md),
  [imageopenpolygon()](function.imageopenpolygon.md) e [imagefilledpolygon()](function.imagefilledpolygon.md) agora é
  opcional, ou seja, essas funções podem ser chamadas com 3 ou 4 argumentos. Se o argumento for
  omitido, será calculado como `count($points)/2`.
- A função [imagegetinterpolation()](function.imagegetinterpolation.md) para obter o método de interpolação atual
  foi adicionada.

#### JSON

A extensão JSON não pode mais ser desativada e é sempre parte integrante de qualquer compilação do PHP,
semelhante à extensão de data.

#### MBString

As tabelas de dados Unicode foram atualizadas para a versão 13.0.0.

#### PDO

[PDOStatement](class.pdostatement.md) agora implementa
[IteratorAggregate](class.iteratoraggregate.md) (em vez de
[Traversable](class.traversable.md)).

#### LibXML

A versão mínima necessária do libxml agora é 2.9.0. Isso significa que o carregamento de entidade externa agora
está desativado por padrão e nenhuma etapa extra precisa ser tomada para proteger contra
ataques XXE.

#### MySQLi / PDO MySQL

- Quando mysqlnd não é usado (que é a opção padrão e recomendada), a versão mínima suportada do
  libmysqlclient agora é 5.5.
- [mysqli\_result](class.mysqli-result.md) agora implementa
  [IteratorAggregate](class.iteratoraggregate.md) (ao invés de
  [Traversable](class.traversable.md)).

#### PGSQL / PDO PGSQL

As extensões PGSQL e PDO PGSQL agora requerem pelo menos libpq 9.1.

#### Readline

Chamar [readline\_completion\_function()](function.readline-completion-function.md) antes do início do prompt interativo
(por exemplo, em [auto\_prepend\_file](ini.core.md#ini.auto-prepend-file)) agora substituirá a
função padrão de conclusão do prompt interativo. Anteriormente,
[readline\_completion\_function()](function.readline-completion-function.md) só funcionava quando chamado após iniciar o
prompt interativo.

#### SimpleXML

[SimpleXMLElement](class.simplexmlelement.md) agora implementa
[RecursiveIterator](class.recursiveiterator.md) e absorveu a funcionalidade de
[SimpleXMLIterator](class.simplexmliterator.md). [SimpleXMLIterator](class.simplexmliterator.md) é uma
extensão vazia de [SimpleXMLElement](class.simplexmlelement.md).

### Alterações na manipulação de arquivos INI

- com.dotnet\_version
  é uma nova diretiva INI para escolher a versão da estrutura .NET a ser usada para
  objetos [dotnet](class.dotnet.md).
- zend.exception\_string\_param\_max\_len
  é uma nova diretiva INI para definir o comprimento máximo da string em um argumento de uma
  string de pilha stringificada.

### EBCDIC

Os destinos EBCDIC não são mais suportados, embora seja improvável que ainda
estivessem funcionando.

### Desempenho

- Um compilador Just-In-Time (JIT) foi adicionado à extensão opcache.
- [array\_slice()](function.array-slice.md) em um array sem lacunas não irá mais varrer todo o array
  para encontrar a posição inicial. Isso pode reduzir significativamente o tempo de execução
  da função com grandes deslocamentos e pequenos comprimentos.
- [strtolower()](function.strtolower.md) agora usa uma implementação SIMD ao usar a localidade
  **`LC_CTYPE`** `"C"` (que é o padrão).

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
