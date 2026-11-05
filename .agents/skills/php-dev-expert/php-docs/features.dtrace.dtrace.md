# Usando PHP e DTrace

> **Fonte / Source:** https://www.php.net/manual/pt_BR/features.dtrace.dtrace.php

---

## Usando PHP e DTrace

O PHP pode ser configurado com sondas estáticas do DTrace em plataformas que
suportam a Instrumentação Dinâmica do DTrace.

### Configurando o PHP para Sondas Estáticas DTrace

Refira-se à documentação externa específica da plataforma para habilitar
o suporte do DTrace no sistema operacional. Por exemplo, no Oracle Linux
inicialize um kernel UEK3 e rode os seguintes comandos:

```
# modprobe fasttrap
# chmod 666 /dev/dtrace/helper
```

Ao invés de usar `chmod`, pode-se alternativamente usar uma
regra de pacote ACL para limitar o acesso a um dispositivo para um usuário específico.

Construa o PHP com o parâmetro de configuração `--enable-dtrace`:

```
# ./configure --enable-dtrace ...
# make
# make install
```

Isto faz com que as sondas estáticas estejam disponíveis no núcleo do PHP. Quaisquer extensões PHP
que fornecem seus próprios sondas devem ser construídas separadamente como
extensões compartilhadas.

Para habilitar as sondas, defina a variável de ambiente **USE\_ZEND\_DTRACE=1** para os processos alvos do PHP.

### Sondas Estáticos DTrace no Núcleo do PHP

**As sondas estáticos a seguir estão disponíveis no PHP**

| Nome da Sonda | Descrição da Sonda | Argumentos da Sonda |
| --- | --- | --- |
| `request-startup` | Dispara quando uma requisição inicia. | char \*file, char \*request\_uri, char \*request\_method |
| `request-shutdown` | Dispara quando uma requisição termina. | char \*file, char \*request\_uri, char \*request\_method |
| `compile-file-entry` | Dispara quando a compilação de um script inicia. | char \*compile\_file, char \*compile\_file\_translated |
| `compile-file-return` | Dispara quando a compilação de um script termina. | char \*compile\_file, char \*compile\_file\_translated |
| `execute-entry` | Dispara quando um array de opcode está para ser executado. Por exemplo, ele dispara em chamadas de função, de includes e em continuação de geradores. | char \*request\_file, int lineno |
| `execute-return` | Dispara depois da execução de um array de opcode. | char \*request\_file, int lineno |
| `function-entry` | Dispara quando o motor do PHP entra em uma chamada de função ou método. | char \*function\_name, char \*request\_file, int lineno, char \*classname, char \*scope |
| `function-return` | Dispara quando o motor do PHP retorna de uma chamada de função ou método. | char \*function\_name, char \*request\_file, int lineno, char \*classname, char \*scope |
| `exception-thrown` | Dispara quando uma exceção é disparada. | char \*classname |
| `exception-caught` | Dispara quando uma exceção é capturada. | char \*classname |
| `error` | Dispara quando um erro ocorre, independente do nível de [error\_reporting](errorfunc.configuration.md#ini.error-reporting). | char \*errormsg, char \*request\_file, int lineno |

Extensões de PHP podem também conter sondas estáticas adicionais.

### Listando As Sondas Estáticas DTrace no PHP

Para listar as sondas disponíveis, inicie um processo PHP e então execute:

```
# dtrace -l
```

A saída será similar a:

```
   ID   PROVIDER            MODULE                          FUNCTION NAME
   [ . . . ]
    4   php15271               php               dtrace_compile_file compile-file-entry
    5   php15271               php               dtrace_compile_file compile-file-return
    6   php15271               php                        zend_error error
    7   php15271               php  ZEND_CATCH_SPEC_CONST_CV_HANDLER exception-caught
    8   php15271               php     zend_throw_exception_internal exception-thrown
    9   php15271               php                 dtrace_execute_ex execute-entry
   10   php15271               php           dtrace_execute_internal execute-entry
   11   php15271               php                 dtrace_execute_ex execute-return
   12   php15271               php           dtrace_execute_internal execute-return
   13   php15271               php                 dtrace_execute_ex function-entry
   14   php15271               php                 dtrace_execute_ex function-return
   15   php15271               php              php_request_shutdown request-shutdown
   16   php15271               php               php_request_startup request-startup
```

Os valores da coluna Provider consistem de `php` mais o id
do processo PHP sendo executado.

Se o servidor web Apache estiver rodando, o módulo poderia ser, por
exemplo, libphp5.so, e haveria
múltiplos blocos de listagens, um para cada processo Apache em execução.

A coluna Function refere-se aos nomes das funções da implementação
interna do PHP, em C, onde cada fornecedor está localizado.

Se um processo PHP não estiver em execução, então nenhuma sonda PHP será mostrada.

### Exemplo de DTrace com PHP

Este exemplo mostra o básico da linguagem D de scripts DTrace.

**Exemplo #1 Arquivo all\_probes.d para instrumentar todas as Sondas Estáticas do PHP com DTrace**

```
#!/usr/sbin/dtrace -Zs

#pragma D option quiet

php*:::compile-file-entry
{
    printf("PHP compile-file-entry\n");
    printf("  compile_file              %s\n", copyinstr(arg0));
    printf("  compile_file_translated   %s\n", copyinstr(arg1));
}

php*:::compile-file-return
{
    printf("PHP compile-file-return\n");
    printf("  compile_file              %s\n", copyinstr(arg0));
    printf("  compile_file_translated   %s\n", copyinstr(arg1));
}

php*:::error
{
    printf("PHP error\n");
    printf("  errormsg                  %s\n", copyinstr(arg0));
    printf("  request_file              %s\n", copyinstr(arg1));
    printf("  lineno                    %d\n", (int)arg2);
}

php*:::exception-caught
{
    printf("PHP exception-caught\n");
    printf("  classname                 %s\n", copyinstr(arg0));
}

php*:::exception-thrown
{
    printf("PHP exception-thrown\n");
    printf("  classname                 %s\n", copyinstr(arg0));
}

php*:::execute-entry
{
    printf("PHP execute-entry\n");
    printf("  request_file              %s\n", copyinstr(arg0));
    printf("  lineno                    %d\n", (int)arg1);
}

php*:::execute-return
{
    printf("PHP execute-return\n");
    printf("  request_file              %s\n", copyinstr(arg0));
    printf("  lineno                    %d\n", (int)arg1);
}

php*:::function-entry
{
    printf("PHP function-entry\n");
    printf("  function_name             %s\n", copyinstr(arg0));
    printf("  request_file              %s\n", copyinstr(arg1));
    printf("  lineno                    %d\n", (int)arg2);
    printf("  classname                 %s\n", copyinstr(arg3));
    printf("  scope                     %s\n", copyinstr(arg4));
}

php*:::function-return
{
    printf("PHP function-return\n");
    printf("  function_name             %s\n", copyinstr(arg0));
    printf("  request_file              %s\n", copyinstr(arg1));
    printf("  lineno                    %d\n", (int)arg2);
    printf("  classname                 %s\n", copyinstr(arg3));
    printf("  scope                     %s\n", copyinstr(arg4));
}

php*:::request-shutdown
{
    printf("PHP request-shutdown\n");
    printf("  file                      %s\n", copyinstr(arg0));
    printf("  request_uri               %s\n", copyinstr(arg1));
    printf("  request_method            %s\n", copyinstr(arg2));
}

php*:::request-startup
{
    printf("PHP request-startup\n");
    printf("  file                      %s\n", copyinstr(arg0));
    printf("  request_uri               %s\n", copyinstr(arg1));
    printf("  request_method            %s\n", copyinstr(arg2));
}
```

Este script usa a opção `-Z` para a aplicação
dtrace, permitindo que ela seja executada quando não
há processo PHP em execução. Se esta opção fosse omitida, o script
iria terminar imediatamente porque ele saberia que nenhuma das sondas
a serem monitoradas existiriam.

O script instrumenta todos os pontos de sondas estáticas do núcleo do PHP durante toda a
duração de um script PHP em execução. Execute o script D:

```
# ./all_probes.d
```

Executa um script PHP ou aplicação. O script D de monitoramento terá
como saída os argumentos de cada uma das sondas quando for disparado.

Quando o monitoramento estiver completo, o script D pode ser terminado com
`CTRL+C`.

Em máquinas com múltiplas CPUs, pode parecer que as sondas estão em ordem
não sequencial. Isto depende de qual CPU está processando as sondas,
e como as threads migram através dos CPUs. Mostrar os timestamps das sondas
irá ajudar a reduzir a confusão, por exemplo:

```
php*:::function-entry
{
      printf("%lld: PHP function-entry ", walltimestamp);
      [ . . .]
}
```

### Veja também

- [Instrumentação Dinâmica OCI8 e DTrace](oci8.dtrace.md)

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
