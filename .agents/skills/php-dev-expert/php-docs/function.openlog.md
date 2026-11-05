# Abre conexão com o registrador do sistema

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openlog.php

---

# openlog

(PHP 4, PHP 5, PHP 7, PHP 8)

openlog — Abre conexão com o registrador do sistema

### Descrição

function **openlog**([string](language.types.string.md) `$prefix`, [int](language.types.integer.md) `$flags`, [int](language.types.integer.md) `$facility`): [true](language.types.singleton.md)

**openlog()** abre uma conexão com o registrador do
sistema para um programa.

O uso de **openlog()** é opcional. Ela
será automaticamente chamada por [syslog()](function.syslog.md) se
necessário, e nesse caso o padrão de `prefix` será
uma string vazia.

### Parâmetros

`prefix`
:   O parâmetro `prefix` define uma string de prefixo que é adicionado a cada mensagem.

`flags`
:   Máscara de bits das seguinte constantes:

    - **`LOG_CONS`**
    - **`LOG_NDELAY`**
    - **`LOG_ODELAY`**
    - **`LOG_NOWAIT`**
    - **`LOG_PERROR`**
    - **`LOG_PID`**

`facility`
:   O argumento `facility` é usado para especificar que
    tipo de módulo está registrando a mensagem.
    Isto permite que o arquivo de configuração que mensagens provenientes de diferentes
    módulos serão tratadas diferentemente.
    Deve ser uma das constantes a seguir:

    - **`LOG_AUTH`**
    - **`LOG_AUTHPRIV`**
    - **`LOG_CRON`**
    - **`LOG_DAEMON`**
    - **`LOG_KERN`**
    - **`LOG_LOCAL[0-7]`**
    - **`LOG_LPR`**
    - **`LOG_MAIL`**
    - **`LOG_NEWS`**
    - **`LOG_SYSLOG`**
    - **`LOG_USER`**
    - **`LOG_UUCP`**

    > **Nota**:
    >
    > Este parâmetro é ignorado no Windows.

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.2.0 | A função agora sempre retorna **`true`**. Anteriormente, retornava **`false`** em caso de falha. |

### Veja também

- [syslog()](function.syslog.md) - Gera uma mensagem de registro do sistema
- [closelog()](function.closelog.md) - Fecha conexão com o registrador do sistema

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
