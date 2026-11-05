# Uso básico da FFI

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ffi.examples-basic.php

---

## Uso básico da FFI

Antes de mergulhar nos detalhes da API da FFI, seguem abaixo alguns exemplos
demonstrando a simplicidade de seu uso para tarefas regulares.

> **Nota**:
>
> Alguns destes exemplos requerem o libc.so.6 e por isso não
> funcionarão em sistemas onde ele não estiver disponível.

**Exemplo #1 Chamando uma função de uma biblioteca compartilhada**

```
<?php
// cria o objeto FFI, carregando a libc e exportando a função printf()
$ffi = FFI::cdef(
    "int printf(const char *format, ...);", // esta é uma declaração normal em C
    "libc.so.6");
// chama printf() da linguagem C
$ffi->printf("Olá, %s!\n", "mundo");
?>
```

O exemplo acima produzirá:

```
Olá, mundo!
```

> **Nota**:
>
> Observe que algumas funções de C precisam de convenções específicas de chamada, por exemplo `__fastcall`,
> `__stdcall` ou `,__vectorcall`.

**Exemplo #2 Chamando uma função e retornando uma estrutura através de um argumento**

```
<?php
// cria uma ligação a gettimeofday()
$ffi = FFI::cdef("
    typedef unsigned int time_t;
    typedef unsigned int suseconds_t;

    struct timeval {
        time_t      tv_sec;
        suseconds_t tv_usec;
    };

    struct timezone {
        int tz_minuteswest;
        int tz_dsttime;
    };

    int gettimeofday(struct timeval *tv, struct timezone *tz);
", "libc.so.6");
// cria estrutura de dados em C
$tv = $ffi->new("struct timeval");
$tz = $ffi->new("struct timezone");
// chama a função C gettimeofday()
var_dump($ffi->gettimeofday(FFI::addr($tv), FFI::addr($tz)));
// acessa campo da estrutura de dados C
var_dump($tv->tv_sec);
// exibe toda a estrutura de dados C
var_dump($tz);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
int(0)
int(1555946835)
object(FFI\CData:struct timezone)#3 (2) {
  ["tz_minuteswest"]=>
  int(0)
  ["tz_dsttime"]=>
  int(0)
}
```

**Exemplo #3 Acessando variáveis C existentes**

```
<?php
// cria o objeto FFI, carregando a libc e exportando a variável errno
$ffi = FFI::cdef(
    "int errno;", // esta é uma declaração normal em C
    "libc.so.6");
// exibe o errno de C
var_dump($ffi->errno);
?>
```

O exemplo acima produzirá:

```
int(0)
```

**Exemplo #4 Criando e modificando variáveis C**

```
<?php
// cria uma nova variável int em C
$x = FFI::new("int");
var_dump($x->cdata);

// atribuição simples
$x->cdata = 5;
var_dump($x->cdata);

// atribuição composta
$x->cdata += 2;
var_dump($x->cdata);
?>
```

O exemplo acima produzirá:

```
int(0)
int(5)
int(7)
```

**Exemplo #5 Trabalhando com arrays C**

```
<?php
// cria estrutura de dados C
$a = FFI::new("long[1024]");
// trabalhando com ela como um array normal do PHP
for ($i = 0; $i < count($a); $i++) {
    $a[$i] = $i;
}
var_dump($a[25]);
$sum = 0;
foreach ($a as $n) {
    $sum += $n;
}
var_dump($sum);
var_dump(count($a));
var_dump(FFI::sizeof($a));
?>
```

O exemplo acima produzirá:

```
int(25)
int(523776)
int(1024)
int(8192)
```

**Exemplo #6 Trabalhando com enumerações C**

```
<?php
$a = FFI::cdef('typedef enum _zend_ffi_symbol_kind {
    ZEND_FFI_SYM_TYPE,
    ZEND_FFI_SYM_CONST = 2,
    ZEND_FFI_SYM_VAR,
    ZEND_FFI_SYM_FUNC
} zend_ffi_symbol_kind;
');
var_dump($a->ZEND_FFI_SYM_TYPE);
var_dump($a->ZEND_FFI_SYM_CONST);
var_dump($a->ZEND_FFI_SYM_VAR);
?>
```

O exemplo acima produzirá:

```
int(0)
int(2)
int(3)
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
