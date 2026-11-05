# Entrada e Saída HTTP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mbstring.http.php

---

# Entrada e Saída HTTP

A conversão de codificação de caracteres de entrada/saída HTTP pode converter
dados binários também. Os usuários devem controlar a conversão de
codificação de caracteres se dados binários forem usados para
entrada/saída HTTP.

> **Nota**:
>
> Se `enctype` para o formulário HTML estiver
> configurado como `multipart/form-data` e
> `mbstring.encoding_translation` estiver ativado
> no php.ini, as variáveis POST'ed e os nomes dos arquivos enviados
> serão convertidos para a codificação de caracteres interna também.
> No entanto, a conversão não é aplicada às chaves de consulta.

- Entrada HTTP

  Não há maneira de controlar a conversão de caracteres de entrada HTTP
  a partir de um script PHP. Para desativar a conversão de caracteres de
  entrada HTTP, isso deve ser feito no php.ini.

  **Exemplo #1
  Desativando a conversão de entrada HTTP no php.ini**

  ```
  ;; Disable HTTP Input conversion
  mbstring.http_input = pass
  ;; Disable HTTP Input conversion
  mbstring.encoding_translation = Off
  ```

  Ao usar o PHP como um módulo do Apache, é possível
  substituir essas configurações em cada diretiva Virtual Host no
  httpd.conf ou por diretório com .htaccess.
  Consulte a seção [Configuração](configuration.md) e o
  Manual do Apache para obter detalhes.
- Saída HTTP

  Existem várias maneiras de habilitar a conversão de codificação de caracteres
  de saída. Uma é usando o php.ini, outra
  é usando [ob\_start()](function.ob-start.md) com
  [mb\_output\_handler()](function.mb-output-handler.md) como a
  `ob_start` função de retorno de chamada.

**Exemplo #2 Exemplo de configuração no php.ini**

```
;; Enable output character encoding conversion for all PHP pages

;; Enable Output Buffering
output_buffering    = On

;; Set mb_output_handler to enable output conversion
output_handler      = mb_output_handler
```

**Exemplo #3 Exemplo de script**

```
<?php

// Habilitar a conversão de codificação de caracteres de saída apenas para esta página

// Definir a codificação de caracteres de saída HTTP para SJIS
mb_http_output('SJIS');

// Iniciar o buffer e especificar "mb_output_handler" como
// função de callback
ob_start('mb_output_handler');

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
