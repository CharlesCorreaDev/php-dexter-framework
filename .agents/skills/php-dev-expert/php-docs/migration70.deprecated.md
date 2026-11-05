# Recursos descontinuados no PHP 7.0.x

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration70.deprecated.php

---

## Recursos descontinuados no PHP 7.0.x

### Construtores ao estilo PHP 4

Construtores ao estilo PHP 4 (métodos com o mesmo nome que a classe onde
estão definidos) estão descontinuados, e serão removidos no futuro. O PHP 7
emitirá **`E_DEPRECATED`** se um construtor do PHP 4 for o
único construtor definido na classe. Classes que implementam o
método **\_\_construct()** não são afetadas.

```
<?php
class foo {
    function foo() {
        echo 'Eu sou um construtor';
    }
}
?>
```

O exemplo acima produzirá:

```
Deprecated: Methods with the same name as their class will not be constructors in a future version of PHP; foo has a deprecated constructor in example.php on line 3
```

### Chamadas estáticas a métodos não estáticos

Chamadas [estáticas](language.oop5.static.md) a métodos que
não foram declarados como **static** estão descontinuadas, e podem
ser removidos no futuro.

```
<?php
class foo {
    function bar() {
        echo 'Eu não sou estático!';
    }
}

foo::bar();
?>
```

O exemplo acima produzirá:

```
Deprecated: Non-static method foo::bar() should not be called statically in - on line 8
I am not static!
```

### Opção salt da função [password\_hash()](function.password-hash.md)

A opção salt da função [password\_hash()](function.password-hash.md) foi descontinuada
para evitar que desenvolvedores gerem seus próprios salts (geralmente
inseguros). A função gerará um salt criptográfico seguro quando um salt não
for fornecido pelo desenvolvedor - portanto a geração customizada de salts não
é necessária.

### Opção de contexto SSL na função `capture_session_meta`

A opção de contexto SSL `capture_session_meta` foi
descontinuada. Metadados SSL agora estão disponíveis através da
função [stream\_get\_meta\_data()](function.stream-get-meta-data.md).

### Descontinuações no [LDAP](book.ldap.md)

As funções a seguir foram descontinuadas:

- [ldap\_sort()](function.ldap-sort.md)

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
