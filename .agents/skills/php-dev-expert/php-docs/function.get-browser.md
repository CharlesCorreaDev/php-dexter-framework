# Diz o que o navegador do usuário é capaz fazer

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.get-browser.php

---

# get\_browser

(PHP 4, PHP 5, PHP 7, PHP 8)

get\_browser — Diz o que o navegador do usuário é capaz fazer

### Descrição

function **get\_browser**([?](language.types.null.md)[string](language.types.string.md) `$user_agent` = **`null`**, [bool](language.types.boolean.md) `$return_array` = **`false`**): [object](language.types.object.md)|[array](language.types.array.md)|[false](language.types.singleton.md)

Tenta determinar as capacidades do navegador do usuário, consultando
as informações do navegador no arquivo
browscap.ini.

### Parâmetros

`user_agent`
:   O agente do usuário (navegador) a ser analisado. Por padrão, o valor do cabeçalho
    HTTP User-Agent é usado; no entanto, pode-se alterar isso (ou seja, procurar
    informações sobre outro navegador) passando este parâmetro.

    Pode-se ignorar esse parâmetro com um valor **`null`**.

`return_array`
:   Se definido como **`true`**, esta função retornará um [array](language.types.array.md),
    em vez de um [object](language.types.object.md).

### Valor Retornado

As informações são retornadas num objeto ou array que conterá
vários elementos de dados representando, por exemplo, os números de versão
principal e secundário e a string de ID; valores **`true`**/**`false`** para recursos
como frames, JavaScript e cookies; e assim por diante.

O valor `cookies` significa simplesmente que o navegador
é capaz de aceitar cookies e não significa que o usuário habilitou
ou não o navegador para aceitar cookies. A única maneira de testar se os
cookies são aceitos é definir um com [setcookie()](function.setcookie.md),
recarregar, e verificar o valor.

Retorna **`false`** quando nenhuma informação puder ser obtida, como quando
de configuração [browscap](misc.configuration.md#ini.browscap) no
php.ini não tiver sido configurada.

### Examples

**Exemplo #1 Listando todas as informações sobre o navegador do usuário**

```
<?php
echo $_SERVER['HTTP_USER_AGENT'] . "\n\n";

$browser = get_browser(null, true);
print_r($browser);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7) Gecko/20040803 Firefox/0.9.3

Array
(
    [browser_name_regex] => ^mozilla/5\.0 (windows; .; windows nt 5\.1; .*rv:.*) gecko/.* firefox/0\.9.*$
    [browser_name_pattern] => Mozilla/5.0 (Windows; ?; Windows NT 5.1; *rv:*) Gecko/* Firefox/0.9*
    [parent] => Firefox 0.9
    [platform] => WinXP
    [browser] => Firefox
    [version] => 0.9
    [majorver] => 0
    [minorver] => 9
    [cssversion] => 2
    [frames] => 1
    [iframes] => 1
    [tables] => 1
    [cookies] => 1
    [backgroundsounds] =>
    [vbscript] =>
    [javascript] => 1
    [javaapplets] => 1
    [activexcontrols] =>
    [cdf] =>
    [aol] =>
    [beta] => 1
    [win16] =>
    [crawler] =>
    [stripper] =>
    [wap] =>
    [netclr] =>
)
```

### Notas

> **Nota**:
>
> Para que isso funcione, sua diretiva de configuração
> [browscap](misc.configuration.md#ini.browscap) no
> php.ini deve apontar para a localização correta do
> arquivo browscap.ini no seu sistema.
>
> O arquivo browscap.ini não vem com o PHP, mas pode-se
> encontrar um arquivo [» php\_browscap.ini](https://browscap.org/) atualizado aqui.
>
> Embora o arquivo browscap.ini contenha informações sobre
> muitos navegadores, ele depende de atualizações de usuários para manter o banco de dados
> atualizado. O formato do arquivo é bastante autoexplicativo.

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
