# Pausa o cronômetro de uso da CPU

> **Fonte / Source:** https://www.php.net/manual/pt_BR/luasandbox.pauseusagetimer.php

---

# LuaSandbox::pauseUsageTimer

(PECL luasandbox >= 1.4.0)

LuaSandbox::pauseUsageTimer — Pausa o cronômetro de uso da CPU

### Descrição

public function **LuaSandbox::pauseUsageTimer**(): [bool](language.types.boolean.md)

Pausa o cronômetro de uso da CPU.

Isso só tem efeito quando chamado de dentro de uma função de retorno de Lua. Quando a execução
retorna para Lua, o cronômetro será automaticamente retomado. Se
uma nova chamada para Lua for feita, o cronômetro será retomado pela
duração dessa chamada.

Se uma função de retorno do PHP chamar Lua novamente com o cronômetro não pausado, e então
essa função Lua chamar o PHP novamente, a segunda chamada do PHP não será
capaz de pausar o cronômetro. A lógica é que mesmo que a segunda chamada do PHP
evite contar o uso da CPU em relação ao limite, a primeira
chamada ainda conta.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um [bool](language.types.boolean.md) indicando se o cronômetro está pausado.

### Examples

**Exemplo #1 Manipulando o cronômetro de uso**

```
<?php

// Cria um novo LuaSandbox e define um limite de CPU
$sandbox = new LuaSandbox();
$sandbox->setCPULimit( 1 );

function doWait( $t ) {
    $end = microtime( true ) + $t;
    while ( microtime( true ) < $end ) {
        // gasta ciclos da CPU
    }
}

// Registra uma função de retorno do PHP
$sandbox->registerLibrary( 'php', [
    'test' => function () use ( $sandbox ) {
        $sandbox->pauseUsageTimer();
        doWait( 5 );

        $sandbox->unpauseUsageTimer();
        doWait( 0.1 );
    },
    'test2' => function () use ( $sandbox ) {
        $sandbox->pauseUsageTimer();
        $sandbox->unpauseUsageTimer();
        doWait( 1.1 );
    }
] );

echo "Isso não deve expirar...\n";
$sandbox->loadString( 'php.test()' )->call();

echo "Isso deve expirar.\n";
try {
    $sandbox->loadString( 'php.test2()' )->call();
    echo "Não expirou?\n";
} catch ( LuaSandboxTimeoutError $ex ) {
    echo "Foi o que aconteceu! " . $ex->getMessage() . "\n";
}

?>
```

O exemplo acima produzirá:

```
Isso não deve expirar...
Isso deve expirar.
Foi o que aconteceu! The maximum execution time for this script was exceeded
```

### Veja também

- [LuaSandbox::setCPULimit()](luasandbox.setcpulimit.md) - Define o limite de tempo da CPU para o ambiente Lua
- [LuaSandbox::unpauseUsageTimer()](luasandbox.unpauseusagetimer.md) - Despausa o cronômetro pausado por LuaSandbox::pauseUsageTimer

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
