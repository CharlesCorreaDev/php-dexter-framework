# Lista todos os manipuladores de saída em uso

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ob-list-handlers.php

---

# ob\_list\_handlers

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

ob\_list\_handlers — Lista todos os manipuladores de saída em uso

### Descrição

function **ob\_list\_handlers**(): [array](language.types.array.md)

Lista todos os manipuladores de saída em uso.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Isso retornará um array com os manipuladores de saída em uso (se houver).

Se [output\_buffering](outcontrol.configuration.md#ini.output-buffering) estiver ativado
e nenhum [output\_handler](outcontrol.configuration.md#ini.output-handler) estiver definido,
ou nenhuma função de retorno ou **`null`** foi passada para [ob\_start()](function.ob-start.md),
`"default output handler"` é retornado.
Ativar [output\_buffering](outcontrol.configuration.md#ini.output-buffering)
e definir um [output\_handler](outcontrol.configuration.md#ini.output-handler)
é equivalente a passar
uma [função interna (integrada)](functions.internal.md)
para [ob\_start()](function.ob-start.md).

Se um [callable](language.types.callable.md) foi passado para [ob\_start()](function.ob-start.md),
o [nome totalmente qualificado](language.namespaces.basics.md)
do [callable](language.types.callable.md) é retornado.
Se o [callable](language.types.callable.md) for um objeto que implementa
[\_\_invoke()](language.oop5.magic.md#language.oop5.magic.invoke),
o [nome totalmente qualificado](language.namespaces.basics.md)
do método [\_\_invoke()](language.oop5.magic.md#language.oop5.magic.invoke)
do objeto é retornado.
Se o [callable](language.types.callable.md) for um [Closure](class.closure.md),
`"Closure::__invoke"` será retornado.

### Examples

**Exemplo #1 Exemplo de **ob\_list\_handlers()****

```
<?php
// usando output_buffering=On, nenhum manipulador de saída definido
var_dump(ob_list_handlers());
ob_end_flush();

// nenhuma chamada de retorno ou null
ob_start();
var_dump(ob_list_handlers());
ob_end_flush();

// função anônima
ob_start(function($string) { return $string; });
var_dump(ob_list_handlers());
ob_end_flush();

// função seta
ob_start(fn($string) => $string);
var_dump(ob_list_handlers());
ob_end_flush();

// chamável de primeira classe
$firstClassCallable = userDefinedFunction(...);

ob_start([$firstClassCallable, '__invoke']);
var_dump(ob_list_handlers());
ob_end_flush();

// função interna (integrada)
ob_start('print_r');
var_dump(ob_list_handlers());
ob_end_flush();

// função definida pelo usuário
function userDefinedFunction($string, $flags) { return $string; };

ob_start('userDefinedFunction');
var_dump(ob_list_handlers());
ob_end_flush();

class MyClass {
    public static function staticHandle($string) {
        return $string;
    }

    public static function handle($string) {
        return $string;
    }

    public function __invoke($string) {
        return $string;
    }
}

// classe e método estático
ob_start(['MyClass','staticHandle']);
var_dump(ob_list_handlers());
ob_end_flush();

// objeto e método não estático
ob_start([new MyClass,'handle']);
var_dump(ob_list_handlers());
ob_end_flush();

// objeto invocável
ob_start(new MyClass);
var_dump(ob_list_handlers());
ob_end_flush();
?>
```

O exemplo acima produzirá:

```
array(1) {
  [0]=>
  string(22) "default output handler"
}
array(1) {
  [0]=>
  string(22) "default output handler"
}
array(1) {
  [0]=>
  string(7) "print_r"
}
array(1) {
  [0]=>
  string(19) "userDefinedFunction"
}
array(1) {
  [0]=>
  string(17) "Closure::__invoke"
}
array(1) {
  [0]=>
  string(17) "Closure::__invoke"
}
array(1) {
  [0]=>
  string(17) "Closure::__invoke"
}
array(1) {
  [0]=>
  string(21) "MyClass::staticHandle"
}
array(1) {
  [0]=>
  string(15) "MyClass::handle"
}
array(1) {
  [0]=>
  string(17) "MyClass::__invoke"
}
```

### Veja também

- [ob\_end\_clean()](function.ob-end-clean.md) - Limpa (apaga) o conteúdo do buffer de saída ativo e desliga-o
- [ob\_end\_flush()](function.ob-end-flush.md) - Descarrega (envia) o valor de retorno do manipulador de saída ativo
  e desliga o buffer de saída ativo
- [ob\_get\_flush()](function.ob-get-flush.md) - Descarrega (envia) o valor de retorno do manipulador de saída ativo,
  retorna o conteúdo do buffer de saída ativo e desliga-o
- [ob\_start()](function.ob-start.md) - Ativa o buffer de saída

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
