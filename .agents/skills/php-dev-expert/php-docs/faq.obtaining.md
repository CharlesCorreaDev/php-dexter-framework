# Obtendo o PHP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/faq.obtaining.php

---

# Obtendo o PHP

Essa seção tem detalhes sobre localizações de download do PHP e
problemas com Sistemas Operacionais.

1. [Onde posso obter o PHP?](#faq.obtaining.where)
2. [Existem versões binárias pré-compiladas?](#faq.obtaining.precompiled)
3. [Onde posso pegar as bibliotecas necessárias para compilar
   alguma das extensões opcionais do PHP?](#faq.obtaining.optional)
4. [Como faço essas bibliotecas funcionarem?](#faq.obtaining.how)
5. [Eu peguei a última versão do código-fonte do PHP do repositório Git
   na minha máquina Windows, o que eu preciso para compilá-lo?](#faq.obtaining.compilent)
6. [Onde eu acho o Arquivo de Capacidades do Navegador (Browser Capabilities File)?](#faq.obtaining.browscap)
7. [O que significa thread safety quando estou fazendo o download do PHP?](#faq.obtaining.threadsafety)

**Onde posso obter o PHP?**
:   O PHP pode ser obtido de qualquer um dos membros da
    rede de sites do PHP. Esses podem ser encontrados em
    [» https://www.php.net/](https://www.php.net/).
    Pode-se usar também um Git anônimo para pegar a última
    versão do fonte. Para mais informações, vá até
    [» https://www.php.net/git.php](https://www.php.net/git.php).

**Existem versões binárias pré-compiladas?**
:   Os binários pré-compilados são distribuídos somente para sistemas Windows,
    pois isso exigiria capacidade do time do PHP de compilar o PHP para cada uma das
    plataformas Linux/Unix com cada combinação de extensão. Perceba também, que
    muitas distribuições Linux vêm com o PHP instalado atualmente.
    Os binários do Windows podem ser baixados da página de [» Downloads](https://www.php.net/downloads.php), para binários
    do Linux, por favor visite o website de sua distribuição.

**Onde posso pegar as bibliotecas necessárias para compilar alguma das extensões opcionais do PHP?**
:   > **Nota**:
    >
    > Aquelas marcadas com um \* são do melhor de nosso conhecimento não thread safe; elas não são recomendadas para utilização em um ambiente multi-thread.

    - [» LDAP (Unix)](https://www.openldap.org/software/download/).
    - [» LDAP (Unix/Win)](https://wiki.mozilla.org/LDAP_C_SDK) :
      Diretório Mozilla (LDAP) SDK
    - [» servidor LDAP livre](http://www.bind9.net/download-openldap/).
    - [» Berkeley DB2 (Unix/Win)](http://www.sleepycat.com/) :
      http://www.sleepycat.com/.
    - [» SNMP\* (Unix):](https://www.net-snmp.org/) .
    - [» GD\* (Unix/Win)](https://libgd.github.io).
    - [» mSQL\* (Unix)](https://hughestech.com.au/products/msql/).
    - [» PostgreSQL (Unix)](https://www.postgresql.org/).
    - [» IMAP\* (Win/Unix)](https://github.com/uw-imap/imap).
    - [» Sybase-CT\* (Linux, libc5)](https://www.sybase.com/) :
      Disponível localmente.
    - [» FreeType (libttf):](https://www.freetype.org/).
    - [» ZLib (Unix/Win32)](https://www.zlib.net/).
    - [» expat XML parser (Unix/Win32)](https://libexpat.github.io/).
    - [» PDFLib](https://www.pdflib.com/products/pdflib-family/).
    - [» mcrypt](https://mcrypt.sourceforge.net/).
    - [» mhash](https://mhash.sourceforge.net/).
    - [» t1lib](https://www.ibiblio.org/pub/Linux/libs/graphics/).
    - [» dmalloc](https://dmalloc.com/).
    - [» aspell](http://aspell.net/).
    - [» libedit](https://www.thrysoee.dk/editline/).

**Como faço essas bibliotecas funcionarem?**
:   Você precisará seguir as instruções disponíveis com a biblioteca. Algumas dessas
    bibliotecas são detectadas automaticamente quando você executar o
    script 'configure' do PHP (como a biblioteca GD), e outras você terá que
    habilitar usando opções '`--with-EXTENSION`' do
    '`configure`'. Execute
    '`configure --help`' para listar essas opções.

**Eu peguei a última versão do código-fonte do PHP do repositório Git na minha máquina Windows, o que eu preciso para compilá-lo?**
:   Veja a Wiki do PHP para instruções atualizadas: [» Instruções passo-a-passo](https://wiki.php.net/internals/windows/stepbystepbuild_sdk_2)

**Onde eu acho o Arquivo de Capacidades do Navegador (Browser Capabilities File)?**
:   Você pode achar um arquivo browscap.ini em
    [» https://browscap.org/](https://browscap.org/).

**O que significa thread safety quando estou fazendo o download do PHP?**
:   "Thread Safety" (segurança para threads) significa que o binário pode trabalhar em um contexto de servidor web
    multithread, como o Apache 2 no Windows. Essa segurança funciona através da criação de uma cópia
    local em cada thread, de modo que os dados não colidam
    com outra thread.

    Então como eu escolho? Se você escolher executar o PHP como binário CGI,
    não será necessária a segurança de threads, porque o binário é chamado a cada
    requisição. Para servidores web multithreads, como o IIS5 e IIS6, deve ser
    usada a versão segura para threads do PHP.

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
