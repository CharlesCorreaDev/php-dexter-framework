# Utilizando o PHP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/faq.using.php

---

# Utilizando o PHP

Esta seção reúne vários erros comuns que você pode encontrar
enquanto estiver escrevendo scripts PHP.

1. [Não consigo me lembrar da ordem dos parâmetros das funções PHP. Eles são aleatórios?](#faq.using.parameterorder)
2. [Eu gostaria de escrever um script PHP genérico que fosse capaz de manipular
   dados provenientes de qualquer formulário. Como eu sei quais variáveis do método POST estão disponíveis?](#faq.using.anyform)
3. [Preciso converter todas as aspas simples (') para uma barra invertida
   seguida por uma aspa simples (\'). Como eu posso fazer isso utilizando
   expressões regulares? Gostaria de converter também " para \" e
   \ para \\.](#faq.using.addslashes)
4. [Quando eu faço o seguinte, a saída é exibida na
   ordem errada:
   <?php
   function myfunc($argument)
   {
   echo $argument + 10;
   }
   $variable = 10;
   echo "myfunc($variable) = " . myfunc($variable);
   ?>
   O que está acontecendo?](#faq.using.wrong-order)
5. [Ei, o que aconteceu com as minhas novas linhas?
   <pre>
   <?php echo "Esta deve ser a primeira linha."; ?>
   <?php echo "Esta deveria ser uma nova linha."; ?>
   </pre>](#faq.using.newlines)
6. [Recebi a mensagem 'Warning: Cannot send session cookie - headers already
   sent...' ou 'Cannot add header information - headers already sent...'.](#faq.using.headers-sent)
7. [Preciso acessar informações no cabeçalho de requisição diretamente.
   Como eu faço isso?](#faq.using.header)
8. [Quando eu tento utilizar autenticação com o IIS eu recebo a mensagem 'No Input file specified'.](#faq.using.authentication)
9. [Windows: Não consigo acessar arquivos compartilhados em outro computador utilizando IIS.](#faq.using.iis.sharing)
10. [Como faço para misturar XML e PHP? Ele reclama
    das minhas tags <?xml!](#faq.using.mixml)
11. [Onde posso encontrar uma lista completa das variáveis que estão disponíveis para mim
    no PHP?](#faq.using.variables)
12. [Como posso gerar arquivos PDF sem utilizar bibliotecas não-livres e
    comerciais como
    PDFLib? Eu gostaria de alguma que fosse
    livre e não precisasse de bibliotecas PDF externas.](#faq.using.freepdf)
13. [Algumas diretivas PHP podem receber valores em bytes de forma abreviada (1K), ao contrário
    de apenas valores int. Quais são todas as opções
    disponíveis de bytes de forma abreviada?](#faq.using.shorthandbytes)

**Não consigo me lembrar da ordem dos parâmetros das funções PHP. Eles são aleatórios?**
:   O PHP é uma "cola" que reúne centenas de bibliotecas externas, então às vezes
    isso fica desorganizado. No entanto, uma regra simples é a seguinte:

    Os parâmetros de [funções de Array](book.array.md) são ordenados como
    "*needle, haystack*" ao passo que
    [funções de String](book.strings.md) são o contrário,
    logo "*haystack, needle*".

    A partir do PHP 8.0, [argumentos nomeados](functions.arguments.md#functions.named-arguments)
    permitem a passagem de argumentos pelo nome do parâmetro, tornando a ordem dos parâmetros menos significante.

**Eu gostaria de escrever um script PHP genérico que fosse capaz de manipular dados provenientes de qualquer formulário. Como eu sei quais variáveis do método POST estão disponíveis?**
:   O PHP disponibiliza muitas [variáveis predefinidas](language.variables.predefined.md), como a superglobal [$\_POST](reserved.variables.post.md).
    É possível iterar por [$\_POST](reserved.variables.post.md), já que ela é um array
    associativo com todos os valores enviados com o método POST. Por exemplo, vamos
    iterar por ela com [`foreach`](control-structures.foreach.md),
    verificar se há valores vazios com [empty()](function.empty.md)
    e imprimi-los na tela.

    ```
    <?php
    $empty = $post = array();
    foreach ($_POST as $varname => $varvalue) {
        if (empty($varvalue)) {
            $empty[$varname] = $varvalue;
        } else {
            $post[$varname] = $varvalue;
        }
    }

    print "<pre>";
    if (empty($empty)) {
        print "Nenhum dos valores enviados com POST estão vazios, enviado:\n";
        var_dump($post);
    } else {
        print "Temos " . count($empty) . " valores vazios\n";
        print "Enviado:\n"; var_dump($post);
        print "Vazio:\n"; var_dump($empty);
        exit;
    }
    ?>
    ```

**Preciso converter todas as aspas simples (') para uma barra invertida seguida por uma aspa simples (\'). Como eu posso fazer isso utilizando expressões regulares? Gostaria de converter também " para \" e \ para \\.**
:   Considerando que isso seja para um banco de dados, utilize o mecanismo
    de escape que vem com o banco de dados. Por exemplo, utilize
    [mysql\_real\_escape\_string()](function.mysql-real-escape-string.md) com MySQL e
    [pg\_escape\_string()](function.pg-escape-string.md) com PostgreSQL. Existem também as
    funções genéricas [addslashes()](function.addslashes.md) e
    [stripslashes()](function.stripslashes.md), que são mais comuns
    com códigos PHP antigos.

    Escapar valor manualmente é passível de erros e depende do contexto.
    Prefira o uso de APIs de banco de dados que suportem instruções preparadas e
    vinculação de parâmetros em vez de construir consultas por concatenação
    de strings escapadas.

**Quando eu faço o seguinte, a saída é exibida na ordem errada: ``` <?php function myfunc($argument) { echo $argument + 10; } $variable = 10; echo "myfunc($variable) = " . myfunc($variable); ?> ``` O que está acontecendo?**
:   Para ser capaz de utilizar os resultados de suas funções em uma expressão (como
    concatenar com uma string no exemplo acima), você precisa
    utilizar [return](function.return.md) para retornar o valor
    e não [echo](function.echo.md).

**Ei, o que aconteceu com as minhas novas linhas? ``` <pre> <?php echo "Esta deve ser a primeira linha."; ?> <?php echo "Esta deveria ser uma nova linha."; ?> </pre> ```**
:   No PHP, um bloco de código é fechado com "?>" ou
    "?>\n" (onde \n significa uma nova linha). Logo, no exemplo anterior,
    as sentenças serão exibidas na mesma linha porque o PHP omite
    o caractere de nova linha após o final do bloco de código. Isso significa
    que você precisa inserir uma nova linha depois de cada bloco de código PHP para
    exibi-las em uma nova linha.

    Por que o PHP faz isso? Porque quando está formatando HTML, isto
    normalmente torna sua vida mais fácil porque não se quer esta nova linha,
    senão você teria que criar linhas extremamente longas ou tornar
    o código fonte ilegível para alcançar este efeito.

**Recebi a mensagem 'Warning: Cannot send session cookie - headers already sent...' ou 'Cannot add header information - headers already sent...'.**
:   As funções [header()](function.header.md), [setcookie()](function.setcookie.md)
    e as [funções de sessão](ref.session.md)
    precisam adicionar os cabeçalhos ao fluxo de saída, mas os cabeçalhos
    só podem ser enviados antes de qualquer outro conteúdo. Não pode haver nenhuma saída
    antes de utilizar estas funções como HTML. A função
    [headers\_sent()](function.headers-sent.md) irá verificar se o seu script já enviou
    cabeçalhos e veja também as funções de [Controle
    de Saída](ref.outcontrol.md).

**Preciso acessar informações no cabeçalho de requisição diretamente. Como eu faço isso?**
:   A função [getallheaders()](function.getallheaders.md) fará isso se você
    estiver rodando o PHP como um módulo do Apache. Logo, o fragmento
    de código abaixo sempre exibirá todos os cabeçalhos de requisição:

    ```
    <?php
    $headers = getallheaders();
    foreach ($headers as $name => $content) {
        echo "headers[$name] = $content<br />\n";
    }
    ?>
    ```

    Veja também
    [apache\_lookup\_uri()](function.apache-lookup-uri.md),
    [apache\_response\_headers()](function.apache-response-headers.md) e
    [fsockopen()](function.fsockopen.md)

**Quando eu tento utilizar autenticação com o IIS eu recebo a mensagem 'No Input file specified'.**
:   O modelo de segurança do IIS é o culpado aqui. Este é um problema
    comum a todos os programas CGI rodando no IIS. Uma maneira de contornar é
    criar um arquivo HTML puro (não interpretado pelo PHP) como a página de entrada
    de um diretório autenticado. Então utilize a tag META para redirecionar
    para a página PHP ou fornecer um atalho para a página PHP. O PHP irá
    então reconhecer a autenticação corretamente. Com o módulo ISAPI,
    este não é um problema. Isto não deve afetar outros
    servidores web NT. Para mais informações veja:
    [» https://support.microsoft.com/kb/q160422/](https://support.microsoft.com/kb/q160422/) e a
    seção do manual em [Autenticação HTTP](features.http-auth.md).

**Windows: Não consigo acessar arquivos compartilhados em outro computador utilizando IIS.**
:   Você terá que alterar o `Go to Internet Information
    Services`. Localize o arquivo PHP e vá até as suas propriedades.
    Vá até a aba `File Security`, `Edit -<
    Anonymous access and authentication control`.

    Pode-se corrigir o problema desabilitando `Anonymous
    Access` e deixando `Integrated Window
    Authentication` habilitado, ou habilitando `Anonymous
    Access` e editando o usuário para que ele não possa ter o
    direito de acesso.

**Como faço para misturar XML e PHP? Ele reclama das minhas tags <?xml!**
:   Para utilizar <?xml diretamente no seu código PHP, você terá que desabilitar
    as short tags definindo a diretiva PHP
    [short\_open\_tags](ini.core.md#ini.short-open-tag) como
    `0`. Você não pode configurar esta diretiva com a função
    [ini\_set()](function.ini-set.md). Independentemente de
    [short\_open\_tags](ini.core.md#ini.short-open-tag) estar ativada ou
    não, você pode fazer algo como: `<?php echo '<?xml'; ?>`.
    O padrão para esta diretiva é `On`.

**Onde posso encontrar uma lista completa das variáveis que estão disponíveis para mim no PHP?**
:   Leia a página do manual [variáveis predefinidas](language.variables.predefined.md) dado que ele inclui uma lista parcial das variáveis
    predefinidas disponíveis para o seu script. Uma lista completa das
    variáveis disponíveis (e muito mais informação) pode ser vista chamando a função
    [phpinfo()](function.phpinfo.md). Não deixe de ler a
    seção do manual [variáveis de
    fontes externas](language.variables.external.md) uma vez que descreve cenários comuns para variáveis
    externas como aquelas originadas de um formulário HTML, cookie ou da URL.

**Como posso gerar arquivos PDF sem utilizar bibliotecas não-livres e comerciais como PDFLib? Eu gostaria de alguma que fosse livre e não precisasse de bibliotecas PDF externas.**
:   Existem algumas poucas alternativas escritas em PHP como
    [» FPDF](https://www.fpdf.org/) e
    [» TCPDF](https://www.tcpdf.org/).

**Algumas diretivas PHP podem receber valores em bytes de forma abreviada (1K), ao contrário de apenas valores [int](language.types.integer.md). Quais são todas as opções disponíveis de bytes de forma abreviada?**
:   As opções disponíveis são K (para Kilobytes), M (para Megabytes) e G (para
    Gigabytes), tanto em maiúsculas ou minúsculas.
    Qualquer outra coisa é tratada como bytes. `1M` é igual a um Megabyte ou
    `1048576` bytes. `1K` é igual a um Kilobyte ou
    `1024` bytes. Essas notações abreviadas podem ser
    utilizadas no php.ini e na função [ini\_set()](function.ini-set.md).
    Importante observar que os valores são truncados para [int](language.types.integer.md) apenas,
    ou seja, `0.5M` será interpretado como `0`.

    > **Nota**:
    > **kilobyte versus kibibyte**  
    >
    > A notação do PHP descreve um kilobyte equivalente a 1024 bytes, enquanto que
    > o padrão IEC considera que este deve ser um kibibyte.
    > Resumindo: k e K = 1024 bytes.

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
