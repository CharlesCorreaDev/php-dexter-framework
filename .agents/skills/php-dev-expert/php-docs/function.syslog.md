# Gera uma mensagem de registro do sistema

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.syslog.php

---

# syslog

(PHP 4, PHP 5, PHP 7, PHP 8)

syslog — Gera uma mensagem de registro do sistema

### Descrição

function **syslog**([int](language.types.integer.md) `$priority`, [string](language.types.string.md) `$message`): [true](language.types.singleton.md)

**syslog()** gera uma mensagem de registro que será
distribuída pelo registrador do sistema.

Para obter informações sobre como configurar um manipulador de registros definido pelo usuário, consulte a
página de manual do Unix syslog.conf
(5). Mais
informações sobre os módulos e opções do syslog podem ser encontradas nas páginas man
do syslog
(3) em máquinas Unix.

### Parâmetros

`priority`
:   Uma das constantes:
    **`LOG_EMERG`**, **`LOG_ALERT`**, **`LOG_CRIT`**, **`LOG_ERR`**, **`LOG_WARNING`**, **`LOG_NOTICE`**, **`LOG_INFO`**, **`LOG_DEBUG`**
    .

`message`
:   A mensagem a ser enviada.

### Valor Retornado

Sempre retorna **`true`**.

### Examples

**Exemplo #1 Usando **syslog()****

```
<?php
// abre o registrador do sistema, inclui o ID do processo e também envia
// o registro para a saída de erro padrão; e usa um mecanismo de registro
// definido pelo usuário
openlog("meuScriptDeRegistro", LOG_PID | LOG_PERROR, LOG_LOCAL0);

// algum código

if (authorized_client()) {
    // faz alguma coisa
} else {
    // cliente não autorizado!
    // registra a tentativa
    $access = date("d/m/Y H:i:s");
    syslog(LOG_WARNING, "Cliente não autorizado: $access {$_SERVER['REMOTE_ADDR']} ({$_SERVER['HTTP_USER_AGENT']})");
}

closelog();
?>
```

### Notas

No Windows, o serviço de registrador do sistema
é emulado pelo Log de Eventos.

> **Nota**:
>
> O uso das constantes **`LOG_LOCAL0`** até
> `LOG_LOCAL7` para o parâmetro `facility`
> da função [openlog()](function.openlog.md) não está disponível
> no Windows.

### Veja também

- [openlog()](function.openlog.md) - Abre conexão com o registrador do sistema
- [closelog()](function.closelog.md) - Fecha conexão com o registrador do sistema
- Configuração INI [syslog.filter](errorfunc.configuration.md#ini.syslog.filter) (a partir do PHP 7.3)

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
