# Configurações de Execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/zookeeper.configuration.php

---

## Configurações de Execução

O comportamento destas funções é afetado pelas configurações do php.ini.

**Opções de Configuração de Zookeeper**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [zookeeper.recv\_timeout](zookeeper.configuration.md#ini.zookeeper.recv_timeout) | 10000 | **`INI_ALL`** |  |
| [zookeeper.session\_lock](zookeeper.configuration.md#ini.zookeeper.session_lock) | 1 | **`INI_SYSTEM`** |  |
| [zookeeper.sess\_lock\_wait](zookeeper.configuration.md#ini.zookeeper.sess_lock_wait) | 150000 | **`INI_ALL`** |  |

Para mais detalhes e definições dos modos
INI\_\*, consulte os [Onde uma configuração deve ser definida](configuration.changes.modes.md).

Aqui está uma breve explicação das
diretivas de configuração.

`zookeeper.recv_timeout` [int](language.types.integer.md)
:   Tempo limite padrão para qualquer sessão do Zookeeper.

`zookeeper.session_lock` [int](language.types.integer.md)
:   Habilita o bloqueio de sessão PHP.

`zookeeper.sess_lock_wait` [int](language.types.integer.md)
:   Tempo de espera para nova tentativa de bloqueio de rotação da sessão PHP em microssegundos. Tenha cuidado ao definir este valor. Valores válidos são inteiros, onde 0 é interpretado como o valor padrão. Valores negativos resultam em uma redução do bloqueio para um bloqueio de tentativa.

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
