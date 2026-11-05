# Recursos descontinuados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration74.deprecated.php

---

## Recursos descontinuados

### Núcleo do PHP

#### Operadores ternários aninhados sem parênteses explícitos

Operações ternárias aninhadas devem usar explicitamente parênteses
para ditar a ordem das operações. Anteriormente, quando usada
sem parênteses, a associatividade esquerda não resultava
no comportamento esperado na maioria dos casos.

```
<?php
1 ? 2 : 3 ? 4 : 5;   // descontinuado
(1 ? 2 : 3) ? 4 : 5; // ok
1 ? 2 : (3 ? 4 : 5); // ok
?>
```

Parênteses *não* são necessários quando organizando um operando interno,
pois não gera ambiguidade ou problemas de associatividade:

```
1 ? 2 ? 3 : 4 : 5 // ok
```

#### Acesso a valores de array e string usando chaves

O acesso a valor de string e array usando a sintaxe de chaves está
descontinuado. Use `$var[$idx]` ao invés de
`$var{$idx}`.

#### A conversão (real) e a função [is\_real()](function.is-real.md)

A conversão `(real)` está descontinuada,
use `(float)` em seu lugar.

A função [is\_real()](function.is-real.md) também está descontinuada,
use [is\_float()](function.is-float.md) em seu lugar.

#### Desvinculando `$this` quando `$this` é usado

Desvincular `$this` de uma closure não estática
que usa `$this` está descontinuado.

#### A palavra chave `parent` sem uma classe parent

Usar a palavra chave `parent` dentro de uma classe sem parent
está descontinuado, e lançará um erro em tempo de compilação no futuro.
Atualmente um erro será gerado apenas se/quando o parent for
acessado em tempo de execução.

#### A diretiva INI allow\_url\_include

A diretiva [allow\_url\_include](filesystem.configuration.md#ini.allow-url-include)
está descontinuada. Ativá-la gerará
um aviso de descontinuação na inicialização.

#### Caracteres inválidos nas funções de conversão de base

Passar caracteres inválidos para as funções: [base\_convert()](function.base-convert.md),
[bindec()](function.bindec.md), [octdec()](function.octdec.md) e
[hexdec()](function.hexdec.md) agora gerará um aviso de descontinuação.
O resultado ainda será calculado como se os caracteres inválidos não existissem.
Os espaços em branco à esquerda e à direita, bem como os prefixos do tipo 0x (dependendo da base)
continuam sendo permitidos.

#### Usando [array\_key\_exists()](function.array-key-exists.md) em objetos

O uso de [array\_key\_exists()](function.array-key-exists.md) em objetos está descontinuado.
Em vez disso [isset()](function.isset.md) ou [property\_exists()](function.property-exists.md)
deve ser usado.

#### Funções magic quotes

As funções [get\_magic\_quotes\_gpc()](function.get-magic-quotes-gpc.md) e [get\_magic\_quotes\_runtime()](function.get-magic-quotes-runtime.md)
estão descontinuadas. Elas sempre retornam **`false`**.

#### Função [hebrevc()](function.hebrevc.md)

A função [hebrevc()](function.hebrevc.md) está descontinuada.
Ela pode ser substituída por `nl2br(hebrev($str))` ou,
preferencialmente, pelo uso do suporte Unicode RTL.

#### Função [convert\_cyr\_string()](function.convert-cyr-string.md)

A função [convert\_cyr\_string()](function.convert-cyr-string.md) está descontinuada.
Pode ser substituída por um dos **mb\_convert\_string()**,
[iconv()](function.iconv.md) ou [UConverter](class.uconverter.md).

#### Função [money\_format()](function.money-format.md)

A função [money\_format()](function.money-format.md) está descontinuada.
Ela pode ser substituída pela funcionalidade intl [NumberFormatter](class.numberformatter.md).

#### Função [ezmlm\_hash()](function.ezmlm-hash.md)

A função [ezmlm\_hash()](function.ezmlm-hash.md) está descontinuada.

#### Função [restore\_include\_path()](function.restore-include-path.md)

A função [restore\_include\_path()](function.restore-include-path.md) está descontinuada.
Pode ser substituída por `ini_restore('include_path')`.

#### Implode com a ordem histórica dos parâmetros

A passagem de parâmetros para a função [implode()](function.implode.md) na ordem reversa
está descontinuada, use `implode($glue, $parts)`
em vez de `implode($parts, $glue)`.

### COM

A importação de bibliotecas de tipos com registro constante
que não diferencia maiúsculas de minúsculas foi descontinuada.

### Filter

**`FILTER_SANITIZE_MAGIC_QUOTES`** está descontinuada,
use **`FILTER_SANITIZE_ADD_SLASHES`** em seu lugar.

### Multibyte String

A passagem de um padrão não-string para a função [mb\_ereg\_replace()](function.mb-ereg-replace.md)
está descontinuado. Atualmente, os padrões não-string são interpretados como
pontos de código ASCII. No PHP 8, o padrão será interpretado como
uma string.

Passar a codificação como terceiro parâmetro para a função [mb\_strrpos()](function.mb-strrpos.md)
está descontinuado. Em vez disso, passe um offset 0 e a codificação como quarto parâmetro.

### Lightweight Directory Access Protocol

[ldap\_control\_paged\_result\_response()](function.ldap-control-paged-result-response.md) e
[ldap\_control\_paged\_result()](function.ldap-control-paged-result.md) estão descontinuadas.
Os controles de paginação podem ser enviados com a função
[ldap\_search()](function.ldap-search.md).

### Reflection

As chamadas para [ReflectionType::\_\_toString()](reflectiontype.tostring.md) agora geram
um aviso de descontinuação. Este método foi descontinuado em favor de
[ReflectionNamedType::getName()](reflectionnamedtype.getname.md) na documentação
a partir do PHP 7.1, mas não emitiu um aviso de descontinuação por motivos técnicos.

Os métodos `export()` em todas as classes [Reflection](class.reflection.md)
foram descontinuados. Construa um objeto [Reflection](class.reflection.md) e
converta-o em string em seu lugar:

```
<?php
// ReflectionClass::export(Foo::class, false) is:
echo new ReflectionClass(Foo::class), "\n";

// $str = ReflectionClass::export(Foo::class, true) is:
$str = (string) new ReflectionClass(Foo::class);
?>
```

### Socket

**`AI_IDN_ALLOW_UNASSIGNED`** e
**`AI_IDN_USE_STD3_ASCII_RULES`** para
[socket\_addrinfo\_lookup()](function.socket-addrinfo-lookup.md) foram descontinuadas,
devido a uma descontinuação na própria glibc.

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
