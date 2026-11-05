# Recursos Descontinuados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration84.deprecated.php

---

## Recursos Descontinuados

### Núcleo do PHP

#### Parâmetro implicitamente anulável

O tipo de um parâmetro é implicitamente ampliado para aceitar [null](language.types.null.md)
se o valor padrão para ele for **`null`**.

O código a seguir:

```
<?php
function foo(T1 $a = null) {}
```

deve ser convertido para:

```
<?php
function foo(T1|null $a = null) {}
```

ou

```
<?php
function foo(?T1 $a = null) {}
```

No entanto, se tal declaração de parâmetro for seguida por um parâmetro
mandatório:

```
<?php
function foo(T1 $a, T2 $b = null, T3 $c) {}
```

Precisa ser convertido para:

```
<?php
function foo(T1 $a, T2|null $b, T3 $c) {}
```

ou

```
<?php
function foo(T1 $a, ?T2 $b, T3 $c) {}
```

já que posicionar parâmetro opcional antes de parâmetros requeridos foi descontinuado.

#### Elevando zero à potência negativa

Elevar um número à potência de um número negativo equivale a elevar
o inverso do número ao oposto positivo da potência.
Isto é, `10-2` é o mesmo que
`1 / 102`.
Portanto, elevar `0` à potência de um número negativo
corresponde a dividir por `0`, ou seja,
`0-2` é o mesmo que
`1 / 02`, ou
`1 / 0`. Sendo assim, esse comportamento foi descontinuado.

Isso afeta o operador de exponenciação `**`
e a função [pow()](function.pow.md).

Se a intenção for usar a semântica da IEEE 754, deve-se usar a nova
função [fpow()](function.fpow.md).

#### Usando sublinhado `_` como nome de classe

Nomear uma classe como `_` foi descontinuado:

```
<?php
class _ {}
```

> **Nota**:
>
> Classes cujos nomes iniciam com um sublinhado *não*
> foram descontinuadas:
>
> ```
> <?php
> class _MyClass {}
> ```

#### Usando [trigger\_error()](function.trigger-error.md) com **`E_USER_ERROR`**

Chamar [trigger\_error()](function.trigger-error.md) com
`error_level` igual a
**`E_USER_ERROR`** foi descontinuado.

Tais usos devem ser substituídos pelo lançamento de uma exceção
ou pela chamada a [exit()](function.exit.md), o que for mais apropriado.

#### A constante **`E_STRICT`**

Como o nível de erro **`E_STRICT`** foi removido,
esta constante foi descontinuada.

### cURL

A constante **`CURLOPT_BINARYTRANSFER`** foi descontinuada.

### Date

A assinatura  `DatePeriod::__construct(string $isostr, int $options = 0)`
foi descontinuada.
Use [DatePeriod::createFromISO8601String()](dateperiod.createfromiso8601string.md) em seu lugar.

As constantes **`SUNFUNCS_RET_TIMESTAMP`**,
**`SUNFUNCS_RET_STRING`**,
e **`SUNFUNCS_RET_DOUBLE`** foram descontinuadas.
Isto deriva da descontinuação das funções [date\_sunset()](function.date-sunset.md) e
[date\_sunrise()](function.date-sunrise.md) no PHP 8.1.0.

### DBA

Passar **`null`** ou **`false`** para [dba\_key\_split()](function.dba-key-split.md) foi
descontinuado.
A função sempre retorna **`false`** nesses casos.

### DOM

A constante **`DOM_PHP_ERR`** foi descontinuada.

As seguintes propriedades foram formalmente descontinuadas:

- [DOMDocument::$actualEncoding](class.domdocument.md#domdocument.props.actualencoding)
- [DOMDocument::$config](class.domdocument.md#domdocument.props.config)
- [DOMEntity::$actualEncoding](class.domentity.md#domentity.props.actualencoding)
- [DOMEntity::$encoding](class.domentity.md#domentity.props.encoding)
- [DOMEntity::$version](class.domentity.md#domentity.props.version)

### Hash

Passar opções inválidas para funções hash foi descontinuado.

### Intl

Chamar a função **intlcal\_set()** ou
o método [IntlCalendar::set()](intlcalendar.set.md)
com mais de dois argumentos foi descontinuado.
Use [IntlCalendar::setDate()](intlcalendar.setdate.md) ou
[IntlCalendar::setDateTime()](intlcalendar.setdatetime.md) alternativamente.

Chamar a função **intlgregcal\_create\_instance()** ou
o método [IntlGregorianCalendar::\_\_construct()](intlgregoriancalendar.construct.md)
com mais de dois argumentos foi descontinuado.
Use [IntlGregorianCalendar::createFromDate()](intlgregoriancalendar.createfromdate.md) ou
[IntlGregorianCalendar::createFromDateTime()](intlgregoriancalendar.createfromdatetime.md) alternativamente.

### LDAP

Chamar [ldap\_connect()](function.ldap-connect.md)
com mais de dois argumentos foi descontinuado.
Use [ldap\_connect\_wallet()](function.ldap-connect-wallet.md) instead.

Chamar [ldap\_exop()](function.ldap-exop.md)
com mais de quatro argumentos foi descontinuado.
Use [ldap\_exop\_sync()](function.ldap-exop-sync.md) em seu lugar.

### MySQLi

A função [mysqli\_ping()](mysqli.ping.md) e o
método [mysqli::ping()](mysqli.ping.md)
foram descontinuados devido ao recurso de reconexão ter sido removido no PHP 8.2.0.

A função [mysqli\_kill()](mysqli.kill.md) e o
método [mysqli::kill()](mysqli.kill.md)
foram descontinuados.
Se esta funcionalidade for necessária, um comando SQL `KILL`
pode ser usado alternativamente.

A função [mysqli\_refresh()](mysqli.refresh.md)
e o método[mysqli::refresh()](mysqli.refresh.md)
foram descontinuados.
Se esta funcionalidade for necessária, um comando SQL `FLUSH`
pode ser usado alternativamente.
Todas as constantes **`MYSQLI_REFRESH_*`**
também foram descontinuadas.

Passar explicitamente o parâmetro `mode`
a função [mysqli\_store\_result()](mysqli.store-result.md) foi descontinuado.
Como a constante **`MYSQLI_STORE_RESULT_COPY_DATA`** era
usada somente em conjunto com esta função, ela também foi descontinuada.

### PDO\_PGSQL

Usar pontos de interrogação escapados (`??`) dentro de
strings envolvidas por cifrão foi descontinuado.
Como o PDO\_PGSQL agora tem seu próprio analisador SQL com suporte a strings envolvidas
com cifrão, não é mais necessário escapar pontos de interrogação dentro delas.

### PGSQL

As assinaturas de 2 argumentos das funções [pg\_fetch\_result()](function.pg-fetch-result.md),
[pg\_field\_prtlen()](function.pg-field-prtlen.md) e
[pg\_field\_is\_null()](function.pg-field-is-null.md) foram descontinuadas.
Alternativamente, devem ser usadas as assinaturas de 3 argumentos com `row` definido para
**`null`**.

### Random

[lcg\_value()](function.lcg-value.md) foi descontinuada,
já que esta função foi quebrada de várias maneiras.
Alternativamente, o método [Random\Randomizer::getFloat()](random-randomizer.getfloat.md) deve ser usado.

### Reflection

Chamar [ReflectionMethod::\_\_construct()](reflectionmethod.construct.md)
com um argumento foi descontinuado.
Alternativamente, o método [ReflectionMethod::createFromMethodName()](reflectionmethod.createfrommethodname.md) deve ser usado.

### Session

Chamar [session\_set\_save\_handler()](function.session-set-save-handler.md)
com mais de dois argumentos foi descontinuado.
Alternativamente, a assinatura com dois argumentos deve ser usada.

Alterar o valor das configurações INI
[`session.sid_length`](session.configuration.md#ini.session.sid-length) e
[`session.sid_bits_per_character`](session.configuration.md#ini.session.sid-bits-per-character)
foi descontinuado.
Alternativamente, deve-se atualizar o mecanismo de armazenamento de sessão para aceitar
IDs de sessão hexadecimais de 32 caracteres e parar de alterar essas duas configurações INI.

Alterar o valor das configurações INI
[`session.use_only_cookies`](session.configuration.md#ini.session.use-only-cookies),
[`session.use_trans_sid`](session.configuration.md#ini.session.use-trans-sid),
[`session.trans_sid_tags`](session.configuration.md#ini.session.trans-sid-tags),
[`session.trans_sid_hosts`](session.configuration.md#ini.session.trans-sid-hosts) e
[`session.referer_check`](session.configuration.md#ini.session.referer-check)
foi descontinuado.
A constante **`SID`** também foi descontinuada.

### SOAP

Passar um [int](language.types.integer.md) para
[SoapServer::addFunction()](soapserver.addfunction.md) foi descontinuado.
Se todas as funções PHP precisarem ser fornecidas, converta o array multidimensional retornado por
[get\_defined\_functions()](function.get-defined-functions.md) em um array unidimensional.

A constante **`SOAP_FUNCTIONS_ALL`** foi descontinuada.

### SPL

O método [SplFixedArray::\_\_wakeup()](splfixedarray.wakeup.md) foi
descontinuado, já que ele implementa
[SplFixedArray::\_\_serialize()](splfixedarray.serialize.md) e
[SplFixedArray::\_\_unserialize()](splfixedarray.unserialize.md),
que precisam ser sobrescritos.

Usar o valor padrão para o parâmetro `escape` para os métodos
[SplFileObject::setCsvControl()](splfileobject.setcsvcontrol.md),
[SplFileObject::fputcsv()](splfileobject.fputcsv.md) e
[SplFileObject::fgetcsv()](splfileobject.fgetcsv.md) foi descontinuado.
Ele deve ser explicitamente passado, posicionalmente ou através de argumentos nomeados.
Isto não se aplica a [SplFileObject::fputcsv()](splfileobject.fputcsv.md)
e [SplFileObject::fgetcsv()](splfileobject.fgetcsv.md) se
[SplFileObject::setCsvControl()](splfileobject.setcsvcontrol.md) foi usado para definir um
novo valor padrão.

### Standard

Chamar [stream\_context\_set\_option()](function.stream-context-set-option.md)
com dois argumentos foi descontinuado.
Alternativamente, a função [stream\_context\_set\_options()](function.stream-context-set-options.md) deve ser usada.

Desserializar strings usando a etiqueta `S` maiúscula
com [unserialize()](function.unserialize.md) foi descontinuado.

Usar o valor padrão para o parâmetro `escape` para as funções
[fputcsv()](function.fputcsv.md),
[fgetcsv()](function.fgetcsv.md) e
[str\_getcsv()](function.str-getcsv.md) foi descontinuado.
Ele precisa ser explicitamente passado, posicionalmente ou através de argumentos nomeados.

### XML

A função [xml\_set\_object()](function.xml-set-object.md) foi descontinuada.

Passar strings de tipo não-[callable](language.types.callable.md) para as funções
xml\_set\_\*
foi descontinuado.

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
