# Recursos descontinuados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration80.deprecated.php

---

## Recursos descontinuados

### Núcleo do PHP

- Se um parâmetro com um valor padrão é seguido por um parâmetro obrigatório, o valor padrão não tem
  efeito. Essa funcionalidade está descontinuada a partir do PHP 8.0.0 e geralmente pode ser resolvido eliminando o
  valor padrão, sem mudança na funcionalidade:

  ```
  <?php
  function test($a = [], $b) {} // Antes
  function test($a, $b) {}      // Depois
  ?>
  ```

  Uma exceção à esta regra são os parâmetros escritos da seguinte forma: `Type $param = null`, onde
  o valor padrão nulo torna o tipo implicitamente anulável. Este uso continua permitido, mas é
  recomendado o uso de um tipo anulável explícito:

  ```
  <?php
  function test(A $a = null, $b) {} // Ainda é permitido
  function test(?A $a, $b) {}       // Recomendável
  ?>
  ```
- Chamar a função [get\_defined\_functions()](function.get-defined-functions.md) com o parâmetro `exclude_disabled`
  definido explicitamente como **`false`** está descontinuado e não tem mais efeito.
  A função [get\_defined\_functions()](function.get-defined-functions.md) nunca incluirá funções desabilitadas.

### Enchant

- [enchant\_broker\_set\_dict\_path()](function.enchant-broker-set-dict-path.md) e
  [enchant\_broker\_get\_dict\_path()](function.enchant-broker-get-dict-path.md)
  estão descontinuadas, porque essa funcionalidade não está disponível no libenchant < 1.5 nem na
  libenchant-2.
- [enchant\_dict\_add\_to\_personal()](function.enchant-dict-add-to-personal.md) está descontinuada; use
  [enchant\_dict\_add()](function.enchant-dict-add.md) em seu lugar.
- [enchant\_dict\_is\_in\_session()](function.enchant-dict-is-in-session.md) está descontinuada; use
  [enchant\_dict\_is\_added()](function.enchant-dict-is-added.md) em seu lugar.
- [enchant\_broker\_free()](function.enchant-broker-free.md) e [enchant\_broker\_free\_dict()](function.enchant-broker-free-dict.md) estão
  descontinuadas; em vez disso destrua/unset o objeto.
- As constantes **`ENCHANT_MYSPELL`** e **`ENCHANT_ISPELL`** estão
  descontinuadas.

### LibXML

A função [libxml\_disable\_entity\_loader()](function.libxml-disable-entity-loader.md) foi descontinuada. Como a libxml 2.9.0 agora é
obrigatória, o carregamento de entidade externa está desabilitado por padrão, e esta função
não é mais necessária para a proteção contra ataques XXE, a não ser que a (ainda vulnerável).
**`LIBXML_NOENT`** for utilizada.
Nesse caso, é recomendado refazer o código utilizando
[libxml\_set\_external\_entity\_loader()](function.libxml-set-external-entity-loader.md) para suprimir o carregamento de entidades externas.

### PGSQL / PDO PGSQL

- A constante **`PGSQL_LIBPQ_VERSION_STR`** agora tem o mesmo valor que
  **`PGSQL_LIBPQ_VERSION`**, portanto, está descontinuada.
- Os apelidos de função na extensão pgsql foram descontinuados.
  Consulte a lista abaixo para saber quais funções devem ser usadas em seu lugar:

  - **pg\_errormessage()** → [pg\_last\_error()](function.pg-last-error.md)
  - **pg\_numrows()** → [pg\_num\_rows()](function.pg-num-rows.md)
  - **pg\_numfields()** → [pg\_num\_fields()](function.pg-num-fields.md)
  - **pg\_cmdtuples()** → [pg\_affected\_rows()](function.pg-affected-rows.md)
  - **pg\_fieldname()** → [pg\_field\_name()](function.pg-field-name.md)
  - **pg\_fieldsize()** → [pg\_field\_size()](function.pg-field-size.md)
  - **pg\_fieldtype()** → [pg\_field\_type()](function.pg-field-type.md)
  - **pg\_fieldnum()** → [pg\_field\_num()](function.pg-field-num.md)
  - **pg\_result()** → [pg\_fetch\_result()](function.pg-fetch-result.md)
  - **pg\_fieldprtlen()** → [pg\_field\_prtlen()](function.pg-field-prtlen.md)
  - **pg\_fieldisnull()** → [pg\_field\_is\_null()](function.pg-field-is-null.md)
  - **pg\_freeresult()** → [pg\_free\_result()](function.pg-free-result.md)
  - **pg\_getlastoid()** → [pg\_last\_oid()](function.pg-last-oid.md)
  - **pg\_locreate()** → [pg\_lo\_create()](function.pg-lo-create.md)
  - **pg\_lounlink()** → [pg\_lo\_unlink()](function.pg-lo-unlink.md)
  - **pg\_loopen()** → [pg\_lo\_open()](function.pg-lo-open.md)
  - **pg\_loclose()** → [pg\_lo\_close()](function.pg-lo-close.md)
  - **pg\_loread()** → [pg\_lo\_read()](function.pg-lo-read.md)
  - **pg\_lowrite()** → [pg\_lo\_write()](function.pg-lo-write.md)
  - **pg\_loreadall()** → [pg\_lo\_read\_all()](function.pg-lo-read-all.md)
  - **pg\_loimport()** → [pg\_lo\_import()](function.pg-lo-import.md)
  - **pg\_loexport()** → [pg\_lo\_export()](function.pg-lo-export.md)
  - **pg\_setclientencoding()** → [pg\_set\_client\_encoding()](function.pg-set-client-encoding.md)
  - **pg\_clientencoding()** -> [pg\_client\_encoding()](function.pg-client-encoding.md)

### Biblioteca Padrão

- Funções sort que retornam **`true`** ou **`false`** agora lançam um aviso de descontinuação, e
  deve ser substituído por uma implementação que retorna um número inteiro menor, igual ou maior
  que zero.

  ```
  <?php
  // Substituir
  usort($array, fn($a, $b) => $a > $b);
  // Por
  usort($array, fn($a, $b) => $a <=> $b);
  ?>
  ```

### Zip

- Usar um arquivo vazio como ZipArchive está descontinuado. A Libzip 1.6.0 não aceita mais arquivos vazios como
  arquivos zip válidos. A solução alternativa existente será removida na próxima versão.
- A API procedural do Zip está descontinuada. Use [ZipArchive](class.ziparchive.md) em seu lugar.
  A iteração em todas as entradas pode ser realizada usando [ZipArchive::statIndex()](ziparchive.statindex.md)
  e um laço [for](control-structures.for.md):

  ```
  <?php
  // iterar usando a API procedural
  assert(is_resource($zip));
  while ($entry = zip_read($zip)) {
      echo zip_entry_name($entry);
  }

  // iterar usando a API orientada a objetos
  assert($zip instanceof ZipArchive);
  for ($i = 0; $entry = $zip->statIndex($i); $i++) {
      echo $entry['name'];
  }
  ?>
  ```

### Reflection

- O método [ReflectionFunction::isDisabled()](reflectionfunction.isdisabled.md) está descontinuado, pois não é mais
  possível criar uma classe [ReflectionFunction](class.reflectionfunction.md) para uma função desativada. Este
  método agora sempre retorna **`false`**.
- [ReflectionParameter::getClass()](reflectionparameter.getclass.md),
  [ReflectionParameter::isArray()](reflectionparameter.isarray.md), e
  [ReflectionParameter::isCallable()](reflectionparameter.iscallable.md) estão descontinuados.
  [ReflectionParameter::getType()](reflectionparameter.gettype.md) e
  [ReflectionType](class.reflectiontype.md) devem ser usados em seu lugar.

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
