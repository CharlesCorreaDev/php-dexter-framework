# Recursos Descontinuados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration83.deprecated.php

---

## Recursos Descontinuados

### Núcleo do PHP

#### Operadores de incremento/decremento mais seguros

O uso do operador de [incremento](language.operators.increment.md)
(`++`) em strings vazias, não numéricas
ou não alfanuméricas foi agora descontinuado.
Além disso, o incremento de strings não numéricas é considerado quase descontinuado.
Isso significa que nenhum diagnóstico de **`E_DEPRECATED`** é emitido,
mas esse recurso não deve ser usado ao criar novo código.
Em vez disso, deve ser usado a nova função [str\_increment()](function.str-increment.md).

O uso do operador de [decremento](language.operators.increment.md)
(`--`) em strings vazias ou não numéricas foi agora descontinuado.

#### Chamada de get\_class()/get\_parent\_class() sem argumentos

Chamar [get\_class()](function.get-class.md) e [get\_parent\_class()](function.get-parent-class.md)
sem argumentos foi agora descontinuado.

### DBA

Chamar [dba\_fetch()](function.dba-fetch.md) com `dba` como o
terceiro argumento foi agora descontinuado.

### FFI

Chamar [FFI::cast()](ffi.cast.md), [FFI::new()](ffi.new.md) e
[FFI::type()](ffi.type.md) de forma estática foi agora descontinuado.

### Intl

A constante **`U_MULTIPLE_DECIMAL_SEP*E*RATORS`**
foi descontinuada, recomenda-se usar a constante
**`U_MULTIPLE_DECIMAL_SEP*A*RATORS`**
em seu lugar.

A constante **`NumberFormatter::TYPE_CURRENCY`** foi descontinuada.

### LDAP

Chamar [ldap\_connect()](function.ldap-connect.md) com
`hostname` e `port` separados foi
descontinuado.

### MBString

Passar um valor negativo para `width` em
[mb\_strimwidth()](function.mb-strimwidth.md) agora foi descontinuado.

### Phar

Chamar [Phar::setStub()](phar.setstub.md) com um
[resource](language.types.resource.md) e um `length`
foi descontinuado. Tais chamadas devem ser substituídas por:
`$phar->setStub(stream_get_contents($resource));`

### Random

A variante **`MT_RAND_PHP`** Mt19937 foi descontinuada.

### Reflection

Chamar [ReflectionProperty::setValue()](reflectionproperty.setvalue.md) com apenas um
parâmetro foi descontinuado.
Para definir propriedades estáticas, passe **`null`** como o primeiro parâmetro.

### Standard

A função [assert\_options()](function.assert-options.md) foi agora descontinuada.

As constantes **`ASSERT_ACTIVE`**, **`ASSERT_BAIL`**,
**`ASSERT_CALLBACK`**, **`ASSERT_EXCEPTION`**,
e **`ASSERT_WARNING`** foram descontinuadas.

As configurações `assert.*` no INI foram descontinuadas.
Consulte a página
[Alterações no Tratamento de Arquivos INI](migration83.other-changes.md#migration83.other-changes.ini)
para obter mais detalhes.

### SQLite3

O uso de exceções agora é preferido, e os avisos serão removidos no futuro.
Chamar `SQLite3::enableExceptions(false)` desencadeará um
aviso de descontinuação nesta versão.

### Zip

A constante **`ZipArchive::FL_RECOMPRESS`** foi descontinuada
e será removida em uma versão futura do libzip.

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
