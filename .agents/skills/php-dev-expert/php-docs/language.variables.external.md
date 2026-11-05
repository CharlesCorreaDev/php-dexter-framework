# Variáveis de fontes externas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.variables.external.php

---

## Variáveis de fontes externas

### Formulários HTML (GET e POST)

Quando um formulário é submetido para um script PHP, a informação deste
formulário estará automaticamente disponível para o script. Há
algumas maneiras de acessar estas informações, por exemplo:

**Exemplo #1 Um formulário HTML simples**

```
<form action="foo.php" method="post">
    Nome:  <input type="text" name="username" /><br />
    Email: <input type="text" name="email" /><br />
    <input type="submit" name="submit" value="Me aperte!" />
</form>
```

Existem apenas duas formas de acessar dados de formulários HTML.
Os métodos disponíveis atualmente são listadas a seguir:

**Exemplo #2 Acessando dados de um formulário HTML via POST**

```
<?php
echo $_POST['username'];
echo $_REQUEST['username'];
```

Utilizar um formulário GET é similar, exceto que será utilizada a variável
predefinida GET em seu lugar. GET também se aplica à variável
`QUERY_STRING` (a informação depois do '?' numa URL). Então,
por exemplo, `http://www.example.com/test.php?id=3`
contém os dados GET que estarão acessíveis com [$\_GET['id']](reserved.variables.get.md).
Veja também [$\_REQUEST](reserved.variables.request.md).

> **Nota**:
>
> Pontos e espaços em nomes de variáveis são convertidos para sublinhados. Por
> exemplo `<input name="a.b" />` se tornará
> `$_REQUEST["a_b"]`.

O PHP também entende arrays no contexto de variáveis de formulário
(veja essa [FAQ](faq.html.md)). Pode-se,
por exemplo, agrupar variáveis relacionadas, ou utilizar este
recurso para obter valores de uma entrada de seleção múltipla. No exemplo
abaixo, o formulário é enviado para si mesmo, e depois de submetido, os dados
são mostrados:

**Exemplo #3 Variáveis de formulários mais complexos**

```
<?php
if ($_POST) {
    echo '<pre>';
    echo htmlspecialchars(print_r($_POST, true));
    echo '</pre>';
}
?>
<form action="" method="post">
    Nome:  <input type="text" name="personal[name]" /><br />
    Email: <input type="text" name="personal[email]" /><br />
    Cerveja: <br />
    <select multiple name="beer[]">
        <option value="heineken">Heineken</option>
        <option value="stella">Stella Artois</option>
        <option value="av42">Double Rye Ipa</option>
    </select><br />
    <input type="submit" value="Enviar dados!" />
</form>
```

> **Nota**:
>
> Se um nome de variável externa se parece com sintaxe de array válida, as letras
> finais são silenciosamente ignoradas. Por exemplo, `<input name="foo[bar]baz">`
> se torna `$_REQUEST['foo']['bar']`.

#### Nomes de variáveis SUBMIT IMAGE

Ao submeter um formulário, é possível utilizar imagens em vez
do botão de submissão padrão com uma tag do tipo:

```
<input type="image" src="image.gif" name="sub" />
```

Quando o usuário clicar em algum lugar da imagem, o formulário
será transmitido para o servidor com duas variáveis
adicionais, sub\_x e sub\_y.
Elas contém as coordenadas do
clique do usuário na imagem. Os mais experientes percebem que os
nomes reais dessas variáveis enviadas ao navegador contêm um ponto
ao invés de um sublinhado, mas o PHP converte o ponto para um
sublinhado automaticamente.

### Cookies HTTP

O PHP suporta transparentemente cookies HTTP como os definidos pela [» RFC 6265](https://datatracker.ietf.org/doc/html/rfc6265). Cookies são um
mecanismo o armazenamento de dados no navegador,
rastreando e identificando o retorno de usuários. Você pode definir cookies com
a função [setcookie()](function.setcookie.md). Cookies são parte do
cabeçalho HTTP, então a função SetCookie precisa ser chamada antes
de qualquer saída ser enviada ao navegador. Esta é a mesma restrição
da função [header()](function.header.md). Dados de cookies
estão disponíveis nos arrays de dados de cookies apropriados,
como [$\_COOKIE](reserved.variables.cookies.md) e também em [$\_REQUEST](reserved.variables.request.md).
Veja o manual de [setcookie()](function.setcookie.md) para mais detalhes e
exemplos.

> **Nota**:
>
> A partir dos PHP 7.2.34, 7.3.23 e 7.4.11, respectivamente, os *nomes*
> dos cookies recebidos não são decodificados (a partir do formato URL) por razões de segurança.

Se a intenção for atribuir vários valores a uma única variável do cookie, deve-se
atribuí-la como um array:

```
<?php
setcookie("MyCookie[foo]", 'Testing 1', time()+3600);
setcookie("MyCookie[bar]", 'Testing 2', time()+3600);
```

Isso criará dois cookies separados embora MyCookie será
agora um único array no script. Se a intenção for definir apenas um cookie
com vários valores, pode-se utilizar [serialize()](function.serialize.md) ou
[explode()](function.explode.md) nos valores primeiro.

Note que um cookie substituirá um anterior com o mesmo
nome no navegador, a menos que o caminho ou o domínio seja diferente. Portanto,
para uma aplicação de carrinho de compras, pode-se manter um contador
e repassá-lo:

**Exemplo #4 Um exemplo de [setcookie()](function.setcookie.md)**

```
<?php
if (isset($_COOKIE['count'])) {
    $count = $_COOKIE['count'] + 1;
} else {
    $count = 1;
}
setcookie('count', $count, time()+3600);
setcookie("Cart[$count]", $item, time()+3600);
```

### Pontos em nomes de variáveis recebidas

Normalmente o PHP não altera o nome de variáveis quando elas
são passadas para um script. Entretanto, deve ser notado que o
ponto (ponto final) não é um caractere válido em nome de
variável do PHP. Para ilustrar o motivo, veja o seguinte exemplo:

```
<?php
$varname.ext;  /* nome de variável inválido */
```

Dessa forma, o interpretador entende isso como uma variável com nome de
$varname, seguida do operador de concatenação
de strings, seguida de uma string crua (uma string não delimitada que
não bate com nenhuma palavra-chave ou reservada) 'ext'. Obviamente,
isso não tem os resultados pretendidos.

Nessa situação, é importante notar que o PHP
substituirá automaticamente qualquer ponto nos nomes de variáveis recebidas por
sublinhados.

### Determinando o tipo das variáveis

Como o PHP determina os tipos de variáveis e faz conversões
(geralmente) quando necessário, nem sempre é óbvio o tipo de uma variável
em cada momento. O PHP inclui várias funções
que permitem determinar qual o tipo de uma variável, por exemplo:
[gettype()](function.gettype.md), [is\_array()](function.is-array.md),
[is\_float()](function.is-float.md), [is\_int()](function.is-int.md),
[is\_object()](function.is-object.md),e
[is\_string()](function.is-string.md). Veja também o capítulo sobre
[Tipos](language.types.md).

Pelo fato do HTTP ser um protocolo de texto, a maioria, se não todo o conteúdo presente nos
[arrays superglobais](language.variables.superglobals.md)
como [$\_POST](reserved.variables.post.md) e [$\_GET](reserved.variables.get.md) permanecerão
como strings. O PHP não tentará converter valores para um tipo específico.
No exemplo abaixo, [$\_GET["var1"]](reserved.variables.get.md) conterá a
string "null" e [$\_GET["var2"]](reserved.variables.get.md) conterá a string "123".

```
/index.php?var1=null&var2=123
```

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.2.34, 7.3.23, 7.4.11 | Os *nomes* dos cookies recebidos não são mais decodificados (a partir do formato URL) por razões de segurança. |

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
