# Problemas de Compilação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/faq.build.php

---

# Problemas de Compilação

Esta seção reúne os erros mais comuns que ocorrem
na compilação.

1. [Eu peguei a última versão do PHP usando o serviço anônimo do GIT,
   mas não há nenhum script de configuração!](#faq.build.configure)
2. [Estou tendo problemas para configurar o PHP para trabalhar com Apache.
   Diz que não consegue encontrar httpd.h, mas está bem onde eu disse que está!](#faq.build.configuring)
3. [Se enquanto estiver configurando o (./configure) do PHP, você se deparar com
   um erro semelhante ao seguinte:
   checking lex output file root... ./configure: lex: command not found
   configure: error: cannot find output from lex; giving up](#faq.build.lex)
4. [Quando tento iniciar o Apache, recebo a seguinte mensagem:
   fatal: relocation error: file /path/to/libphp4.so:
   symbol ap\_block\_alarms: referenced symbol not found](#faq.build.apache-sharedcore)
5. [Quando eu executo configure, ele diz que não pode encontrar os
   arquivos de inclusão ou a biblioteca GD, gdbm, ou algum outro pacote!](#faq.build.not-found)
6. [Quando se está compilando o arquivo language-parser.tab.c, ele me devolve um erro
   que diz yytname undeclared.](#faq.build.yytname)
7. [Quando eu executo make, parece rodar bem mas então falha quando tenta
   ligar a aplicação final, queixando-se que não consegue encontrar alguns arquivos.](#faq.build.link)
8. [Ao linkar o PHP, ele reclama de um número de referências indefinidas.](#faq.build.undefined)
9. [Segui todos os passos da instalação do módulo da versão do Apache no
   Unix, e meus scripts PHP estão sendo mostrados no meu navegador ou ele me pede para
   salvar os arquivos.](#faq.build.not-running)
10. [Lá diz para usar: --activate-module=src/modules/php4/libphp4.a,
    mas esse arquivo não existe, então mudei para
    --activate-module=src/modules/php4/libmodphp4.a e
    não funciona!? O que está acontecendo?](#faq.build.activate-module)
11. [Quando tento compilar o Apache com o PHP como um módulo estático usando
    --activate-module=src/modules/php4/libphp4.a
    ele me diz que o meu compilador não é compatível com ANSI.](#faq.build.ansi)
12. [Quando tento compilar o PHP usando --with-apxs recebo mensagens de erro estranhas.](#faq.build.apxs)
13. [Durante make, eu recebo erros no microtime,
    e um monte de RUSAGE\_.](#faq.build.microtime)
14. [Ao compilar o PHP com MySQL, o configure vai bem, mas durante o
    make recebo um erro semelhante ao seguinte:
    ext/mysql/libmysqlclient/my\_tempnam.o(.text+0x46): In function
    my\_tempnam': /php4/ext/mysql/libmysqlclient/my\_tempnam.c:103: the
    use of tempnam' is dangerous, better use mkstemp',
    o que está errado ?](#faq.build.mysql.tempnam)
15. [Eu quero atualizar o meu PHP. Onde posso encontrar a linha ./configure
    que foi usada para compilar a minha instalação atual do PHP?](#faq.build.upgrade)
16. [Quando compilo o PHP com a biblioteca GD retorna erros de compilação
    ou segfaults na execução.](#faq.build.gdlibs)
17. [Ao compilar o PHP eu recebo erros aparentemente aleatórios, como se ele travasse.
    Estou usando o Solaris, se isso importa.](#faq.installation.needgnu)

**Eu peguei a última versão do PHP usando o serviço anônimo do GIT, mas não há nenhum script de configuração!**
:   Você precisa ter o pacote GNU autoconf instalado para que possa
    gerar o script configure a partir do configure.in. Basta executar
    **./buildconf** no diretório raiz após a obtenção
    do código fonte do servidor do GIT. (Além disso, a menos que você execute com **configure**
    com a opção `--enable-maintainer-mode`, o
    script configure não será automaticamente recompilado quando
    o arquivo configure.in for atualizado, então você deve certificar-se de fazer isso
    manualmente quando você perceber que o configure.in mudou. Um sintoma
    disso é encontrar coisas como @VARIABLE@ em seu Makefile após
    configure ou config.statustiver sido executado.)

**Estou tendo problemas para configurar o PHP para trabalhar com Apache. Diz que não consegue encontrar httpd.h, mas está bem onde eu disse que está!**
:   Você precisa informar ao script configure/setup a localização do
    diretório raíz do Apache. Isto significa que você precisa especificar
    **--with-apache=/caminho/para/apache**
    e *não* **--with-apache=/caminho/para/apache/src**.

**Se enquanto estiver configurando o (`./configure`) do PHP, você se deparar com um erro semelhante ao seguinte: checking lex output file root... ./configure: lex: command not found configure: error: cannot find output from lex; giving up**
:   Não deixe de ler as instruções de [instalação](install.unix.md)
    cuidadosamente e note que você precisa de ambos flex e bison
    instalados para compilar o PHP. Dependendo da sua configuração você irá instalar
    bison e flex a partir de uma fonte ou pacote, como um RPM.

**Quando tento iniciar o Apache, recebo a seguinte mensagem: fatal: relocation error: file /path/to/libphp4.so: symbol ap\_block\_alarms: referenced symbol not found**
:   Esse erro geralmente aparece quando um compila o core do Apache
    como uma biblioteca DSO para uso compartilhado. Tente
    reconfigurar o apache, certificando-se de usar pelo menos um dos
    seguintes parâmetros:

    --enable-shared=max --enable-rule=SHARED\_CORE

    Para obter mais informações, leia o arquivo INSTALL
    que se encontra na pasta raíz do Apache ou a
    [» página sobre DSO](https://httpd.apache.org/docs/current/dso.html) no manual do Apache.

**Quando eu executo configure, ele diz que não pode encontrar os arquivos de inclusão ou a biblioteca GD, gdbm, ou algum outro pacote!**
:   Você pode fazer o script 'configure' procurar por arquivos de cabeçalho e bibliotecas
    em locais diferentes, especificando parâmetros adicionais para passar para
    o pré-processador C e linker, tais como:

    ```
        CPPFLAGS=-I/path/to/include LDFLAGS=-L/path/to/library ./configure
    ```

    Se uma variante csh estiver sendo usada no seu shell de login (por quê?), o comando seria:

    ```
        env CPPFLAGS=-I/path/to/include LDFLAGS=-L/path/to/library ./configure
    ```

**Quando se está compilando o arquivo language-parser.tab.c, ele me devolve um erro que diz `yytname undeclared`.**
:   Você precisa atualizar sua versão do Bison. Você pode encontrar a última versão
    em [» https://www.gnu.org/software/bison/bison.html](https://www.gnu.org/software/bison/bison.html).

**Quando eu executo **make**, parece rodar bem mas então falha quando tenta ligar a aplicação final, queixando-se que não consegue encontrar alguns arquivos.**
:   Algumas versões antigas do make não colocam corretamente as versões
    compiladas dos arquivos do diretório "functions" dentro deste mesmo
    diretório. Tente rodar **cp \*.o functions** e então
    execute novamente **make** para ver se isso ajuda. Se não ajudar, você realmente deve
    atualizar para uma versão mais recente do GNU make.

**Ao linkar o PHP, ele reclama de um número de referências indefinidas.**
:   Confira a linha do link e tenha certeza que todas as bibliotecas
    apropriadas estão sendo incluídas no final. É comum que talvez você tenha
    esquecido os '-ldl' e alguma biblioteca requerida para suporte de banco de dados
    que você incluiu.

    Algumas pessoas também reportaram que precisaram adicionar '-ldl' antes
    de libphp4.a ao linkar com o Apache.

**Segui todos os passos da instalação do módulo da versão do Apache no Unix, e meus scripts PHP estão sendo mostrados no meu navegador ou ele me pede para salvar os arquivos.**
:   Isso significa que o módulo do PHP não está sendo chamado por alguma razão.
    Três coisas para se verificar antes de pedir mais ajuda:

    - Tenha certeza que o binário httpd que você está executando é o
      que você acabou de compilar. Para fazer isso, tente executar:
      `/path/to/binary/httpd -l`

      Se você não vir mod\_php4.c na lista, então
      não está executando o binário correto. Encontre e instale o
      binário correto.
    - Certifique-se de ter adicionado o Mime Type correto em um dos seus
      arquivos `Apache .conf`. Deveria ser:
      `AddType application/x-httpd-php .php`

      Também certifique-se que esta linha AddType não esteja escondida dentro de um
      bloco <Virtualhost> ou <Directory> que possa
      impedi-la de ser aplicada para a localização de seu script de teste.
    - Finalmente, a localização padrão dos arquivos de configuração do Apache
      mudou do Apache 1.2 para o Apache 1.3. Você deve ter certeza
      que o arquivo de configuração que você está adicionando à linha do AddType
      realmente está sendo lido. Você pode colocar um erro de sintaxe óbvio
      em seu arquivo httpd.conf ou alguma outra mudança evidente que
      diga se o arquivo está sendo lido corretamente.

**Lá diz para usar: `--activate-module=src/modules/php4/libphp4.a`, mas esse arquivo não existe, então mudei para `--activate-module=src/modules/php4/libmodphp4.a` e não funciona!? O que está acontecendo?**
:   Note que o arquivo libphp4.a não é para existir. O
    processo apache irá criá-lo!

**Quando tento compilar o Apache com o PHP como um módulo estático usando `--activate-module=src/modules/php4/libphp4.a` ele me diz que o meu compilador não é compatível com ANSI.**
:   Esta é uma mensagem de erro enganosa do Apache que foi corrigida
    nas versões mais recentes.

**Quando tento compilar o PHP usando **--with-apxs** recebo mensagens de erro estranhas.**
:   Há três coisas para verificar aqui. Em primeiro lugar, por alguma razão
    o Apache quando compila o script Perl apxs, às vezes acaba
    sendo compilado sem o compilador e os parâmetros corretos.
    Procure pelo seu script apxs (tente o comando **which apxs**),
    às vezes é encontrado em /usr/local/apache/bin/apxs
    ou /usr/sbin/apxs.
    Abra-o e verifique se existem linhas semelhantes a estas:

    ```
    my $CFG_CFLAGS_SHLIB  = ' ';          # substituted via Makefile.tmpl
    my $CFG_LD_SHLIB      = ' ';          # substituted via Makefile.tmpl
    my $CFG_LDFLAGS_SHLIB = ' ';          # substituted via Makefile.tmpl
    ```

    Se é isso que você vê, você encontrou o seu problema. Elas podem
    conter apenas espaços ou outros valores incorretos, como 'q()'. Altere
    estas linhas de modo que fiquem assim:

    ```
    my $CFG_CFLAGS_SHLIB  = '-fpic -DSHARED_MODULE'; # substituted via Makefile.tmpl
    my $CFG_LD_SHLIB      = 'gcc';                   # substituted via Makefile.tmpl
    my $CFG_LDFLAGS_SHLIB = q(-shared);              # substituted via Makefile.tmpl
    ```

    O segundo problema possível só deve ser um problema no Red Hat 6.1
    e 6.2. O script apxs do Red Hat está quebrado. Procure por esta linha:

    ```
    my $CFG_LIBEXECDIR    = 'modules';         # substituted via APACI install
    ```

    Se você vê a linha acima, mude para isto:

    ```
    my $CFG_LIBEXECDIR    = '/usr/lib/apache'; # substituted via APACI install
    ```

    Finalmente, se você reconfigurar/reinstalar o Apache, adicione **make clean**
    ao processo após o **./configure** e antes de **make**.

**Durante **make**, eu recebo erros no microtime, e um monte de `RUSAGE_`.**
:   Enquanto é executada a porção **make** da instalação,
    se você encontrar problemas que parecem semelhantes a estes:

    ```
    microtime.c: In function `php_if_getrusage':
    microtime.c:94: storage size of `usg' isn't known
    microtime.c:97: `RUSAGE_SELF' undeclared (first use in this function)
    microtime.c:97: (Each undeclared identifier is reported only once
    microtime.c:97: for each function it appears in.)
    microtime.c:103: `RUSAGE_CHILDREN' undeclared (first use in this function)
    make[3]: *** [microtime.lo] Error 1
    make[3]: Leaving directory `/home/master/php-4.0.1/ext/standard'
    make[2]: *** [all-recursive] Error 1
    make[2]: Leaving directory `/home/master/php-4.0.1/ext/standard'
    make[1]: *** [all-recursive] Error 1
    make[1]: Leaving directory `/home/master/php-4.0.1/ext'
    make: *** [all-recursive] Error 1
    ```

    Seu sistema está quebrado. É preciso corrigir os arquivos /usr/include
    instalando o pacote glibc-devel que corresponde ao seu glibc. Isto não tem
    absolutamente nada a ver com o PHP. Para provar isso a si mesmo, tente este
    teste simples:

    ```
    $ cat >test.c <<X
    #include <sys/resource.h>
    X
    $ gcc -E test.c >/dev/null
    ```

    Se isso mostrar erros, você saberá que os arquivos include estão bagunçados.

**Ao compilar o PHP com MySQL, o configure vai bem, mas durante o `make` recebo um erro semelhante ao seguinte: *ext/mysql/libmysqlclient/my\_tempnam.o(.text+0x46): In function my\_tempnam': /php4/ext/mysql/libmysqlclient/my\_tempnam.c:103: the use of tempnam' is dangerous, better use mkstemp'*, o que está errado ?**
:   Primeiramente, é importante perceber que este é um `Warning` e não um erro fatal. Porque esta é
    muitas vezes a última saída durante o `make`,
    ela pode parecer um erro fatal, mas não é. Claro que, se
    você definir o seu compilador para parar em warnings, ele vai parar. Além disso,
    tenha sempre em mente que o suporte ao MySQL está habilitado por padrão.

    > **Nota**:
    >
    > A partir do PHP 4.3.2, você também verá o seguinte texto depois
    > que a compilação (make) for concluída:
    >
    > Build complete.  
    > (It is safe to ignore warnings about tempnam and tmpnam).

**Eu quero atualizar o meu PHP. Onde posso encontrar a linha **./configure** que foi usada para compilar a minha instalação atual do PHP?**
:   Ou você olha no arquivo config.nice, na pasta raíz atual da sua instalação do PHP,
    ou, se este não estiver disponível, basta executar um script

    ```
    <?php phpinfo(); ?>
    ```

    No topo da saída a linha **./configure** que foi usada
    para compilar esta instalação do PHP é mostrada.

**Quando compilo o PHP com a biblioteca GD retorna erros de compilação ou segfaults na execução.**
:   Certifique-se de que sua biblioteca GD e o PHP estejam ligadas às mesmas
    bibliotecas dependentes (libpng por exemplo).

**Ao compilar o PHP eu recebo erros aparentemente aleatórios, como se ele travasse. Estou usando o Solaris, se isso importa.**
:   Usar utilitários que não são GNU ao compilar o PHP pode causar problemas.
    Certifique-se de usar as ferramentas GNU, a fim de ter certeza de que a compilação do PHP
    funcionará. Por exemplo, no Solaris, usando tanto o SunOS BSD-compatible
    quanto versões do Solaris `sed` não vai funcionar, mas usando
    as versões GNU ou Sun POSIX (XPG4) do `sed` irá funcionar.
    Links: [» GNU sed](https://www.gnu.org/software/sed/sed.html),
    [» GNU flex](https://www.gnu.org/software/flex/flex.html), e
    [» GNU bison](https://www.gnu.org/software/bison/bison.html).

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
