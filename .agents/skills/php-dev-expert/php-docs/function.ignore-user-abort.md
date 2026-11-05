# Define se uma desconexão de cliente deve abortar execução de script

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ignore-user-abort.php

---

# ignore\_user\_abort

(PHP 4, PHP 5, PHP 7, PHP 8)

ignore\_user\_abort — Define se uma desconexão de cliente deve abortar execução de script

### Descrição

function **ignore\_user\_abort**([?](language.types.null.md)[bool](language.types.boolean.md) `$enable` = **`null`**): [int](language.types.integer.md)

Define se a desconexão do cliente deve abortar a execução do script.

Ao executar o PHP como um script de linha de comando, e o terminal do script
for fechado antes do script ser terminado, o script irá morrer na próxima
vez que tentar escreve algo, a menos que o parâmetro
`enable` seja definido para **`true`**

### Parâmetros

`enable`
:   Se definido e não **`null`**, esta função definirá a configuração ini [ignore\_user\_abort](misc.configuration.md#ini.ignore-user-abort)
    para o valor definido em `enable`. Caso contrário, esta função
    irá somente retornar a configuração anterior sem alterá-la.

### Valor Retornado

Retorna a configuração anterior, como um inteiro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `enable` agora pode ser nulo. |

### Examples

**Exemplo #1 Um exemplo de **ignore\_user\_abort()****

```
<?php
// Ignora o cancelamento pelo usuário e permite que o script
// seja executado para sempre
ignore_user_abort(true);
set_time_limit(0);

echo 'Testando gerenciamento de conexões no PHP';

// Executa uma repetição sem sentido que em algum momento
// talvez nos faça clicar fora da página ou
// clicar no botão de "Stop" do navegador.
while(1)
{
    // A conexão falhou?
    if(connection_status() != CONNECTION_NORMAL)
    {
        break;
    }

    // Espera por 10 segundos
    sleep(10);
}

// Se esta linha for alcançada, então o 'break'
// foi ativado de dentro da repetição 'while'

// Aqui pode-se fazer algum registro, ou executar outras tarefas
// conforme necessário sem realmente ficar dependente do
// navegador.
?>
```

### Notas

O PHP não irá detectar que o usuário cancelou a conexão até que uma
tentativa seja feita de enviar informação ao cliente. Simplesmente usar
uma isntrução 'echo' não garante que a informação é enviada, consulte a função
[flush()](function.flush.md).

### Veja também

- [connection\_aborted()](function.connection-aborted.md) - Verifica se o cliente está desconectado
- [connection\_status()](function.connection-status.md) - Retorna o campo de bits do estado da conexão
- [Manipulação de Conexões](features.connection-handling.md)
  para uma descrição completa de manipulação de conexões no PHP.

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
