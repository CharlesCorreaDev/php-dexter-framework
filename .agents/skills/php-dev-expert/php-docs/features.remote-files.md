# Usando arquivos remotos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/features.remote-files.php

---

# Usando arquivos remotos

Enquanto **allow\_url\_fopen** estiver disponível no arquivo
php.ini, você pode usar URLs HTTP e FTP
com a maioria das funções
que recebem um nome de arquivo como parâmetro. Além disso, URLs podem ser
usadas com as funções [include](function.include.md),
[include\_once](function.include-once.md), [require](function.require.md) e
[require\_once](function.require-once.md)
(**allow\_url\_include** precisa estar habilitado para isto).
Veja [Protocolos e empacotadores suportados](wrappers.md) para mais informações sobre protocolos
suportados pelo PHP.

Por exemplo, você pode usar isso para abrir um arquivo em um web server remoto,
avaliar a saída para a informação que você precisa, e então usar a informação em uma
query de banco de dados, ou simplesmente mostrar em um estilo que combine com o resto
do seu website.

**Exemplo #1 Pegando o título de uma página remota**

```
<?php
$file = fopen ("http://www.example.com/", "r");
if (!$file) {
    echo "<p>Incapaz de abrir arquivo remoto.\n";
    exit;
}
while (!feof ($file)) {
    $line = fgets ($file, 1024);
    /* Isso só funciona se o título e suas tags estiverem na mesma linha */
    if (preg_match ("@\<title\>(.*)\</title\>@i", $line, $out)) {
        $title = $out[1];
        break;
    }
}
fclose($file);
?>
```

Você também pode escrever arquivos em um servidor FTP (presumindo que
você se conectou como um usuário com os direitos de acesso corretos). Você
só pode criar arquivos novos usando esse método. Se você tentar sobrescrever
um arquivo que já existe, a chamada para [fopen()](function.fopen.md)
falhará.

Para conectar como um usuário diferente de 'anonymous', você precisa especificar
o nome de usuário (e possivelmente a senha) dentro da URL, como
'`ftp://user:password@ftp.example.com/path/to/file`'.
(Você pode usar o mesmo tipo de sintaxe para acessar arquivos via
HTTP quando eles requerem autenticação Basic).

**Exemplo #2 Guardando informação em um servidor remoto**

```
<?php
$file = fopen ("ftp://ftp.example.com/incoming/outputfile", "w");
if (!$file) {
    echo "<p>Incapaz de abrir arquivo remoto para escrita.\n";
    exit;
}
/* Escreva informações aqui. */
fwrite ($file, $_SERVER['HTTP_USER_AGENT'] . "\n");
fclose ($file);
?>
```

> **Nota**:
>
> Você talvez tenha tido a idéia, pelo exemplo acima, de usar
> essa técnica para escrever para um arquivo de log remoto. Infelizmente
> isso não funcionaria porque a chamada a [fopen()](function.fopen.md) falhará
> se o arquivo remoto já existir. Para fazer logs distribuídos
> dessa maneira, você deve dar uma olhada na função [syslog()](function.syslog.md).

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
