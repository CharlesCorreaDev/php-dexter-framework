# PHP e HTML

> **Fonte / Source:** https://www.php.net/manual/pt_BR/faq.html.php

---

# PHP e HTML

PHP e HTML possuem muita interação: PHP pode gerar HTML, e o HTML
pode passar informações para o PHP. Antes de ler esses faqs, é importante
que você aprenda como recuperar [variáveis de fontes externas](language.variables.external.md). A página do manual
neste tópico inclui muitos exemplos.

1. [Que codificação/decodificação é preciso quando eu passo um valor através de um formulário/URL?](#faq.html.encoding)
2. [Estou tentando usar uma tag <input type="image">, mas as variáveis
   $foo.x e $foo.y não estão
   disponíveis. $\_GET['foo.x'] não existem
   também. Onde elas estão?](#faq.html.form-image)
3. [Como eu crio arrays em um HTML <form>?](#faq.html.arrays)
4. [Como eu faço para obter os resultados de uma múltipla seleção de uma tag HTML?](#faq.html.select-multiple)
5. [Como eu posso passar uma variável do Javascript para o PHP?](#faq.html.javascript-variable)

**Que codificação/decodificação é preciso quando eu passo um valor através de um formulário/URL?**
:   Existem muitos estágios para o qual a codificação é importante. Assumindo que
    você tenha uma [string](language.types.string.md) $data, o qual contém
    a string que você quer passar de um jeito não codificado, esses são os
    estágios relevantes:

    - Interpretação HTML. A fim de especificar uma string aleatória, você
      *precisa* incluí-la entre aspas, e converter todo o valor dos caracteres especiais para a realidade HTML usando
      [htmlspecialchars()](function.htmlspecialchars.md).
    - URL: Uma URL consiste de diversas partes. Se você quer que seus dados sejam
      interpretados como um item, você *precisa* codificá-los com
      [urlencode()](function.urlencode.md).

    **Exemplo #1 Um elemento oculto de formulário HTML**

    ```
    <?php
        echo "<input type='hidden' value='" . htmlspecialchars($data) . "' />\n";
    ?>
    ```

    > **Nota**:
    >
    > É errado usar [urlencode()](function.urlencode.md) com
    > $data, porque é a responsabilidade do navegador fazer a função de
    > [urlencode()](function.urlencode.md) nos dados. Todos os navegadores populares fazem isso
    > corretamente. Observe que isso acontecerá independentemente do método (ou seja,
    > GET ou POST). Mesmo assim, isso só será notado em caso de solicitação GET,
    > porque as requisições POST normalmente são escondidas.

    **Exemplo #2 Dados a serem editados pelo usuário**

    ```
    <?php
        echo "<textarea name='mydata'>\n";
        echo htmlspecialchars($data)."\n";
        echo "</textarea>";
    ?>
    ```

    > **Nota**:
    >
    > Os dados são mostrados no navegador como pretendido, porque o navegador irá
    > interpretar os símbolos de escape do HTML.
    >
    > Em consequência do envio, tanto via GET como POST, os dados vão ser urlencoded
    > pelo navegador para transferência, e urldecoded diretamente pelo PHP. Resumindo,
    > você não precisa fazer qualquer urlencoded/urldecoded pelo php,
    > tudo é feito automaticamente.

    **Exemplo #3 Em uma URL**

    ```
    <?php
        echo "<a href='" . htmlspecialchars("/nextpage.php?stage=23&data=" .
            urlencode($data)) . "'>\n";
    ?>
    ```

    > **Nota**:
    >
    > De fato você está fingindo uma requisição HTML GET, portanto é necessário
    > [urlencode()](function.urlencode.md) os dados manualmente.

    > **Nota**:
    >
    > Você precisa [htmlspecialchars()](function.htmlspecialchars.md) toda a URL, porque a
    > URL ocorre como um valor de um atributo-HTML. Neste caso, o navegador
    > irá primeiramente un-[htmlspecialchars()](function.htmlspecialchars.md) o valor, e então passar
    > a URL. O PHP vai entender a URL corretamente, porque você codificou os dados com
    > [urlencode()](function.urlencode.md).
    >
    > Você vai notar que `&` na URL é substituído
    > por `&amp;`. Embora a maioria dos navegadores vão se recuperar
    > se vecê esquecer disso, isso nem sempre é possível. Então, mesmo se a URL
    > não é dinâmica, você *precisa*
    > [htmlspecialchars()](function.htmlspecialchars.md) a URL.

**Estou tentando usar uma tag <input type="image">, mas as variáveis $foo.x e $foo.y não estão disponíveis. [$\_GET['foo.x']](reserved.variables.get.md) não existem também. Onde elas estão?**
:   Ao enviar um formulário, é possível usar uma imagem em vez de
    um botão submit padrão, como na tag:

    ```
    <input type="image" src="image.gif" name="foo" />
    ```

    Quando o usuário clica em qualquer lugar na imagem, o formulário que o acompanha
    será transmitido para o servidor com duas variáveis adicionais:
    foo.x e foo.y.

    Porque foo.x e foo.y faria
    nome de variáveis inválidas no PHP, elas são automaticamente convertidas para
    foo\_x e foo\_y. Ou seja, os
    períodos são substituídos por sublinhados. Então, você teria acesso a essas variáveis
    como qualquer outro descrito na seção sobre como recuperar
    [variáveis de fontes
    externas](language.variables.external.md). Por exemplo, [$\_GET['foo\_x']](reserved.variables.get.md).
    > **Nota**:
    >
    > Os espaços nos nomes das variáveis requisitadas são convertidas para sublinhado.

**Como eu crio arrays em um HTML <form>?**
:   Para obter o resultado do seu <form> enviado como um
    [array](language.types.array.md) para seu script PHP
    você nomeia os elementos <input>, <select> ou <textarea>
    como estes:

    ```
    <input name="MyArray[]" />
    <input name="MyArray[]" />
    <input name="MyArray[]" />
    <input name="MyArray[]" />
    ```

    Observe os colchetes após o nome da variável, é isso que
    torna uma variável um array. Você pode agrupar os elementos dentro de diferentes arrays,
    atribuindo o mesmo nome a diferentes elementos:

    ```
    <input name="MyArray[]" />
    <input name="MyArray[]" />
    <input name="MyOtherArray[]" />
    <input name="MyOtherArray[]" />
    ```

    Isso produz dois arrays, MyArray e MyOtherArray, que serão enviados
    para o script PHP. Também é possível atribuir chaves específicas
    para seus arrays:

    ```
    <input name="AnotherArray[]" />
    <input name="AnotherArray[]" />
    <input name="AnotherArray[email]" />
    <input name="AnotherArray[phone]" />
    ```

    O array AnotherArray irá conter agora as chaves 0, 1, email e phone.

    > **Nota**:
    >
    > Especificar uma chave de array é opcional no HTML. Se você não especificar
    > as chaves, o array preenche na ordem em que os elementos aparecem
    > no formulário. Nosso primeiro exemplo irá conter as chaves 0, 1, 2 e 3.

    Veja também:
    [Funções de Array](ref.array.md)  e
    [Variáveis de fontes
    Externas](language.variables.external.md).

**Como eu faço para obter os resultados de uma múltipla seleção de uma tag HTML?**
:   A seleção de múltiplas tags em uma construção HTML permite aos usuários
    selecionar múltiplos itens de uma lista. Esses itens são então passados
    ao manipulador de ações para o formulário. O problema é que eles
    são todos passados com o mesmo nome widget. I.e.

    ```
    <select name="var" multiple="yes">
    ```

    Cada opção selecionada chegará ao manipulador de ações como:

    ```
    var=option1
    var=option2
    var=option3
    ```

    Cada opção irá substituir o conteúdo da variável anterior
    $var. A solução é usar
    a característica "array de elementos do formulário" do PHP. A seguir
    devem ser usados:

    ```
    <select name="var[]" multiple="yes">
    ```

    Isso diz ao PHP para tratar $var como um array e
    cada atribuição de um valor para [var] acrescenta um item ao array.
    O primeiro item se torna $var[0], o próximo
    $var[1], etc. A função [count()](function.count.md)
    pode ser chamado para determinar quantas opções foram selecionadas,
    e a função [sort()](function.sort.md) pode ser usada para classificar
    o array de opções se necessário.

    Note que se você está usando JavaScript o `[]`
    no nome do elemento pode lhe causar problemas quando você tenta
    se referir ao elemento pelo nome. Ao invés use o ID numérico do elemento
    do formulário, ou coloque o nome da variável entre aspas simples e
    use isso como um índice para os elementos do array, por exemplo:

    ```
    variable = document.forms[0].elements['var[]'];
    ```

**Como eu posso passar uma variável do Javascript para o PHP?**
:   Uma vez que o Javascript é (normalmente) uma tecnologia da parte do cliente, e
    o PHP é (normalmente) uma tecnologia da parte do servidor, e uma vez que o HTTP é um
    protocolo "sem lado", as duas linguagens não podem compartilhar variáveis
    diretamente.

    É , no entanto, possível passar variáveis entre as duas.
    Uma maneira de realizar isso é gerar um código Javascript
    com PHP, e ter um navegador que se atualize, passando variáveis
    específicas de volta para o script PHP. O exemplo abaixo mostra
    precisamente como fazer isso -- isso permite ao código PHP capturar a altura
    e largura da tela, algo que normalmente só é possível no
    lado do cliente.

    **Exemplo #4 Gerando Javascript com PHP**

    ```
    <?php
    if (isset($_GET['width']) AND isset($_GET['height'])) {
      // exibe as variáveis da geometria
      echo "A largura da tela é: ". $_GET['width'] ."<br />\n";
      echo "A altura da tela é: ". $_GET['height'] ."<br />\n";
    } else {
      // passar as variáveis de geometria
      // (preserve a string de consulta original
      //   -- variáveis POST precisam ser manipuladas de forma diferente)

      echo "<script language='javascript'>\n";
      echo "  location.href=\"{$_SERVER['SCRIPT_NAME']}?{$_SERVER['QUERY_STRING']}"
                . "&width=\" + screen.width + \"&height=\" + screen.height;\n";
      echo "</script>\n";
      exit();
    }
    ?>
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
