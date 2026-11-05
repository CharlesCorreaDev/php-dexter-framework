# Funções de retorno PHP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ffi.examples-callback.php

---

## Funções de retorno PHP

É possível atribuir um closure do PHP a uma variável nativa do tipo ponteiro de função
ou passá-lo como um argumento de função:

**Exemplo #1 Atribuindo um [Closure](class.closure.md) PHP a um ponteiro de função C**

```
<?php
$zend = FFI::cdef("
    typedef int (*zend_write_func_t)(const char *str, size_t str_length);
    extern zend_write_func_t zend_write;
");

echo "Olá, Mundo 1!\n";

$orig_zend_write = clone $zend->zend_write;
$zend->zend_write = function($str, $len) {
    global $orig_zend_write;
    $orig_zend_write("{\n\t", 3);
    $ret = $orig_zend_write($str, $len);
    $orig_zend_write("}\n", 2);
    return $ret;
};
echo "Olá, Mundo 2!\n";
$zend->zend_write = $orig_zend_write;
echo "Olá, Mundo 3!\n";
?>
```

O exemplo acima produzirá:

```
Olá, Mundo 1!
{
        Olá, Mundo 2!
}
Olá, Mundo 3!
```

Embora isso funciona, esta funcionalidade não é suportada em todas as plataformas libffi, não é eficiente
e apresenta vazamento de recursos ao final da requisição.

**Dica**

Portanto, é recomendado minimizar o uso de chamadas de retorno do PHP.

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
