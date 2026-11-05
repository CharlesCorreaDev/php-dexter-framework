# Lista de opções do script configure

> **Fonte / Source:** https://www.php.net/manual/pt_BR/configure.about.php

---

## Lista de opções do script configure

Abaixo está a lista parcial das opções do script configure usado pelo PHP
quando compilado em ambientes tipo Unix.
A maioria das opções de configuração está listada na
página de referência da extensão e não aqui. Para uma lista atualizada
e completa das opções do script configure, execute **./configure --help**
no diretórios dos fontes do PHP após executar **autoconf**
(veja também o [capítulo de instalação](install.md)).
Você pode também se interessar em ler a
documentação do [» configure GNU](https://www.airs.com/ian/configure/) para
obter informações sobre opções adicionais do **configure** tais como
`--prefix=PREFIX`.

> **Nota**:
>
> Estas opções são utilizadas apenas no momento da compilação. Se for necessário alterar a
> configuração do PHP no momento da execução, consulte o capítulo sobre [configuração em tempo de execução](configuration.md).

- [Miscelânea](configure.about.md#configure.options.misc)
- [Comportamento do PHP](configure.about.md#configure.options.php)
- [Servidor](configure.about.md#configure.options.servers)

### Opções de Configuração do PHP

#### Opções Mistas

**--enable-debug**
:   Compila com símbolos para depuração.

**--with-layout=TYPE**
:   Configura a disposição dos arquivos instalados. Type pode ser PHP (padrão)
    ou GNU. Note que instalar manpages sob o prefixo PREFIX (default), utilize o estilo
    GNU de forma que estas páginas possam ser encontradas pelo utilitário manpath.

**--with-pear=DIR**
:   Instala o PEAR em DIR (padrão é PREFIX/lib/php).

**--without-pear**
:   Não instala o PEAR.

**--enable-zend-max-execution-timers**
:   Use temporizadores POSIX por thread para
    monitoramento de [max\_execution\_time](info.configuration.md#ini.max-execution-time)
    em vez do `setitimer()`
    de todo o processo. Esses temporizadores medem o tempo decorrido
    (`CLOCK_BOOTTIME`, ou
    `CLOCK_MONOTONIC` no FreeBSD), enquanto o padrão
    `setitimer(ITIMER_PROF)` mede o tempo de CPU, então o tempo
    gasto dormindo ou esperando por E/S conta para o limite.
    Requer suporte a `timer_create()`: disponível no
    Linux e no FreeBSD a partir do PHP 8.4.0.
    Disponível desde o PHP 8.1.0. Habilitado por padrão para builds ZTS desde
    o PHP 8.3.0.

**--enable-sigchild**
:   Permite que o PHP tenha um tratador de SIGCHLD próprio.

**--disable-rpath**
:   Desabilita a passagem de caminhos adicionais onde busca por bibliotecas em tempo de execução.

**--enable-libgcc**
:   Habilita montar explicitamente com a libgcc.

**--enable-php-streams**
:   Inclui fluxos de dados (streams) experimentais do PHP. Não use a não ser que esteja testando
    o código!

**--with-zlib-dir[=DIR]**
:   Define a localização do diretório onde a zlib está instalada.

**--with-tsrm-pthreads**
:   Usa threads POSIX (padrão).

**--enable-shared[=PKGS]**
:   Monta bibliotecas compartilhadas [padrão=yes].

**--enable-static[=PKGS]**
:   Monta bibliotecas estáticas [padrão=yes].

**--enable-fast-install[=PKGS]**
:   Otimiza para instalação rápida [padrão=yes].

**--with-gnu-ld**
:   Presume que o compilador C usa o GNU ld [padrão=no].

**--disable-libtool-lock**
:   Evita travamento (pode quebrar compilações rodando em paralelo).

**--with-pic**
:   Tenta usar apenas objetos PIC/não-PIC [padrão=use both].

**--enable-versioning**
:   Exporta apenas os símbolos necessários.
    Veja o arquivo INSTALL para mais informações.

#### Opções do PHP

**--enable-maintainer-mode**
:   Habilita criar regras e dependências que não são úteis (e algumas vezes confusas)
    para o instalador casual.

**--with-config-file-path=PATH**
:   Edita o caminho onde o arquivo php.ini será procurado, o padrão é `PREFIX/lib`.

**--disable-short-tags**
:   Desabilita a forma comprimida da etiqueta inicial <? por padrão.

**--with-libdir**
:   Especifica o diretório onde as bibliotecas necessárias para compilar
    o PHP se encontram em um sistema UNIX. Para sistemas 64bit, é necessário
    especificar o diretório `lib64` desta forma:
    `--with-libdir=lib64`.

**--enable-zts**
:   Ativa segurança para threads.
    Anteriormente ao PHP 8.0.0 em sistemas não Windows, essa opção era chamada
    **--enable-maintainer-zts**.

#### Opções SAPI

A lista a seguir contêm as SAPI&s (`Server
Application Programming Interface`) para o PHP.

**--with-apxs[=FILE]**
:   Compila o módulo compartilhado do Apache. FILE é o caminho opcional para a ferramenta
    apxs do Apache; padrão é apxs. Assegure-se que você especificou a versão do apxs que
    está atualmente instalado no seu sistema e não a que está no diretório de
    fontes do Apache.

**--with-apache[=DIR]**
:   Compila o módulo estático do Apache. DIR é o diretório raíz do apache,
    sendo que o padrão é /usr/local/apache.

**--with-mod\_charset**
:   Habilita as tabelas de transferência para o mod\_charset (Apache Russo).

**--with-apxs2[=FILE]**
:   Compila o módulo compartilhado do Apache 2.0. FILE é o caminho opcional para a ferramenta
    apxs do Apache; sendo o padrão para o apxs.

**--disable-cli**
:   Para desabilitar a utilização do PHP na linha de comando (CLI) poderá utilizar
    a diretiva [--without-pear](configure.about.md#configure.without-pear)).
    Para mais informações, leia sobre
    [Utilizando o PHP a partir da linha de comando (CLI).](features.commandline.md).

**--enable-phpdbg**
:   Ativa o depurador interativo phpdbg no módulo SAPI.

**--enable-embed[=TYPE]**
:   Habilita a instalação da biblioteca SAPI embutida. TYPE pode ser
    `shared` ou `static`, sendo
    `shared` o padrão.

**--with-servlet[=DIR]**
:   Inclui o suporte a servlet. DIR é o diretório base de instalação para a JSDK.
    Esse SAPI requer que a extensão java seja montada como uma dl compartilhada.

**--disable-cgi**
:   Desabilita a compilação da versão CGI do PHP.

    Este argumento também habilita o FastCGI.

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
