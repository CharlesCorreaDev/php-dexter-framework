# Servidor web embutido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/features.commandline.webserver.php

---

## Servidor web embutido

**Aviso**

Esse servidor web foi desenvolvido para auxiliar no desenvolvimento de aplicações.
Ele também pode ser útil para testes ou para demonstrações de aplicações que forem
executadas em ambientes controlados. Ele não foi desenvolvido para ser um web
server completo. Ele não deve ser utilizado em uma rede pública.

O CLI SAPI fornece um servidor web embutido.

Esse servidor embutido roda apenas um processo single-thread, de forma que
aplicações PHP irão congelar se uma requisição bloquear.

Requisições de URI são servidas a partir do diretório atual onde o
PHP foi iniciado, a não ser que a opção -t seja usada para especificar
uma raiz de documento explicitamente. Se uma requisição de URI especificar um arquivo específico
então ou o index.php ou index.html no diretório em questão será
retornado. Se nenhum deles existir, a procura por index.php e index.html
continuará nos diretórios superiores até que algum deles seja encontrado
ou o document root seja alcançado. Caso um index.php ou index.html seja encontrado
então é retornado e $\_SERVER['PATH\_INFO'] é configurado para a parte final
da URI. Caso contrário, uma resposta 404 é retornada.

Se um arquivo PHP for fornecido na linha de comando quando o servidor
web for iniciado ele será tratado como roteador. O script é executado
no início de cada requisição HTTP. Se o script retornar **`false`**,
então o recurso requisitado será retornado da maneira como estiver.
Do contrário, a saída do script será retornada para o navegador.

Tipos MIME padrão serão retornados para arquivos com extensões:
`.3gp`, `.apk`, `.avi`, `.bmp`, `.css`, `.csv`, `.doc`, `.docx`, `.flac`, `.gif`, `.gz`, `.gzip`, `.htm`, `.html`, `.ics`, `.jpe`, `.jpeg`, `.jpg`, `.js`, `.kml`, `.kmz`, `.m4a`, `.mov`, `.mp3`, `.mp4`, `.mpeg`, `.mpg`, `.odp`, `.ods`, `.odt`, `.oga`, `.ogg`, `.ogv`, `.pdf`, `.png`, `.pps`, `.pptx`, `.qt`, `.svg`, `.swf`, `.tar`, `.text`, `.tif`, `.txt`, `.wav`, `.webm`, `.wmv`, `.xls`, `.xlsx`, `.xml`, `.xsl`, `.xsd`, `.zip`
.

A partir do PHP 7.4.0, o servidor web interno pode ser configurado para se bifurcar em múltiplos
processos para testar código que requer múltiplas requisições concorrentes
ao servidor web interno.
Configure a variável de ambiente PHP\_CLI\_SERVER\_WORKERS para o
número de processos desejados antes de iniciar o servidor.

> **Nota**:
>
> Trabalhadores múltiplos não são suportados no Windows.

> **Nota**:
>
> Para informações sobre o uso e as opções do PHP em linha de comando, execute
> **php --help** ou **man php**. Nem todas
> as opções se aplicam quando o PHP está sendo executado como servidor web.

**Aviso**

Este recurso *experimental* *não*
foi projetado para uso em ambiente de produção. Geralmente, o servidor web interno
*não* tem o objetivo de ser usado em ambiente de produção.

**Exemplo #1 Iniciando o servidor web**

```
$ cd ~/public_html
$ php -S localhost:8000
```

O terminal irá exibir:

```
PHP 5.4.0 Development Server started at Thu Jul 21 10:43:28 2011
Listening on localhost:8000
Document root is /home/me/public_html
Press Ctrl-C to quit
```

Após serem feitas requisições de URI para for http://localhost:8000/ e
http://localhost:8000/myscript.html o terminal irá exibir
algo similar a:

```
PHP 5.4.0 Development Server started at Thu Jul 21 10:43:28 2011
Listening on localhost:8000
Document root is /home/me/public_html
Press Ctrl-C to quit.
[Thu Jul 21 10:48:48 2011] ::1:39144 GET /favicon.ico - Request read
[Thu Jul 21 10:48:50 2011] ::1:39146 GET / - Request read
[Thu Jul 21 10:48:50 2011] ::1:39147 GET /favicon.ico - Request read
[Thu Jul 21 10:48:52 2011] ::1:39148 GET /myscript.html - Request read
[Thu Jul 21 10:48:52 2011] ::1:39149 GET /favicon.ico - Request read
```

Note que antes do PHP 7.4.0, recursos estáticos representados por symlinks não eram
acessíveis pelo Windows, sendo necessário um script de roteamento nesses casos.

**Exemplo #2 Iniciando o servidor web com um diretório raiz específico**

```
$ cd ~/public_html
$ php -S localhost:8000 -t foo/
```

O terminal irá exibir:

```
PHP 5.4.0 Development Server started at Thu Jul 21 10:50:26 2011
Listening on localhost:8000
Document root is /home/me/public_html/foo
Press Ctrl-C to quit
```

**Exemplo #3 Usando um script de roteamento**

Nesse exemplo, requisições para imagens serão exibidas, mas requisições para arquivos HTML irão exibir "Welcome to PHP":

```
<?php
// router.php
if (preg_match('/\.(?:png|jpg|jpeg|gif)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve o recurso requisitado sem modificação.
} else {
    echo "<p>Welcome to PHP</p>";
}
?>
```

```
$ php -S localhost:8000 router.php
```

**Exemplo #4 Verificando o Uso do CLI Web Server**

Para reutilizar um script de roteamento específico de um framework durante o desenvolvimento com o servidor web CLI e depois também em um servidor de produção:

```
<?php
// router.php
if (php_sapi_name() == 'cli-server') {
    /* roteia ativos estáticos e retorna false */
}
/* continua com operações normais do index.php */
?>
```

```
$ php -S localhost:8000 router.php
```

**Exemplo #5 Tratando de tipos de arquivos não suportados**

Se você precisar servir um recurso estático cujo MIME type não é tratado pelo servidor web CLI, use:

```
<?php
// router.php
$path = pathinfo($_SERVER["SCRIPT_FILENAME"]);
if ($path["extension"] == "el") {
    header("Content-Type: text/x-script.elisp");
    readfile($_SERVER["SCRIPT_FILENAME"]);
}
else {
    return FALSE;
}
?>
```

```
$ php -S localhost:8000 router.php
```

**Exemplo #6 Acessando o servidor web CLI de máquinas remotas**

Você pode tornar o servidor web acessível na porta 8000 para qualquer interface com:

```
$ php -S 0.0.0.0:8000
```

**Aviso**

O servidor web embutido não deve ser exposto em redes públicas.

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
