# Envia um cookie

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.setcookie.php

---

# setcookie

(PHP 4, PHP 5, PHP 7, PHP 8)

setcookie — Envia um cookie

### Descrição

function **setcookie**(  
    [string](language.types.string.md) `$name`,  
    [string](language.types.string.md) `$value` = "",  
    [int](language.types.integer.md) `$expires_or_options` = 0,  
    [string](language.types.string.md) `$path` = "",  
    [string](language.types.string.md) `$domain` = "",  
    [bool](language.types.boolean.md) `$secure` = **`false`**,  
    [bool](language.types.boolean.md) `$httponly` = **`false`**  
): [bool](language.types.boolean.md)

Assinatura alternativa disponível a partir do PHP 7.3.0 (sem suporte a parâmetros nomeados):

function **setcookie**([string](language.types.string.md) `$name`, [string](language.types.string.md) `$value` = "", [array](language.types.array.md) `$options` = []): [bool](language.types.boolean.md)

A função **setcookie()** define um cookie para ser enviado juntamente
com os cabeçalhos HTTP. Como outros cabeçalhos, os cookies devem ser enviados
*antes* de qualquer saída do script (isso é
uma restrição do protocolo). Isso requer que esta função seja chamada antes de qualquer
saída, incluindo as tags `<html>` e
`<head>`, assim como espaços em branco.

Uma vez que os cookies foram definidos, eles podem ser acessados no próximo carregamento da página
através do array [$\_COOKIE](reserved.variables.cookies.md).
Os valores dos cookies também podem existir no
array [$\_REQUEST](reserved.variables.request.md).

### Parâmetros

A [» RFC 6265](https://datatracker.ietf.org/doc/html/rfc6265) fornece a referência
normativa de como cada parâmetro de **setcookie()**
é interpretado.

`name`
:   O nome do cookie.

`value`
:   O valor do cookie. Esse valor é armazenado no computador do cliente; não
    deve ser armazenada informação sensível. Supondo que o `name` seja
    `'cookiename'`, o valor pode ser lido através de
    [$\_COOKIE['cookiename']](reserved.variables.cookies.md)

`expires_or_options`
:   O tempo para o cookie expirar. Esse valor é um timestamp Unix,
    portanto é o número de segundos desde a época Unix.
    Uma maneira de configurar esse valor é adicionando o número de segundos em que o cookie deve
    durar antes de expirar ao resultado da função [time()](function.time.md).
    Por exemplo, `time()+60*60*24*30` irá configurar o cookie
    para expirar em 30 dias.
    Outra opção é usar a função [mktime()](function.mktime.md).
    Se configurado para `0` ou omitido, o cookie vai expirar
    no final da sessão (quando o navegador fechar).

    > **Nota**:
    >
    > O parâmetro `expires_or_options` recebe
    > um timestamp Unix, ao contrário do formato de data `Wdy, DD-Mon-YYYY
    > HH:MM:SS GMT`, isso acontece porque o PHP faz essa conversão
    > internamente.

`path`
:   O caminho no servidor onde o cookie estará disponível. Se configurado
    para `'/'`, o cookie estará disponível para todo o
    `domain`. Se configurado para o diretório
    `'/foo/'`, o cookie estará disponível apenas dentro do
    diretório `/foo/` e todos os subdiretórios como
    `/foo/bar/` do `domain`.
    O valor padrão é o
    diretório atual onde o cookie está sendo configurado.

`domain`
:   O (sub)domínio para qual o cookie estará disponível. Definindo para um
    subdomínio (como `'www.example.com'`) deixará o cookie
    disponível para aquele subdomínio e todos os outros sub-domínios abaixo dele
    (exemplo w2.www.example.com). Para deixar o cookie disponível para todo o
    domínio (incluindo todos os subdomínios dele), basta definir o valor
    para o nome do domínio (`'example.com'`, nesse caso).

    Navegadores antigos ainda implementam a
    [» RFC 2109](https://datatracker.ietf.org/doc/html/rfc2109) e podem requerer um
    `.` no início para funcionar com todos os subdomínios.

`secure`
:   Indica que o cookie só poderá ser transmitido sob uma conexão
    segura HTTPS do cliente. Quando configurado para **`true`**, o
    cookie será enviado somente se uma conexão segura existir.
    No lado do servidor, fica por conta do programador enviar esse
    tipo de cookie somente sob uma conexão segura (ex
    respeitando [$\_SERVER["HTTPS"]](reserved.variables.server.md)).

`httponly`
:   Quando for **`true`**, o cookie será acessível somente sob o protocolo HTTP.
    Isso significa que o cookie não será acessível por linguagens de
    script, como JavaScript. É dito que essa configuração pode ajudar a
    reduzir ou identificar roubos de identidade através de ataques do tipo XSS
    (entretanto ela não é suportada por todos os navegadores), mas essa informação
    é constantemente discutida. Foi adicionada no PHP 5.2.0.
    **`true`** ou **`false`**

`options`
:   Um [array](language.types.array.md) associativo que pode ter qualquer uma das chaves
    `expires`, `path`, `domain`,
    `secure`, `httponly` e `samesite`.

    Os valores têm o mesmo efeito como descrito para os
    parâmetros de mesmo nome. O valor do elemento `samesite`
    deve ser `None`, `Lax`
    ou `Strict`.
    Se uma das opções não for informada, os valores padrão serão os
    mesmos valores padrão dos parâmetros explícitos. Se
    `samesite` for omitido, o atributo SameSite do cookie
    não será atribuído.

    > **Nota**:
    >
    > Para definir um cookie que inclui atributos que não estão entre as chaves listadas,
    > use a função [header()](function.header.md).

    > **Nota**:
    >
    > Se `samesite` for igual a `"None"` então
    > `secure` também precisa ser habilitado senão o cookie será
    > bloqueado pelo cliente.

### Valor Retornado

Se houver saída antes da chamada dessa função,
**setcookie()** irá falhar e retornará **`false`**. Se a função
**setcookie()** for executada com sucesso, ela retornará **`true`**.
Isso não indica que o usuário aceitou o cookie.

### Erros/Exceções

Se o array `options` contiver chaves não suportadas:

- Antes do PHP 8.0.0, era gerado um **`E_WARNING`**.
- A partir do PHP 8.0.0, é lançado um [ValueError](class.valueerror.md).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.2.0 | O formato de data do cookie agora é `'D, d M Y H:i:s \G\M\T'`; anteriormente era `'D, d-M-Y H:i:s T'`. |
| 8.0.0 | Passar chaves não suportadas agora lança um [ValueError](class.valueerror.md) em vez de emitir um **`E_WARNING`**. |
| 7.3.0 | Uma assinatura alternativa para suportar o array `options` foi adicionado. Essa assinatura também permite configurar o atributo SameSite do cookie. |

### Examples

Os efeitos dos exemplos a seguir podem ser observados usando a lista de cookies
da ferramenta de desenvolvedor do navegador (normalmente na aba de Armazenamento ou Aplicação).

**Exemplo #1 Exemplo de **setcookie()** para enviar cookies**

```
<?php

$value = 'alguma coisa de algum lugar';

// Define um "cookie de sessão" que expira quando o navegador é fechado
setcookie("CookieTeste", $value);
// Define um cookie que expira em 1 hora
setcookie("CookieTeste", $value, time()+3600);
// Define um cookie que se aplica somente a um caminho específico de um domnínio específico
// Observe que o domínio usado deve corresponder ao domínio do site
setcookie("CookieTeste", $value, time()+3600, "/~rasmus/", "example.com", true);

?>
```

Observe que a porção do valor do cookie será automaticamente codificada em
URL e decodificada pelo PHP. Isto pode ser evitado usando
[setrawcookie()](function.setrawcookie.md) em seu lugar.

Para ver o conteúdo dos cookies definidos no exemplo acima em uma requisição
posterior:

```
<?php
// Mostra um cookie individual
echo $_COOKIE["CookieTeste"];

// Outra maneira de depurar/testar é vendo todos os cookies
print_r($_COOKIE);
?>
```

**Exemplo #2 Exemplo de **setcookie()** para apagar cookies**

Para excluir um cookie, defina a data de expiração para uma data no passado
(porém diferente de zero, que é reservado para cookies de sessão).

Para excluir os cookies definidos no exemplo anterior:

```
<?php
// Configura a data de expiração para uma hora atrás
setcookie("CookieTeste", "", time() - 3600);
setcookie("CookieTeste", "", time() - 3600, "/~rasmus/", ".example.com", 1);
?>
```

**Exemplo #3 **setcookie()** e arrays**

"Arrays de cookies" podem ser definidos usando a notação de array
no nome do cookie. Isso tem o efeito de definir tantos cookies quantos
elementos houver no array, mas quando o cookie for recebido pelo
script, os valores serão todos colocados em um array com o nome do
cookie:

```
<?php
// define os cookies
setcookie("cookie[tres]", "cookietres");
setcookie("cookie[dois]", "cookiedois");
setcookie("cookie[um]", "cookieum");

// Exibe os cookies depois que a página recarregar
if (isset($_COOKIE['cookie'])) {
    foreach ($_COOKIE['cookie'] as $nome => $valor) {
        $nome = htmlspecialchars($nome);
        $valor = htmlspecialchars($valor);
        echo "$nome : $valor <br />\n";
    }
}
?>
```

O exemplo acima produzirá:

```
tres : cookietres
dois : cookiedois
um : cookieum
```

> **Nota**:
>
> Utilizar caracteres como `[` e `]`
> no nome do cookie não é válido conforme a RFC 6265, seção 4, mas deve
> ser suportado por navegadores conforme a RFC 6265, seção 5.

### Notas

> **Nota**:
>
> Buffer de saída pode ser usado para permitir saída do script antes de
> chamar essa função. Toda a saída será armazenada em buffer até que seja enviada
> (explicitamente ou ao final da execução do script). Isso é feito
> chamando [ob\_start()](function.ob-start.md) e
> [ob\_end\_flush()](function.ob-end-flush.md) no script, ou configurando a
> diretiva `output_buffering` no
> php.ini ou nos arquivos de configuração do servidor.

Problemas comuns:

- Os cookies não estarão disponíveis até o próximo carregamento da página
  para a qual o cookie deverá estar visível. Para testar se um cookie foi
  enviado com sucesso, deve ser verificado o cookie no próximo carregamento da
  página antes que ele expire. O tempo para expirar é configurado pelo
  parâmetro `expires_or_options`. Uma boa maneira de depurar a
  existência dos cookies é chamando a função `print_r($_COOKIE);`.
- Os cookies devem ser excluídos com os mesmos parâmetros com os quais
  foram configurados. Se o argumento `value` for uma string vazia,
  e todos os outros argumentos forem iguais à chamada anterior de **setcookie()**,
  o cookie com o nome especificado será excluído do cliente remoto.
  Internamente, isso é feito colocando o valor do cookie para `'deleted'` e a
  data de expiração para um ano no passado.
- Quando um cookie for configurado com o valor **`false`**, será realizada uma tentativa de excluí-lo.
  Por isso, valores booleanos não devem ser usados. No lugar deles, utilize *0* para **`false`**
  e *1* para **`true`**.
- Nomes de cookies podem ser definidos como nomes de arrays e estarão disponíves para
  os scripts PHP como arrays, mas cookies separados serão armazenados pelo navegador.
  Considere utilizar [json\_encode()](function.json-encode.md) para definir um cookie com nomes e
  valores múltiplos. Não é recomendado usar [serialize()](function.serialize.md)
  para esse propósito pois pode resultar em furos de segurança.

Várias chamadas para a função **setcookie()** são feitas na ordem em que são chamadas.

### Veja também

- [header()](function.header.md) - Envia um cabeçalho HTTP bruto
- [setrawcookie()](function.setrawcookie.md) - Envie um cookie sem codificar em URL o valor do cookie
- [Seção de cookies](features.cookies.md)
- [» RFC 6265](https://datatracker.ietf.org/doc/html/rfc6265)
- [» RFC 2109](https://datatracker.ietf.org/doc/html/rfc2109)

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
