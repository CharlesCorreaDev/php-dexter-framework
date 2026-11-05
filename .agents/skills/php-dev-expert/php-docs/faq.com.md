# PHP e COM

> **Fonte / Source:** https://www.php.net/manual/pt_BR/faq.com.php

---

# PHP e COM

PHP pode ser usado para acessar objetos COM e DCOM em plataformas Win32.

1. [Eu construí uma DLL para calcular algo. Existe uma maneira de executar essa DLL no PHP?](#faq.com.q1)
2. [O que 'Unsupported variant type: xxxx (0xxxxx)' significa?](#faq.com.q2)
3. [É possível manipular objetos visuais no PHP?](#faq.com.q3)
4. [Posso guardar um objeto COM em uma sessão?](#faq.com.q4)
5. [Como eu capturo erros de COM?](#faq.com.q5)
6. [Posso gerar arquivos DLL a partir de scripts PHP como eu posso no Perl?](#faq.com.q6)
7. [O que significa 'Unable to obtain IDispatch interface for CLSID {xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx}'?](#faq.com.q7)
8. [Como posso executar um objeto COM a partir de um servidor remoto?](#faq.com.q8)
9. [Eu vejo o erro 'DCOM is disabled in C:\path...\scriptname.php on line 6', o que posso fazer?](#faq.com.q9)
10. [É possível carregar/manipular um objeto ActiveX em uma página com PHP?](#faq.com.q10)
11. [É possível obter uma instância em execução de um componente?](#faq.com.q11)
12. [Existe alguma maneira de lidar com um evento enviado por um objeto COM?](#faq.com.q12)
13. [Estou tendo problemas ao tentar invocar um método de um objeto COM
    que expõe mais de uma interface. O que posso fazer?](#faq.com.q13)
14. [Então PHP funciona com COM. E com COM+?](#faq.com.q14)
15. [Se o PHP pode manipular objetos COM, podemos imaginar o uso de
    MTS para manipular recursos de componentes, em conjunto com o PHP?](#faq.com.q15)

**Eu construí uma DLL para calcular algo. Existe uma maneira de executar essa DLL no PHP?**
:   Se for uma DLL simples, ainda não tem como executá-la no PHP. Se a DLL contiver um serviço
    COM, você pode acessá-lo se ele implementar a interface IDispatch.

**O que 'Unsupported variant type: xxxx (0xxxxx)' significa?**
:   Existem dezenas de tipos VARIANT e combinações dos mesmos. A maioria deles já é suportada mas
    alguns ainda têm que ser implementados.
    Arrays não são completamente suportados. Apenas arrays indexados com
    uma única dimensão podem ser passados entre o PHP e COM.
    Se você achar outros tipos que não são suportados, por favor relate-os como um problema (se não tiverem sido relatados ainda)
    e passe o máximo de informação disponível.

**É possível manipular objetos visuais no PHP?**
:   Geralmente é, mas como o PHP é principalmente usado como linguagem de script para web, ele é executado no contexto dos servidores web, então
    objetos visuais nunca aparecerão no desktop do servidor.
    Se você usa o PHP para script de aplicações (por exemplo, em conjunto com PHP-GTK) não há limitação no acesso e
    manipulação de objetos visuais através de COM.

**Posso guardar um objeto COM em uma sessão?**
:   Não, não pode. Instâncias COM são tratadas como recursos (tipo "resource") e, portanto, só estão disponíveis no contexto de um script único.

**Como eu capturo erros de COM?**
:   A extensão COM lança exceções do tipo
    `com_exception`, que você pode capturar e então inspecionar o
    membro `code` para determinar o que fazer em seguida.

**Posso gerar arquivos DLL a partir de scripts PHP como eu posso no Perl?**
:   Não, infelizmente não existe tal ferramenta disponível para o PHP.

**O que significa 'Unable to obtain IDispatch interface for CLSID {xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx}'?**
:   Esse erro pode ter várias razões:

    - o CLSID está errado
    - a DLL requisitada não existe ou não pode ser lida
    - o componente requisitado não implementa a interface IDispatch

**Como posso executar um objeto COM a partir de um servidor remoto?**
:   Exatamente como você executa objetos locais. Você só tem que passar o IP da máquina remota como segundo parâmetro para
    o construtor COM.

    Tenha certeza de marcar
    [com.allow\_dcom](com.configuration.md#ini.com.allow-dcom)`=`**`true`**
    no seu php.ini.

**Eu vejo o erro 'DCOM is disabled in C:\path...\scriptname.php on line 6', o que posso fazer?**
:   Edite seu arquivo php.ini e marque
    [com.allow\_dcom](com.configuration.md#ini.com.allow-dcom)`=`**`true`**.

**É possível carregar/manipular um objeto ActiveX em uma página com PHP?**
:   Isso não tem nada a ver com o PHP. Objetos ActiveX são carregados no lado do cliente se eles forem requisitados
    pelo documento HTML. Não há relação com o script PHP e, portanto, nenhuma possível interação
    direta com o lado do servidor.

**É possível obter uma instância em execução de um componente?**
:   É possível com a ajuda de monikers. Se você quiser obter referências múltiplas para a mesma instância
    do Word, você pode criar essa instância como mostrado abaixo:

    ```
    <?php
    $word = new COM("C:\docs\word.doc");
    ?>
    ```

    Isso criará uma nova instância se não houver nenhuma instância em execução disponível e retornará um identificador para a
    instância em execução, se disponível.

**Existe alguma maneira de lidar com um evento enviado por um objeto COM?**
:   Você pode definir um interceptador de eventos e vinculá-lo usando
    [com\_event\_sink()](function.com-event-sink.md). Você pode usar
    [com\_print\_typeinfo()](function.com-print-typeinfo.md) para que o PHP gere um esqueleto
    para a classe interceptadora de eventos.

**Estou tendo problemas ao tentar invocar um método de um objeto COM que expõe mais de uma interface. O que posso fazer?**
:   A resposta é tão simples quanto insatisfatória. Não sabemos exatamente, mas achamos que não há nada que você possa fazer.

**Então PHP funciona com COM. E com COM+?**
:   COM+ estende COM por meio de um framework para manipular componentes através de MTS e MSMQ, mas não há nada de especial
    que o PHP precise suportar para usar tais componentes.

**Se o PHP pode manipular objetos COM, podemos imaginar o uso de MTS para manipular recursos de componentes, em conjunto com o PHP?**
:   O PHP em si não lida com transações ainda. Por isso, se um erro
    ocorrer, nenhuma reversão é iniciada. Se você usar componentes que
    suportam transações, você terá que implementar a
    manipulação de transações por conta própria.

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
