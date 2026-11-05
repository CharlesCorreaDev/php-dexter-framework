# Obtém ou define sinalizadores em função ou classe

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.uopz-flags.php

---

# uopz\_flags

(PECL uopz 2 >= 2.0.2, PECL uopz 5, PECL uopz 6, PECL uopz 7)

uopz\_flags — Obtém ou define sinalizadores em função ou classe

### Descrição

function **uopz\_flags**([string](language.types.string.md) `$function`, [int](language.types.integer.md) `$flags` = PHP\_INT\_MAX): [int](language.types.integer.md)

function **uopz\_flags**([string](language.types.string.md) `$class`, [string](language.types.string.md) `$function`, [int](language.types.integer.md) `$flags` = PHP\_INT\_MAX): [int](language.types.integer.md)

Obtém ou define os sinalizadores em uma entrada de classe ou função em tempo de execução.

### Parâmetros

`class`
:   O nome de uma classe

`function`
:   O nome da função. Se `class` for fornecido e uma string vazia
    for passada como `function`, **uopz\_flags()**
    obtém ou define os sinalizadores da entrada da classe.

`flags`
:   Um conjunto válido de sinalizadores ZEND\_ACC\_.
    Se omitido, **uopz\_flags()** atua como obtentora.

### Valor Retornado

Se os sinalizadores estiverem sendo definidos, retorna os anteriores, senão retorna os atuais.

### Erros/Exceções

A partir do PHP 7.4.0, se o parâmetro `flags` for passado,
**uopz\_flags()** lança uma [RuntimeException](class.runtimeexception.md),
se [OPcache](book.opcache.md) estiver habilitado,
e a entrada de classe de `class`
ou a entrada de função de `function` for imutável.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL uopz 5.0.0 | O parâmetro `flags` agora é opcional. Anteriormente, **`ZEND_ACC_FETCH`** precisava ser passado para usar **uopz\_flags()** como obtentora. |

### Examples

**Exemplo #1 Exemplo de **uopz\_flags()****

```
<?php
class Test {
    public function method() {
        return __CLASS__;
    }
}

$flags = uopz_flags("Test", "method");

var_dump((bool) (uopz_flags("Test", "method") & ZEND_ACC_PRIVATE));
var_dump((bool) (uopz_flags("Test", "method") & ZEND_ACC_STATIC));

var_dump(uopz_flags("Test", "method", $flags|ZEND_ACC_STATIC|ZEND_ACC_PRIVATE));

var_dump((bool) (uopz_flags("Test", "method") & ZEND_ACC_PRIVATE));
var_dump((bool) (uopz_flags("Test", "method") & ZEND_ACC_STATIC));
?>
```

O exemplo acima produzirá:

```
bool(false)
bool(false)
int(1234567890)
bool(true)
bool(true)
```

**Exemplo #2 "Desfinalizando" uma classe**

```
<?php
final class MyClass
{
}

$flags = uopz_flags(MyClass::class, '');
uopz_flags(MyClass::class, '', $flags & ~ZEND_ACC_FINAL);
var_dump((new ReflectionClass(MyClass::class))->isFinal());
?>
```

O exemplo acima produzirá:

```
bool(false)
```

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
