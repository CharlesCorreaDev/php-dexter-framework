# Examples

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf.tutorials.php

---

# Examples

**Exemplo #1 Um layout clássico de diretório de aplicação**

```
- index.php
- .htaccess
+ conf
  |- application.ini // configuração da aplicação
- application/
  - Bootstrap.php
  + controllers
     - Index.php // controlador padrão
  + views
     |+ index
        - index.phtml // modelo de visualização para a ação padrão
  + modules
  - library
  - models
  - plugins
```

**Exemplo #2 Entrada**

index.php no diretório superior é a única entrada da aplicação, todas as requisições devem ser reescritas para chamá-lo. (Pode ser usado .htaccess no Apache + php\_mod)

```
<?php
define("APPLICATION_PATH",  dirname(__FILE__));

$app  = new Yaf_Application(APPLICATION_PATH . "/conf/application.ini");
$app->bootstrap() // chama métodos de bootstrap definidos no Bootstrap.php
 ->run();
?>
```

**Exemplo #3 Regra de reescrita**

```
#para Apache (.htaccess)
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule .* index.php

#para nginx
server {
  listen ****;
  server_name  domain.com;
  root   document_root;
  index  index.php index.html index.htm;

  if (!-e $request_filename) {
    rewrite ^/(.*)  /index.php$1 last;
  }
}

#para lighttpd
$HTTP["host"] =~ "(www.)?domain.com$" {
  url.rewrite = (
     "^/(.+)/?$"  => "/index.php/$1",
  )
}
```

**Exemplo #4 Configuração de aplicação**

```
[yaf]
;APPLICATION_PATH é a constante definida no index.php
application.directory=APPLICATION_PATH "/application/"

;seção "product" herda da seção "yaf"
[product:yaf]
foo=bar
```

**Exemplo #5 Controlador padrão**

```
<?php
class IndexController extends Yaf_Controller_Abstract {
   /* ação padrão */
   public function indexAction() {
       $this->_view->word = "Olá mundo";
       // ou
       // $this->getView()->word = "Olá mundo";
   }
}
?>
```

**Exemplo #6 Modelo de visualização padrão**

```
<html>
 <head>
   <title>Olá mundo</title>
 </head>
 <body>
   <?php echo $word;?>
 </body>
</html>
```

**Exemplo #7 Executando a aplicação**

O exemplo acima produzirá
algo semelhante a:

```
<html>
 <head>
   <title>Olá mundo</title>
 </head>
 <body>
   Olá mundo
 </body>
</html>
```

> **Nota**:
>
> O exemplo abaixo também pode ser gerado usando o gerador de códigos Yaf, que
> pode ser encontrado em yaf@github.

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
