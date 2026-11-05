# Registra um conjunto de funções PHP como uma biblioteca Lua

> **Fonte / Source:** https://www.php.net/manual/pt_BR/luasandbox.registerlibrary.php

---

# LuaSandbox::registerLibrary

(PECL luasandbox >= 1.0.0)

LuaSandbox::registerLibrary — Registra um conjunto de funções PHP como uma biblioteca Lua

### Descrição

public function **LuaSandbox::registerLibrary**([string](language.types.string.md) `$libname`, [array](language.types.array.md) `$functions`): [void](language.types.void.md)

Registra um conjunto de funções PHP como uma biblioteca Lua, para que Lua possa chamar
o código PHP relevante.

Para mais informações sobre como chamar funções Lua e os valores de retorno,
veja [LuaSandboxFunction::call()](luasandboxfunction.call.md).

### Parâmetros

`libname`
:   O nome da biblioteca. No estado Lua, a variável global deste
    nome será definida para a tabela de funções. Se a tabela já existir,
    as novas funções serão adicionadas a ela.

`functions`
:   Um [array](language.types.array.md), onde cada chave é um nome de função e cada valor é um
    [callable](language.types.callable.md) PHP correspondente.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Registrando funções PHP para chamar a partir de Lua**

```
<?php

// Cria um novo LuaSandbox
$sandbox = new LuaSandbox();

// Registra algumas funções no ambiente Lua

function frobnosticate( $v ) {
    return [ $v + 42 ];
}

$sandbox->registerLibrary( 'php', [
    'frobnosticate' => 'frobnosticate',
    'output' => function ( $string ) {
        echo "$string\n";
    },
    'error' => function () {
        throw new LuaSandboxRuntimeError( "Algo está errado" );
    }
] );

?>
```

### Veja também

- [LuaSandbox::loadString()](luasandbox.loadstring.md) - Carrega código Lua no ambiente Lua
- [LuaSandbox::wrapPhpFunction()](luasandbox.wrapphpfunction.md) - Encapsula um chamável PHP em uma LuaSandboxFunction

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
