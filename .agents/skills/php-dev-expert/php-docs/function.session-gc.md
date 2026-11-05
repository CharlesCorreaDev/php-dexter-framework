# Executa a coleta de lixo de dados da sessão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.session-gc.php

---

# session\_gc

(PHP 7 >= 7.1.0, PHP 8)

session\_gc — Executa a coleta de lixo de dados da sessão

### Descrição

function **session\_gc**(): [int](language.types.integer.md)|[false](language.types.singleton.md)

Por padrão, o PHP usa [session.gc\_probability](session.configuration.md#ini.session.gc-probability)
para executar o coletor de lixo da sessão probabilisticamente em cada
requisição. Existem algumas limitações com essa abordagem:

- Sites com baixo tráfego podem não ter seus dados de sessão excluídos dentro do período recomendado.
- Em sites com alto tráfego, o coletor de lixo pode ser acionado com muita frequência, realizando trabalho extra desnecessário.
- A coleta de lixo é realizada mediante solicitação do usuário, e o usuário pode experimentar um atraso.

Para sistemas de produção, recomenda-se desativar a
coleta de lixo baseada em probabilidade, definindo
[session.gc\_probability](session.configuration.md#ini.session.gc-probability) para `0`
e acionar explicitamente o coletor de lixo periodicamente, por exemplo, usando "cron" em
sistemas do tipo UNIX para executar um script que chama **session\_gc()**.

> **Nota**:
>
> Ao chamar a função **session\_gc()** a partir de um script PHP de linha de comando,
> a diretiva [session.save\_path](session.configuration.md#ini.session.save-path) deve ser definida
> para o mesmo valor das requisições web, e o script deve ter permissões de acesso e exclusão
> para os arquivos de sessão. Isso pode ser afetado pelo usuário que executa o script,
> e por recursos de contêiner ou "caixa de areia", como a opção `PrivateTmp=`
> do systemd.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**session\_gc()** retorna o número de dados de sessão excluídos
em caso de sucesso, ou **`false`** em caso de falha.

> **Nota**:
>
> Os manipuladores de salvamento de sessão antigos não retornam o número de dados de sessão excluídos, apenas
> um indicativo de sucesso ou falha. Se este for o caso, o número de dados de sessão excluídos
> se torna `1`, independentemente dos dados realmente excluídos.

### Examples

**Exemplo #1 Exemplo de **session\_gc()** para gerenciadores de tarefas como o cron**

```
<?php
// Observação: Este script deve ser executado pelo mesmo usuário do processo do servidor web.

// É necessário ter uma sessão ativa para inicializar o acesso ao armazenamento de dados da sessão.
session_start();

// Executa a coleta de lixo (GC) imediatamente.
session_gc();

// Limpa o ID da sessão criado pelo session_start()
session_destroy();
?>
```

**Exemplo #2 Exemplo de **session\_gc()** para script acessível pelo usuário**

```
<?php
// Observação: session_gc() é recomendado para ser usado por um script de gerenciador de tarefas, mas
// pode ser utilizado da forma abaixo.

// Usado para verificar o último horário de coleta de lixo (GC).
$gc_time = '/tmp/php_session_last_gc';
$gc_period = 1800;

session_start();
// Execute a coleta de lixo (GC) apenas quando o período de GC tiver decorrido.
// Ou seja, chamar session_gc() a cada solicitação é desperdício de recursos.
if (file_exists($gc_time)) {
    if (filemtime($gc_time) < time() - $gc_period) {
        session_gc();
        touch($gc_time);
    }
} else {
    touch($gc_time);
}
?>
```

### Veja também

- [session\_start()](function.session-start.md) - Inicia uma nova sessão ou continua uma sessão existente
- [session\_destroy()](function.session-destroy.md) - Destrói todos os dados registrados em uma sessão
- [session.gc\_probability](session.configuration.md#ini.session.gc-probability)

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
