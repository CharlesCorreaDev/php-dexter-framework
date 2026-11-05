# Porque enumerações não são extensíveis

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.enumerations.object-differences.inheritance.php

---

## Porque enumerações não são extensíveis

Classes possuem contratos em seus métodos:

```
<?php

class A {}
class B extends A {}

function foo(A $a) {}

function bar(B $b)
{
    foo($b);
}
```

Esse código é correto para tipos, pois B segue o contrato de A, e através da
co e contra variância, quaisquer expectativas a respeito dos métodos será
atendida.

Enumerações possuem contratos em seus itens, não em seus métodos:

```
<?php

enum ErrorCode
{
    case SOMETHING_BROKE;
}

function quux(ErrorCode $errorCode)
{
    // Nesse primeiro momento, esse código prevê todos os casos
    match ($errorCode) {
        ErrorCode::SOMETHING_BROKE => true,
    };
}
```

A instrução [match](control-structures.match.md) na função `quux` pode ser analisada estaticamente
para verificar se cobre todos os casos possíveis em ErrorCode.

Mas imagine que seja possível estender enumerações, assim:

```
<?php

// Apenas para o exemplo onde enumerações não são finais.
// Isto *não* funciona no PHP.
enum MoreErrorCode extends ErrorCode
{
    case PEBKAC;
}

function fot(MoreErrorCode $errorCode)
{
    quux($errorCode);
}

fot(MoreErrorCode::PEBKAC);
```

Em condições normais de herança, uma classe que estende outra passará
na checagem de tipos.

O problema ocorreria na instrução [match](control-structures.match.md) da função `quux()` que agora não cobre todos
os casos. Porque a função não prevê o item `MoreErrorCode::PEBKAC` o match irá falhar com uma exceção.

Por conta disso, as enumerações são finais e não podem ser estendidas.

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
