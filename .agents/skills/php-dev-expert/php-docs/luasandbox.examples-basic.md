# Uso básico para LuaSandbox

> **Fonte / Source:** https://www.php.net/manual/pt_BR/luasandbox.examples-basic.php

---

## Uso básico para LuaSandbox

Depois de compilado o PHP com suporte ao LuaSandbox, pode-se começar a usar o LuaSandbox para executar com segurança o código Lua fornecido pelo usuário.

**Exemplo #1 Executando um código Lua**

```
<?php

$sandbox = new LuaSandbox;
$sandbox->setMemoryLimit( 50 * 1024 * 1024 );
$sandbox->setCPULimit( 10 );

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

// Executa algum código Lua, incluindo funções de retorno em PHP e em Lua

$luaCode = <<<EOF
php.output( "Olá, mundo" );

return "Oi", function ( v )
    return php.frobnosticate( v + 200 )
end
EOF;

list( $hi, $frob ) = $sandbox->loadString( $luaCode )->call();
assert( $frob->call( 4000 ) === [ 4242 ] );

// Exceções LuaSandboxRuntimeError geradas pelo PHP podem ser capturadas dentro do Lua

list( $ok, $message ) = $sandbox->loadString( 'return pcall( php.error )' )->call();
assert( !$ok );
assert( $message === 'Algo está errado' );

?>
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
