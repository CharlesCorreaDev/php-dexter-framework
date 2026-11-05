# Define o limite de tempo da CPU para o ambiente Lua

> **Fonte / Source:** https://www.php.net/manual/pt_BR/luasandbox.setcpulimit.php

---

# LuaSandbox::setCPULimit

(PECL luasandbox >= 1.0.0)

LuaSandbox::setCPULimit — Define o limite de tempo da CPU para o ambiente Lua

### Descrição

public function **LuaSandbox::setCPULimit**([float](language.types.float.md)|[bool](language.types.boolean.md) `$limit`): [void](language.types.void.md)

Define o limite de tempo da CPU para o ambiente Lua.

Se o tempo total do usuário e do sistema usado pelo ambiente após a chamada
para este método exceder este limite, uma exceção [LuaSandboxTimeoutError](class.luasandboxtimeouterror.md)
será lançada.

O tempo gasto em funções de retorno do PHP está incluído no limite.

Definir o limite de tempo a partir de uma função de retorno enquanto Lua está em execução faz com que o
cronômetro seja reiniciado ou iniciado se ainda não estiver em execução.

> **Nota**:
>
> No Windows, o limite da CPU será ignorado. Em sistemas operacionais que
> não suportam **`CLOCK_THREAD_CPUTIME_ID`**, como FreeBSD
> e Mac OS X, o tempo de relógio de parede em vez do tempo da CPU será limitado.

### Parâmetros

`limit`
:   Limite como [float](language.types.float.md) em segundos, ou **`false`** para nenhum limite.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Chamando uma função Lua**

```
<?php

// Cria um novo LuaSandbox
$sandbox = new LuaSandbox();

// Define um limite de tempo
$sandbox->setCPULimit( 2 );

// Executa código Lua
$sandbox->loadString( 'while true do end' )->call();

?>
```

O exemplo acima produzirá
algo semelhante a:

```
PHP Fatal error:  Uncaught LuaSandboxTimeoutError: The maximum execution time for this script was exceeded
```

### Veja também

- [LuaSandbox::getCPUUsage()](luasandbox.getcpuusage.md) - Obtém o uso atual do tempo de CPU do ambiente Lua
- [LuaSandbox::setMemoryLimit()](luasandbox.setmemorylimit.md) - Define o limite de memória para o ambiente Lua

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
