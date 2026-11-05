# Lighttpd 1.4 em sistemas Unix

> **Fonte / Source:** https://www.php.net/manual/pt_BR/install.unix.lighttpd-14.php

---

## Lighttpd 1.4 em sistemas Unix

Esta seção contém notas e dicas específicas para instalações Lighttpd 1.4
do PHP em sistemas Unix.

Favor acessar o link [» Lighttpd trac](https://trac.lighttpd.net/trac/)
para aprender a instalar o Lighttpd adequadamente antes de continuar.

FastCGI é o método SAPI preferido para conectar o PHP ao Lighttpd. FastCGI é
habilitado automaticamente no php-cgi.

### Deixando o Lighttpd iniciar processos PHP

Para configurar o Lighttpd para se conectar ao PHP e iniciar processos FastCGI, edite
o arquivo lighttpd.conf. Sockets são a maneira preferida de se conectar a processos FastCGI
no sistema local.

**Exemplo #1 lighttpd.conf parcial**

```
server.modules += ( "mod_fastcgi" )

fastcgi.server = ( ".php" =>
  ((
    "socket" => "/tmp/php.socket",
    "bin-path" => "/usr/local/bin/php-cgi",
    "bin-environment" => (
      "PHP_FCGI_CHILDREN" => "16",
      "PHP_FCGI_MAX_REQUESTS" => "10000"
    ),
    "min-procs" => 1,
    "max-procs" => 1,
    "idle-timeout" => 20
  ))
)
```

A diretiva bin-path permite ao lighttpd iniciar processos FastCGI dinamicamente.
O PHP irá iniciar processos-filhos de acordo com a variável de ambiente PHP\_FCGI\_CHILDREN.
A diretiva `bin-environment` define o ambiente para os
processos iniciados. O PHP irá fechar um processo filho depois que o número
de requisições especificados por PHP\_FCGI\_MAX\_REQUESTS for alcançado. As diretivas
`min-procs` e `max-procs` devem geralmente ser evitadas com o PHP. O PHP
gerencia seus próprios processos filhos, e caches opcode como APC somente irão compartilhar dados entre
filhos gerenciados pelo PHP. Se `min-procs` for definido para algo maior que `1`,
o número total de processos PHP será multiplicado por PHP\_FCGI\_CHILDREN
(2 min-procs \* 16 filhos são 32 processos).

### Iniciando processos com spawn-fcgi

Lighttpd fornece um programa chamado spawn-fcgi para tornar a tarefa
de iniciar processos FastCGI mais fácil.

### Iniciando processo com php-cgi

É possível iniciar processos sem o spawn-fcgi, porém um pouco mais
de esforço é requerido. Configurar a variável de ambiente PHP\_FCGI\_CHILDREN
controla quantos processos filhos do PHP irão iniciar para lidar com as requisições que chegam.
Configurar PHP\_FCGI\_MAX\_REQUESTS irá determinar por quanto tempo (em requisições) cada
filho ficará ativo. Aqui está um script bash simples para ajudar a iniciar processos PHP.

**Exemplo #2 Iniciando processos FastCGI**

```
#!/bin/sh

# Localização do binário php-cgi
PHP=/usr/local/bin/php-cgi

# Localização do arquivo PID
PHP_PID=/tmp/php.pid

# Ligação a um endereço
#FCGI_BIND_ADDRESS=10.0.1.1:10000
# Ligação a um socket
FCGI_BIND_ADDRESS=/tmp/php.sock

PHP_FCGI_CHILDREN=16
PHP_FCGI_MAX_REQUESTS=10000

env -i PHP_FCGI_CHILDREN=$PHP_FCGI_CHILDREN \
       PHP_FCGI_MAX_REQUESTS=$PHP_FCGI_MAX_REQUESTS \
       $PHP -b $FCGI_BIND_ADDRESS &

echo $! > "$PHP_PID"
```

### Conectando a instâncias remotas FCGI

Instâncias FastCGI podem ser iniciadas em máquinas remotas múltiplas para
expandir aplicações.

**Exemplo #3 Conectando a instâncias remotas de php-fastcgi**

```
fastcgi.server = ( ".php" =>
   (( "host" => "10.0.0.2", "port" => 1030 ),
    ( "host" => "10.0.0.3", "port" => 1030 ))
)
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
